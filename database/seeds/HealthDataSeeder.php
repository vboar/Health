<?php

use Illuminate\Database\Seeder;
use App\DataHealth;

class HealthDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = '2015-11-01 15:05:30';
        for($i = 0; $i < 70; $i++) {
            DataHealth::create([
                'user_id'=>'4',
                'time' => date("Y-m-d H:i:s",strtotime($time . "+".$i." day")),
                'height' => 170 + 0.25*$i,
                'weight' => 60 - 0.2*$i,
                'fat_percentage' => 20,
                'muscle_percentage' => 15,
                'visceral_fat' => 1,
                'metabolic_rate' => 60,
                'moisture_percentage' => 70,
                'protein' => 25,
                'bone_mass' => 30,
                'bmi' => 20,
                'heart_rate' => 75,
                'blood_pressure' => '125/80',
            ]);
        }
    }
}
