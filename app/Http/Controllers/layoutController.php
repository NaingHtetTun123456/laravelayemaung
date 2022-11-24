<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Login;
use Illuminate\Http\Request;

class layoutController extends Controller
{
    public function brand(){
    $brands = Brand::all();
    return view('admin.fontend.brand',compact('brands'));
}
public function Category(){
    $categories = Category::all();
    return view('admin.fontend.category',compact('categories'));
}
public function customerlogin(){
    return view('admin.fontend.login');
}
public function customerregister(){
    return view('admin.fontend.register');
}
}