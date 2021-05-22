<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    
    public function companyCategory() {
        return $this->hasMany(Companies::class,'categories_id','categories_id');
    }
}


