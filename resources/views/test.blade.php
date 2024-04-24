@extends('layouts.master')


@section('css')
    <style>

    </style>
@endsection


@section('content')
    <div class="container">
        <h1 class="text-center text-success mt-5 mb-5"><b>Laravel 10 Datatables Date Range Filter</b></h1>
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col col-9"><b>Sample Data</b></div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="daterange_table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Created On</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('#daterange_table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('/users') }}",
                    data: function(data) {}
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'email',
                        name: 'email'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    }
                ]
            });
        });
    </script>
@endsection
