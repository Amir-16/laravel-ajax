@extends('layouts.app')

@section('content')


<div class="sl-mainpanel">
  <nav class="breadcrumb sl-breadcrumb">
    <a class="breadcrumb-item" href="index.html">Starlight</a>
    <a class="breadcrumb-item" href="index.html">Pages</a>
    <span class="breadcrumb-item active">Category-list</span>
  </nav>

  <div class="sl-pagebody">
    <div class="sl-page-title">
      <div class="well">
        <div class="">
      <a href="{{route('categories.store')}}" class="btn btn-info">Add new Category</a>
      </div>

        <table class="table table-bordered table-condensed ">
                  <thead>
                    <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Status</th>
                    <th>Action</th>
              </tr>
                  </thead>
                  <tbody>
                    @foreach($categories as $category)
                    <tr>
                      <td>{{$category->id}} </td>
                      <td> {{$category->name}}</td>
                      <td>{{$category->slug}} </td>
                      <td>{{$category->status}} </td>
                      <td> <a href="" class="btn btn-info"></a>details</td>
                    </tr>
                    @endforeach

                  </tbody>
        </table>

      </div>

    </div><!-- sl-page-title -->

  </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->

@endsection
