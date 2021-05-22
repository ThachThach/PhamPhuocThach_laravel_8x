<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class SearchController extends Controller
{
    public function search(Request $request){
        $obj = new \App\Models\Categories();
       $categories = $obj-> pluck('categories_id','categories_id');
       
       
         $company = new \App\Models\Companies();
         
          if($request->input('tim')){
            $key = $request->input('tim');
            
            
            
            $search = $company ->search($key);
          return view('search',['search'=>$search,'key'=>$key,'categories' => $categories]);
        }
           return view('search', ['categories' => $categories,[]]);
}




}
