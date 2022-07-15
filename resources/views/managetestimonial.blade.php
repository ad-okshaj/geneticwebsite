@extends('layouts.adminlayout')
@section('title')
    MANAGE-TESTIMONIALS
@endsection
@section('content2')
    <div class="container-fluid">
        <h2 class="mt-4" style="color: gray">Manage Testimonials</h2><br>
        <div class="text-right">
            <button class="btn btn-raised" onclick="printData();" id="printButton"
                style="background-color: #4e73df;color: white;margin: 1em;"><i class="fa fa-print" aria-hidden="true"></i>
                Print</button>
        </div>


        <div class="card">
            <div class="card-body" style="overflow-x: auto">
                @if (Session::has('message'))
                    <div class="alert alert-{{ Session::get('status') }} status-box">
                        <button type="button" class="close" data-dismiss="alert"><span
                                aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        {{ Session::get('message') }}
                    </div>
                @endif



                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sl no.</th>
                            <th scope="col">Testimonial By</th>
                            <th scope="col">Testimonial</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Image</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($res as $value)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->testimonialby }}</td>
                                <td>{{ $value->description }}</td>
                                <td>{{ $value->designation }}</td>

                                <td><img src="/download/{{ $value->timage }}" style="max-height:300px;max-width:100px"></td>

                                <td>

                                    <form action="/deletetestimonial/{{ $value->id }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-lg fa-trash"
                                                aria-hidden="true"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>

    </div>
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/PrintArea/2.4.1/jquery.PrintArea.min.js"
        integrity="sha256-D8H34/5jeY9jayzWCyxojqD+Kw5XicflFLXo/Ndzacw=" crossorigin="anonymous"></script>
    <script>
        function printData() {
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = {
                mode: mode,
                popClose: close
            };
            $("div.card").printArea(options);
        };
    </script>
@endsection
