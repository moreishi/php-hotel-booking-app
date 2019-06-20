<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'A Admin User';
        $role_admin->save();

        $role_receptionist = new Role();
        $role_receptionist->name = 'receptionist';
        $role_receptionist->description = 'A Receptionist User';
        $role_receptionist->save();

        $role_customer = new Role();
        $role_customer->name = 'customer';
        $role_customer->description = 'A Customer User';
        $role_customer->save();

    }
}
