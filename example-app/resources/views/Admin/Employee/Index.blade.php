@extends('layouts.page_templates.auth', ['activePage' => 'profile', 'titlePage' => "Employee"])

@section('content')


<div class="content">
    <div class="container-fluid">
    <div class="row">
    <div class="col-md-12">
    <div class="card">
    <div class="card-header card-header-primary">
    <h4 class="card-title ">Employee</h4>
    <p class="card-category"> Here you can manage users</p>
    </div>
    <div class="card-body">
    <div class="row">
    <div class="col-12 text-right">
    <a href="{{ route('admin.employee.create') }}" class="btn btn-sm btn-primary">Add employee</a>
    </div>
    </div>
    <div class="table-responsive">
        <table class="table" id="data-table">
            <thead class=" text-primary">

                <tr><th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Alternative</th>
                <th>designations</th>
                <th>Email</th>
                <th>Address</th>



                <th class="text-right">Actions</th>
                </tr>
                </thead><tbody>
            </tbody>
        </table>
    </div>
</div>
</div>

</div>
</div>
</div>
</div>
@endsection
@section('javascript')
<script type="text/javascript">
$(function() {

var table = $('#data-table').DataTable({
processing: true,
serverSide: true,
ajax: "{{ route('admin.employee.index') }}",
columns: [{
    data: 'id',
    name: 'id'
},
{
    data: 'name',
    name: 'name'
},

{
    data: 'phone',
    name: 'phone'
},
{
    data: 'alternative',
    name: 'alternative'
},
{
    data: 'designations',
    name: 'designations'
},
{
    data: 'email',
    name: 'email'
},

{
    data: 'address',
    name: 'address'
},





{
    data: 'action',
    name: 'action',
    orderable: false,
    searchable: false
},
]
});

});
</script>

@endsection
