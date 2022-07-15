@extends('layouts.userlayout')
@section('hometitle')
    CRGBMD-EVENT-INFO
@endsection
@section('usercontent')
    <div class="container">
        <div class="card" style="margin:1em">
            <div class="card-body">

                <h2 style="padding:1em;color:navy"> <b>{{ $res->eventname }}</b></h2>
                <div id="carouselExampleControls" data-interval="2000" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($res->images as $image)
                            @if ($loop->first)
                                <div class="carousel-item active">
                                @else
                                    <div class="carousel-item ">
                            @endif
                            <img class="d-block w-100" src="/download/{{ $image->image }}" alt="First slide"
                                style="height:90vh">
                    </div>
                    @endforeach
                </div>

                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>

            </div>

        </div>
        <div class="container">
            <h2 style="color:teal">About</h2>
            <p style="text-align:justify;font-size:16px">{!! nl2br(e($res->description)) !!}</p><br>
            <p style="font-size:16px"><b style="color:navy">Event Date</b> : <b>{{ $res->eventdate }}</b></p>
            <p style="font-size:16px"><b style="color:navy">Venue</b> : <b>{{ $res->eventvenue }}</b></p>
            <p class="card-text " style="padding-bottom:1em"><small class="text-muted">Last updated
                    {{ $res->updated_at->diffForHumans() }}</small></p>
        </div>

    </div>
    </div>
@endsection
