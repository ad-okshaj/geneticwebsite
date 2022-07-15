@extends('layouts.userlayout')
@section('hometitle')
    CRGBMD INDIA | Register
@endsection
@section('usercontent')
    <div class="container">
        <h3 class="mt-4" style="color: gray;padding-top: 1em;">Member Registration</h3>
        <div class="card">
            <div class="card-body">

                <form id="reg-mem-form" method="post" action="/addmember">
                    @csrf

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name"
                                required="" value="{{ old('name') }}">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-5 offset-md-1">
                            <label for="dob">Date Of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob"
                                placeholder="Date Of Birth" required="" value="{{ old('dob') }}">
                            @error('dob')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email id"
                                required="" value="{{ old('email') }}">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-5 offset-md-1">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" id="designation" name="designation"
                                placeholder="Designation" required="" value="{{ old('designation') }}">
                            @error('designation')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">

                            <label for="gender">Gender</label>
                            <select id="gender" class="form-control" required="" name="gender">
                                <option value="">Select gender</option>
                                <option {{ old('gender') == 'male' ? 'selected' : '' }} value="male">Male</option>
                                <option {{ old('gender') == 'female' ? 'selected' : '' }}value="female">Female</option>
                                <option {{ old('gender') == 'other' ? 'selected' : '' }}value="other">Other</option>
                            </select>
                            @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-5 offset-md-1">
                            <label for="mblno">Contact</label>
                            <input type="number" class="form-control" id="mblno" placeholder="Contact Number"
                                required="" name="mblno" value="{{ old('mblno') }}">
                            @error('mblno')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="street">Address</label>
                        <textarea class="form-control" id="street" placeholder="Street Address" required="" name="street">{{ old('street') }}</textarea>

                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" placeholder="City" required=""
                            name="city" value="{{ old('city') }}">
                        @error('city')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="state">State</label>
                            <input type="text" class="form-control" id="state" placeholder="State" required=""
                                name="state" value="{{ old('state') }}">
                            @error('state')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="zip" placeholder="Country"
                                required="" name="country" value="{{ old('country') }}">
                            @error('country')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="company-add">Company Address</label>
                        <textarea class="form-control" id="company-add" placeholder="Company Address" required="" name="company-add">{{ old('company-add') }}</textarea>
                        @error('company-add')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="area_of_expertise">Area of Expertise</label>
                        <textarea class="form-control" id="area_of_expertise" placeholder="Area of Expertise" required=""
                            name="area_of_expertise">{{ old('area_of_expertise') }}</textarea>
                        @error('area_of_expertise')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="hospital_associated_with">Hospital Associated With</label>
                        <textarea class="form-control" id="hospital_associated_with" placeholder="Hospital Associated With" required=""
                            name="hospital_associated_with">{{ old('hospital_associated_with') }}</textarea>
                        @error('hospital_associated_with')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="Additional-Info">Comments</label>
                        <textarea class="form-control" id="Additional-Info" placeholder="Additional Comments" name="Additional-Info">{{ old('Additional-Info') }}</textarea>
                        @error('Additional-Info')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    @if (config('app.captcha_site_key'))
                        @error('g-recaptcha-response')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="text-right">
                            <button class="btn btn-outline-success register_btn g-recaptcha"
                                data-sitekey="{{ config('app.captcha_site_key') }}" data-callback='onSubmit'
                                data-action='submit'>Register</button>
                        </div>
                    @else
                        <div class="text-right">
                            <button type="submit" class="btn btn-outline-success register_btn">Register</button>
                        </div>
                    @endif
                </form>


            </div>
        </div>
    </div>
    @if (config('app.captcha_site_key'))
        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script>
            function onSubmit(token) {
                document.getElementById("reg-mem-form").submit();
            }
        </script>
    @endif
@endsection
