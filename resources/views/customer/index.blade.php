@extends('layouts.app') 
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('customers.create') }}" class="btn btn-success btn-rounded waves-effect waves-light">Create customer</a>
                <table class="table " id="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Mobile</th>
                            <th>Address</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- end card body-->
        </div>
        <!-- end card -->
    </div>
    <!-- end col-->
</div>
<!-- end row-->
@endsection
 
@section('javascript')
<script>
    $(function() {
    $('#table').DataTable({
        processing: false,
        serverSide: true,
        scrollX: true,
        ajax: '{{ route('customers.index') }}',
        columns: [
                { data: 'id', name: 'id' },
                { data: 'name', name: 'name' },
                { data: 'mobile', name: 'mobile' },
                { data: 'address', name: 'address' },
                { data: 'action', name: 'action', orderable: false, searchable: false}
            ],
        initComplete: function () {
            this.api().columns([1,2,3]).every(function () {
                var column = this;
                var input = document.createElement("input");
                $(input).appendTo($(column.footer()).empty())
                .on('change', function () {
                    column.search($(this).val(), false, false, true).draw();
                });
            });
        },
        drawCallback: function () {
            $(".dataTables_paginate > .pagination").addClass("pagination-rounded")
        }
    });
});

</script>
@endsection
