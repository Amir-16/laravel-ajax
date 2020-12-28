@extends('layouts.app')

@section('content')


<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Dashboard</a>
    <span class="breadcrumb-item active">Employees-list</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <div class="well">
        <div class="">
      <a class="btn btn-success float-right" href="{{route('employees.add')}}" class="btn btn-info"><i class="fa fa-plus-circle"></i>Add Employee</a>
      </div>

        <table class="table table-bordered table-dark ">
                  <thead>
                    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Designation</th>
                    <th>Action</th>
              </tr>
                  </thead>
                  <tbody>
                  @foreach($allData as $key=>$employee)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$employee->name}} </td>
                      <td> {{$employee->email}}</td>
                      <td> {{$employee->designation}}</td>
                      <td>
                        <a  title="edit" href="{{route('employees.edit',$employee->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> </a>
                        <a title="delete" id="delete" href="{{route('employees.delete',$employee->id)}}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </a>

                      </td>
                    </tr>
                    @endforeach

                  </tbody>
        </table>

      </div>
    </div><!-- sl-page-title -->
  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->

@endsection
