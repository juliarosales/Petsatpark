<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	DB::table('users')->truncate();
        //factory(App\User::class,10)->create();
        factory(App\User::class)->create([
        	'name' => 'Julia',
        	'email' => 'julia.rosales@gmail.com',
        	'password' => bcrypt('123456'),
        	'phone' => '55555',
        	]);
    }
}
