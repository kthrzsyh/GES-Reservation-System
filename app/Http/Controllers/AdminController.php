<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $table = Member::all();
        // dump($table);
        // die;
        return view('admin.DasborAdmin')->with(['member' => $table]);
    }
}
