<?php

use Illuminate\Database\Seeder;
use App\Question;
use App\Advice;

class AdviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 11; $i++) {
            Question::create([
                'topic'=>'医生我想问你一个问题'.$i,
                'content'=>'医生我想问你一个问题'.$i.'，最近一直拉肚子，一吃东西就拉，是什么问题呢？',
                'type'=>1,
                'user_id'=>'4',
            ]);
        }
        for($i = 1; $i < 11; $i++) {
            Question::create([
                'topic'=>'教练我想问你一个问题'.$i,
                'content'=>'教练我想问你一个问题'.$i.'，最近想减肥，但是人懒，请问有机会吗？',
                'type'=>2,
                'user_id'=>'4',
            ]);
        }
        for($i = 1; $i < 6; $i++) {
            Advice::create([
                'content'=>$i.'唉，你吃错东西啦，赶紧去医院吧~~~~',
                'question_id'=>$i,
                'user_id'=>2,
            ]);
            Advice::create([
                'content'=>$i.'唉，人懒并不能减肥~~~~',
                'question_id'=>($i+10),
                'user_id'=>3,
            ]);
        }

    }
}
