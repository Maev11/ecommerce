<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_supervisor= Role::where('Nombre','=','Supervisor')->first();
        $role_encargado = Role::where('Nombre','=','Encargado')->first();
        $role_contador = Role::where('Nombre','=','Contador')->first();
        $role_vendedro = Role::where('Nombre','=','Vendedor')->first();
        $role_comprador = Role::where('Nombre','=','Comprador')->first();

        $user = new User();
        $user->name = "Mario";
        $user->email = "MarioSuper@mercado.es";
        $user->apaterno ="Esponda";
        $user->amaterno ="Velasquez";
        $user->fechaNacimiento = "1995-05-17";
        $user->password = Hash::make("esponda1102");
        $user->save();
        $user->roles()->attach($role_supervisor);

        $user = new User();
        $user->name = "Abiud";
        $user->email = "AbiudEncar@mercado.es";
        $user->apaterno ="Alvarez";
        $user->amaterno ="Lopez";
        $user->fechaNacimiento = "1995-05-17";
        $user->password = Hash::make("esponda1102");
        $user->save();
        $user->roles()->attach($role_encargado);
        

        $user = new User();
        $user->name = "Abiud";
        $user->email = "AbiudConta@mercado.es";
        $user->apaterno ="Alvarez";
        $user->amaterno ="Lopez";
        $user->fechaNacimiento = "1995-05-17";
        $user->password = Hash::make("esponda1102");
        $user->save();
        $user->roles()->attach($role_contador);

        $user = new User();
        $user->name = "Marisol";
        $user->email = "MarisolO@mercado.es";
        $user->apaterno ="Orantes";
        $user->amaterno ="Lopez";
        $user->fechaNacimiento = "1995-05-17";
        $user->password = Hash::make("cliente111");
        $user->save();
        $user->roles()->attach($role_vendedro);
        $user->roles()->attach($role_comprador);

        $user = new User();
        $user->name = "Luis";
        $user->email = "luisC@mercado.es";
        $user->apaterno ="Chacon";
        $user->amaterno ="Velasquez";
        $user->fechaNacimiento = "1995-05-17";
        $user->password = Hash::make("cliente222");
        $user->save();
        $user->roles()->attach($role_comprador);
    }
}
