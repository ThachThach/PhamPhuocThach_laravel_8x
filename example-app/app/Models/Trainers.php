<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trainers extends Model {

    protected $table = 'trainers';
    
     public function search($input) {
        $comapnies = self::where('trainer_name', 'LIKE', "%{$input}%")
                ->paginate(10);

        return $comapnies;
    }

    
    
   
    

}
