<?php

use Illuminate\Database\Seeder;
use App\User;
use App\UserInfo;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->username = 'user';
        $user->email = 'user@163.com';
        $user->password = bcrypt('123456');
        $user->save();
        UserInfo::create([
            'id' => $user->id,
            'gender' => 0,
            'real_name' => '王用户',
            'nickname' => '小用户',
            'province' => '江苏省',
            'city' => '南京市',
            'birthday' => '1990-01-01',
            'introduction' => '我是用户',
            'avatar_url' => 'default.jpg',
        ]);
        $user->attachRole(Role::where('name', '=', 'user')->first());

        $user = new User();
        $user->username = 'doctor';
        $user->email = 'doctor@163.com';
        $user->password = bcrypt('123456');
        $user->save();
        UserInfo::create([
            'id' => $user->id,
            'real_name' => '王医生',
            'nickname' => '小医生',
            'gender' => 0,
            'province' => '江苏省',
            'city' => '南京市',
            'birthday' => '1990-01-01',
            'introduction' => '我是医生',
            'avatar_url' => 'default.jpg',
        ]);
        $user->attachRole(Role::where('name', '=', 'doctor')->first());

        $user = new User();
        $user->username = 'coach';
        $user->email = 'coach@163.com';
        $user->password = bcrypt('123456');
        $user->save();
        UserInfo::create([
            'id' => $user->id,
            'real_name' => '王教练',
            'nickname' => '小教练',
            'gender' => 0,
            'province' => '江苏省',
            'city' => '南京市',
            'birthday' => '1990-01-01',
            'introduction' => '我是教练',
            'avatar_url' => 'default.jpg',
        ]);
        $user->attachRole(Role::where('name', '=', 'coach')->first());

        $user = new User();
        $user->username = 'admin';
        $user->email = 'admin@163.com';
        $user->password = bcrypt('123456');
        $user->save();
        UserInfo::create([
            'id' => $user->id,
            'real_name' => '王管理',
            'nickname' => '小管理',
            'gender' => 0,
            'province' => '江苏省',
            'city' => '南京市',
            'birthday' => '1990-01-01',
            'introduction' => '我是管理员',
            'avatar_url' => 'default.jpg',
        ]);
        $user->attachRole(Role::where('name', '=', 'admin')->first());

        for ($i = 0; $i < 50; $i++) {
            $user = new User();
            $user->username = 'user'.$i;
            $user->email = 'user'.$i.'@163.com';
            $user->password = bcrypt('123456');
            $user->save();
            UserInfo::create([
                'id' => $user->id,
                'gender' => 0,
                'real_name' => '用户'.$i,
                'nickname' => '小用户'.$i,
                'province' => '江苏省',
                'city' => '南京市',
                'birthday' => '1990-01-01',
                'introduction' => '我是用户',
                'avatar_url' => 'default.jpg',
            ]);
            $user->attachRole(Role::where('name', '=', 'user')->first());
        }

        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->username = 'doctor'.$i;
            $user->email = 'doctor'.$i.'@163.com';
            $user->password = bcrypt('123456');
            $user->save();
            UserInfo::create([
                'id' => $user->id,
                'real_name' => '医生'.$i,
                'nickname' => '小医生'.$i,
                'gender' => 0,
                'province' => '江苏省',
                'city' => '南京市',
                'birthday' => '1990-01-01',
                'introduction' => '我是医生',
                'avatar_url' => 'default.jpg',
            ]);
            $user->attachRole(Role::where('name', '=', 'doctor')->first());
        }

        for ($i = 0; $i < 10; $i++) {
            $user = new User();
            $user->username = 'coach'.$i;
            $user->email = 'coach'.$i.'@163.com';
            $user->password = bcrypt('123456');
            $user->save();
            UserInfo::create([
                'id' => $user->id,
                'real_name' => '教练'.$i,
                'nickname' => '小教练'.$i,
                'gender' => 0,
                'province' => '江苏省',
                'city' => '南京市',
                'birthday' => '1990-01-01',
                'introduction' => '我是教练',
                'avatar_url' => 'default.jpg',
            ]);
            $user->attachRole(Role::where('name', '=', 'coach')->first());
        }
    }
}
