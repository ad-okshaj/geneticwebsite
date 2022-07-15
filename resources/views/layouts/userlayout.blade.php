<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('hometitle')</title>
    <link rel="stylesheet" href="/css/bootstrap-material-design.min.css">
    <base href="{{ url('/') }}" />
    <link rel="canonical" href="/{{ Request::path() }}" />
    <link rel="stylesheet" href="/css/animate.min.css">
    <script src="https://use.fontawesome.com/7fa0c56c95.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
    <link rel="stylesheet" href="{{ asset('/css/mycss.css') }}">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha256-GqiEX9BuR1rv5zPU5Vs2qS/NSHl1BJyBcjQYJ6ycwD4=" crossorigin="anonymous" />
    <link href="/css/ihover.css" rel="stylesheet">
    @yield('links')
    <style>
        .nav-link:hover {
            color: teal !important;
            background-color: whitesmoke;
            opacity: 0.6;
        }

        @media screen and (max-width: 600px) {
            .myfooter {
                height: 100% !important;
            }

            .wrapper {
                height: 100% !important;
            }
        }
    </style>
    @yield('style')
</head>

<body>
    @yield('pre')

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#4e73df">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link text-white" href="/contact"><i class="fa fa-phone"></i> +91
                        7022129624</a>
                </li>
                <li class="nav-item active" style="text-transform: capitalize;">
                    <a class="nav-link text-white" href="/contact" style="text-transform:lowercase">
                        <i class="fa fa-envelope"></i>
                        anirban@nitte.edu.in</a>
                </li>
                <li class="nav-item active" style="text-transform: capitalize;">
                    <a class="nav-link text-white" href="/contact" style="text-transform:lowercase">
                        <i class="fa fa-envelope"></i>
                        arati1239@gmail.com</a>
                </li>


            </ul>
            <a class="nav-link text-white" href="{{ url('/supportus') }}"> SUPPORT US</a>
            <a class="nav-link text-white" href="{{ url('/donate_form') }}">DONATE</a>
        </div>
    </nav>



    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand " href="userhome">
            <img src="{{ asset('images/logo.png') }}" width="210" height="90" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="{{ url('userhome') }}">Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="{{ url('userabout') }}">About Us</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="{{ url('userrgd') }}">Rare Diseases &amp; BMFS</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="{{ url('userservices') }}">Research</a>
                </li>

                {{-- <li class="nav-item active">
                        <a class="nav-link font-weight-bold" href="{{url('userpartners')}}">Partners</a>
                    </li> --}}
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="{{ url('userresources') }}">Resources</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="{{ url('userevents') }}">Events</a>
                </li>
                {{-- <li class="nav-item active">
                        <a class="nav-link font-weight-bold" href="{{url('usergallery')}}">Gallery</a>
                    </li> --}}
                <li class="nav-item active">
                    <a class="nav-link font-weight-bold" href="{{ url('contact') }}">Contact Us</a>
                </li>
            </ul>

            <button type="button" class="btn btn-raised btn-danger text-center" data-toggle="modal"
                data-target="#joinus">
                JOIN US
            </button>


        </div>
    </nav>
    @yield('usercontent')
    <div class="modal fade" id="joinus" tabindex="-1" role="dialog" aria-labelledby="modalforjoinus"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">JOIN US</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p style="text-align:justify">If you are a clinician or a scientist working with any of these
                        conditions and are interested in
                        joining us, please REGISTER ONLINE through the site. We shall confirm your registration
                        through
                        email and provide you with the necessary details about how to collect samples and how to
                        send
                        them across to us.</p>
                    <a href="{{ url('/member_registration') }}"
                        class="btn btn-raised btn-danger text-center btn-center">Register</a>
                </div>




            </div>
        </div>
    </div>





    <div class="myfooter"
        style="background-image:url('/images/footer.jpg'); background-repeat: no-repeat;
    background-size: cover;
    background-position: center;">
        <div class="wrapper" style="background-color: black;
        color: white !important;
        opacity:.7;">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-sm-6 ">
                        <a class="navbar-brand mb-2" href="userhome">
                            <img src="{{ asset('images/logo.png') }}" width="210" height="100"
                                alt="">
                        </a>
                        <p class="text-white">
                            Bringing together clinicians and researchers under one platform to
                            improve clinical therapies and outcomes for the patients.
                        </p>
                        <p class="text-white">
                            <i class="fa fa-twitter" aria-hidden="true" style="padding:5px"></i>
                            <a class="text-white"
                                href="https://www.facebook.com/Rare-Genetic-and-Bone-Marrow-Disorder-Consortium-India-Network-105451730898186/">
                                <i class="fa fa-facebook" aria-hidden="true" style="padding:5px"></i></a>
                            <i class="fa fa-instagram" aria-hidden="true" style="padding:5px"></i>
                        </p>
                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <p class="text-white"><br><br>
                        <h5 class="text-white">About Us</h5>

                        <a style="color:grey" class="anchor"
                            href="{{ url(asset('/userabout')) }}">Nitte-DU</a><br>
                        <a style="color:grey" class="anchor"
                            href="{{ url(asset('/userpartners')) }}">Partners</a><br>
                        <a style="color:grey" class="anchor"
                            href="{{ url(asset('/userresources')) }}">Resources</a><br>
                        <a style="color:grey" class="anchor" href="{{ url(asset('/contact')) }}">Contact</a><br>

                        </p>

                    </div>
                    <div class="col-md-3 col-sm-6  text-center">
                        <p class="text-white"><br><br>
                        <h5 class="text-white">Services</h5>

                        <a style="color:grey" class="anchor" href="{{ url(asset('/userrgd')) }}">RGD</a><br>
                        <a style="color:grey" class="anchor" href="{{ url(asset('/userrgd')) }}">BMFS</a><br>
                        <a style="color:grey" class="anchor" href="{{ url(asset('/userevents')) }}">Events</a><br>
                        <a style="color:grey" class="anchor"
                            href="{{ url(asset('/usergallery')) }}">Gallery</a><br>

                        </p>

                    </div>
                    <div class="col-md-3 col-sm-6 text-center">
                        <p class="text-white"> <br> <br>
                        <h5 class="text-white">Quick Links</h5>
                        <a href="{{ asset('pdfs/rare.pdf') }}" style="color:grey" class="anchor">
                            Rare Diseases Policy 2017
                        </a>

                        <br>
                        <a href="{{ url('https://www.nitte.edu.in/') }}" style="color:grey" class="anchor">
                            Nitte(Deemed To Be University)
                        </a>
                        <br>
                        <a href="{{ url('http://nucser.nitte.edu.in/') }}" style="color:grey" class="anchor">
                            Nitte | NUCSER
                        </a>
                        </p>

                    </div>
                </div>
                <div class="row">
                    <div class="text-center" style="color:grey;width:100%">Copyright @ 2019 Powered by
                        Inspirante
                        Technologies Pvt
                        Ltd</div>
                </div>
            </div>

        </div>

    </div>





    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js"
        integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js"
        integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.10.1/js/mdb.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    @yield('userscript')

    <script>
        AOS.init();
    </script>
</body>

</html>
