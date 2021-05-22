<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = 'companies';
     public function categoryCompany() {
        return $this->belongsTo(Categories::class,'categories_id','categories_id');
    }
    
    
    public function search($input) {
        $comapnies = self::where('company_name', 'LIKE', "%{$input}%")
                ->paginate(10);

        return $comapnies;
    }
    
    public function trainer()
    {
        return $this->hasOne(Trainers::class,'company_id','company_id');
    }

}


