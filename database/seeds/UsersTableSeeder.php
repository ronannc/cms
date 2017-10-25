<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
        	'name' => 'Ronan Nunes',
	        'email' => 'ronannc1@yahoo.com.br',
            'password' => bcrypt('123456')
        ]);
    }
}