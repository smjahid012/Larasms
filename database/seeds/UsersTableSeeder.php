<?php

use Illuminate\Database\Seeder;

use App\Model\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::create([
            'role_id' =>1,
            'active' =>1,
            'name' => 'smjahid',
            'username' => 'jibon',
            'email' => 'jibon@gmail.com',
            'password' => bcrypt('jibon123'),
            'remember_token' => str_random(10),
        ]);


    }
}
