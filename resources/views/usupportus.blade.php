@extends('layouts.userlayout')
@section('hometitle')
    CRGBMD-SUPPORT US
@endsection
@section('usercontent')
    <div
        style="background: url(/images/icons.jpg);
background-attachment: fixed;
background-repeat: no-repeat;
background-size: cover;
background-position: center;
position:relative;
width: 100%;
min-height : 400px;">


        <div class="text-block animated fadeIn"
            style=" position: absolute;
        bottom: 20px;
        right: 20px;
        background: rgba(0, 255,0, 0.4); 
        color: white;
        padding-left: 20px;
        padding-right: 20px;
        animation-delay:1s ">
            <blockquote style="font-size:20px"><i>
                    "Individually we are one drop, together we are an ocean”</i>
                <footer style="text-align:right;">
                    <i> – -Ryunosuke Satoro.</i>
                </footer>
            </blockquote>

        </div>
    </div>


    <div class="container">
        <br>
        <h6 class="text-center mt-4 mb-5">
            We cordially invite physicians, clinicians, academic
            researchers, scientists, genetic counselors, and
            volunteers to join the consortium and work together
            to better understand and treat patients with rare
            genetic diseases
        </h6>
        <h2 class="mt-4" style="color: gray;padding-bottom: 1em;">Support us by</h2>
        <div class="card mb-5">
            <div class="card-body" style="border: 1px solid black;">
                <ul class="mt-4 mb-4">
                    <h6>
                        <li> Helping to build a comprehensive repository of
                            rare genetic diseases and bone marrow failure
                            syndromes</li>

                        <li>Generating awareness of these diseases among
                            physicians, medical students, patients and their
                            families through-
                            <ul>
                                <li>
                                    Seminars, workshops and webinars
                                </li>
                                <li>Creating family support groups</li>
                            </ul>

                        </li>

                        <li>Fund raising: (through philanthropic donations,
                            organizing events etc)

                            <ul>
                                <li>To cover the cost of genetic testing for
                                    some patients</li>
                                <li>Fund short term high priority Research
                                    Projects</li>
                            </ul>

                        </li>

                        <li>Volunteering your time and expertise to help
                            further the mission of the consortium</li>
                    </h6>

                </ul>
            </div>
        </div>
    </div>
@endsection
