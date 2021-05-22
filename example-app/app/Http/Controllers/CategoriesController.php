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
    public function categories() {
        
        
       $obj = new Categories();
        $companies = $obj->paginate(50);
        return view('categories', ['categories' => $companies]);
         
       
       
    }

        
       

    
     
}
