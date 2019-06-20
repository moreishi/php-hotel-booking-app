<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin  = Role::where('name', 'admin')->first();
        $role_receptionist  = Role::where('name', 'receptionist')->first();

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
        $admin->roles()->attach($role_admin);

        $receptionist = User::create([
            'first_name' => 'Receptionist',
            'last_name' => 'Employee',
            'address' => 'Test Address',
            'city' => 'Test City',
            'postcode' => 'Test Postcode',
            'state' => 'Test State',
            'country' => 'Test Country',
            'phone' => '00000000000',
            'email' => 'receptionist@domain.com',
            'password' => \Illuminate\Support\Facades\Hash::make('secret')
        ]);
        $receptionist->roles()->attach($role_receptionist);

        factory(User::class,10)->create()->each(function($u) {
            $role_customer = Role::where('name', 'customer')->first();
            $u->roles()->attach($role_customer);
        });
    }
}
