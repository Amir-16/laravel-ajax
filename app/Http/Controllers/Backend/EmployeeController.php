<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Employee;

class EmployeeController extends Controller
{
  public function add(){
    return view('employees.add-employee');
  }

  public function index(){
    $data['allData']=Employee::all();
    return view ('employees.view-employee',$data);
  }

    public function store(Request $request){
      $this->validate($request,[
        'name'=>'required',
        'email'=>'required|unique:employees,email',
      ]);

      $data =new Employee();
      $data->name=$request->name;
      $data->email =$request->email;
      $data->designation=$request->designation;
      $data->save();
      $notification =array(
                      'message'=>'Employee Successfully Added',
                      'alert-type'=>'success'
                       );
                       return redirect()->route('employees.list')->with($notification);

    }

    public function edit($id){
      $editData= Employee::find($id);
      return view('employees.edit-employee',compact('editData'));
    }

    public function update(Request $request,$id){

      $data=Employee::find($id);
      $data->name=$request->name;
      $data->email=$request->email;
      $data->designation=$request->designation;
      $data->save();
      $notification=array(
                              'message'=>'Employee Successfully Updated',
                              'alert-type'=>'success'
                               );
                               return redirect()->route('employees.list')->with($notification);

    }

    public function delete($id){
      $employee=Employee::find($id);
      $employee->delete();
      $notification=array(
                              'message'=>'Employee Deleted!',
                              'alert-type'=>'warning'
                               );
                               return redirect()->route('employees.list')->with($notification);
    }


}
