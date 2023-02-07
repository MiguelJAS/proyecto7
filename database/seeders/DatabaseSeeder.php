<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Model::unguard();
       Schema::disableForeignKeyConstraints();

       DB::table('orders')->truncate();
       DB::table('customers')->truncate();
       DB::table('users')->truncate();

        User::create([
            'name' => env('DATABASE_ADMIN'),
            'email' => env('DATABASE_EMAIL'),
            'password' => Hash::make(env('DATABASE_PASS')),
            'email_verified_at' => now()
        ]);

        User::factory(10)
        ->has(Customer::factory()
        ->has(Order::factory()->count(3))
        ->count(2))
        ->create();


       Model::reguard();
       Schema::enableForeignKeyConstraints();

       self::seedCuidadores();
       $this->command->alert('Tabla inicializada con datos');
    }

    private function seedCuidadores(){

        DB::table('cuidadores')->truncate();
        DB::table('cuidadores')->insert([
            'nombre' => 'Jaime',
            'apellidos' =>'Lloret García',
            'dni'=>'23066836K',
            'telefono'=>'606639633',
            'email'=>'jaimelloret66@gmail.com',
            'Domicilio'=>'Calle Laravel 21',
            'Comunidad'=>'Region de Murcia',
            'Localidad'=>'Cartagena'
        ]);
        DB::table('cuidadores')->insert([
            'nombre' => 'Pedro',
            'apellidos' =>'García',
            'dni'=>'23045342Q',
            'telefono'=>'123456789',
            'email'=>'pedro@gmail.com',
            'Domicilio'=>'Calle Laravel 25',
            'Comunidad'=>'Region de Murcia',
            'Localidad'=>'Lorca'
        ]);
        DB::table('cuidadores')->insert([
            'nombre' => 'LUis',
            'apellidos' =>'Manuel García',
            'dni'=>'24066836K',
            'telefono'=>'620663313',
            'email'=>'Luis@gmail.com',
            'Domicilio'=>'Calle PHP 21',
            'Comunidad'=>'Cataluña',
            'Localidad'=>'Tarragona'
        ]);
        DB::table('cuidadores')->insert([
            'nombre' => 'Manuel',
            'apellidos' =>'Payaso',
            'dni'=>'23099839L',
            'telefono'=>'604634634',
            'email'=>'elpayaso@gmail.com',
            'Domicilio'=>'Calle Circo 25',
            'Comunidad'=>'Region de Murcia',
            'Localidad'=>'Águilas'
        ]);

    }
}
