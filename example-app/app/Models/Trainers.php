<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainers extends Model {

    protected $table = 'trainers';
    
    
   public function companyTrainer()
    {
        return $this->belongsTo(Companies::class,'company_id','company_id');
    }
    
   
    

}
