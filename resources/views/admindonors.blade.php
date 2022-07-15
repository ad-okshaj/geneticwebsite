@extends('layouts.adminlayout')
@section('title')
    CRGBMD INDIA | Donars
@endsection
@section('content2')
    <div class="container-fluid">
        <h2 class="mt-4" style="color: gray">Manage Donors</h2><br>
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
                            <th><input id="all" type="checkbox" /></th>
                            <th scope="col">Sl no.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Sector</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Amount</th>
                            {{-- <th scope="col">Address</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($res as $value)
                            <tr>
                                <td>
                                    <div class="checkbox rows">
                                        <input id="{{ $value->id }}" class="checkbox_rows" type="checkbox" />
                                    </div>
                                </td>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $value->name }}</td>
                                <td>{{ $value->sector }}</td>
                                <td>{{ $value->email }}</td>
                                <td>{{ $value->contact }}</td>
                                <td>{{ $value->amount }}</td>
                                {{-- <td>{{$value->address}}</td> --}}
                                <td class="single_delete">
                                    <form action="/deleteDonor/{{ $value->id }}" method="POST">
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
        <div class="delete_selected invisible" align="center">
            <form action="/deleteDonorMultiple" method="POST" id="multiple_delete_form">
                @csrf
                <input type="hidden" name="mul_delete" id="mul_delete_input">
            </form>
            <button type="button" id="delete_selected" class="btn btn-danger">
                <i class="fa fa-lg fa-trash" aria-hidden="true"></i>
                Delete Selected
            </button>
        </div>

    </div>
@endsection
@section('scripts')
    <script>
        $("#delete_selected").click(function() {
            var post_arr = [];
            $(".rows input:checkbox:checked").each(function() {
                post_arr.push($(this).attr("id"));
            });
            $('#mul_delete_input').val(post_arr);
            $("#multiple_delete_form").submit();
        });

        $('#all').change(function(e) {
            if (e.currentTarget.checked) {
                $('.checkbox_rows').prop('checked', true).change();
            } else {
                $('.checkbox_rows').prop('checked', false).change();
            }
        });

        $('.checkbox_rows').change(function() {

            if ($(".rows input:checkbox:checked").length > 0) {
                if ($('.rows input:checkbox:checked').length == $('.rows input:checkbox').length) {
                    $('#all').prop('checked', true);
                } else {
                    $('#all').prop('checked', false);
                }
                $('.delete_selected').removeClass("invisible");
                $('.single_delete').addClass("invisible");
            } else {
                $('#all').prop('checked', false);
                $('.delete_selected').addClass("invisible");
                $('.single_delete').removeClass("invisible");
            }

        });
    </script>
@endsection
