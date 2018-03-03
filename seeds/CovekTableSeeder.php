<?php

use Illuminate\Database\Seeder;

class CovekTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('coveks')->insert([
           'godine_id'=>2,
           'brak_id'=>2,
           'obrazovanje_id'=>3,
           'primanja_id'=>5,
           'mesto_id'=>4,
           'deca_id'=>3,
           'veroispovest_id'=>5,
           'politika_id'=>4
        ]);
       
    }
}
