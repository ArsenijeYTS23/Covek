<?php

use Illuminate\Database\Seeder;

class GodineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $god=['20-29','30-39','40-49','50-59','60-69','preko 70'];
        foreach($god as $g){
         DB::table('godines')->insert([
            'name' => $g
        ]);
        }
    }
}
