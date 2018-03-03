<?php

use Illuminate\Database\Seeder;

class MestoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $mesto=['selo','varos','manji grad','veci grad'];
        foreach($mesto as $m){
         DB::table('mestos')->insert([
            'name' => $m
        ]);
        }
    }
}
