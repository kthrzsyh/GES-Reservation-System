<?php

namespace App\Http\Controllers;

use App\Models\Kursi;
use App\Models\Code;
use Illuminate\Http\Request;

class KursiController extends Controller
{
    public function index()
    {
        $table = Kursi::with(['code'])->get();
        // return $table->toArray();
        // dump($table);
        // die();
        return view('admin.Kursi.index')->with(['kursi' => $table]);
    }

    public function addPage()
    {
        $range = Code::all();

        return view('admin.Kursi.add')->with(['range' => $range]);
    }
    public function insert(Request $r)
    {
        $is_exist = Kursi::where('code_id', $r->request->get('code'))->where('no_kursi', $r->request->get('no_kursi'))->first();
        // dump($is_exist);
        // die();
        if (!$is_exist) {
            $kursi = new Kursi;
            $kursi->code_id     = $r->request->get('code');
            $kursi->no_kursi    = $r->request->get('no_kursi');
            $kursi->is_active   = $r->request->get('is_active');

            $kursi->save();
            return redirect('/admin/kursi');
        } else {
            return redirect()->back()->with(['pesan' => 'sudah terdaftar']);
        }

        return redirect()->back();
    }
    public function edit($id)
    {
        $kursi = Kursi::findOrFail($id);
        $range = range('A', 'J');
        return view('admin.Kursi.edit')->with(['kursi' => $kursi, 'range' => $range]);
    }

    public function update(Request $r)
    {
        $id = $r->request->get('id');
        $kursi = Kursi::findOrFail($id);

        $kursi->is_active = $r->request->get('is_active');

        $kursi->save();
        return redirect('/admin/kursi');
    }
}
