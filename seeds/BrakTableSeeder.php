<?php

use Illuminate\Database\Seeder;

class BrakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $brak=['nezenjen/neudata','ozenjen/udata','razveden/a'];
        foreach($brak as $b){
         DB::table('braks')->insert([
            'name' => $b
        ]);
        }
    }
}
