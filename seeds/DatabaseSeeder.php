<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //   $this->call(UsersTableSeeder::class);
         $this->call(MuzikaTableSeeder::class);
         $this->call(DecaTableSeeder::class);
         $this->call(GodineTableSeeder::class);
         $this->call(MestoTableSeeder::class);
         $this->call(ObrazovanjeTableSeeder::class);
         $this->call(PrimanjaTableSeeder::class);
         $this->call(PolitikaTableSeeder::class);
         $this->call(BrakTableSeeder::class);
         $this->call(VeroispovestTableSeeder::class);
         $this->call(CovekMuzikaTableSeeder::class);
         $this->call(CovekTableSeeder::class);
    }
}
