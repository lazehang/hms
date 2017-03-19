<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder

{

    public function run()
    {
        $role_admin = Role::where('name', 'Admin')->first();
        $role_user = Role::where('name', 'User')->first();

        $user = new User();
        $user->name = 'Mangal Hang Limbu';
        $user->email = 'mangal@gmail.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Laze Hang Limbu';
        $user->email = 'lazehang@gmail.com';
        $user->password = bcrypt('password');
        $user->save();
        $user->roles()->attach($role_user);
    }

}