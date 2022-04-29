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
        $password = "admin";

        DB::table('users')->insert([
            'name' => 'leunam',
            'email' => 'code@leunam.art',
            'email_verified_at' => \Carbon\Carbon::now(),
            'password' => Hash::make($password),
            'role_id' => 1,
            'uuid' => Laravia::uuid(),
        ]);
    }
}
