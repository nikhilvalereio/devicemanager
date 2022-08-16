<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DataTables;

class DeviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  index(Request $request)
    {



        if ($request->ajax()) {
            $data = Device::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                        $btn = '<a href="device/'.$row->id.'/edit" class="edit btn btn-primary btn-sm">Edit</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }



        return view("Admin.Device.Index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Device.Create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




        request()->validate([
            'name' => 'required',

            'file' => 'required',
       ]);
       if ($files = $request->file('file')) {
       // Define upload path
           $destinationPath = public_path('/Deviceimage/'); // upload path
        // Upload Orginal Image
           $name_ext = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $name_ext);
        }
         Device::create([
            "name"=> $request->name,
            "device" => $request->device ,
            "os"=>  $request->os,
            "imei"=> $request->imei,
            "image"=> $name_ext,
            "description"=> $request->description,
        ]);
        return redirect()->route('admin.device.index')->with('message', 'Saived');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function show(Device $device)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function edit(Device $device)
    {

        return view("Admin.Device.Edit",compact('device'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Device $device)
    {


        request()->validate([
            'file' => 'required|image|mimes:jpeg|max:2048',
       ]);
       if ($files = $request->file('file')) {
       // Define upload path
           $destinationPath = public_path('/Deviceimage/'); // upload path
        // Upload Orginal Image
           $name_ext = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $name_ext);
           Device::where('id', $device->id)
           ->update([


               "name"=> $request->name,
               "device" => $request->device ,
               "os"=>  $request->os,
               "imei"=> $request->imei,
               "image"=> $name_ext,
               "description"=> $request->description,



           ]);
        }
        Device::where('id', $device->id)
        ->update([
            "image"=> $name_ext,

            "name"=> $request->name,
            "device" => $request->device ,
            "os"=>  $request->os,
            "imei"=> $request->imei,

            "description"=> $request->description,



        ]);

        return redirect()->route('admin.device.index')->with('message', 'Saived');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Device  $device
     * @return \Illuminate\Http\Response
     */
    public function destroy(Device $device)
    {
        //
    }
}
