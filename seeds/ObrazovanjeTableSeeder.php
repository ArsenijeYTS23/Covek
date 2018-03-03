<?php

use Illuminate\Database\Seeder;

class ObrazovanjeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $obrazovanje=['osnovno','srednje','vise','visoko'];
        foreach($obrazovanje as $o){
         DB::table('obrazovanjes')->insert([
            'name' => $o
        ]);
        }
    }
}
