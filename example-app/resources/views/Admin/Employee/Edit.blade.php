@extends('layouts.page_templates.auth', ['activePage' => 'profile', 'titlePage' => "New Device"])

@section('content')


<div class="content">
    @include('responce')
    <div class="row">
        <div class="col-md-12">






            <form action="{{ route('admin.employee.update', $employee->id ) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

        <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">New employee</h4>

        </div>
        <div class="card-body ">
                <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password"> Name</label>
                    <div class="col-sm-7">
                        <div class="form-group bmd-form-group">
                            <input class="form-control" input="" type="text" name="name" value="{{ $employee->name }}" id="input-current-password" placeholder="Name" required maxlength="50">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password">  Mobile number</label>
                    <div class="col-sm-7">
                        <div class="form-group bmd-form-group">
                            <input class="form-control" input="" type="number" name="phone" value="{{ $employee->phone }}" id="input-current-password" required maxlength="10"">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password"> Alternative Number</label>
                    <div class="col-sm-7">
                        <div class="form-group bmd-form-group">
                            <input class="form-control" input="" type="text" name="alternative"  value="{{ $employee->alternative }}" id="input-current-password" placeholder="" required>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <label class="col-sm-2 col-form-label" for="email"> Email</label>
                    <div class="col-sm-7">
                        <div class="form-group bmd-form-group">
                            <input class="form-control" input="" type="email" name="email" value="{{ $employee->email }}"  id="email"  required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <label class="col-sm-2 col-form-label" for="name">Photo </label>
                        <div class="col-sm-7">
                                <input type="file"  name ="file" class="form-control-file" id="exampleFormControlFile1">
                              </div>


                </div>


                <div class="row">
                    <label class="col-sm-2 col-form-label" for="textarea">Address  </label>
                    <div class="col-sm-7">

                    <div class="form-group">

                        <textarea class="form-control" id="textarea" name="address" required maxlength="500"  rows="3">{{ $employee->address }}</textarea>
                      </div>
                    </div>
                </div>






                <div class="row">
                    <label class="col-sm-2 col-form-label" for="name">description</label>
                    <div class="col-sm-7">
                        <div class="form-group bmd-form-group">
                            <input class="form-control" name="designations" value="{{ $employee->designations }}"  id="imei" type="text" required maxlength="100">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <label class="col-sm-2 col-form-label" for="name">Image</label>
                <div class="col-sm-2">

                    <img src="{{@url('/Employeeimage/'.$employee->image )}}"class="img-fluid" style="max-width: 100%; height: auto;">
                </div>


                </div>







        </div>
        <div class="card-footer ml-auto mr-auto">
        <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </div>
        </form>
        </div>
        </div>

    </div>
    @endsection
