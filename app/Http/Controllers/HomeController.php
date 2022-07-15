<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\Events;
use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    // /**
    //  * Show the application dashboard.
    //  *
    //  * @return \Illuminate\Contracts\Support\Renderable

    //  */
    public function index()
    {
        $cnt = Members::count();
        $cnt2 = Team::count();
        $cnt3 = Events::count();
         return view('admindashboard')->with(['total' => $cnt, 'teamno' => $cnt2, 'eventno' => $cnt3]);
    }

    public function redirectToUhome()
    {
        return redirect('/userhome'); 
    }
    
    public function  uservices()
    {
        return view('uservices');
    }
    public function  userabout()
    {
        $sc = team::where('committe', 'scientific')->get();
        $ad = team::where('committe', 'advisory')->get();
        $mg = team::where('committe', 'managing')->get();
        return view('uabout')->with(['sc' => $sc, 'ad' => $ad, 'mg' => $mg]);
    }
}