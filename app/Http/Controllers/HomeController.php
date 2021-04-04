<?php

namespace App\Http\Controllers;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $list_event = Event::all();
        return view('home')->with(['event' => $list_event]);
    }
}
