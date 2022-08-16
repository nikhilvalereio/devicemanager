@extends('layouts.page_templates.auth', ['activePage' => 'profile', 'titlePage' => " Device"])

@section('content')


<div class="content">
    @include('responce')
    <div class="row">
        <div class="col-md-12">



                <form action="{{ route('admin.device.update', $device->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

        <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Device</h4>

        </div>
        <div class="card-body ">
                <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password">Device name</label>
                    <div class="col-sm-7">
                        <div class="form-group bmd-form-group">
                            <input class="form-control" input="" type="text" name="name" value="{{ $device->name }}" id="input-current-password" placeholder="Devce name"   required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password">Device Type</label>
                    <div class="col-sm-7">

                        <select id="device" name="device"  class="form-control">
                          <option  {{$device->device =='active'?'selected':''}}  value="--" >Other</option>
                          <option  {{$device->device =='tablet'?'selected':''}} value="tablet"> Tablet</option>
                          <option  {{$device->device =='cable'?'selected':''}} value="cable"> Cable</option>
                          <option  {{$device->device =='charger'?'selected':''}} value="charger">  Charger</option>
                          <option  {{$device->device =='mobile'?'selected':''}} value="mobile">  Mobile</option>
                        </select>
                      </div>
                </div>






                <div class="row" id="os">


                    <label class="col-sm-2 col-form-label" for="input-current-password">Operating System </label>
                    <div class="col-sm-7">
                        <select id="inputState" name="os" class="form-control">
                          <option     value="--">  Other</option>
                          <option   {{$device->os =='Android'?'selected':''}}  value="Android"> Android</option>
                          <option  {{$device->os =='Ios'?'selected':''}}   value="Ios"> IOS</option>


                        </select>
                      </div>
                </div>


                <div class="row" id="imei">
                    <label class="col-sm-2 col-form-label" for="name">Device IMEI Number </label>
                    <div class="col-sm-7">
                        <div class="form-group bmd-form-group">
                            <input class="form-control" name="imei" id="imei"  value="{{ $device->imei }}" type="text" placeholder="Device IMEI Number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label" for="name">Photo </label>
                        <div class="col-sm-7">
                              <input type="file" name ="file" class="form-control-file" id="exampleFormControlFile1">
                              </div>


                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label" for="textarea">Device Descriptions  </label>
                    <div class="col-sm-7">

                    <div class="form-group">

                        <textarea class="form-control" id="textarea" name="description" rows="3">{{ $device->description }}</textarea>
                      </div>
                    </div>
                    <div class="col-sm-2">

                        <img src="{{@url('/Deviceimage/'.$device->image )}}"class="img-fluid" style="max-width: 100%; height: auto;">
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

        @section('javascript')
        <script type="text/javascript">

           $(document).ready(function() {
                $("#device").change(function () {
                    if( "tablet"==($("#device").val())){
                        $("#imei").show();
                        $("#os").show();
                    }else{
                        $("#imei").hide();
                        $("#os").hide();
                    }
                  });
            });



@if($device->device !="tablet")
$(function() {
    $("#imei").hide();
    $("#os").hide();
});

@endif





            </script>

        @endsection
