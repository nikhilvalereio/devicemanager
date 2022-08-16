@extends('layouts.page_templates.auth', ['activePage' => 'profile', 'titlePage' => "New Device"])

@section('content')


<div class="content">
    @include('responce')
    <div class="row">
        <div class="col-md-12">






            <form action="{{ route('admin.employee.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


        <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">New employee</h4>

        </div>
        <div class="card-body ">
                <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password"> Name</label>
                    <div class="col-sm-7">
                        <div class="form-group bmd-form-group">
                            <input class="form-control" input="" type="text" name="name" value="{{old('name')}}" id="input-current-password"  required maxlength="30">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password">  Mobile number</label>
                    <div class="col-sm-7">
                        <div class="form-group bmd-form-group">
                            <input class="form-control" input="" type="number" name="phone"  value="{{old('phone')}}"id="input-current-password"  required maxlength="10">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password"> Alternative Number</label>
                    <div class="col-sm-7">
                        <div class="form-group bmd-form-group">
                            <input class="form-control" input="" type="number" name="alternative"  value="{{old('alternative')}}" id="input-current-password"   maxlength="10">
                        </div>
                    </div>
                </div>


                <div class="row">
                    <label class="col-sm-2 col-form-label" for="email"> Email</label>
                    <div class="col-sm-7">
                        <div class="form-group bmd-form-group">
                            <input class="form-control" input="" type="email" name="email" value="{{old('email')}}" id="email"    required >
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

                        <textarea class="form-control" id="textarea" name="address"  required maxlength="100" rows="3">{{old('address')}}</textarea>
                      </div>
                    </div>
                </div>








                <div class="row">
                    <label class="col-sm-2 col-form-label" for="name">Designations</label>
                    <div class="col-sm-7">
                        <div class="form-group bmd-form-group">
                            <input class="form-control" name="designations" id="imei" type="text"   required="">
                        </div>
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
