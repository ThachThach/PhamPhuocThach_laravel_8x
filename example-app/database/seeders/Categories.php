<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         for ($i = 0; $i < 5; $i++){
            DB::table('categories')->insert([
                ['categories_name' => 'Mang may tinh'],
                    ['categories_name'=>'Kiem thu phan men'],
                    ['categories_name' => 'Phat trien ung dung wed'],
                ['categories_name'=>'Phat trien ung dung di dong'],
            ]);
        }
    }
}
