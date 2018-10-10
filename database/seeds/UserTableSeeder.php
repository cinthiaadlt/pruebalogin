<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'paola')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'paola';
        $user->email = 'paola@gmail.com';
        $user->password = bcrypt('paola');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('admin');
        $user->save();
        $user->roles()->attach($role_admin);
    }
}
