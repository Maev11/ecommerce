<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categoria = new Categoria();
        $categoria->NameCate = "Deportes";
        $categoria->Description = "Productos que te haran avanzar en cada instante";
        $categoria->Status = true;
        $categoria->save();

        $categoria = new Categoria();
        $categoria->NameCate = "Muebles";
        $categoria->Description = "Todo lo que necesitas para amueblar tu hogar";
        $categoria->Status = true;
        $categoria->save();

        $categoria = new Categoria();
        $categoria->NameCate = "Cocina";
        $categoria->Description = "Todo lo necesario para tener esa cocina integral que tanto necesitas";
        $categoria->Status = true;
        $categoria->save();

        $categoria = new Categoria();
        $categoria->NameCate = "Telefonia";
        $categoria->Description = "Productos de alta tecnologia para que no te quedes incomuncado";
        $categoria->Status = true;
        $categoria->save();

    }
}
