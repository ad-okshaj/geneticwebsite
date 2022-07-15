@extends('layouts.adminlayout')
@section('title')
    ADD-TESTIMONIAL
@endsection
@section('content2')
    <div class="container">
        <h2 class="mt-4" style="color: gray;padding-bottom: 1em;">Add Testimonial</h2>

        <div class="card">
            <div class="card-body">
                <form method="post" action="/addtestimonial" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="testimonial by">Testimonial By</label>
                            <input type="text" class="form-control" id="testimonialby" required
                                placeholder="Testimonial By" name="testimonialby" value="{{ old('testimonialby') }}">
                            @error('testimonialby')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="designation">Designation</label>
                            <input type="text" class="form-control" id="designation" required
                                placeholder="Enter Designation" name="designation" value="{{ old('designation') }}">
                            @error('designation')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="testimonial">Testimonial</label>
                        <textarea class="form-control" id="description" required name="description" placeholder="Enter Testimonial"
                            value="{{ old('description') }}"></textarea>
                        @error('description')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="TestimonialImage">Testimonial Image</label>
                        <input type="file" name="timage" id="timage">
                        @error('timage')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>



                    <div class="text-right">
                        <button type="submit" class="btn btn-outline-success">Add Testimonial</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
