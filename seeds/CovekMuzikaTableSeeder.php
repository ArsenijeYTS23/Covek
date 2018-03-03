<?php

use Illuminate\Database\Seeder;

class CovekMuzikaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $muzika=[4,5];
        foreach($muzika as $m){
         DB::table('covek_muzika')->insert([
            'covek_id' => 1,
            'muzikas_id' => $m
        ]);
        }
    }
}
