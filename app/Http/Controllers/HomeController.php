<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    //
    public function index(){
        // lấy toàn bộ dữ liệu trong bảng users gán cho biến $users
        $users = User::all();
        // hiển thị giao diện trong tư mục views/users/index.blade.php
        // truyền biến users ra ngoài view
        return view('users.index', compact('users'));
    }

    public function infoForm(){
        return view('users.info_form');
    }

    public function saveInfo(Request $request){

        return view('users.save_info', $request->input());
       
    }

    public function list_products(){
        $products = Product::paginate(10);;

        return view('users.list_product', compact('products'));
    }

    public function add_products(){
        $products = Product::all();
        $categories = Category::all();
        return view('users.add_product', compact('products', 'categories'));
    }

    public function save_products(Request $request){
        $model = new Product();
        $model->fill($request->all());
        $model->save();
        return redirect()->route('list.products');
    }
}
