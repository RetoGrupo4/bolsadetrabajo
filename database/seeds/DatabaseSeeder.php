<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call(DepartamentosTableSeeder::class);
        $this->call(AdministradoresTableSeeder::class);
        $this->call(AlumnosTableSeeder::class);
        $this->call(Ciclos_FormativosTableSeeder::class);
        $this->call(EmpresasTableSeeder::class);
        $this->call(FormacionesTableSeeder::class);
        $this->call(OfertasTableSeeder::class);
        Model::reguard();
    }
}
