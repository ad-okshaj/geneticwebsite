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
        <img src="{{ asset('images/logo.png') }}" width="210" height="80" alt="">
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

        <button type="button" class="btn btn-raised btn-danger text-center mx-5" data-toggle="modal"
            data-target="#joinus">
            JOIN US
        </button>
    </div>
</nav>
