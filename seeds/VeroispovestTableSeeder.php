<?php

use Illuminate\Database\Seeder;

class VeroispovestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $veroispovest=['hriscanin','musliman','jevrej','budista','ateista'];
        foreach($veroispovest as $v){
         DB::table('veroispovests')->insert([
            'name' => $v
        ]);
        }
    }
}
