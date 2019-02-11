<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	User::create([
    		'name' => 'Trần Tuấn Ngọc',
    		'username' => 'trantuanngoctn97',
    		'phone' => '0975853528',
    		'email' => 'trantuanngoc@gmail.com',
    		'password' => '0975853528',
    		'address' => 'Van Giang, Hưng Yên',
    		'verified' => true,
    	]);

    	User::create([
    		'name' => 'Nguyễn Diệu Anh',
    		'username' => 'ndanh00',
    		'phone' => '12345678',
    		'email' => 'ndanh00@ndanh00.com',
    		'password' => '12345678',
    		'address' => 'Quảng Ninh',
    	]);
    }
}
