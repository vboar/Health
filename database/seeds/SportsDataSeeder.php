<?php

use Illuminate\Database\Seeder;
use App\DataSport;

class SportsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DataSport::create([
                'user_id'=>'4',
                'type'=>0,
                'start_time'=>date('Y-m-d H:i:s',time()),
                'end_time'=>date('Y-m-d H:i:s',time()+3600),
                'sports_time'=>60,
                'heat'=>10,
                'distance'=>5,
                'step'=>5000,
            ]);
        }
        for ($i = 0; $i < 20; $i++) {
            DataSport::create([
                'user_id'=>'4',
                'type'=>1,
                'start_time'=>date('Y-m-d H:i:s',time()),
                'end_time'=>date('Y-m-d H:i:s',time()+7200),
                'sports_time'=>120,
                'heat'=>12,
                'distance'=>3,
                'step'=>7000,
            ]);
        }
        for ($i = 0; $i < 20; $i++) {
            DataSport::create([
                'user_id'=>'4',
                'type'=>4,
                'start_time'=>date('Y-m-d H:i:s',time()),
                'end_time'=>date('Y-m-d H:i:s',time()+1800),
                'sports_time'=>30,
                'heat'=>20,
                'distance'=>10,
            ]);
        }
    }
}
