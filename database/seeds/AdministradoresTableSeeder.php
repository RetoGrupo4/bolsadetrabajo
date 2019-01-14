<?php

use Illuminate\Database\Seeder;

use App\Administrador;
class AdministradoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('administradores')->delete();

        $administrador=new Administrador();
        $administrador->nombre="superadmin";
        $administrador->password="superadmin";
        $administrador->rol=1;
        $administrador->email="superAdmin@fptxurdinaga.com";
        $administrador->password="superadmin";
        $administrador->id_departamento=1;
        $administrador->save();

        $administrador=new Administrador();
        $administrador->nombre="adminInfor";
        $administrador->password="adminInfor";
        $administrador->rol=2;
        $administrador->email="adminInfor@fptxurdinaga.com";
        $administrador->password="adminInfor";
        $administrador->id_departamento=2;
        $administrador->save();

        $administrador=new Administrador();
        $administrador->nombre="adminQuimica";
        $administrador->password="adminQuimica";
        $administrador->rol=2;
        $administrador->email="adminQuimica@fptxurdinaga.com";
        $administrador->password="adminQuimica";
        $administrador->id_departamento=3;
        $administrador->save();
    }
}
