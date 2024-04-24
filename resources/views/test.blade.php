@extends('layouts.master')
@include('layouts.navigation')

@section('css')
    <style>

    </style>
@endsection


@section('content')
    <div class="container mx-auto px-4 lg:px-8 py-8">
        <h2 class="text-center text-2xl font-bold mb-4">Data Tables Using Ajax & Yajra</h2>
        <table id="daterange_table" class="table-auto w-full">
            <thead>
                <tr>
                    <th class="px-4 py-2">No</th>
                    <th class="px-4 py-2">Name</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Created On</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
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
                ],
                "createdRow": function(row, data, dataIndex) {
                    $('td', row).addClass('border px-4 py-2');
                }
            });
        });
    </script>
@endsection
