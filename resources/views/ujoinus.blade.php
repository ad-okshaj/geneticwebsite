@extends('layouts.userlayout')
@section('hometitle')
    CRGBMD-JOIN US
@endsection
@section('usercontent')
    <div class="container">
        <h2 class="mt-4" style="color: gray;padding-bottom: 1em;">Join Us</h2>
        <div class="card"style="margin-bottom:8.2rem">
            <div class="card-body">
                <p>If you are a clinician or a scientist working with any of these conditions and are interested in joining
                    us, please <a href="{{ url('/member_registration') }}">REGISTER ONLINE</a> through the site.

                    We shall confirm your registration through email and provide you with the necessary details about how to
                    collect samples and how to send them across to us. </p>

            </div>
        </div>
    </div>
@endsection
