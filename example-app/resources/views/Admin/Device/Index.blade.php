@extends('layouts.page_templates.auth', ['activePage' => 'profile', 'titlePage' => __('Add device')])

@section('content')
<div class="content">
    @include('responce')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Device</h4>

                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-right">
                        <a href="{{ route('admin.device.create') }}" class="btn btn-sm btn-primary">Add Device</a>
                        </div>
                    </div>
                    <div class="table-responsive p-4">
                        <table class="table" id="data-table">
                            <thead class=" text-primary">

                                <tr><th>ID</th>
                                <th>Name</th>
                                <th>Device</th>
                                <th>os</th>
                                <th>Imie</th>
                                <th>Description</th>
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
    $( document ).ready(function() {
        var table = $('#data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.device.index') }}",
            columns: [{
                    data: 'id',
                    name: 'id'
                },
                {
                    data: 'name',
                    name: 'name'
                },

                {
                    data: 'device',
                    name: 'device'
                },
                {
                    data: 'os',
                    name: 'os'
                },
                {
                    data: 'imei',
                    name: 'imei'
                },
                {
                    data: 'description',
                    name: 'description'
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
