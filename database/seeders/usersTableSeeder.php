<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        self::seedUsers();
        $this->command->alert('Tabla inicializada con datos');
    }
    private function seedUsers(){
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'name'=>$_ENV['DATABASE_ADMIN'],
            'email'=>$_ENV['DATABASE_EMAIL'],
            'password'=>bcrypt($_ENV['DATABASE_PASS'])
        ]);

        User::factory(10)
        ->has(Customer::factory()
        ->has(Order::factory()->count(3))
        ->count(2))
        ->create();
    }
}
