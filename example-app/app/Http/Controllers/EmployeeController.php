<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Device;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DataTables;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function  index(Request $request)
    {

        if ($request->ajax()) {
            $data = Employee::select('*');
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                           $btn = '<a href="employee/'.$row->id.'/edit" class="edit btn btn-primary btn-sm">Edit</a>';

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }




        return view("Admin.Employee.Index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("Admin.Employee.Create");
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
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'phone' => 'required',
            'designations' => 'required'

       ]);


        if ($files = $request->file('file')) {
            // Define upload path
                $destinationPath = public_path('/Employeeimage/'); // upload path
             // Upload Orginal Image
                $name_ext = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $name_ext);
             }



        Employee::create(
            [
                 'name'=>$request->name  ,
                 'phone'=>$request->phone ,
                 'alternative'=>$request->alternative ,
                 'email'=>$request->email ,
                 'address'=>$request->address ,
                 "image"=> $name_ext,
                 'designations'=>$request->designations ,

            ]);



            return redirect()->route('admin.employee.index')->with('message', 'Saived');

    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
         $employee= Employee::find($employee)->first();
        return view("Admin.Employee.Edit", compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {

        if ($files = $request->file('file')) {
            // Define upload path
                $destinationPath = public_path('/Employeeimage/'); // upload path
             // Upload Orginal Image
                $name_ext = date('YmdHis') . "." . $files->getClientOriginalExtension();
                $files->move($destinationPath, $name_ext);
                Employee::where('id', $employee->id)
                ->update([


                    "name"=>$request->name,
                    "phone"=>$request->phone,
                    "alternative"=>$request->alternative,
                    "email"=>$request->email,
                    "address"=>$request->address,
                    "image"=> $name_ext,
                    "designations"=>$request->designations,



                ]);
                return redirect()->route('admin.employee.index')->with('message', 'Saived');
             }


         Employee::where('id', $employee->id)
    ->update([


        "name"=>$request->name,
        "phone"=>$request->phone,
        "alternative"=>$request->alternative,
        "email"=>$request->email,
        "address"=>$request->address,

        "designations"=>$request->designations,



    ]);
    return redirect()->route('admin.employee.index')->with('message', 'Saived');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        //
    }


    public function list()
    {

        $data = Employee::select('*');
        return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function($row){

                       $btn = '<a href="employee/'.$row->id.'/edit" class="edit btn btn-primary btn-sm">Edit</a>';

                        return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
    }
}
