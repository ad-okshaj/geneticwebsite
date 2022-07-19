@extends('layouts.userlayout')
@section('hometitle')
    CRGBMD-RESOURCES
@endsection
@section('usercontent')
    <div class="parallaximg"
        style=" background-image: url('/images/abc.jpg');
background-attachment: fixed;
background-repeat: no-repeat;
background-size: cover;
background-position: center;
width: 100% !important;
min-height : 60vh;">
    </div>
    <section>
        <div id="about">
            <h2 class="text-center animated fadeInUp offset-3 mt-2" style="color: teal;animation-delay: 1s">Our Resources
            </h2>
        </div>
        <div class="container">
            <div class="row ">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-rgd-tab" data-toggle="pill" href="#v-pills-rgd"
                            role="tab" aria-controls="v-pills-rgd" aria-selected="false"
                            style="color:teal">Resources</a>
                        <a class="nav-link" id="v-pills-bmd-tab" data-toggle="pill" href="#v-pills-bmd" role="tab"
                            aria-controls="v-pills-bmd" aria-selected="true" style="color:teal">Lab-Equipment</a>
                        <a class="nav-link" id="v-pills-downloads1-tab" data-toggle="pill" href="#v-pills-downloads1"
                            role="tab" aria-controls="v-pills-downloads1" aria-selected="false"
                            style="color:teal">Zebrafish-Facility</a>
                        <a class="nav-link" id="v-pills-downloads-tab" data-toggle="pill" href="#v-pills-downloads"
                            role="tab" aria-controls="v-pills-downloads" aria-selected="false"
                            style="color:teal">Bio-Repository</a>
                    </div>
                </div>

                <div class="col-md-9 justify-content-center">
                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-rgd" role="tabpanel"
                            aria-labelledby="v-pills-resources-tab">

                            <div class="card-body " style="text-align:justify ">


                                <ul>
                                    <li>The CRG.BMD consortium is housed within the 30,000 sq ft NITTE University Centre
                                        for
                                        Science,
                                        Education and Research (NUCSER)</li>
                                    <li>All the equipment and facilities needed for our workflow are available to us at
                                        NUCSER
                                    </li>
                                    <li>CRG.BMD will have access to patients from the <a
                                            href="https://kshegdehospital.in/">Justice K S Hegde Charitable
                                            Hospital</a>, the teaching
                                        hospital
                                        associated
                                        with
                                        the K. S. Hegde Medical Academy, which is a constituent college of the NITTE
                                        (Deemed to
                                        be
                                        University) family of institutions.</li>
                                    <li>The K.S. Hegde Charitable Hospital is:<br>
                                        <ul>
                                            <li>A 1000 bed multi-specialty tertiary care hospital </li>
                                            <li>Offers patients expertise in 12 broad specialties, 13 super specialties
                                                and 4
                                                clinical
                                                support services </li>
                                            <li>Offers state-of-the-art facilities catering to all branches of medicine
                                                and
                                                surgery
                                            </li>
                                            <li>Serves as the tertiary care hospital to 21 primary and 4 secondary care
                                                hospitals
                                                spread
                                                across three districts of Karnataka and Kerala</li>
                                            <li>In addition we will have access to:<br>
                                                <ul>
                                                    <li>The state of the art Eye hospital</li>
                                                    <li>Blood Bank (24/7)</li>
                                                    <li>Department of Hematology/Oncology</li>
                                                    <li>Department of Community Medicine</li>
                                                    <li>Department of Public Health</li>
                                                </ul>
                                            </li>

                                        </ul>
                                    </li>
                                    <li>Patient samples and the accompanying clinical information will also be procured
                                        from our
                                        partners and collaborators</li>
                                </ul>
                            </div><br><br>
                        </div>
                        <div class="tab-pane fade" id="v-pills-bmd" role="tabpanel" aria-labelledby="v-pills-bmd-tab">
                            <div class='row'>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="img-thumbnail" src="/images/Lab1.JPG" alt="Card image cap"
                                            style="height:220px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="img-thumbnail" src="/images/Lab2.JPG" alt="Card image cap"
                                            style="height:220px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="img-thumbnail" src="/images/Lab equipment 3.jpg" alt="Card image cap"
                                            style="height:220px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="img-thumbnail" src="/images/Lab equipment 4.jpg" alt="Card image cap"
                                            style="height:220px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="img-thumbnail" src="/images/Lab equipment 5.jpg" alt="Card image cap"
                                            style="height:220px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="img-thumbnail" src="/images/Lab equipment 6.jpg" alt="Card image cap"
                                            style="height:220px">
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <div class="card w-100">
                                        <div class="card-header text-center">
                                            Lab Equipments
                                        </div>

                                        <div class="card-body">
                                            <p>The following Lab equipment, among others, is available for CRG.BMD use in a
                                                state of the art laboratory:</p>
                                            <ul>
                                                <li>Nanopore DNA Sequencer</li>
                                                <li>Real Time PCR machine (Bio Rad and ABI systems)
                                                </li>
                                                <li>
                                                    Droplet Digital PCR (Qx200, Bio Rad)
                                                </li>
                                                <li>
                                                    HPLC Analytical system (Waters)
                                                </li>
                                                <li>Liquid Nitrogen Storage Tanks
                                                </li>
                                                <li>-80oC/-200C Freezers
                                                </li>
                                                <li>Centrifuges (Eppendorf), including Ultracentrifuges (Optima XPN 100,
                                                    Beckman Coulter)</li>
                                                <li>
                                                    Laminar Flow hoods (Imported and Indigenous)
                                                </li>
                                                <li>
                                                    Biosafety Cabinets (Level II, Thermo)
                                                </li>
                                                <li>
                                                    CO2 incubators (Thermo)
                                                </li>
                                                <li>
                                                    Inverted Microscopes (Olympus)
                                                </li>
                                                <li>
                                                    PCR Machines (BioRad)
                                                </li>
                                                <li>
                                                    Gel Doc System (BioRad)
                                                </li>
                                                <li>
                                                    Inject Man (Eppendorf)
                                                </li>
                                                <li>
                                                    Fluorescent Microscopes (DM2500, Leica, BX51, Olympus)
                                                </li>
                                                <li>
                                                    Zoe Fluorescent Cell Imager (Bio Rad)
                                                </li>
                                                <li>Phase contrast Microscope (Radical Instruments)
                                                </li>
                                                <li>
                                                    Real Time PCR machine (Bio Rad and ABI systems)
                                                </li>
                                                <li>
                                                    Droplet Digital PCR (Qx200, Bio Rad)
                                                </li>
                                                <li>HPLC Analytical system (Waters)
                                                </li>
                                                <li>
                                                    Liquid Nitrogen Storage Tanks
                                                </li>
                                                <li>Centrifuges (Eppendorf), including Ultracentrifuges (Optima XPN 100,
                                                    Beckman Coulter)
                                                </li>
                                                <li>Laminar Flow hoods (Imported and Indigenous)</li>
                                                <li>Biosafety Cabinets (Level II, Thermo)</li>
                                                <li>CO2 incubators (Thermo)</li>
                                                <li>Inverted Microscopes (Olympus)
                                                </li>
                                                <li>
                                                    Fluorescent Microscopes (DM2500, Leica, BX51, Olympus)
                                                </li>
                                                <li>Zoe Fluorescent Cell Imager (Bio Rad)
                                                </li>
                                                <li>Phase contrast Microscope (Radical Instruments)
                                                </li>
                                            </ul>
                                            <p>We also have access to a Beckman Coulter FACS machine</p>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-downloads1" role="tabpanel"
                            aria-labelledby="v-pills-downloads1-tab">
                            <div class='row'>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="img-thumbnail" src="/images/Zebrafish 2.jpg" alt="Card image cap"
                                            style="height:220px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="img-thumbnail" src="/images/Zebra fish 4.jpg" alt="Card image cap"
                                            style="height:220px">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <img class="img-thumbnail" src="/images/Zebra fish 3.jpg" alt="Card image cap"
                                            style="height:220px">
                                    </div>
                                </div>
                            </div><br>
                            <div class="container-fluid">
                                <h2 class="text-center animated fadeInUp " style="color: teal;animation-delay: 1s">
                                    Zebra fish facility
                                </h2>
                                <div class="card-body" style="text-align:justify">
                                    The Zebrafish facility is housed in NUCSER and is designed to model rare genetic human
                                    diseases in a zebrafish model.<br>
                                    <ul>
                                        <li>The zebrafish facility comprises a completely automated, state- of- the- art
                                            re-circulatory system imported from Tecniplast, Italy. The unit involves a
                                            multilinking system capable of housing zebrafish in different sizes of tanks
                                            ranging from 1.1 litres to 3.5 litres capacity with an automated water treatment
                                            unit, that includes a fine mechanical filter, carbon filtration and high UV
                                            disinfection. </li>
                                        <li>
                                            The current facility has two multilinking racks with 6 tiers each capable of
                                            accommodating 120 rearing tanks
                                        </li>
                                        <li>The facility presently houses wildtype as well as a variety of transgenic and
                                            mutant zebrafish lines. </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="v-pills-downloads" role="tabpanel"
                            aria-labelledby="v-pills-downloads-tab">
                            <img class="img-thumbnail" src="/images/Resources 4.jpg" alt="Card image cap"
                                style="height:50vh;width:100vw"><br><br>
                            <h2 class="text-center animated fadeInUp " style="color: teal;animation-delay: 1s">
                                CRG.BMD Biorepository
                            </h2>
                            <div class="container-fluid">
                                <div class="card-body" style="text-align:justify">
                                    <ul>
                                        <li>The CRG>BMD bio-repository has been planned as a best practice
                                            operative.<b>
                                                Informed consent
                                                for collection of all bio-specimens will be obtained (see
                                                Documents and MoU)
                                                according the
                                                the Study Protocol previously approved by the IRB of NITTE DU,
                                                or the
                                                Institution/Hospital
                                                where samples will be collected</b></li>
                                        <li>With bio-specimen collection ongoing for rare genetic and bone
                                            marrow failure
                                            syndromes, the following patient samples will be bar-coded and
                                            archived for
                                            analysis:<br>
                                            <ul>
                                                <li>Blood</li>
                                                <li>Genomic DNA</li>
                                                <li>Total RNA</li>
                                            </ul>
                                        </li>
                                        <li>
                                            All barcoded specimens will be stored in a specific traceable
                                            location in a
                                            specifically designated -80 deg C freezer
                                        </li>
                                        <li>
                                            The Privacy of each patient will be strictly maintained
                                        </li>
                                        <li>Sample specimens will be shared with collaborators responsible for
                                            depositing
                                            the samples in the CRG.BMD Bio-repository, upon written request</li>
                                        <li>Samples requested by other Researchers will need approval from
                                            CRG.BMD as well
                                            as Collaborators responsible for depositing the sample in the
                                            CRG.BMD
                                            Bio-Repository</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
    </section>
@endsection
