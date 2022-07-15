@extends('layouts.userlayout')
@section('hometitle')
    CRGBMD-ABOUT
@endsection
@section('usercontent')
    <div class=""
        style=" background: url('images/building.jpg');
background-attachment: fixed;
background-repeat: no-repeat;
background-size: cover;
background-position: bottom;
position:relative;
width: 100%;
height : 60vh;">
    </div>

    <!--main-->
    <section>
        <div id="about">
            <h2 class="text-center animated fadeInUp" style="color:teal;animation-delay:">About Us</h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-about"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false"
                            style="color:teal">About</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-goals" role="tab"
                            aria-controls="v-pills-profile" aria-selected="false" style="color:teal">Goals
                            and Objectives</a>
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-focus" role="tab"
                            aria-controls="v-pills-home" aria-selected="true" style="color:teal">DISEASES TO BE
                            CONSIDERED</a>
                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-du" role="tab"
                            aria-controls="v-pills-home" aria-selected="true" style="color:teal">About
                            Nitte-DU</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-collaborators"
                            role="tab" aria-controls="v-pills-settings" aria-selected="false"
                            style="color:teal">Collaborators and partners</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-Funding"
                            role="tab" aria-controls="v-pills-settings" aria-selected="false" style="color:teal">Funding
                            Sources</a>
                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-Founder"
                            role="tab" aria-controls="v-pills-settings" aria-selected="false"
                            style="color:teal">Founders</a>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" id="v-pills-about" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <ul style="text-align:justify">
                                <p style="text-align:justify">
                                    The CRG.BMD consortium is a not-for-profit organization which has been recently
                                    established
                                    (November 2019) at NITTE DU (deemed to be University) following receipt of a seed grant
                                    from
                                    NITTE-DU and is currently housed at NUCSER (Nitte University Center for Science
                                    Education and Research) in Mangalore.
                                </p>
                                <p style="text-align:justify">
                                    Most physicians in India are overwhelmed with clinical responsibilities and find little
                                    time to
                                    research questions of clinical and scientific interest to them and their patients,
                                    leaving many
                                    relevant questions unanswered. The CRG.BMD consortium could address this unmet need and
                                    help to bridge the critical gap between the Indian clinic and the bench.
                                </p>
                                <p style="text-align:justify">
                                    The eventual goal of the consortium is to understand the prevalence, etiology and
                                    molecular
                                    underpinnings of selected rare genetic and bone marrow disorders and through
                                    collaborations
                                    and rigorous scientific enquiry, to identify therapeutic options for patients
                                </p>

                            </ul>
                        </div>

                        <div class="tab-pane fade show" id="v-pills-goals" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <ul style="text-align:justify">
                                <img src="{{ asset('/images/goals.png') }}" class="img-thumbnail">
                                <br><br>
                                <h6>Our specific goals are:</h6>
                                <li>To generate a simple seamless platform to facilitate the interaction between interested
                                    clinicians
                                    and scientists to address clinical and scientific questions pertaining to selected rare
                                    genetic and
                                    bone marrow failure syndromes </li><br>
                                <li>To utilize genetic analysis, including Next Gen Sequencing, to identify disease causing
                                    DNA
                                    variants from samples obtained from patients with selected rare diseases</li><br>
                                <li>To establish a patient database with a sample repository to provide information on the
                                    incidence
                                    and prevalence of these rare diseases in India, which, could influence Public Health
                                    planning
                                    decisions by the government.</li><br>
                                <li>To model selected disease causing variants (mutations) in zebrafish and to use the
                                    zebrafish
                                    models to a) functionally analyze the disease causing variant and b) to screen small
                                    molecule
                                    and natural compound libraries to reverse the disease phenotype (symptoms) in the
                                    zebrafish
                                    model, thereby providing pre-clinical drug options for further scrutiny.</li><br>
                                <li>Our findings will be published with our collaborators with shared authorship and
                                    ownership of archived patient samples. </li><br>
                                <li>All physicians will be invited to actively participate in the design of the
                                    study that will ensue following sample collection. We believe that the input
                                    of the physician is vital to any study that will impact the patient in the long
                                    run.</li><br>
                                <li>All initiatives will be funded through a) Grants from the Govt of India b) Grants from
                                    private
                                    Foundations c) Private donors d) Pharmaceutical companies e) other sources</li><br>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="v-pills-du" role="tabpanel" aria-labelledby="v-pills-home-tab">
                            <div class="text-center">
                                <iframe class=" youtube" width="520" height="245"
                                    src="https://www.youtube.com/embed/OeZXXC57Xew" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div><br><br>
                            <p style="text-align:justify">Nitte (Deemed to be University) has been established by Nitte
                                Education Trust, which has in
                                its fold 36 institutions spread on 3 campuses at Nitte, Mangalore and Bangalore.
                                A centre of excellence in education and community service in Karnataka State, Nitte Health
                                Care institutions are duly recognized by the Government of India.
                                Nitte (Deemed to be University) was established in the year 2008 vide MHRD Notication No.
                                F.9-13/2007-U.3(A) dated 4th June, 2008.
                                The University has been accredited by NAAC with 'A' Grade with 3.11 CGPA in October 2013
                                vide order No. F.NAAC/DS/RK/65EC-71/2013 dated October 26, 2013 and placed under category
                                'A' by the Ministry of Human Resource Development, Govt. of India vide letter
                                No.F.9-26/2009-U.3(A)(Vol.5) dated 19-10-2012.
                                The NIRF has ranked Nitte (Deemed to be University) as 70th amongst 907 Universities of the
                                country in 2019.
                                Nitte (Deemed to be University) has been awarded “Diamond” rating by QS I-GAUGE Indian
                                University Ratings.<br><br>
                                NitteDU is the first Institution in Karnataka to achieve this distinction. All the
                                constituent institutions, namely, K. S. Hegde Medical Academy (KSHEMA), A. B. Shetty
                                Memorial Institute of Dental Sciences (ABSMIDS), Nitte Gulabi Shetty Memorial Institute of
                                Pharmaceutical Sciences (NGSMIPS), Nitte Usha Institute of Nursing Sciences (NUINS), Nitte
                                Institute of Physiotherapy (NIPT), Nitte Institute of Architecture (NIA), Nitte University
                                Centre for Science Education & Research (NUCSER) and Nitte Institute of Communication (NICO)
                                are housed in independent buildings with the best of infrastructure and amenities and are
                                located on a sprawling campus of over 50 acres at Deralakatte and Paneer, Mangalore.
                                One of the unique features of this university is the concept of giving back to the society
                                through the extensive network of 21 rural health centres and 3 rural hospitals spread across
                                5 districts of two states, where more than 2.5 million people are provided with free health
                                care annually. </p>
                            <a href="http://nitte.edu.in/">FOR MORE INFORMATION CLICK HERE</a><br>
                            <br>
                            <h5 style="color:teal">Why NITTE as a center for the consortium ?</h5>

                            <p style="text-align: justify">The following are sound reasons as to why the consortium
                                should be set up at
                                NITTE</p>
                            <ul style="text-align: justify">
                                <li>NITTE is a neutral venue for the consortium involving a number of Medical
                                    Centers in Southern India and has a great reputation
                                    of a University striving towards exellence in medical research and teaching.
                                </li><br>
                                <li>Availability of patient samples from the super speciality hospital
                                    associated with the University and also from other medical
                                    colleges and the associated hospitals in and around Mangalore.</li><br>
                                <li>Available infrastructure and resources with state of the art research
                                    facilties in the centre for science education and research
                                    (NUCSER) and a stem cell and regenerative medicine centre involved in HSC
                                    research (NUCSEReM).</li><br>
                                <li>Faculty of International repute with years of expertise in the area of rare genetic
                                    disorders, particularly in acrofacial dystoses and bone marrow failure syndromes
                                </li><br>

                            </ul>
                            <div class="row justify-content-center ">
                                <h2 class="heading pl-3 " style="color:teal">
                                    Recognition/Accreditation
                                </h2>
                            </div>
                            <br><br>
                            <div class="row justify-content-center">
                                <br><br>
                                <div class="col ml-2 text-center">

                                    <a href="https://nitte.edu.in"><img class="card-img-top"
                                            src="{{ asset('/images/nirf.jpg') }}" alt="Card image cap"
                                            style="height:150px;width:150px;"></a>
                                </div>
                                <div class="col ml-2 text-center">
                                    <a href="https://nitte.edu.in"><img class="card-img-top mt-3"
                                            src="{{ asset('/images/qs.jpg') }}" alt="Card image cap"
                                            style="height:150px;width:150px"></a>
                                </div>
                                <div class="col ml-2 text-center">
                                    <a href="https://nitte.edu.in"><img class="card-img-top mt-3"
                                            src="{{ asset('/images/qsrank.jpeg') }}" alt="Card image cap"
                                            style="height:150px;width:150px"></a>
                                </div>
                            </div><br><br>
                        </div>
                        <div class="tab-pane fade" style="text-align: justify" id="v-pills-focus" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <h5 style="color:teal;">
                                Diseases to be considered
                            </h5><br>

                            <p>
                                At CRG.BMD, our focus will be on, but not limited to, two specific categories of genetic
                                diseases:
                            </p>
                            <p>
                            <h6>A) Rare Genetic Disorders:</h6>
                            Syndromic orofacial distoses (FND, OAVS) Acrofacial dystoses /Mandibulofacial dystoses (TCS,
                            AFDCIN, AFD1, MFDGA), Elastic fibre and connective tissue diseases (Marfan syndrome, Cutis
                            Laxa, ATS, PXE, FOP, EDS ) Bone disorders (OI) Eye disorders (RI, Stargardt disease, LCA,
                            ACHM)
                            </p>
                            <p>
                            <h6>B) Bone Marrow Failure Syndromes (inherited and acquired).</h6>
                            Fanconi anemia, Dyskeratosis congenita, Diamond Blackfan Anemia,Shwachman-Diamond
                            syndrome, Severe Congenital Neutropenia,Congenital amegakaryocytic thrombocytopenia
                            Aplastic anemia, Paroxsymal nocturnal hemoglobinura, Myelodysplastic syndromes
                            </p>
                            <p>
                                These categories have been chosen as a start because the Co-founders and members of our
                                govern
                                boards have proven expertise in each of these diseases.<b></b>
                            </p>
                        </div>


                        <div class="tab-pane fade" style="text-align: justify" id="v-pills-collaborators"
                            role="tabpanel" aria-labelledby="v-pills-settings-tab">
                            <h5>Collaborators and partners</h5><br>
                            <p style="color:teal">Clinicians and Scientists at NITTE DU</p>
                            <p>
                            <ul style="text-align: justify">
                                <li><b>Dr Rathika Shenoy</b>, Professor, Dept. of Pediatrics, KSHEMA</li>
                                <li><b>Dr Vijith Shetty</b>, Assistant Professor, Dept. of Medical Oncology, KSHEMA</li>
                                <li><b>Dr Sunil Kumar Y</b>, Additional Professor, Dept. of Pathology, KSHEMA</li>
                                <li><b>Dr Mohan Kumar</b>, Associate Professor, NUCSEReM</li>
                            </ul>
                            </p>
                            <p style="color:teal">Collaborators from other institutes</p>
                            <p>
                            <ul style="text-align: justify">
                                <li><b>Dr Sujata Mohanty</b>, Professor, Stem Cell Facility, AIIMS, New Delhi</li>
                                <li><b>Dr Sheela Nampoothiri</b>, Professor, Dept. of Pediatrics, Amrita School of
                                    Medicine, Kochi</li>
                                <li><b> Dr Lakshmi B R</b>, Founder, MDCRC, Coimbatore, India</li>
                                <li><b>Dr Ph Madhubala Devi</b>, Professor & HoD, Department of Pediatrics and
                                    Pathology, Regional Institute of Medical Sciences, Manipur, India</li>
                                <li><b>Dr Harsha Prasad L</b>, Pediatric Hematologist and Oncologist, KMC, Mangalore.
                                </li>
                            </ul>
                            </p>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Founder" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <h5>
                                <p style="color:teal"> Founders</p>
                            </h5><br>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <p style="text-align: justify">
                                                <b>Dr. Anirban Chakraborty</b>, PhD<br>
                                                Professor and Deputy Director,<br>
                                                Nitte University Centre for Science
                                                Education &amp; Research<br>
                                                P.O Deralakatte, Mangalore - 575018
                                                <b>Website:</b> nucser.nitte.edu.in<br>
                                                <b>Email:</b> anirban@nitte.edu.in
                                                <br>
                                                <br><br>
                                            </p>
                                            <img src="images/image10.jpg" style="width:250px;height:250px">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="card">
                                        <div class="card-body">
                                            <p style="text-align: justify">
                                                <b>Dr.Arati Khanna-Gupta,</b>, PhD<br>
                                                Consultant in Precision Medicine<br>
                                                (Hematology, Oncology and Bone Marrow Failures)<br>
                                                CEO, SriGene LLC<br>
                                                Ex Assistant Professor of Medicine, Harvard Medical School, Boston, USA<br>
                                                <b>Email:</b> arati1239@gmail.com<br><br>
                                            </p>
                                            <img src="images/imageA.jpg" style="width:250px;height:250px">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="v-pills-Funding" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            {{-- <h5>Funding sources for the set up of the consortium</h5><br> --}}
                            <p>
                            <ul style="text-align: justify">
                                <li>Initial funding (Seed Grant) would be from Nitte (Deemed to be University)</li>
                                <li>Other sources of funding could include</li>
                                <ul style="text-align: justify">
                                    <li>Government Funding Agencies including Indian Council of Medical Research
                                        (ICMR),
                                        Department of Biotechnology
                                        (DBT), Department of Science and Technology (DST)</li>
                                    <li>Private Foundations</li>
                                    <li>International Foundations</li>
                                </ul>
                                <li>Donations from Philanthropists and other nonprofit organizations</li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--parallax-->
    <div class=""
        style="background: url(/images/Image-5.jpg); background-attachment: fixed; background-repeat: no-repeat;
    background-size: cover; background-position: center; position:relative; width: 100%; min-height : 60vh; opacity:
    0.6;">
        <div class="caption" style="color:crimson !important">
            <span class="border" style="background-color:transparent;font-size:25px;color: black;font-weight: bold">OUR
                TEAM</span>
        </div>
    </div>
    <section>
        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="ad-tab" data-toggle="tab" href="#ad" role="tab"
                    aria-controls="ad" aria-selected="false">ADVISORY COMMITTEE</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="sc-tab" data-toggle="tab" href="#sc" role="tab" aria-controls="sc"
                    aria-selected="false">SCIENTIFIC COMMITTEE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " id="mg-tab" data-toggle="tab" href="#mg" role="tab" aria-controls="mg"
                    aria-selected="true">MANAGING COMMITTEE</a>
            </li>

        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade " id="mg" role="tabpanel" aria-labelledby="mg-tab">
                <div class="row">
                    @foreach ($mg as $member)
                        <div class="col-md-3">
                            <div class="card" style="min-height:350px;width:200px;">
                                <img class="card-img-top rounded" src="/download/{{ $member->photo }}"
                                    alt="Card image cap" style="height:220px">
                                <h5 class="text-center">{{ $member->name }}</h5>
                                <p class="text-center">{{ $member->position }}</p>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#team{{ $member->id }}">
                                        Know More
                                    </button>
                                </div>
                                <div class="modal fade" id="team{{ $member->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class=" text-center"><b>{{ $member->name }}</b>
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card offset-sm-3"
                                                    style="height:260px !important;width:260px !important">
                                                    <div class="card-img-top">
                                                        <div class="text-center">
                                                            <img class=" text-center"
                                                                src="/download/{{ $member->photo }}"
                                                                style="height:250px !important;width:250px !important"
                                                                alt="Card image cap">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <p style="color:darkblue"><b>Affiliation: </b>{{ $member->affiliation }}
                                                </p>
                                                <p style="color:darkblue"><b>Designation: </b>{{ $member->designation }}
                                                </p>
                                                <p style="color:darkblue"><b>Position: </b>{{ $member->position }}</p>
                                                <p style="color:darkblue"><b>Email: </b>{{ $member->email }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>


            <div class="tab-pane fade show active" id="ad" role="tabpanel" aria-labelledby="ad-tab">

                <div class="row">
                    @foreach ($ad as $member)
                        <div class="col-md-3">

                            <div class="card" style="min-height:350px;width:200px;">
                                <img class="card-img-top rounded" src="/download/{{ $member->photo }}"
                                    alt="Card image cap" style="height:220px">
                                <h5 class="text-center">{{ $member->name }}</h5>
                                <p class="text-center">{{ $member->position }}</p>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#team{{ $member->id }}">
                                        Know More
                                    </button>
                                </div>
                                <div class="modal fade" id="team{{ $member->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="text-center" style="color:darkblue"><b>{{ $member->name }}</b>
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card offset-sm-3"
                                                    style="height:260px !important;width:260px !important">
                                                    <div class="text-center">
                                                        <div class="card-img-top">
                                                            <img class=" text-center"
                                                                src="/download/{{ $member->photo }}"
                                                                style="height:250px !important;width:250px !important"
                                                                alt="Card image cap">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <p style="color:darkblue"><b>Affiliation: </b>{{ $member->affiliation }}
                                                </p>
                                                <p style="color:darkblue"><b>Designation: </b>{{ $member->designation }}
                                                </p>
                                                <p style="color:darkblue"><b>Position: </b>{{ $member->position }}</p>
                                                <p style="color:darkblue"><b>Email: </b>{{ $member->email }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="sc" role="tabpanel" aria-labelledby="sc-tab">

                <div class="row">
                    @foreach ($sc as $member)
                        <div class="col-md-3">

                            <div class="card " style="min-height:350px;width:200px;">
                                <img class="card-img-top rounded" src="/download/{{ $member->photo }}"
                                    alt="Card image cap" style="height:220px">
                                <h5 class="text-center">{{ $member->name }}</h5>
                                <p class="text-center">{{ $member->position }}</p>
                                <div class="text-center">
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#team{{ $member->id }}">
                                        Know More
                                    </button>
                                </div>
                                <div class="modal fade" id="team{{ $member->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class=" text-center" style="color:darkblue">
                                                    <b>{{ $member->name }}</b>
                                                </h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card"
                                                    style="height:260px !important;width:260px !important">
                                                    <div class="card-img-top">
                                                        <div class="text-center">
                                                            <img class=" text-center"
                                                                src="/download/{{ $member->photo }}"
                                                                style="height:250px !important;width:250px !important"
                                                                alt="Card image cap">
                                                        </div>
                                                    </div>
                                                </div><br>
                                                <p style="color:darkblue"><b>Affiliation: </b>{{ $member->affiliation }}
                                                </p>
                                                <p style="color:darkblue"><b>Designation: </b>{{ $member->designation }}
                                                </p>
                                                <p style="color:darkblue"><b>Position: </b>{{ $member->position }}</p>
                                                <p style="color:darkblue"><b>Email: </b>{{ $member->email }}</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                </div>
            </div>

    </section>
@endsection
