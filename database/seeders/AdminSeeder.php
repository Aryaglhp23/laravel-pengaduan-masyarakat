<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'id' => 1,
            'nik' => 1431543624626247,
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'phone' => 124124135133,
            'password' => '$2y$10$6F/Zl8lbrF7jRt7I1G75UutyGI0hkD.MCbAzJvvvEHbhLt8Cs4Efe',
            'created_at' => now(),
            'updated_at' => now(),
            'roles' => 'ADMIN',
        ]);
    }
}
