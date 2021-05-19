<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Http\Requets;
use Session ;
use Illuminate\Support\Facades\Redirect;

session_start();

class CategoryProduct extends Controller
{
    public function addCategory(){
        return view('admin.addCategory');
    }
    public function allCategory(){
        $all_category_product = DB::table('tbl_category_product')->get(); 
        return view('admin.allCategory')->with('all_category_product', $all_category_product); 
    }

    public function saveCategory(Request $request){
       $data = array();
       $data['category_name']   = $request->category_product_name;
       $data['slug_category_product']   = $request->slug_category_product;
       $data['category_desc']   = $request->category_product_desc;
       $data['meta_keywords']   = $request->category_product_keywords;
       $data['category_status']   = $request->category_product_status;
        DB::table('tbl_category_product')->insert($data);
        Session::put('message','add categories product successful');
        return Redirect::to('/add-category-product');
    }
}
