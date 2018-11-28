<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'username' => 'admin',
            'email_verified_at' => now(),
            'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
            'is_admin' => 1,
            'remember_token' => str_random(10),
        ]);

        factory(App\Models\User::class, 2)->create();
    }
}
