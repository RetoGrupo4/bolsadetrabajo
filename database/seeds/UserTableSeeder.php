<?php

use App\User;
use App\Role;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_profesor = Role::where('name', 'profesor')->first();
        $role_admin = Role::where('name', 'admin')->first();
        $user = new User();
        $user->nombre = 'user';
        $user->apellidos = 'alumno';
        $user->email = 'user@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_user);
        $user = new User();
        $user->nombre = 'administrador';
        $user->apellidos = 'admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);
        $user = new User();
        $user->nombre = 'profesor';
        $user->apellidos = 'profe';
        $user->email = 'profesor@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_profesor);
    }
}
