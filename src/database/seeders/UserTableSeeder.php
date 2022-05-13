<?php

namespace Laravia\User\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravia\Core\App\Laravia;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $name = "admin";
        $email = "code@laravia.art";
        $password = "admin";

        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'email_verified_at' => \Carbon\Carbon::now(),
            'password' => Hash::make($password),
            'role_id' => 1,
            'uuid' => Laravia::uuid(),
        ]);

        dump('user = ' . $name . ' | password = ' . $password . ' | email = ' . $email);
    }
}
