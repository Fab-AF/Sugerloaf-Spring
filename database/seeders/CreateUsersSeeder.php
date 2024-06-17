<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

/*
* php artisan db:seed --class=CreateUsersSeeder
*/
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
				'name'=>'Sugerloaf Springs Admin',
				'email'=>'admin@sugerloaf.com',
				'password'=> bcrypt('password'),
				'role'=> "A",				
				'phone_prefix'=> "+1",
				'phone'=> "677-124-44227",
				'is_active'=> "1",
            ]			
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
