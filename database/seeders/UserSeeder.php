<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {

        $user = User::create([
            'user_name' => 'Itay',
            'password' => bcrypt('Aa123456'),
        ]);

        $user->is_admin = true;
        $user->save();

    }
}
