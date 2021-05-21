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
        $obj = new \App\Models\Trainers();
        if($request->input('tim')){
            $key = $request->input('tim');
            $search = $obj ->search($key);
            return view('search',['search'=>$search,'key'=>$key]);
        }
        return view('search',[]);
}




}
