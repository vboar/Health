<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

         $this->call(EntrustSeeder::class);
         $this->call(UserTableSeeder::class);
         $this->call(HealthSeeder::class);
         $this->call(SportsDataSeeder::class);

        Model::reguard();
    }
}
