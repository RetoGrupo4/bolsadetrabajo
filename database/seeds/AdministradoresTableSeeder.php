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
        $administrador->id_user=1;
        $administrador->id_departamento=1;
        $administrador->save();

        $administrador=new Administrador();
        $administrador->nombre="adminInfor";
        $administrador->id_user=2;
        $administrador->id_departamento=2;
        $administrador->save();

        $administrador=new Administrador();
        $administrador->nombre="adminQuimica";
        $administrador->id_user=3;
        $administrador->id_departamento=3;
        $administrador->save();
    }
}
