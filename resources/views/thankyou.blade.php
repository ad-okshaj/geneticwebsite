@extends('layouts.userlayout')
@section('hometitle')
    CRGBMD INDIA | Thank you
@endsection
@section('usercontent')
    <div class="container">
        <div class="card">
            <div class="text-center">
                <img src="/images/image12.png" style="max-height: 300px; max-width: 300px;">
            </div>
            <div class="card-body">
                <div class="container">
                    <p>Date : {{ $date }}</p>
                    <div class="row offset-md-10">
                        <div class="text-right">
                            <h6>Arati Khanna-Gupta, Ph.D.</h6>
                            <p>
                                Co-Founder
                            </p>
                            <p>Ex-Assistant Professor,<br>
                                Harvard Medical School,<br>
                                Boston, MA, USA<br>
                                Cell: +91 9177273911</p>
                        </div>
                    </div>
                    <br>
                    <div class="row offset-md-10">
                        <div class="text-right ">
                            <h6>Anirban Chakarborty, Ph.D.</h6>
                            <p>
                                Co-Founder
                            </p>
                            <p>Director at NUSCER,<br>
                                NITTE, Mangalore</p>
                        </div>
                    </div>
                    <div class="row">
                        <p>Dear {{ $res['name'] }},</p>
                        <p style="text-align: justify">
                            It is with deep gratitude that we accept your generous donation for the Consortium of Rare
                            Genetic
                            and Bone
                            Marrow Disorders (CRG.BMD), in Mangalore, India. Your donation will help us to lighten the
                            burden of
                            morbidity and
                            mortality through Science, with the aim of restoring hope and life to patients and their
                            families.
                        </p>
                        <h6 class="text-center">
                            Your donations can be accepted through any one of the following methods:
                        </h6>
                        <br>

                        <div class="row">

                            <h6>1: NEFT Transfer</h6><br>
                            <p>
                                <br>Account Name: Nitte (Deemed to be University)<br>
                                Account Number: 02452200037956<br>
                                Bank Name: SYNDICATE BANK<br>
                                Branch: ABSMIDS, DERLAKATTE<br>
                                IFSC: SYNB0000245
                            </p>
                            </p>
                            <p>
                                <b>Important:</b> Please e-mail us your Transaction ID number so that we can generate your
                                Tax-exemption certificate under
                                Section 80G of the Income Tax Act, 1961. Our email address is: crg.bmd@nitte.edu.in

                        </div>

                        <div class="row">
                            <h6>2. Demand Draft</h6><br>
                            <p style="text-align:justify">
                                <br>The demand draft can be drawn in favour of Nitte (Deemed to be University), payable at
                                Mangalore.
                                The complete postal address for sending the demand draft is as follows:
                            </p>
                            <p>
                                The Deputy Director (Finance)<br>
                                Nitte (Deemed to be University) (CRG.BMD)<br>
                                Nithyananda Nagar, P.O. Deralakatte<br>
                                Mangalore-575018<br>
                                IPhone: 0824-2204300/01/02/03
                            </p>
                        </div>
                        <br>

                        <div class="row">
                            <h6>3: Cash</h6><br>
                            <p style="text-align:justify">
                                <br>At Admin Office,<br>
                                Consortium of Rare Genetic and Bone Marrow Disorders, India Network@NitteDU<br>
                                Nitte University Centre for Science Education and Research, Paneer campus,<br>
                                Kotekar-Beeri Road, P.O. Deralakatte<br>
                                Mangalore-575018
                                <br><br>
                                We sincerely thank you for your kind donation and helping to make a difference!<br>
                                Anirban & Arati
                            </p><br>

                        </div>

                        {{-- <br>
                    <div class="row">
                        <p style="text-align:justify">

                        </p>
                    </div> --}}

                        {{-- <div class="text-center">
                        <h6>“We make a living by what we get, but we make a life by what we give”
                        </h6>
                        <span>-Winston Churchill</span>
                    </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
