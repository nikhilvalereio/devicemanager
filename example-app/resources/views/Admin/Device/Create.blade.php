@extends('layouts.page_templates.auth', ['activePage' => 'profile', 'titlePage' => "New Device"])

@section('content')


<div class="content">

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('admin.device.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title">Add device</h4>
        </div>
        <div class="card-body ">
                <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password">Device name</label>
                    <div class="col-sm-7">
                        <div class="form-group bmd-form-group">
                            <input class="form-control" input="" type="text" name="name" id="input-current-password" placeholder="Devce name" value="" required="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-form-label" for="input-current-password">Device Type</label>
                    <div class="col-sm-7">

                        <select id="device" name="device"  class="form-control">
                          <option value="--" >Other</option>
                          <option value="tablet"> Tablet</option>
                          <option value="cable"> Cable</option>
                          <option value="charger">  Charger</option>
                          <option value="mobile">  Mobile</option>
                        </select>
                      </div>
                </div>






                <div class="row" id="os">


                    <label class="col-sm-2 col-form-label" for="input-current-password">Operating System </label>
                    <div class="col-sm-7">
                        <select id="inputState" name="os" class="form-control">
                          <option value="--">  Other</option>
                          <option value="Android"> Android</option>
                          <option value="Ios"> IOS</option>


                        </select>
                      </div>
                </div>


                <div class="row" id="imei">
                    <label class="col-sm-2 col-form-label" for="name">Device IMEI Number </label>
                    <div class="col-sm-7">
                        <div class="form-group bmd-form-group">
                            <input class="form-control" name="imei" id="imei" type="text" placeholder="Device IMEI Number">
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

                        <textarea class="form-control" id="textarea" name="description" rows="3"></textarea>
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
            $(function() {
                $("#imei").hide();
                $("#os").hide();
            });





            </script>

        @endsection
