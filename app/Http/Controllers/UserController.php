<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Cache;
use App\Models\members;
use App\Models\team;
use App\Models\events;

use App\Models\gallery;
use App\Models\news;
use App\Models\testimonial;

class UserController extends Controller
{

    public function home()
    {
        $cnt3 = Cache::get('event_count', function () {
            return events::count();
        });
        $cnt2 = Cache::get('team_count', function () {
            return team::count();
        });
        $cnt = Cache::get('member_count', function () {
            return members::count();
        });

        $events = Cache::get('events', function () {
            return events::orderBy('created_at', 'desc')->get();
        });

        $events = $events->filter(function ($item) {
            $evdate = Carbon::parse($item->eventdate);
            $curdate = Carbon::now();
            return $curdate->isBefore($evdate);
        });
        $gallery = Cache::get('gallery', function () {
            return gallery::limit(8)->orderBy('created_at', 'desc')->get();
        });
        $news = Cache::get('news', function () {
            return news::limit(5)->orderBy('created_at', 'desc')->get();
        });
        $testimonial = Cache::get('testimonial', function () {
            return testimonial::limit(6)->orderBy('created_at', 'desc')->get();
        });
        //\Log::debug($news);
        return view('uhome')->with(['total' => $cnt, 'teamno' => $cnt2, 'eventno' => $cnt3, 'events' => $events, 'gallery' => $gallery, 'news' => $news, 'testimonial' => $testimonial]);
    }
    public function gallery()
    {
        $gallery = Cache::get('gallery', function () {
            return gallery::get();
        });
        return view('ugallery')->with(['gallery' => $gallery]);
    }
    public function contact()
    {
        return view('ucontact');
    }
    public function eventInfo(events $id)
    {
        //$res=events::where('id','=',$id)->get();
        return view('/ueventinfo', ['res' => $id]);
    }
    public function userevents()
    {
        $events = Cache::get('events', function () {
            return events::orderBy('eventdate', 'desc')->get();
        });
        return view('/uevents')->with(['events' => $events]);
    }
}