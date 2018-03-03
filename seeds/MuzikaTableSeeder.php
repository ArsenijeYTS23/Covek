<?php

use Illuminate\Database\Seeder;

class MuzikaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $muzika=['turbofolk','pop','rock','blues','jazz'];
        foreach($muzika as $m){
         DB::table('muzikas')->insert([
            'name' => $m
        ]);
        }
    }
}
