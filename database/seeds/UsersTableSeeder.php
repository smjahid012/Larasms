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
            'name' => 'smjahid',
            'username' => 'jibon',
            'email' => 'jibon@gmail.com',
            'password' => bcrypt('jibon123'),
            'remember_toke' => str_random(10),
        ]);

       
    }
}
