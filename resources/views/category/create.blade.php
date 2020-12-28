@extends('layouts.app')

@section('content')


<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Pages</a>
    <span class="breadcrumb-item active">Add Category</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <div class="well">
      <form action="{{ route('categories.store')}}" method="post">
    @csrf
        <div class="form-group">
          <input type="name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}"
           autofocus placeholder=" Category Name">

        </div><!-- form-group -->
                  @error('name')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                          </span>
                           @enderror
        <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" name="status">
          <option value="1">Active</option>
          <option value="0">InActive</option>

        </select>


        </div><!-- form-group -->
        <button type="submit" class="btn btn-success ">Add</button>

      </form>



      </div>

    </div><!-- sl-page-title -->

  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->

@endsection
