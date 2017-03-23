@extends('layouts.app')

@section('content')
<div class="container">

    @include('layouts.alert')
    
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard > Contacts</div>

                <div class="panel-body">
                    <table id="contacts-table" class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
$(document).ready(function() {
    var t = $('#contacts-table').DataTable({
        ajax: {
            url: 'datatables/contacts',
            dataSrc: ''
        },
        columns: [
            { data: null, orderable: false},
            { data: 'name' },
            { data: 'phone_no' },
            { data: 'action' }
        ],
        "order": [[ 1, 'asc' ]]
    });

    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
});
</script>
@endsection