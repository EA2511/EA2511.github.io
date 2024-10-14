<?php

namespace Database\Seeders;

use App\Models\User;
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
        $users = array(
            [
                'name' => 'Edrick',
                'email' => 'administrator1@gmail.com',
                'password' => bcrypt('123'),
                'foto' => '/img/user.JPG',
                'level' => 1
            ],
            [
                'name' => 'User1',
                'email' => 'user1@gmail.com',
                'password' => bcrypt('123'),
                'foto' => '/img/user.JPG',
                'level' => 2
            ]
        );

        array_map(function (array $user) {
            User::query()->updateOrCreate(
                ['email' => $user['email']],
                $user
            );
        }, $users);
    }
}
