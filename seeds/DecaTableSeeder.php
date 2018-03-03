<?php

use Illuminate\Database\Seeder;

class DecaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $deca=[1,2,3,4,5,'bez dece'];
        foreach($deca as $d){
         DB::table('decas')->insert([
            'name' => $d
        ]);
        }
    }
}
