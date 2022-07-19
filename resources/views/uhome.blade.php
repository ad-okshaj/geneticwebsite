@extends('layouts.userlayout')
@section('hometitle')
    CRGBMD INDIA | Home
@endsection
@section('style')
    <style>
        .youtube {
            width: 370;
            height: 360;
            margin-left: 50px;
        }

        @media only screen and (max-width: 600px) {
            .youtube {
                height: 360;
                width: 300px;
                margin: auto;
            }

            .loder {
                width: 100vw;
            }

        }

        .loderimg {
            height: 80vh;
            width: 80vw;
        }

        .img-container {
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform: translateY(-50%);
            -o-transform: translateY(-50%);
            transform: translateY(-50%);
            -webkit-animation: logoAnimation 0.7s;
            -moz-animation: logoAnimation 0.7s;
            -o-animation: logoAnimation 0.7s;
            animation: logoAnimation 0.7s;
        }

        @-webkit-keyframes logoAnimation {
            0% {
                -webkit-transform: translateY(-50%) scale(0);
                transform: translateY(-50%) scale(0);
                opacity: 0.7;
            }

            100% {
                -webkit-transform: translateY(-50%) scale(1);
                transform: translateY(-50%) scale(1);
                opacity: 1;
            }
        }

        @-moz-keyframes logoAnimation {
            0% {
                -moz-transform: translateY(-50%) scale(0);
                transform: translateY(-50%) scale(0);
                opacity: 0.7;
            }

            100% {
                -moz-transform: translateY(-50%) scale(1);
                transform: translateY(-50%) scale(1);
                opacity: 1;
            }
        }

        @-o-keyframes logoAnimation {
            0% {
                -o-transform: translateY(-50%) scale(0);
                transform: translateY(-50%) scale(0);
                opacity: 0.7;
            }

            100% {
                -o-transform: translateY(-50%) scale(1);
                transform: translateY(-50%) scale(1);
                opacity: 1;
            }
        }

        @keyframes logoAnimation {
            0% {
                transform: translateY(-50%) scale(0);
                opacity: 0.7;
            }

            100% {
                transform: translateY(-50%) scale(1);
                opacity: 1;
            }
        }
    </style>
@endsection
{{-- @section('pre')
<div class="loder"><img class="loderimg center" src="/images/logo.png" /></div>
@endsection --}}
@section('usercontent')
    <div class="parallaximg"
        style="background-image: url('/images/background2.jpg');
background-attachment: fixed;
background-repeat: no-repeat;
background-size: cover;
background-position: center;
width: 100%;
min-height : 75vh;"
        align="center">
        <div class="img-container">
            <img src="{{ url('/images/logo5.png') }}" class="img-fluid" alt="Responsive Image" width="85%" height="100%" />
        </div>



        {{-- <div class="text-block animated fadeIn" style=" position: absolute;
        bottom: 20px;
        right: 20px;
        background: rgba(0, 0,255, 0.4);
        color: white;
        padding-left: 20px;
        padding-right: 20px;
        animation-delay:1s ">
        <blockquote style="font-size:20px"><i>"Individually we are one drop,
                together we are an ocean"</i>
            <footer style="text-align:right;">
                <i>-Ryunosuke
                    Satoro</i></footer>
        </blockquote>

    </div> --}}
    </div>


    <section id="home">
        <h2 class="text-center mb-4" style="color:navy">Consortium of Rare Genetic and Bone Marrow Disorders India
            Network@NITTEDU (CRG.BMD|IN)</h2><br>

        <div>
            <div class="row">
                <div class="col col-md-8 ">
                    <p style="text-align:justify">
                    <ul style="text-align:justify ">
                        <li>
                            India is the second most populous country in the world with a population of about <span
                                style="font-weight: bold">1.38
                                billion people,</span> and growing.
                        </li>
                        <li>
                            It is estimated that nearly <span style="font-weight: bold">72-96 million</span> individuals
                            in India suffer from a rare, orphan or
                            neglected disease, defined by the World Health Orgainzation (WHO) as having a
                            prevalence of &lt;5 per 10,000 individuals
                        </li>
                        <li>
                            6000-8000 Rare diseases have been identified the world over of which about <span
                                style="font-weight: bold">450</span> have
                            been reported in India.
                        </li>
                        <li>
                            The study and understanding of Rare Diseases in India is particularly poignant and
                            necessary given <span style="font-weight: bold">the high degree of endogamy</span> practiced
                            in communities as well the
                            large number of <span style="font-weight : bold">consanguineous marriages,</span> leading to
                            an <span style="font-weight: bold">unusually high number of
                                autosomal recessive genetic diseases observed</span>
                        </li>
                    </ul>
                    <span id="dots">...</span>
                    <span id="more" style="display:none">
                        <ul style="text-align:justify">
                            <li>
                                An estimated 1 in 20 children born in urban India suffers from a rare disease, therefore
                                the need to accurately document and study these disorders in a systematic manner is
                                urgent and imminent
                            </li>
                            <li>
                                Given the enormity of the issue of rare genetic diseases in India, no single entity,
                                governmental or non-governmental, can be expected to take on the task of identifying,
                                diagnosing, treating and counseling all Indian patients with rare genetic disorders.
                            </li>
                            <li>
                                In light of this we have formed a non=profit consortium:<span style="font-weight: bold">The
                                    Consortium of Rare
                                    Genetic and Bone Marrow Disorders, CRG.BMD)</span> at NITTE University, in Mangalore
                                (Karnataka)
                            </li>
                        </ul>
                    </span>
                    </p>
                    <button onclick="myFunction()" id="myBtn" class="btn btn-primary">Read more</button>
                </div>
                <div class="col col-md-4">

                    <iframe class="youtube" width="400" height="200" src="https://www.youtube.com/embed/GbgOsCOcV6g"
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>

                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <div class="card" data-aos="flip-up" style="animation-delay: 3s;">
                        <h2 class="text-center" data-aos="fade-up" style="color:teal; margin-top: 27px;">Vision
                        </h2>
                        <div class="card-body">
                            <p style="color:gray;text-align:justify;margin-bottom:30px;">
                                To build a collaborative network of health care providers and scientists to decode the
                                molecular underpinnings and
                                understand the extent of rare genetic and bone marrow failure disorders in India.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card" data-aos="flip-up" style="animation-delay: 3s;">
                        <h2 class="text-center" style="color:teal; margin-top: 20px;">Mission</h2>
                        <div class="card-body">
                            <p style="color:gray;text-align:justify">
                                By identifying the genetic cause of rare genetic diseases and bone marrow failure syndromes
                                and unraveling the
                                underlying disease biology, we aspire to provide new and innovative insights leading to
                                improved targeted therapeutic
                                options for patients
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div style="margin-top:3rem;">
    <h2 class="text-center myheader " style="color:teal;">News/Announcements</h2>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
        style="background-color:black !important;min-height:200px;padding-top:20px;">

        <div class="carousel-inner">
            @foreach ($news as $value)

            <div class="carousel-item {{($loop->first)?'active':''}}">


<div class="container">

    <a class="text-white h3" {!! is_null($value->flyer)?
        'href="'.asset('download/'.$value->flyer).'"':""!!}>
        {{$value->newshead}}
    </a>
    <p class="lead text-white">
        {{$value->description}}</p>
    <p class=" text-white">
        Dated : {{$value->newsdate}}</p>
    <p class="card-text"><small class="text-muted">Last updated
            {{ $value->updated_at->diffForHumans()  }}</small></p>
</div>
</div>
@endforeach
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div>
</div> --}}
    {{-- News section --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                {{-- originally removed, recognition/accreditation --}}

                <div class="row justify-content-center ">
                    <h2 class="heading pl-3 " style="color:teal">
                        Recognition/Accreditation
                    </h2>
                </div>
                <br><br>
                <div class="row justify-content-center">
                    <br><br>
                    <div class="col ml-2 text-center">

                        <a href="https://nitte.edu.in"><img class="card-img-top" src="{{ asset('/images/nirf.jpg') }}"
                                alt="Card image cap" style="height:150px;width:150px;"></a>
                    </div>
                    <div class="col ml-2 text-center">
                        <a href="https://nitte.edu.in"><img class="card-img-top mt-3" src="{{ asset('/images/qs.jpg') }}"
                                alt="Card image cap" style="height:150px;width:150px"></a>
                    </div>
                    <div class="col ml-2 text-center">
                        <a href="https://nitte.edu.in"><img class="card-img-top mt-3"
                                src="{{ asset('/images/qsrank.jpeg') }}" alt="Card image cap"
                                style="height:150px;width:150px"></a>
                    </div>
                </div><br><br>
                {{-- originally removed, recognition/accreditation --}}


                <div class="row">
                    <div class="col">
                        <h2 class="heading pl-3 text-center" style="color:teal">
                            Supported By
                        </h2>
                        <div class="row justify-content-center">
                            <a href="https://nitte.edu.in">
                                <img class="card-img-top ml-2" src="{{ asset('/images/nittedu1.png') }}"
                                    alt="Card image cap">
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6 col-sm-12 col-xs-12" style="background-color: #f1f1f1;">
                <h3 class="px-3 mt-4" style="color: #505050">
                    <i class="fa fa-newspaper-o"></i> Recent News
                </h3>
                <hr>
                <div class="marquee-wrap">
                    <div class="marquee">
                        @foreach ($news as $value)
                            <div class="pb-4">
                                <a href="" style="color: #505050" {!! is_null($value->flyer) ? 'href="/download/' . $value->flyer . '"' : '' !!}>
                                    <h6>
                                        <i class="fa fa-arrow-right"></i> {{ $value->newshead }}
                                    </h6>
                                    <div>
                                        <img src="{{ asset('/images/connect.jpg') }}" height="100" width="100"
                                            alt="{{ $value->flyer }}">
                                        <div style="float: right; margin-right: 280px;">
                                            {{ $value->description }}
                                            <br><small>Date : {{ $value->newsdate }}<br>Last updated :
                                                {{ $value->updated_at->diffForHumans() }}</small>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>

                </div>
                <div class="text-center">
                    <h4>Need Assistance?</h4>
                    <div class="text-center">
                        <a href="/contact" class="btn btn-outline-secondary">Contact us</a>
                    </div>
                </div>
            </div>

            {{-- temp --}}
        </div>
    </div>
    {{-- end of recent news section --}}




    {{-- <div id="logo" class="carousel slide" data-interval="2000" data-ride="carousel">
    <ol class="carousel-indicators">
        <li style="text-decoration-color: darkblue !important" data-target="#logo" data-slide-to="0" class="active">
        </li>
        <li data-target="#logo" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active animated fadeInRight">
            <div class="jumbotron jumbotron-fluid" style="background-color:white !important">
                <div class="container">
                    <h2 class="text-center" style="color:teal">Supported By</h2><br>
                    <div class="text-center">
                        <a href="https://nitte.edu.in"><img class="card-img-top" src="{{asset('/images/nittedu1.png')}}"
alt="Card image cap" style="height:100px;width:150px"></a>
</div>
</div>
</div>
</div>
<div class="carousel-item animated fadeInRight">
    <div class="jumbotron jumbotron-fluid" style="background-color:white !important">
        <div class="container">
            <h2 class="text-center" style="color:teal">Recognition/Accreditation</h2><br>
            <div class="row">
                <div class="col-md-3 offset-1">
                    <a href="https://nitte.edu.in"><img class="card-img-top" src="{{asset('/images/nirf.jpg')}}" alt="Card image cap" style="height:150px;width:150px"></a>
                </div>
                <div class="col-md-3 offset-1">
                    <a href="https://nitte.edu.in"><img class="card-img-top" src="{{asset('/images/qs.jpg')}}" alt="Card image cap" style="height:150px;width:150px"></a>
                </div>
                <div class="col-md-3 offset-1">
                    <a href="https://nitte.edu.in"><img class="card-img-top" src="{{asset('/images/qsrank.jpeg')}}" alt="Card image cap" style="height:150px;width:150px"></a>
                </div>
            </div>

        </div>
    </div>
</div>
</div>
<a class="carousel-control-prev" href="#logo" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#logo" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
</a>
</div> --}}










    <div class="user_icons"
        style="background-image:url(/images/icons.jpg);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position:relative;
    width: 100%;
    min-height :350px;
    opacity: 0.9;">
        <div class="row icon" style="padding-top:6em; margin-left: 0px !important; margin-right: 0px !important;">
            <div class="col-md">
                <div class="text-center">
                    <i class="fa fa-users" aria-hidden="true" style="font-size:50px;color:gold"></i>
                    <h1 class="text-white">{{ $total }}</h1>
                    <h3 style="color:white">Members Registered</h3>
                </div>
            </div>
            <div class="col-md">
                <div class="text-center">
                    <i class="fa fa-calendar" aria-hidden="true" style="font-size:50px;color:gold"></i>
                    <h1 class="text-white">{{ $eventno }}</h1>
                    <h3 style="color:white">Events Conducted</h3>
                </div>
            </div>
            <div class="col-md">
                <div class="text-center">
                    <i class="fa fa-group" aria-hidden="true" style="font-size:50px;color:gold"></i>
                    <h1 class="text-white">{{ $teamno }}</h1>
                    <h3 style="color:white">Team Members</h3>
                </div>
            </div>
        </div>
    </div>


    @if ($events->count() == 0)
    @else
        <div class="container-fluid" style="background:rgba(171,205,239,0.6)">
            <h2 class="text-center" style="padding:1em;color:teal"> Upcoming Events</h2>
            <div class="row" style="padding:1em">
                @foreach ($events as $event)
                    <div class="col-md-3">
                        <div class="card" style="min-height:600px" data-aos="fade-right">
                            <img class="card-pop" id="{{ $event->id }}" src="/download/{{ $event->eventimage }}"
                                onclick="maginify(id)" alt="Card image cap" style="max-height:300px !important"
                                data-toggle="modal" data-target="#eventImage{{ $event->id }}">
                            <div class="card-header text-white h5" style="background-color:darkblue;text-align:justify">
                                <b>{{ $event->eventname }}</b>
                            </div>
                            <div class="card-body">
                                <p class="card-text text-center"
                                    style="text-align:justify;min-height:150px;overflow: hidden;
                                        display: -webkit-box;
                                        -webkit-line-clamp: 4;
                                        -webkit-box-orient: vertical;">
                                    {{ $event->description }}</p>
                                <p class="card-text text-center"><small class="text-muted">Last updated
                                        {{ $event->updated_at->diffForHumans() }}</small></p>
                                <div class="text-center">
                                    <a class="btn btn-raised btn-warning text-center"
                                        href="eventInfo/{{ $event->id }}">Know
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <br>
            </div>
        </div>
    @endif


    <section id="gallery">
        <h2 class="text-center" style="padding-bottom:1em;color:teal">Gallery</h2>
        <div class="container">

            <div class="row">
                @foreach ($gallery as $value)
                    <div class="col-md">
                        <div class="ih-item circle effect2 left_to_right"><a href="/usergallery">
                                <div class="spinner"></div>
                                <div class="img"><img src="/download/{{ $value->galleryimage }}" alt="img">
                                </div>
                                <div class="info">
                                    <div class="info-back">
                                        <h3>{{ $value->imagetitle }}</h3>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <h2 class="text-center mb-4 myheader " style="color:teal;">Testimonials</h2>
    <div id="carouselTest" class="carousel slide" data-ride="carousel"
        style="background-color:black !important;min-height:400px;padding-top:20px;">
        <div class="carousel-inner">
            @foreach ($testimonial as $value)
                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="ih-item circle effect1" style="margin-top:3rem;"><a href="#">
                                        <div class="spinner"></div>
                                        <div class="img"><img src="/download/{{ $value->timage }}" alt="img">
                                        </div>
                                        <div class="info">
                                            <div class="info-back">
                                                <h3>{{ $value->imagetitle }}</h3>
                                            </div>
                                        </div>
                                    </a>

                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6" style="padding-top:5rem; margin-bottom: 30px;">
                                <blockquote class="lead text-white">
                                    <i> "{{ $value->description }}"</i>
                                </blockquote>
                                <h5 style="color:burlywood">{{ $value->testimonialby }}</h5>
                                <p class=" text-white">
                                    <i>{{ $value->designation }}</i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <a class="carousel-control-prev" href="#carouselTest" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselTest" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection


@section('userscript')
    <script>
        function myFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }

        // var preloader = document.getElementById('loading');
        //         function loadingFunction() {
        //                         myVar = setTimeout(showPage, 1000);
        //                     }

        //                     function showPage() {
        //                         preloader.style.opacity = 0;
        //                         preloader.style.display = "none";

        //                     }

        setTimeout(function() {
            let loader = document.querySelector(".loder");
            loader.className += " hidden";
        }, 2000);
    </script>
@endsection
