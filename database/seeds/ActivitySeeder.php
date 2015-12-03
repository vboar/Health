<?php

use Illuminate\Database\Seeder;
use App\Activity;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $time = '2015-11-01 19:05:30';
        $time2 = '2015-11-01 20:05:30';
        for ($i = 0; $i < 20; $i++) {
            Activity::create([
                'topic'=>'南京大学鼓楼校区夜跑活动之'.$i,
                'start_time'=>date("Y-m-d H:i:s",strtotime($time . "+".$i." day")),
                'end_time'=>date("Y-m-d H:i:s",strtotime($time2 . "+".$i." day")),
                'type'=>0,
                'address'=>'南京大学鼓楼校区田径场',
                'content'=>'南京大学鼓楼校区夜跑活动，是非常有意义的活动哦，今晚在田径场不见不散！',
                'remark'=>'所有人都可以来参与哦',
                'user_id'=>'4',
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
            for($j = 1; $j <= 10; $j++) {
                DB::insert('insert into activity_user (activity_id, user_id) values (?, ?)', [$i, $j]);
            }
        }

    }
}
