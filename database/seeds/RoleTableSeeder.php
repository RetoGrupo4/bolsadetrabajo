<?php

use App\Role;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'administrator';
        $role->save();
        $role = new Role();
        $role->name = 'user';
        $role->description = 'user';
        $role->save();
        $role = new Role();
        $role->name = 'profesor';
        $role->description = 'profesor';
        $role->save();
    }
}
