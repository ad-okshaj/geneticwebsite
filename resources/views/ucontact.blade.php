@extends('layouts.userlayout')
@section('hometitle')
    CRGBMD INDIA | Contact Us
@endsection
@section('usercontent')
    <div
        style="background: url(/images/contact.jpg);
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position:relative;
    width: 100%;
    min-height : 60vh;">
    </div>


    <div class="container mb-5">
        <h2 class="mt-5 px-4 ml-5" style="color: gray;padding-bottom: 1em;">Contact Us</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card bg-light">
                    <div class="card-body">
                        <h5>Anirban Chakraborty, PhD<p>
                        </h5>
                        <h6>
                            <p> Deputy Director</p>
                            <p>Nitte University Centre for Science</p>
                            <p>Education &amp; Research</p>
                            <p>P.O Deralakatte, Mangalore - 575018</p>
                            <p>Email: anirban@nitte.edu.in</p>
                            <p> Tel +91 70221 29624</p>
                        </h6>
                    </div>
                </div>

                <br>
                <div class="card bg-light">
                    <div class="card-body">
                        <h5>
                            <p>Arati Khanna-Gupta, PhD </p>
                        </h5>
                        <h6>
                            <p>Consultant in Precision Medicine<br>
                                (Hematology, Oncology and Bone Marrow Failures)</p>
                            <p>CEO, SriGene LLC<br></p>
                            <p>Ex Assistant Professor of Medicine, Harvard Medical School, Boston, USA</p>
                            <p>Email: arati1239@gmail.com</p>
                        </h6>
                    </div>
                </div>
            </div>


            <div class="col-md-8">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Nitte%20University%20Centre%20for%20Science%20%20Education%20%26%20Research%20%20P.O%20Deralakatte%2C%20Mangalore%20-%20575018&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="#"></a>
                    </div>
                    <style>
                        .mapouter {

                            text-align: right;

                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;

                        }
                    </style>
                </div>
            </div>


        </div>

    </div>
@endsection
