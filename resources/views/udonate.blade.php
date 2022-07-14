@extends('layouts.userlayout')
@section('hometitle')
    CRGBMD-DONATE
@endsection
@section('usercontent')
    <div class="container mt-3 mb-3">
        <h2 class="mt-4" style="color: gray;padding-bottom: 1em; text-align:center;">Donate</h2>

        <div class="card">
            <div class="card-body">
                <h4 class="text-center" style="font-style: oblique;color:grey">" The value of a man resides in what he gives
                    "
                </h4>
                <div class="text-center">
                    <span class="text-center">- Albert Einstein</span>
                </div>


                <p style="text-align: justify" class="pt-5">
                    Help us to address the predicament and morbidity that Rare diseases and Bone marrow Failure Disorders
                    present,
                    through
                    Science, with the aim of restoring hope and life to patients and their families!</p>

                <p style="text-align: justify">
                    Rare diseases are often a neglected set of disorders, as both governments and pharmaceutical companies
                    are
                    burdened with
                    funding the more commonly occurring diseases in all communities of the world. Funding from all available
                    sources
                    must
                    therefore be sought if progress towards a cureof these rare conditions is to be achieved.
                </p>

                <p style="text-align: justify">
                    Your donations could be used towards:
                <ul>
                    <li>
                        Collecting and transporting patient samples to CRG.BMD from all over India
                    </li>
                    <li>
                        Our precision medicine initiative: Help to determine the causative DNA mutations in the patient
                        through
                        Next Generation
                        Sequencing methods, which could help identify specific therapeutic measures for the patient
                    </li>
                    <li>
                        Fund research programs designed to unravel the biology underlying rare genetic conditions
                    </li>
                    <li>
                        Fund studies on specific Rare Diseases and Bone Marrow Failure Disorders
                    </li>
                    <li>
                        Donation in the name of a cherished family member or foundation
                    </li>
                </ul>
                </p>

                <p style="text-align: justify">
                    Your kindness and generosity will pave the way to a brighter future for afflicted patients, especially
                    children.
                </p>

                <p style="text-align: justify">To donate to CRG.BMD Please click on the <span class="h6">DONATE</span>
                    button</p>
                <div class="text-center">
                    <a href="/donate_form/create" class="btn btn-outline-primary">Donate</a>
                </div>
            </div>
        </div>
    </div>
@endsection
