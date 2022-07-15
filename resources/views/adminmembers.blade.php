@extends('layouts.adminlayout')

@section('title')
    CRGBMD INDIA | Members
@endsection
@section('content2')
    <div class="container-fluid">
        <h2 class="mt-4" style="color: gray">Registered Members</h2><br>
        <div class="row">
            <div class="text-right">
                <a href="{{ url('/export') }}" class="btn btn-raised"
                    style="background-color: #4e73df;color: white;margin: 1em;">
                    <i class="fa fa-file-excel-o" aria-hidden="true"></i> Export to Excel</a>
            </div>

            <div class=" text-right">
                <button class="btn btn-raised" onclick="printData();" id="printButton"
                    style="background-color: #4e73df;color: white;margin: 1em;"><i class="fa fa-print"
                        aria-hidden="true"></i>
                    Print</button>
            </div>
        </div>

        @if (Session::has('message'))
            <div class="alert alert-{{ Session::get('status') }} status-box">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span
                        class="sr-only">Close</span></button>
                {{ Session::get('message') }}
            </div>
        @endif
        <div class="card">
            <div class="card-body" style="overflow-x: auto">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Sl no.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Designation</th>
                            <th scope="col">State</th>
                            <th scope="col">Country</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($res as $value)
                            <tr>

                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->mblno }}</td>
                                <td>{{ $value->designation }}</td>
                                <td>{{ $value->state }}</td>
                                <td>{{ $value->country }}</td>
                                <td>
                                    <form action="/deleteMember/{{ $value->id }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-lg fa-trash"
                                                aria-hidden="true"></i></button>
                                    </form><button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#memberEmail{{ $value->id }}">
                                        <i class="fa fa-lg fa-envelope" aria-hidden="true"></i>
                                    </button>
                                    <div class="modal fade" id="memberEmail{{ $value->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">

                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <h5 class="modal-title">Send Email</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">

                                                    <form action="/sendMemberEmail/{{ $value->id }}" method="POST">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Custom Message</label>
                                                            <textarea class="form-control" name="custommessage" rows="10" required>{{ old('message') }}</textarea>
                                                        </div>
                                                        @error('message')
                                                            <div class="alert alert-danger">{{ $message }}</div>
                                                        @enderror
                                                        <center>
                                                            <input class="btn btn-primary" type="submit"
                                                                value="Send Email">
                                                        </center>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
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
