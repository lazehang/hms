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
       $role_user = new Role;
        $role_user->name ='Admin';
        $role_user->slug = 'Admin';
        $role_user->save();

        $role_admin = new Role;
        $role_admin->name ='User';
        $role_admin->slug = 'User';
        $role_admin->save();


    }
}
