<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservasi;

class ReservasiController extends Controller
{
    public function insert(Request $r)
    {
        $nama       = $r->request->get('nama');
        $usia       = $r->request->get('usia');
        $no_kursi   = $r->request->get('kursi');
        $qty        = (int) $r->request->get('qty');
        // dump($r->request->all());
        // dump($qty);
        // die();
        for ($i = 0; $i < $qty; $i++) {
            $reservasi = new Reservasi;

            $reservasi->id_even = $r->request->get('id_even');
            $reservasi->id_user = auth()->id();
            $reservasi->tgl_even = $r->request->get('tgl_even');
            $reservasi->id_kursi = $no_kursi[$i];
            $reservasi->nama = $nama[$i];
            $reservasi->usia = $usia[$i];

            $reservasi->save();
        }

        return redirect('/');
    }
}
