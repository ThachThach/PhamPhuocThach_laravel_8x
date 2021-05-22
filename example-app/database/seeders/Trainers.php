<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class Trainers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1000; $i++){
            DB::table('trainers')->insert([
                'trainer_name' => 'Thach'."$i",
                'trainer_email' => 'thachhaise@gmail.com',
                'trainer_phone' => '123456789',
                'company_id' => "$i"+1,
            ]);
        }
    }
}
