<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use App\Models\Order;
use App\Models\Role;

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
       DB::table('roles')->truncate();
       DB::table('role_user')->truncate();

        $userAdmin = User::create([
            'name' => env('DATABASE_ADMIN'),
            'email' => env('DATABASE_EMAIL'),
            'password' => Hash::make(env('DATABASE_PASS')),
            'email_verified_at' => now()
        ]);

        $roleAdmin = Role::create([
            'name' => 'Admin'
        ]);

        $roleCustomer = Role::create([
            'name' => 'Customer'
        ]);

         $userAdmin->roles()->attach($roleAdmin->id);

        $userCustomers = User::factory(5)->has(Customer::factory()->count(1))->create();
        //userCuidadors = User::factory(5)->has(Cuidador::factory()->count(1))->create();

        foreach ($userCustomers as $userCustomer) {
            $userCustomer->roles()->attach($roleCustomer->id);
        }

        // foreach ($userCuidadores as $userCuidadores) {
        //     $userCuidadores->roles()->attach($roleCustomer->id);
        // }


       //self::seedCuidadores();

       Model::reguard();
       Schema::enableForeignKeyConstraints();

       self::seedResidencias();
       $this->command->alert('Tabla inicializada con datos');

       //self::seedTarifas();
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

        ]);
        DB::table('cuidadores')->insert([
            'nombre' => 'Pedro',
            'apellidos' =>'García',
            'dni'=>'23045342Q',
            'telefono'=>'123456789',
            'email'=>'pedro@gmail.com',
            'Domicilio'=>'Calle Laravel 25',
            'Comunidad'=>'Region de Murcia',

        ]);
        DB::table('cuidadores')->insert([
            'nombre' => 'LUis',
            'apellidos' =>'Manuel García',
            'dni'=>'24066836K',
            'telefono'=>'620663313',
            'email'=>'Luis@gmail.com',
            'Domicilio'=>'Calle PHP 21',
            'Comunidad'=>'Cataluña',

        ]);
        DB::table('cuidadores')->insert([
            'nombre' => 'Manuel',
            'apellidos' =>'Payaso',
            'dni'=>'23099839L',
            'telefono'=>'604634634',
            'email'=>'elpayaso@gmail.com',
            'Domicilio'=>'Calle Circo 25',
            'Comunidad'=>'Region de Murcia',

        ]);

    }
    /*private function seedTarifas(){

        DB::table('tarifas')->truncate();
        DB::table('tarifas')->insert([
            'Diurna' => '50',
            'Nocturna' =>'150',
            'Festivos'=>'200',
            'Personalizada'=>'250',
            'cuidador_id'=>'1'
        ]);
        DB::table('tarifas')->insert([
            'Diurna' => '50',
            'Nocturna' =>'100',
            'Festivos'=>'120',
            'Personalizada'=>'180',
            'cuidador_id'=>'2'
        ]);
    }*/
    private function seedResidencias(){

        DB::table('residencias')->truncate();
        DB::table('residencias')->insert([
            'nombre' => 'Amavir',
            'CIF'=>'23066836K',
            'Direccion'=>'C/ Hermano Pedro Ignacio, 2 bis',
            'cp'=>'20203',
            'Localidad'=>'Cartagena',
            'telefono'=>'968522345',
            'email'=>'amavir@gmail.com',
            'tipo'=>'Concertado',
        ]);
        DB::table('residencias')->insert([
            'nombre' => 'Casa Campo Perín',
            'CIF'=>'123456789P',
            'Direccion'=>'Ctra. Cartagena-Isla Plana Km. 3,5',
            'cp'=>'30396',
            'Localidad'=>'Perin. Cartagena',
            'telefono'=>'968538229',
            'email'=>'casacampo@gmail.com',
            'tipo'=>'Concertado',
        ]);
        DB::table('residencias')->insert([
            'nombre' => 'Clece Vitam Carmen Conde',
            'CIF'=>'23066836Y',
            'Direccion'=>'C/ San José de Costa Rica, 12',
            'cp'=>'30300',
            'Localidad'=>'Cartagena',
            'telefono'=>'968202649',
            'email'=>'clecevitam@gmail.com',
            'tipo'=>'Concertado',
        ]);
        DB::table('residencias')->insert([
            'nombre' => 'Fuente Cubas',
            'CIF'=>'23066836T',
            'Direccion'=>'C/ Cibeles, 12 Urb. Mediterráneo',
            'cp'=>'20203',
            'Localidad'=>'Cartagena',
            'telefono'=>'968522345',
            'email'=>'fuentecubas@gmail.com',
            'tipo'=>'Concertado',
        ]);
        DB::table('residencias')->insert([
            'nombre' => 'Los Almendros',
            'CIF'=>'23066836D',
            'Direccion'=>'Paraje Los Pinos, s/n',
            'cp'=>'30396',
            'Localidad'=>'Perin. Cartagena',
            'telefono'=>'968537261',
            'email'=>'losalmendros@gmail.com',
            'tipo'=>'Concertado',
        ]);
        DB::table('residencias')->insert([
            'nombre' => 'Los Jazmines',
            'CIF'=>'23066836D',
            'Direccion'=>'C/ Los López de la Aparecida, 17',
            'cp'=>'30395 ',
            'Localidad'=>'La Aparecida. Cartagena',
            'telefono'=>'968324130',
            'email'=>'losjazmines@gmail.com',
            'tipo'=>'Concertado',
        ]);
        DB::table('residencias')->insert([
            'nombre' => 'Los Marines',
            'CIF'=>'23066836S',
            'Direccion'=>'Paraje de Santa Bárbara, s/n',
            'cp'=>'30390',
            'Localidad'=>'Cuesta Blanca. Cartagena',
            'telefono'=>'968163247',
            'email'=>'losmarines@gmail.com',
            'tipo'=>'Concertado',
        ]);
        DB::table('residencias')->insert([
            'nombre' => 'Nova Santa Ana',
            'CIF'=>'23066836Z',
            'Direccion'=>'C/ Padua, s/n Polígono Residencial Santa Ana',
            'cp'=>'30319',
            'Localidad'=>'Cartagena',
            'telefono'=>'968330753',
            'email'=>'novasantana@gmail.com',
            'tipo'=>'Concertado',
        ]);
        DB::table('residencias')->insert([
            'nombre' => 'Orpea',
            'CIF'=>'23066836W',
            'Direccion'=>'C/ Beatas, s/n',
            'cp'=>'30202',
            'Localidad'=>'Cartagena',
            'telefono'=>'968122789',
            'email'=>'orpea@gmail.com',
            'tipo'=>'Concertado',
        ]);
        DB::table('residencias')->insert([
            'nombre' => 'Perpetuo Socorro',
            'CIF'=>'23066836R',
            'Direccion'=>'Alameda de San Antón, 6',
            'cp'=>'30305',
            'Localidad'=>'Cartagena',
            'telefono'=>'968115055',
            'email'=>'perpetuosocorro@gmail.com',
            'tipo'=>'Concertado',
        ]);
        DB::table('residencias')->insert([
            'nombre' => 'San Luis',
            'CIF'=>'23066836Q',
            'Direccion'=>'C/ La Musa, 4',
            'cp'=>'30395',
            'Localidad'=>'La puebla. Cartagena',
            'telefono'=>'968168117',
            'email'=>'sanluis@gmail.com',
            'tipo'=>'Concertado',
        ]);
        DB::table('residencias')->insert([
            'nombre' => 'Virgen del Mar',
            'CIF'=>'23066836L',
            'Direccion'=>'C/ Salvador Escudero, 15',
            'cp'=>'30204',
            'Localidad'=>'Cartagena',
            'telefono'=>'968513037',
            'email'=>'virgendelmar@gmail.com',
            'tipo'=>'Concertado',
        ]);
    }
}
