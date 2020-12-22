<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoreBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lore_books')->insert([
            'saga' => 'Bungie',
            'column' => 'Bungie',
            'bungie_url'=>'https:www.bungie.net/news',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'La frontera sin ley',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'El Hombre al que llamaban Cayde',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Historias de espectros',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Más Leal',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Cartas de un renegado',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'La Travesía de Eva',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Especialidades de la Aurora',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Polvo',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Información Robada',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'La Hechicera Aunor',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Fragmento de Espectro',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Castas de Eris',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'La paloma y el fénix',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Constelaciones',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Coacción y salida',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Respecto a la estasis',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'I: Chispita y el escriba',
            'column' => '¡La luz!',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Trono',
            'column' => 'Crepúsculo y Ocaso',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Marasenna',
            'column' => 'Crepúsculo y Ocaso',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Los insomnes del arrecife',
            'column' => 'Crepúsculo y Ocaso',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Los archivos de la Armería Oscura',
            'column' => 'Crepúsculo y Ocaso',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Ecdisis',
            'column' => 'Crepúsculo y Ocaso',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'El hombre sin nombre',
            'column' => 'Crepúsculo y Ocaso',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Nada termina',
            'column' => 'Crepúsculo y Ocaso',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Aspecto',
            'column' => 'Crepúsculo y Ocaso',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Revelación',
            'column' => 'Crepúsculo y Ocaso',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'El mentiroso',
            'column' => 'Crepúsculo y Ocaso',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Atentamente, Micah Abram',
            'column' => 'Crepúsculo y Ocaso',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Lamento del legado',
            'column' => 'Crepúsculo y Ocaso',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Un futuro sombrío',
            'column' => 'Crepúsculo y Ocaso',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'El Príncipe desdeñado',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Verdad al poder',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'El Gambito del Vagabundo',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Muro de los Deseos',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'El libro de la Desintegración',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Por cada rosa, un espino',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'El Cronicón',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Confesiones',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Develar',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Los últimos días en Kraken Mare',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Inquisición de los malditos',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Pruebas y tribulaciones',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Una exégeta extraordinaria',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'La otra ladrona de naves',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Llamado del Criptolito',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_books')->insert([
            'saga' => 'Registros del Laboratorio de BRAY, Confidencial',
            'column' => 'La Oscuridad',
            'bungie_url'=>'',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
