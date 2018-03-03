<?php

use Illuminate\Database\Seeder;

class PolitikaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $politika=['anarhista','ultra levica','levica','social demokrata','liberal','monarhista','desnica','ultra desnica','fasista'];
        foreach($politika as $p){
         DB::table('politikas')->insert([
            'name' => $p
        ]);
        }
    }
}
