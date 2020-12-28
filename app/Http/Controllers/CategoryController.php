<?php

namespace App\Http\Controllers;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class CategoryController extends Controller
{
    public function index()
    {

      $data=[];
      $data['categories']=Category::select('id','category','slug','status')->orderby('id','desc')->paginate(10);
      return view('category.index',$data);

    }
    public function create()
    {

      return view('category.create');
    }
    public function store(Request $request)
    {

      return Validator::make($request, [
          'name' => 'required:name',
          'status' =>'required' ,

      ]);

      Category::create([
        'name'=>trim($request->input('name')),
        'slug'=>str_slug(trim($request->input('name'))),
        'status' => $request->input('status'),
      ]);

      return view('category.index');



    }
}
