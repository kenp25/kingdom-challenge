<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'firstname' => 'Patrick',
                'lastname' => 'Oryono',
                'email' => 'patricken08@gmail.com',
                'password' => Hash::make('patrick@kenp25'),
                'admin' => 1,
                'gender' => 1,
                'age' => 1,
                'verified' => 1


            ],

        ];

        foreach ($users as $user){
            User::create($user);
        }
    }
}
