<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'address' => 'Test Address',
            'city' => 'Test City',
            'postcode' => 'Test Postcode',
            'state' => 'Test State',
            'country' => 'Test Country',
            'phone' => '00000000000',
            'email' => 'admin@domain.com',
            'password' => \Illuminate\Support\Facades\Hash::make('secret')
        ]);

        factory(User::class,10)->create();
    }
}
