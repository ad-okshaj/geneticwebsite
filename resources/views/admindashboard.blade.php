{{-- @extends('layouts.adminlayout')
@section('title')
    CRGBMD INDIA | Dashboard
@endsection

@section('content2')
    <h1>Admin Dashboard</h1>
@endsection --}}

@extends('layouts.adminlayout')
@section('title')
    CRGBMD INDIA | Dashboard
@endsection

@section('content2')
    <div class="container-fluid">
        <h2 class="mt-4" style="color: gray">Dashboard</h2>
        <br />
        <div class="row" align="center">
            <div class="col-md">
                <div class="card border-primary mb-3" style="max-width: 18rem;">
                    <a href="{{ url('/members') }}" class="link">
                        <div class="card-body text-primary">
                            <h5 class="card-title">Members Registered</h5>
                            <h1 class="card-text">
                                <div class="text-center count">
                                    {{ $total }}
                                </div>
                            </h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md">
                <div class="card border-secondary mb-3" style="max-width: 18rem;">
                    <a href="{{ url('/team') }}" class="link">
                        <div class="card-body text-secondary">
                            <h5 class="card-title text-center count">Team</h5>
                            <h1 class="card-text">
                                <div class="text-center count">
                                    {{ $teamno }}
                                </div>
                            </h1>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md">
                <div class="card border-danger mb-3" style="max-width: 18rem;">
                    <a href="{{ url('/manageevents') }}" class="link">
                        <div class="card-body text-danger">
                            <h5 class="card-title">Events Conducted</h5>
                            <h1 class="card-text">
                                <div class="text-center count">
                                    {{ $eventno }}
                                </div>
                            </h1>
                        </div>
                    </a>
                </div>
            </div>
        </div><br>
    @endsection
