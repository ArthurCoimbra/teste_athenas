<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categorias')->insert([
        ['nome' => 'Admin', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'Gerente', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'Normal', 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")]
      ]);

      DB::table('pessoas')->insert([
        ['nome' => 'Jorge da Silva', 'email' => 'jorge@terra.com.br', 'categoria_id' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'Flavia Monteiro', 'email' => 'flavia@globo.com', 'categoria_id' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'Marcos Frota Ribeiro', 'email' => 'ribeiro@gmail.com', 'categoria_id' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'Raphael Souza Santos', 'email' => 'rsantos@gmail.com', 'categoria_id' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'Pedro Paulo Mota', 'email' => 'ppmota@gmail.com', 'categoria_id' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'Winder Carvalho da Silva', 'email' => 'winder@hotmail.com', 'categoria_id' => 3, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'Maria da Penha Albuquerque', 'email' => 'mpa@hotmail.com', 'categoria_id' => 3, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'Rafael Garcia Souza', 'email' => 'rgsouza@hotmail.com', 'categoria_id' => 3, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'Tabata Costa', 'email' => 'tabata_costa@gmail.com', 'categoria_id' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'Ronil Camarote', 'email' => 'camarote@terra.com.br', 'categoria_id' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'Joaquim Barbosa', 'email' => 'barbosa@globo.com', 'categoria_id' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'Eveline Maria Alcantra', 'email' => 'ev_alcantra@gmail.com', 'categoria_id' => 2, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'João Paulo Vieira', 'email' => 'jpvieria@gmail.com', 'categoria_id' => 1, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ['nome' => 'Carla Zamborlini', 'email' => 'zamborlini@terra.com.br', 'categoria_id' => 3, 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],

      ]);
    }
}
