<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use App\Models\UserAja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    public function pendaftaran(Request $r)
    {
        $member = new Member;
        // dump($r);
        // die;
        $user = new UserAja;
        $user->email        = $r->request->get('email');
        $user->hp           = $r->request->get('hp');
        $user->role         = 'member';
        $user->password     = Hash::make($r->request->get('password'));

        $user->save();
        // dump($a);
        // die;
        $member->id_user        = $user->id;
        $member->nama           = $r->request->get('nama');
        $member->nik            = $r->request->get('nik');
        $member->tgl_lahir      = $r->request->get('tgl_lahir');
        $member->alamat         = $r->request->get('alamat');

        $member->jenis_kelamin  = $r->request->get('jenis_kelamin');

        $member->save();
        return redirect()->route('home');
    }

    public function index()
    {
        $member = User::where('id', Auth()->guard()->id())->with(['member'])->get();

        return view('member.DasborMember')->with(['user' => $member[0]]);
    }

    public function edit($id)
    {
        $member = User::where('id', Auth()->guard()->id())->with(['member'])->get();
        return view('member.EditMember')->with(['user' => $member[0]]);
    }

    public function update(Request $r)
    {
        $id = $r->request->get('id');
        $user = User::where('id', $id)->update([
            'hp' =>  $r->request->get('hp'),
            // 'password' => Hash::make($r->request->get('password'))
        ]);

        $member = Member::where('id_user', $id);

        $member->update([
            'nama' => $r->request->get('nama'),
            'nik' => $r->request->get('nik'),
            'tgl_lahir' => $r->request->get('tgl_lahir'),
            'alamat' => $r->request->get('alamat'),
            'jenis_kelamin' => $r->request->get('jenis_kelamin')
        ]);
        return redirect('/member');
    }

    public function list()
    {
        $table = Member::with(['user'])->get();
        // dump($table->toArray());
        // die;
        return view('admin.Member.index')->with(['member' => $table]);
    }
    public function addPage()
    {
        return view('admin.Member.add');
    }
    public function add(Request $r)
    {
        $member = new Member;
        $user = new UserAja;
        $user->email = $r->request->get('email');
        $user->role = 'member';
        $user->password = Hash::make($r->request->get('password'));

        $user->save();
        $member->id_user = $user->id;
        $member->nama = $r->request->get('nama');
        $member->nik = $r->request->get('nik');
        $member->tgl_lahir = $r->request->get('tgl_lahir');
        $member->alamat = $r->request->get('alamat');
        $member->hp = $r->request->get('hp');
        $member->jenis_kelamin = $r->request->get('jenis_kelamin');

        $member->save();
        return redirect('/admin/member');
    }
}
