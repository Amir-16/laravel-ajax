@extends('layouts.app')

@section('content')


<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="">Dashboard</a>
    <span class="breadcrumb-item active">Employees-list</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <div class="well">
        <div class="card-body">
      <a class="btn btn-success float-right" href="{{route('employees.list')}}" class="btn btn-info"><i class="fa fa-plus-circle"></i>Employees List</a>
      </div>
      <form class="" action="{{route('employees.update',$editData->id)}}" method="post">
        @csrf
        <div class="row">
          <div class="form-group col-md-4">
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$editData->name}}" class="form-control">
            <font style="color:red"> {{($errors->has('name'))?($errors->first('name')):''}}</font>
          </div>

          <div class="form-group col-md-4">
            <label for="email">Name</label>
            <input type="email" name="email" value="{{$editData->email}}" class="form-control" value="">
            <font style="color:red"> {{($errors->has('email'))?($errors->first('email')):''}}</font>
          </div>
          <div class="form-group col-md-4">
            <label for="Designation">Designation</label>
            <input type="text" name="designation" value="{{$editData->designation}}" class="form-control" value="">
          </div>
          <div class="form-group col-md-6">
            <input type="submit" name="submit" class="btn btn-primary">

          </div>

        </div>
      </form>


      </div>

    </div><!-- sl-page-title -->

  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->

@endsection
