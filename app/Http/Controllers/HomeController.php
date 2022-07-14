<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
 
use App\events;
use App\gallery;
use App\team;
use App\members;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cnt = members::count();
        $cnt2 = team::count();
        $cnt3 = events::count();
         return view('admindashboard')->with(['total' => $cnt, 'teamno' => $cnt2, 'eventno' => $cnt3]);
    }
    // public function redirectToUhome()
    // {
    //     return redirect('/userhome');
    // }
    // public function  uservices()
    // {
    //     return view('uservices');
    // }
}