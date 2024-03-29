<?php
namespace App\Http\Controllers;

use Throwable;
use Carbon\Carbon;
use App\Models\News;
use App\Models\Team;
use App\Models\User;
use App\Models\Donate;
use App\Models\Events;
use App\Models\Gallery;
use App\Models\Members;
use App\Mail\MemberEmail;
use App\Models\EventImage;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Exports\MembersExport;
use App\Http\Requests\addnews;
use App\Http\Requests\addteam;
use App\Mail\MemberRegistered;
use App\Http\Requests\AddEvent;
use Illuminate\Validation\Rule;
use App\Http\Requests\addmember;
use App\Http\Requests\AddGallery;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\AddTestimonial;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\MemberEmailRequest;


class AdminController extends Controller
{
    public function export()
    {
        return Excel::download(new MembersExport, 'users.xlsx');
    }
    public function test(Request $request){
        return redirect('/test')->flash('alert', 'User created successfully!');
    }
    public function news(addnews $req)
    {
        $data = $req->validated();
        if ($req->has('flyer')) {
            $data['flyer'] = substr(Storage::putFile('crgbmd-uploads', $req->file('flyer'), 'public'), 15);
        }
        $rep = News::create($data);

        return redirect('/dashboard')->with('alert', 'News added sucessfully!');
    }

    public function testimonial()
    {
        return view('admintestimonial');
    }
    public function events(AddEvent $req)
    {
        $data = $req->validated();
        $data['eventimage'] = substr(Storage::putFile('crgbmd-uploads', $req->file('eventimage'), 'public'), 15);
        $rep = events::create($data);
        if ($req->has('images')) {
            foreach ($req->file('images') as $image) {
                EventImage::create(['image' => substr(Storage::putFile('crgbmd-uploads', $image, 'public'), 15), 'event_id' => $rep->id]);
            }
        }
        return redirect('/dashboard')->with('alert', 'Event added sucessfully!');
    }

    public function member(addmember $req)
    {
        $rep = members::create($req->validated());
        try {
            Mail::send(new MemberRegistered($rep));
        } catch (\Exception $e) {
            Log::emergency("Unable to send Emails");
        }
        return view('success_register_member');
    }

    public function displaymembers()
    {
        $res = members::all();
        return view('adminmembers', compact('res'));
    }

    public function displaydonors()
    {
        $res = Donate::all();
        return view('admindonors', compact('res'));
    }

    public function addtestimonial(AddTestimonial $req)
    {
        $data = $req->validated();
        $data['timage'] = substr(Storage::putFile('crgbmd-uploads', $req->file('timage'), 'public'), 15);
        $rep = testimonial::create($data);
        return redirect('/dashboard')->with('alert', 'Testimonial added sucessfully!');
    }
    public function team(addteam $req)
    {
        $data = $req->validated();
        $data['photo'] = substr(Storage::putFile('crgbmd-uploads', $req->file('photo'), 'public'), 15);
        $rep = team::create($data);
        return redirect('/dashboard')->with('alert', 'Member added sucessfully!');
    }

    public function editTeam($id)
    {
        $res = team::where('id', '=', $id)->get();
        return view('editteam', compact('res'));
    }

    public function editqry(team $id, addteam $req)
    {
        $data = $req->validated();
        $data['photo'] = substr(Storage::putFile('crgbmd-uploads', $req->file('photo'), 'public'), 15);
        $id->update($data);
        return redirect('/dashboard')->with('alert', 'Member updated sucessfully!');
    }

    public function addgallery()
    {
        return view('adminAddGallery');
    }

    public function postaddgallery(AddGallery $req)
    {
        $data = $req->validated();
        $data['galleryimage'] = substr(Storage::putFile('crgbmd-uploads', $req->file('galleryimage'), 'public'), 15);
        $rep = gallery::create($data);
        return redirect('/dashboard')->with('alert', 'Added to gallery successfully!');
    }

    public function displayteam()
    {
        $res = team::all();
        return view('team', compact('res'));
    }
    public function displaytestimonials()
    {
        $res = testimonial::all();
        return view('managetestimonial', compact('res'));
    }
    public function displaygallery()
    {
        $res = gallery::all();
        return view('managegallery', compact('res'));
    }

    public function displaynews()
    {
        $res = news::all();
        return view('managenews', compact('res'));
    }

    public function displayevents()
    {
        $res = events::all();
        return view('manageevents', compact('res'));
    }

    public function delete($id, Request $request)
    {
        $x = team::findOrFail($id);
        // if ($x->image!=null) {
        //     unlink(public_path().'/uploads/images/'.$x->image);
        // }
        $delete = team::where('id', '=', $id)->delete();
        if ($delete == true) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Deleted sucessfully!');
        } else {
            $request->session()->flash('status', 'danger');
            $request->session()->flash('message', 'An error occurred !');
        }
        return back();
    }
    public function deletetestimonial($id, Request $request)
    {

        $x = testimonial::findOrFail($id);
        // if ($x->image!=null) {
        //     unlink(public_path().'/uploads/images/'.$x->image);
        // }
        $delete = testimonial::where('id', '=', $id)->delete();
        if ($delete == true) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Testimonial deleted successfully!');
        } else {
            $request->session()->flash('status', 'danger');
            $request->session()->flash('message', 'An error occurred !');
        }
        return back();
    }
    public function deletenews($id, Request $request)
    {
        $x = news::findOrFail($id);
        // if ($x->image!=null) {
        //     unlink(public_path().'/uploads/images/'.$x->image);
        // }
        $delete = news::where('id', '=', $id)->delete();
        if ($delete == true) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'News deleted sucessfully!');
        } else {
            $request->session()->flash('status', 'danger');
            $request->session()->flash('message', 'An error occurred !');
        }
        return back();
    }
    public function deleteevents($id, Request $request)
    {
        $x = events::findOrFail($id);
        $delete = events::where('id', '=', $id)->delete();
        if ($delete == true) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Event deleted sucessfully!');
        } else {
            $request->session()->flash('status', 'danger');
            $request->session()->flash('message', 'An error occurred');
        }
        return back();
    }
    public function deletegalleryimage($id, Request $request)
    {
        $x = gallery::findOrFail($id);
        $delete = gallery::where('id', '=', $id)->delete();
        if ($delete == true) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Deleted Successfully!');
        } else {
            $request->session()->flash('status', 'danger');
            $request->session()->flash('message', 'An error occurred!');
        }
        return back();
    }
    public function deleteMember(members $member, Request $request)
    {
        $delete = $member->delete();
        if ($delete) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Member deleted sucessfully!');
        } else {

            $request->session()->flash('status', 'danger');
            $request->session()->flash('message', 'An error occurred');
        }
        return back();
    }
    public function deleteDonor(Donate $donor, Request $request)
    {
        $delete = $donor->delete();
        if ($delete) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Donor deleted sucessfully!');
        } else {

            $request->session()->flash('status', 'danger');
            $request->session()->flash('message', 'An error occurred');
        }
        return back();
    }
    public function deleteDonorMultiple(Request $request)
    {
        $donors = $request->input('mul_delete');
        $ids = explode(",", $donors);
        $delete = Donate::whereIn('id', $ids)->delete();
        if ($delete) {
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Donor deleted sucessfully!');
        } else {

            $request->session()->flash('status', 'danger');
            $request->session()->flash('message', 'An error occurred');
        }
        return back();
    }
    public function sendEmailToMember(members $member, MemberEmailRequest $request)
    {
        $data = $request->validated();
        try {
            Mail::to($member->email)->send(new MemberEmail($data['custommessage']));
            $request->session()->flash('status', 'success');
            $request->session()->flash('message', 'Email sent sucessfully!');
        } catch (\Exception $e) {
            Log::error($e);
            $request->session()->with('status', 'danger');
            $request->session()->with('message', 'An error occurred');
        }
        return back();
    }
}
