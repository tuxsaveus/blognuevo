<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Iván Sánchez Vallejo',
            'email' => 'tuxsaveus@gmail.com',
            'password' => bcrypt('ISV@SAVI86')
        ])->assignRole('Admin');
        User::factory(99)->create();
    }
}
