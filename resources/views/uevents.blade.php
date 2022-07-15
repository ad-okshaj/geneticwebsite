@extends('layouts.userlayout')
@section('hometitle')
    CRGBMD-EVENTS
@endsection
@section('usercontent')
    <div class="container-fluid" style="background:rgba(171,205,239,0.6)">
        <ul class="nav nav-tabs mb-3 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" href="{{ url('userevents') }}">EVENTS</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" href="{{ url('usergallery') }}">GALLERY</a>
            </li>
        </ul>
        <h2 class="text-center" style="padding:1em;color:teal">Events Conducted</h2>
        <div class="row" style="padding:1em">

            @foreach ($events as $event)
                <div class="col-md-3 event-card">
                    <div class="card" style="min-height:600px" data-aos="fade-up" data-aos-once="true"
                        data-aos-delay="1000">
                        <div class="container-fluid img-container">
                            <img class="card-pop" id="{{ $event->id }}" src="/download/{{ $event->eventimage }}"
                                onclick="maginify(id)" alt="Card image cap" style="max-height:300px !important"
                                data-toggle="modal" data-target="#eventImage{{ $event->id }}">
                        </div>
                        {{-- <div class="modal fade" style="width:100%" id="eventImage{{$event->id}}" tabindex="-1"
                role="dialog"
                aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content" style="width:100%">
                        <div class=" modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body" style="width:100%">
                            <img id="{{$event->id}}" src="{{asset('download/'.$event->eventimage)}}">
                        </div>
                    </div>
                </div>
            </div> --}}
                        <div class="card-header text-white h5"
                            style="background-color:darkblue;text-align:center;
                min-height:150px;overflow: hidden;
                    display: -webkit-box;
                    -webkit-line-clamp: 4;
                    -webkit-box-orient: vertical;">
                            <b>{{ $event->eventname }}</b>
                        </div>
                        <div class="card-body">
                            <p class="card-text"
                                style="text-align:justify;min-height:150px;overflow: hidden;
                    display: -webkit-box;
                    -webkit-line-clamp: 4;
                    -webkit-box-orient: vertical;">
                                {{ $event->description }}</p>
                            <p class="card-text text-center"><small class="text-muted">Last updated
                                    {{ $event->updated_at->diffForHumans() }}</small></p>
                            <div class="text-center">
                                <button type="button" class="btn btn-raised btn-warning "><a
                                        href="eventInfo/{{ $event->id }}" class="text-center">Know More</a></button>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
        <br>

    </div>
@endsection

{{-- @section('userscript')
    <script>
        var maxHeight = 0;

        $(".event-card").each(function() {
            if ($(this).height() > maxHeight) {
                maxHeight = $(this).height();
            }
        });

        $(".event-card").height(maxHeight - 10);
    </script>
@endsection --}}
