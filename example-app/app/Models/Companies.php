<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    protected $table = 'companies';
    
  public function search($input) {
        $comapnies = self::where('company_name', 'LIKE', "%{$input}%")
                ->paginate(10);

        return $comapnies;
    }
    
   
}


