<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\DonateRequest;
use App\Mail\DonarMail;
use App\Mail\DonationInterestMail;
use Carbon\Carbon;
use App\Models\Donate;

class DonateController extends Controller
{
    public function test()
    {
        return view('test');
    }
    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('udonate');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('udonate_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DonateRequest $request)
    {
        $data = $request->validated();
        $rep = Donate::create($data);
        $current_time = Carbon::now()->toDayDateTimeString();
        Mail::to($data['email'])->send(new DonarMail($data, $current_time));
        Mail::to('anirban@nitte.edu.in')->send(new DonationInterestMail($data));
        Mail::to('arati1239@gmail.com')->send(new DonationInterestMail($data));
        return view('thankyou', ['res' => $data, 'date' => $current_time]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
