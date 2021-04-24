<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Kursi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Reservasi;
use phpDocumentor\Reflection\Types\Null_;
use Ramsey\Uuid\Uuid;
use Carbon\Carbon;


class ReservasiController extends Controller
{
    public function insert(Request $r)
    {
        try {
            $id_even    = $r->request->get('id_even');
            $a          = $this->cek($id_even);
            // dump($a);
            // die;
            if ($a == true) {
                return redirect()->back()->with(['message' => 'sudah terdaftar']);
            } else {
                $nama       = $r->request->get('nama');
                $usia       = $r->request->get('usia');
                $no_kursi   = $r->request->get('kursi');
                $qty        = (int) $r->request->get('qty');
                $nama_event = Event::where('id', $id_even)
                    ->select('nama')
                    ->get();
                $name       = substr($nama_event[0]->nama, 0, 3) . '' . $id_even;
                // dump($name);
                // die();
                // dump($r->request->all());
                // dump($qty);
                // die();
                $type       = '';
                $temp       = [];
                foreach ($no_kursi as $v) {
                    $kursi  = Kursi::with('code')->where('id', '=', $v)->first();
                    array_push($temp, $kursi->code->code);
                }
                $unique     = array_unique($temp);
                if (count($unique) > 1) {
                    return redirect()->back()->with(['kursi' => 'baris beda']);
                }
                // dump(count($unique));
                // die();
                DB::beginTransaction();
                for ($i = 0; $i < $qty; $i++) {

                    $tgl_even   = $r->request->get('tgl_even');
                    $is_exist   = Reservasi::where('id_even', $id_even)->whereDate('tgl_even', $tgl_even)->where('id_kursi', $no_kursi[$i])->first();
                    // dump($is_exist);
                    // die();
                    if ($is_exist) {
                        DB::rollBack();
                        return redirect()->back()->with(['pesan' => 'maaf, kursi sudah di pesan']);
                    }
                    $reservasi = new Reservasi;
                    $carbon     = auth()->id() . '-' . Carbon::now()->timestamp . '-' . $no_kursi[$i];
                    $reservasi->id_even     = $id_even;

                    if ($i > 0) {
                        $reservasi->invitation      = auth()->id();
                        $reservasi->id_user         = null;
                    } else {
                        $reservasi->invitation      = null;
                        $reservasi->id_user         = auth()->id();
                    }
                    $reservasi->tgl_even        = $tgl_even;
                    $reservasi->id_kursi        = $no_kursi[$i];
                    $reservasi->nama            = $nama[$i];
                    $reservasi->usia            = $usia[$i];
                    $reservasi->kode_booking    = $carbon;
                    $reservasi->save();
                }
                DB::commit();
                return redirect('/');
            }
        } catch (\Exception $th) {
            DB::rollBack();
            return redirect()->back()->with(['error' => 'error']);
        }
    }
    public function cek($even)
    {
        $tes = false;
        $cek = Reservasi::where('id_user', auth()->id())->where('id_even', $even)->get();
        if (count($cek) > 0) {
            $tes  = true;
        }
        return $tes;

        // dump($cek);
        // dump($tes);
        // die;
    }
}
