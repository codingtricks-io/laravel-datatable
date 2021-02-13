@extends('layouts.app')

@section('content')

<div class="br-pageheader pd-y-15 pd-l-20">
    <nav class="breadcrumb pd-0 mg-0 tx-12">
    </nav>
</div>
<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
    <h4 class="tx-gray-800 mg-b-5">Data Table</h4>
    <p class="mg-b-0">DataTables is a plug-in for the jQuery Javascript library.</p>
</div>
<div class="br-pagebody">
    <div class="br-section-wrapper">
        <div class="table-wrapper">
            <table id="users" class="table display responsive nowrap" style=" overflow-x:auto;">
                <thead>
                    <tr>
                        <th class="wd-20p">Name</th>
                        <th class="wd-20p">Address</th>
                        <th class="wd-20p">Email</th>
                        <th class="wd-20p">Phone</th>
                        <th class="wd-20p">Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection

@section('js')

<script src="//code.jquery.com/jquery-1.12.3.js"></script>
<script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script>
    $(function () {
        var table = $('#users').DataTable({
            "processing": true,
            "serverSide": true,
            "pageLength": 10,
            "responsive": true,
            "searching": true,
            "bAutoWidth": false,
            scrollY: true,
            scrollX: true,
            scrollCollapse: true,
            "ajax": {
                url: "{{ config('app.url') }}/user/get/all",
                type: "GET",
                cache: false,
                error: function () {
                    $("#users").append(
                        '<tbody class="errors"><tr><th colspan="7">No Data to show</th></tr></tbody>'
                        );
                }
            },
            "columns": [
                {data: 'name'},
                {data: 'address'},
                {data: 'email'},
                {data: 'phone'},
                {data: 'id'},
            ],
            fnRowCallback: function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {

                $('td:eq(0)', nRow).html(aData['name']);
                $('td:eq(1)', nRow).html(aData['address']);
                $('td:eq(2)', nRow).html(aData['email']);
                $('td:eq(3)', nRow).html(aData['phone']);

                var actions = '<a href="{{ route("user.index") }}/' + aData['id'] +'/edit" class="btn btn-xs btn-warning mr-2"><i class="fa fa-pencil"></i></a>';
                actions += `<form action="{{ route("user.index") }}/` + aData['id'] +`" method="post" onsubmit="return confirm('Are you sure you want to delete?');" style='display: -webkit-inline-box;'>`;
                actions += '@csrf @method("Delete")';
                actions +='<button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash-o"></i></button>';
                actions += '</a>';
                $('td:eq(4)', nRow).html(actions);
            }
        });
    });

</script>
@endsection
