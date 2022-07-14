@extends('layouts.userlayout')
@section('hometitle')
CRGBMD-DONATE
@endsection
@section('usercontent')
<div class="container mt-3 mb-3">
    <h2 class="mt-4" style="color: gray;padding-bottom: 1em;">Details of the donor</h2>
    <form method="post" action="donate_form">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="user">I am an </label>
                <select id="user" class="form-control" name="sector">
                    <option selected>Choose...</option>
                    <option value="individual">Individual</option>
                    <option value="Corporation/Foundation">Corporation/Foundation</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
                @error("name")
                <div class="alert-danger">
                    Error in name.
                </div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St">
            @error("address")
            <div class="alert-danger">
                Error in address
            </div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
            @error("email")
            <div class="alert-danger">
                Error in email
            </div>
            @enderror
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="contact">Phone number</label>
                <input type="tel" class="form-control" id="contact" name="contact">
                @error("contact")
                <div class="alert-danger">
                    Enter a valid contact number
                </div>
                @enderror
            </div>

            <div class="form-group col-md-6">
                <label for="amount">Amount being gifted</label>
                <input type="text" class="form-control" id="amount" name="amount"
                    placeholder="Example: INR 500, USD 50">
                @error("email")
                <div class="alert-danger">
                    Enter a valid amount
                </div>
                @enderror
            </div>
        </div>

        <button type="submit" class="btn btn-outline-primary float-right">Donate</button>
    </form><br><br>
    <div class="conatiner mt-4 mb-4">
        <h5>Please note:</h5><br>
        <p style="text-align: justify">
            <b>TAX EXEMPTION INFORMATION FOR DONORS :</b><br>

            <p>Indian Tax payers (Resident or non-resident) can claim tax exemption under Section 80G of the Income Tax
                Act, 1961. A
                tax receipt will be sent to the donor for his/her records.
            </p>
            <p>NITTE DU is registered under the Foreign Contribution Regulations Act (FCRA)</p>
        </p>
    </div>
</div>
@endsection