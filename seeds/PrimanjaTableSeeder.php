<?php

use Illuminate\Database\Seeder;

class PrimanjaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $primanja=['15-20','20-30','30-40','40-50','50-70','vise od 70'];
        foreach($primanja as $p){
         DB::table('primanjas')->insert([
            'name' => $p
        ]);
        }
    }
}
