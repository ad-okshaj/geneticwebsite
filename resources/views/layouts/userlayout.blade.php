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
    <h1>User Layout</h1>
</body>

</html>
