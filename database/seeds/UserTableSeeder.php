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
            'province' => '江苏省',
            'city' => '南京市',
            'birthday' => '1990-01-01',
            'avatar_url' => 'default.jpg',
            'info_secret' => 0,
            'health_secret' => 0,
        ]);
        $user->attachRole(Role::where('name', '=', 'user')->first());

        $user = new User();
        $user->username = 'doctor';
        $user->email = 'doctor@163.com';
        $user->password = bcrypt('123456');
        $user->save();
        UserInfo::create([
            'id' => $user->id,
            'gender' => 0,
            'province' => '江苏省',
            'city' => '南京市',
            'birthday' => '1990-01-01',
            'avatar_url' => 'default.jpg',
            'info_secret' => 0,
            'health_secret' => 0,
        ]);
        $user->attachRole(Role::where('name', '=', 'doctor')->first());

        $user = new User();
        $user->username = 'coach';
        $user->email = 'coach@163.com';
        $user->password = bcrypt('123456');
        $user->save();
        UserInfo::create([
            'id' => $user->id,
            'gender' => 0,
            'province' => '江苏省',
            'city' => '南京市',
            'birthday' => '1990-01-01',
            'avatar_url' => 'default.jpg',
            'info_secret' => 0,
            'health_secret' => 0,
        ]);
        $user->attachRole(Role::where('name', '=', 'coach')->first());

        $user = new User();
        $user->username = 'admin';
        $user->email = 'admin@163.com';
        $user->password = bcrypt('123456');
        $user->save();
        UserInfo::create([
            'id' => $user->id,
            'gender' => 0,
            'province' => '江苏省',
            'city' => '南京市',
            'birthday' => '1990-01-01',
            'avatar_url' => 'default.jpg',
            'info_secret' => 0,
            'health_secret' => 0,
        ]);
        $user->attachRole(Role::where('name', '=', 'admin')->first());

    }
}
