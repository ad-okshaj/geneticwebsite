@extends('layouts.userlayout')
@section('hometitle')
    CRGBMD-RGD & BMD
@endsection
@section('usercontent')
    <div class="parallax"
        style="background: url(images/about.jpg);
background-attachment: fixed;
background-repeat: no-repeat;
background-size: cover;
background-position: bottom;
position:relative;
width: 100%;
min-height : 60vh;">
    </div>

    <!--main-->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <a class="nav-link active mt-5" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                            role="tab" aria-controls="v-pills-profile" aria-selected="false" style="color:teal">About
                            Rare
                            Genetic Disorders</a>

                        <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-about" role="tab"
                            aria-controls="v-pills-home" aria-selected="true" style="color:teal">About Bone Marrow Failure
                            Syndromes</a>

                        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-collaborators"
                            role="tab" aria-controls="v-pills-settings" aria-selected="false" style="color:teal">Focused
                            Conditions</a>

                        {{-- <a class="nav-link" id="v-pills-settings-tab2" data-toggle="pill" href="#v-pills-Funding" role="tab"
                        aria-controls="v-pills-settings" aria-selected="false" style="color:teal">Need for consortium
                    </a> --}}
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="tab-content" id="v-pills-tabContent">

                        <div class="tab-pane fade show active" style="text-align:justify" id="v-pills-profile"
                            role="tabpanel" aria-labelledby="v-pills-profile-tab">
                            <h2 class="text-center animated fadeInUp"
                                style="color:teal ;animation-delay: 0.5s;padding-bottom:2rem">About Rare Genetic
                                Disorders(RGD)</h2>
                            <p>
                                <q style="font-weight: bold; font-style: italic">Just because a disease affects a small
                                    number of people does not make it
                                    irrelevant or less important than diseases that affect millions.</q><br>
                                <small style="float: right">
                                    -Tedros Adhanom Ghebreyessus
                                    World health Organization ( WHO) Director- General
                                </small>
                                <br><br>
                            <ul style="text-align: justify">
                                <li>
                                    No Universal definition of a Rare Disease exists; among the definitions, the WHO
                                    considers a
                                    disease to be rare if it has a prevalence of less than 1 per 1000 individuals in the
                                    population
                                </li>
                                <li>
                                    Over 300 million people worldwide are estimated to be afflicted with a rare disease,
                                    of which 70-
                                    90 million reside in India
                                </li>
                                <li>
                                    <a href="https://rarediseases.org/">NORD</a> and <a
                                        href="https://globalgenes.org/rare-list/">RARE LIST</a> are important databases
                                    that maintain comprehensive lists of rare
                                    diseases identified to date.
                                </li>
                                <li>
                                    Approximately 80 percent of these rare disorders are genetic in origin, being
                                    monogenic or
                                    polygenic, and 95 percent of them do not have any FDA approved treatment.
                                </li>
                                <li>
                                    The need to understand and study these disorders in a systematic manner, eventually
                                    leading to
                                    the development of new therapeutics is therefore vital and of critical relevance.
                                </li>
                            </ul>
                            </p>
                        </div>

                        <div class="tab-pane fade" style="text-align:justify" id="v-pills-about" role="tabpanel"
                            aria-labelledby="v-pills-home-tab">
                            <h2 class="text-center animated fadeInUp"
                                style="color:teal ;animation-delay: 0.5s;padding-bottom:2rem">About Bone Marrow Failure
                                Syndromes(BMFSs)</h2>
                            <p>
                            <ul style="text-align: justify">
                                <li>
                                    Bone Marrow Failure symdromes (BMFS) are a class of rare genetic disorders wherein
                                    genetic
                                    defects in the stem cells within the bone marrow lead to a deficit in the production
                                    of one or more
                                    essential blood cells.
                                </li>
                                <li>
                                    The clinical manifestations of BMFs vary depending on the type and number of blood
                                    cell
                                    lineages that may be involved, leading to anemia (loss of red blood cells),
                                    neutropenia (lack of
                                    neutrophils) and/or thrombocytopenia (lack of megakaryocytes/ platelets).
                                </li>
                                <li>
                                    Several BMFS are also known to present with non-hematologic manifestations,
                                    including
                                    craniofacial, genitourinary, cardiac and limb abnormalities as well as developmental
                                    delays. Short
                                    stature, darkening of skin, bone abnormalities and heart defects are also
                                    encountered
                                </li>
                                <li>
                                    In addtiion, the patients are often predisposed to developing cancers, including
                                    myelodysplastic
                                    syndrome (MDS) and acute leukemia, (mainly of myeloid type (AML)), as well as solid
                                    tumors
                                </li>
                                <li>
                                    Even though significant strides have been made in our understanding of BMF syndromes
                                    in
                                    recent years, more work needs to be done to gain a better understanding of these
                                    syndromes
                                    which could lead to improved clinical therapies and outcomes.
                                </li>
                                <li>
                                    Very few studies on BMFS have been conducted in India
                                </li>
                                <li>
                                    Information on the etiology and genetic basis of BMFS in the Indian context remains
                                    unexplored
                                    needs to be addressed
                                </li>

                            </ul>

                            </p>
                        </div>

                        <div class="tab-pane fade" id="v-pills-collaborators" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <h2 class="text-center animated fadeInUp"
                                style="color:teal ;animation-delay: 0.5s;padding-bottom:2rem">The list of diseases to be
                                examined (but are not limited to) will include the following</h2>
                            <div id="rgd">
                                <h4 class="text-center" style="color:teal">Rare Genetic Disorders</h4>
                                <div class="row">
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <h5 class="text-center" style="color:crimson"><b>Syndromic orofacial
                                                    dysostoses</b></h5>
                                            <ul style="color:orange">
                                                <li><a href="https://rarediseases.org/rare-diseases/frontonasal-dysplasia/"
                                                        style="color:darkblue">Frontonasal dysplasia (FND)</a><br>
                                                <li><a href="https://rarediseases.org/rare-diseases/oculo-auriculo-vertebral-spectrum/"
                                                        style="color:darkblue">Oculo-Auriculo Vertebral Spectrum
                                                        (OAVS)</a><br>
                                                <li><a href="https://rarediseases.info.nih.gov/diseases/498/nager-acrofacial-dysostosis"
                                                        style="color:darkblue">Acrofacial dystoses </a><br>
                                                <li><a href="https://rarediseases.org/rare-diseases/treacher-collins-syndrome/"
                                                        style="color:darkblue">Treacher Collins Syndrome (TCS) </a><br>
                                                <li> <a href="https://omim.org/entry/616462"
                                                        style="color:darkblue">Acrofacial Dysostosis, Cincinnati Type
                                                        (AFDCIN) </a><br>
                                                <li><a href="https://www.omim.org/entry/154400"
                                                        style="color:darkblue">Acrofacial Dysostosis 1, Nager Type (AFDI)
                                                    </a><br>
                                                <li> <a href="https://www.omim.org/entry/610536"
                                                        style="color:darkblue">Mandibulofacial Dysostosis, Guion-Almeida
                                                        Type (MFDGA)</a><br>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <h5 class="text-center" style="color:crimson"><b>Elastic fibre and
                                                    connective tissue diseases</b></h5>
                                            <ul style="color:orange">
                                                <li><a href="https://rarediseases.org/rare-diseases/marfan-syndrome/"
                                                        style="color:darkblue">Marfan syndrome </a></li>
                                                <li><a href="https://rarediseases.org/rare-diseases/cutis-laxa/"
                                                        style="color:darkblue">Cutis Laxa </a></li>
                                                <li><a href="https://rarediseases.org/rare-diseases/arterial-tortuosity-syndrome/"
                                                        style="color:darkblue">Arterial Tortuosity Syndrome (ATS) </a>
                                                </li>
                                                <li><a href="https://rarediseases.org/rare-diseases/pseudoxanthoma-elasticum-pxe/"
                                                        style="color:darkblue">Pseudoxanthoma Elasticum (PXE)</a> </li>
                                                <li><a href="https://rarediseases.org/rare-diseases/fibrodysplasia-ossificans-progressiva/"
                                                        style="color:darkblue">Fibrodysplasia Ossificans Progressiva (FOP)
                                                    </a></li>
                                                <li><a href="https://rarediseases.org/rare-diseases/ehlers-danlos-syndrome/"
                                                        style="color:darkblue">Ehlers Danlos Syndromes (EDS)</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <h5 class="text-center" style="color:crimson"><b>Bone & Eye disorders</b>
                                            </h5>
                                            <ul style="color:orange">
                                                <li><a href="https://rarediseases.org/rare-diseases/osteogenesis-imperfecta/"
                                                        style="color:darkblue">Osteogenesis imperfect (OI) </a> </li>
                                                <li><a href="https://rarediseases.org/rare-diseases/retinitis-pigmentosa/"
                                                        style="color:darkblue">Retinitis Pigmentosa (RP) </a></li>
                                                <li><a href="https://rarediseases.info.nih.gov/diseases/181/stargardt-disease"
                                                        style="color:darkblue">Stargardt disease </a></li>
                                                <li><a href="https://rarediseases.org/rare-diseases/leber-congenital-amaurosis/"
                                                        style="color:darkblue">Leber Congenital Amaurosis (LCA) </a> </li>
                                                <li><a href="https://rarediseases.org/gard-rare-disease/9649/achromatopsia-2/"
                                                        style="color:darkblue">Achromatopsia 2 (ACHM2) </a></li>
                                                <li><a href="https://rarediseases.org/gard-rare-disease/9650/achromatopsia-3/"
                                                        style="color:darkblue">Achromatops3 (ACHM3)</a> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <h4 class="text-center" style="color:teal">Bone Marrow Disorders</h4>
                                <div class="row">

                                    <div class="card w-100">
                                        <div class="card-body">
                                            <h5 class="text-center" style="color:crimson"><b>Inherited BMD</b></h5>
                                            <ul style="color:orange">
                                                <li><a href="https://ghr.nlm.nih.gov/condition/fanconi-anemia"
                                                        style="color:darkblue">Fanconi Anaaemia (FA) </a> </li>
                                                <li><a href="https://ghr.nlm.nih.gov/condition/dyskeratosis-congenita"
                                                        style="color:darkblue">Dyskeratosis congenital (DC) </a></li>
                                                <li><a href="https://ghr.nlm.nih.gov/condition/shwachman-diamond-syndrome"
                                                        style="color:darkblue">Shwachman-Diamond syndrome (SDS) </a></li>
                                                <li><a href="https://ghr.nlm.nih.gov/condition/severe-congenital-neutropenia#inheritance"
                                                        style="color:darkblue">Severe Congenital Neutropenia (SCN) </a>
                                                </li>
                                                <li><a href="https://rarediseases.info.nih.gov/diseases/640/congenital-"
                                                        style="color:darkblue">Congenital amegakaryocytic thrombocytopenia
                                                        (CAT) </a></li>
                                                <li><a href="https://ghr.nlm.nih.gov/condition/diamond-blackfan-anemia"
                                                        style="color:darkblue">Diamond-Blackfan anemia</a>
                                                </li>
                                                <li><a href="https://ghr.nlm.nih.gov/condition/severe-congenital-neutropenia"
                                                        style="color:darkblue">Severe Congenital Neutropenia
                                                        (SCN)</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="card w-100">
                                        <div class="card-body">
                                            <h5 class="text-center" style="color:crimson"><b>Acquired BMD</b></h5>
                                            <ul style="color:orange">
                                                <li><a href="https://rarediseases.info.nih.gov/diseases/5836/aplastic-anemia"
                                                        style="color:darkblue">Aplastic anemia (AA) </a> </li>
                                                <li><a href="https://ghr.nlm.nih.gov/condition/paroxysmal-nocturnal-hemoglobinuria"
                                                        style="color:darkblue">Paroxsymal nocturnal hemoglobiinura (PNH)
                                                    </a></li>
                                                <li><a href="https://rarediseases.org/rare-diseases/myelodysplastic-syndromes/"
                                                        style="color:darkblue">Myelodysplastic syndrome (MDS) </a></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                {{-- <div class="row">

                                <div class="card w-100">
                                    <div class="card-body">
                                        <h5 class="text-center" style="color:crimson"><b>Five types of MDS</b></h5>
                                        <ul style="color:orange">
                                            <li><a href="https://www.enerca.org/anaemias/99/refractory-anaemia-"
                                                    style="color:darkblue">Refractory anemia (RA) </a> </li>
                                            <li><a href="https://rarediseases.info.nih.gov/diseases/8249/sideroblastic-anemia-pyridoxine-refractory-autosomal-recessive"
                                                    style="color:darkblue">Refractory anemia with ringed sideroblasts
                                                    (RARS) </a></li>
                                            <li><a href="https://rarediseases.info.nih.gov/diseases/13578/myelodysplastic-syndrome-with-excess-blasts"
                                                    style="color:darkblue"> Refractory anemia with excess blasts
                                                    (RAEB) </a></li>
                                            <li><a href="https://rarediseases.info.nih.gov/diseases/8723/5q--syndrome"
                                                    style="color:darkblue">5q-Syndrome </a></li>
                                            <li><a href="https://rarediseases.info.nih.gov/diseases/10297/ghosal-hematodiaphyseal-dysplasia-syndrome"
                                                    style="color:darkblue"> Ghosal hematodiaphyseal dysplasia syndrome
                                                    (GHDD)
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div> --}}
                            </div>
                        </div>

                        {{-- <div class="tab-pane fade" style="text-align:justify" id="v-pills-Funding" role="tabpanel"
                        aria-labelledby="v-pills-settings-tab2">
                        <h2 class="text-center animated fadeInUp"
                            style="color:teal ;animation-delay: 0.5s;padding-bottom:2rem">Why do need a consortium for
                            these two groups of disorders?</h2>
                        <p>
                            <ul style="text-align:justify">
                                <li>India is a vast country both geographically and from a population standpoint.</li>
                                <br>
                                <li>Socio-cultural differences, including consanguineous marriages are commonplace in
                                    India </li><br>
                                <li>The genetic landscape of Indians is unique with high birth rate</li><br>
                                <li>Genetic testing is still at its infancy and genetic counsellors are very few in
                                    India</li><br>
                                <li>RGD and BMFS in India may be very different from those presented in western nations.
                                </li><br>
                                <li>Besides cursory observational studies on patient numbers and their treatment
                                    outcomes, little information on the etiology and genetic basis of RGD and BMFS is
                                    available.</li><br>
                                <li>Most of the RGDs and BMFSs are genetic, either affecting single gene (monogenic) or
                                    multiple genes (polygenic), primarily affect children resulting in 35% deaths before
                                    the age of 1 year</li><br>
                                <li>Lack of awareness and poor access to prenatal diagnostics </li><br>
                                <li>Accurate diagnosis would grealty reduce the economic and emotional burden</li><br>
                                <li>This initiative by NITTE DU emphasizes the role of the universities in health
                                    science research and development across the country. </li><br>

                            </ul>
                        </p>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
