<?php

use Illuminate\Database\Seeder;
use App\Writer;

class WriterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	Writer::create([
    		'name' => 'Trần Ngọc Writer',
    		'username' => 'tranngoc',
    		'phone' => '0389975223',
    		'email' => 'tranngoc@writer.com',
    		'password' => '0389975223',
    		'address' => 'Hưng Yên',
    		'verified' => true,
    		'status' => 1,
    	]);
    }
}
