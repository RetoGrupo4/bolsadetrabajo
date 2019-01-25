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
        DB::table('users')->delete();
        
        $usuario=new User();
        //Usuario superadministrador
        $usuario->email="superadmin@fptxurdinaga.com";
        $usuario->password=bcrypt("12345");
        $usuario->rol="1";
        $usuario->save();

        $usuario=new User();
        //Usuario administrador informatica
        $usuario->email="adminInfor@fptxurdinaga.com";
        $usuario->password=bcrypt("12345");
        $usuario->rol="2";
        $usuario->save();

        $usuario=new User();
        //Usuario administrador quimica
        $usuario->email="adminQuimica@fptxurdinaga.com";
        $usuario->password=bcrypt("12345");
        $usuario->rol="2";
        $usuario->save();

        $usuario=new User();
        //Usuario alumno1
        $usuario->email="alumno1@gmail.com";
        $usuario->password=bcrypt("12345");
        $usuario->rol="3";
        $usuario->save();

        $usuario=new User();
        //Usuario alumno2
        $usuario->email="alumno2@gmail.com";
        $usuario->password=bcrypt("12345");
        $usuario->rol="3";
        $usuario->save();

        $usuario=new User();
        //Usuario alumno3
        $usuario->email="alumno3@gmail.com";
        $usuario->password=bcrypt("12345");
        $usuario->rol="3";
        $usuario->save();
    }
}
