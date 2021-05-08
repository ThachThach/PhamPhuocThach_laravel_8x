<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use \App\Models\Companies;


class SearchController extends Controller
{
    public function search(Request $request){
        $obj = new Companies();
        if($request->input('query')){
            $key = $request->input('query');
            $search = $obj ->search($key);
            return view('search',['search'=>$search,'key'=>$key]);
        }
        return view('search',[]);
}
}
