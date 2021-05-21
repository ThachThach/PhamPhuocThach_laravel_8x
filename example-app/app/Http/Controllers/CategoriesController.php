<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Companies;

use App\Models\Categories;

class CategoriesController extends Controller
{
    public function categories(Request $request) {
        
         $obj = new Categories();
       $categories = $obj-> pluck('categories_id','categories_id');
       
       
         $company = new Companies();
         
          if($request->input('tim')){
            $key = $request->input('tim');
            
            $search = $company ->search($key);
          return view('categories',['search'=>$search,'key'=>$key,'categories' => $categories]);
        }
           return view('categories', ['categories' => $categories,[]]);
       
         
       
       
    }

        
       

    
     
}
