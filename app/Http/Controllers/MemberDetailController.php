<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberDetailController extends Controller
{
    public function detail($id)
    {
        $member = Member::where('id', $id)->with(['user'])->get();
        // dump($member);
        // die;
        // return $member->toArray();
        return view('admin.DetailMember')->with(['member' => $member[0]]);
    }
}
