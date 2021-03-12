<?php

use App\User;
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
        factory(User::class, 5)->create();
        User::updateOrCreate([
            'name' => 'Admin',
            'email' => 'admin@admin.com.br',
        ],[
            'name' => 'Admin',
            'email' => 'admin@admin.com.br',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);
    }
}
