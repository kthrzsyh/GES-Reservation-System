<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $table = Event::all();
        return view('admin.PageEvent')->with(['event' => $table]);
    }
    public function addEvent()
    {
        return view('admin.addEvent');
    }
    public function postEvent(Request $r)
    {
        $event = new Event;

        $event->nama = $r->request->get('nama');
        $event->deskripsi = $r->request->get('deskripsi');
        $event->tanggal = $r->request->get('tanggal');
        $event->kuota = $r->request->get('kuota');
        $event->expired = $r->request->get('expired');
        $event->jam_mulai = $r->request->get('jam_mulai');
        $event->jam_selesai = $r->request->get('jam_selesai');
        $event->hari = $r->request->get('hari');

        $event->save();
        $table = Event::all();
        return view('admin.PageEvent')->with(['event' => $table]);
    }

    public function deleteEvent($id)
    {
        Event::destroy($id);
        $table = Event::all();
        return view('admin.PageEvent')->with(['event' => $table]);
    }

    public function editEvent($id)
    {
        $event = Event::findOrFail($id);
        return view('admin.editEvent')->with(['event' => $event]);
    }

    public function updateEvent(Request $r)
    {
        $id = $r->request->get('id');
        $event = Event::findOrFail($id);
        $event->nama = $r->request->get('nama');
        $event->deskripsi = $r->request->get('deskripsi');
        $event->tanggal = $r->request->get('tanggal');
        $event->kuota = $r->request->get('kuota');
        $event->expired = $r->request->get('expired');
        $event->jam_mulai = $r->request->get('jam_mulai');
        $event->jam_selesai = $r->request->get('jam_selesai');
        $event->hari = $r->request->get('hari');

        $event->save();
        $table = Event::all();
        return view('admin.PageEvent')->with(['event' => $table]);
    }

    public function detailEvent($id){
        $detailEvent = Event::findOrFail($id);
        return view('detail')->with(['event' => $detailEvent]);
    }
}
