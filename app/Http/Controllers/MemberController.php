<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\UserAja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function pendaftaran(Request $r)
    {
        $member = new Member;
        // dump($r);
        // die;
        $user = new UserAja;
        $user->email = $r->request->get('email');
        $user->role = 'member';
        $user->password = Hash::make($r->request->get('password'));

        $user->save();
        // dump($a);
        // die;
        $member->id_user = $user->id;
        $member->nama = $r->request->get('nama');
        $member->nik = $r->request->get('nik');
        $member->tgl_lahir = $r->request->get('tgl_lahir');
        $member->alamat = $r->request->get('alamat');
        $member->hp = $r->request->get('hp');
        $member->jenis_kelamin = $r->request->get('jenis_kelamin');

        $member->save();
        return view('home');
    }

    public function index()
    {
        return view('member.DasborMember');
    }
}
