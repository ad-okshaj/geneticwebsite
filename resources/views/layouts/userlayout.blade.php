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
    <link rel="stylesheet" type="text/css" href="css/knowmorecard.css">
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

    <x-navbar />

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

    <x-footer />

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
