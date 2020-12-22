<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LoreItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lore_items')->insert([
            'name' => 'Buen Negocio',
            'quality' => 'Excepcional',
            'item_lore' => '"Me encanta mi trabajo". "¡Espero que estés contento!". Oigo antes de que saliera corriendo. Fue como de película de guerra de antes de la Edad de Oro, ya sabes, cuando el amigo del héroe muere en un estallido de gloria para que se pueda vengar su muerte. Solo que no murió. Murieron ellos. El arma se movía como si la agitara un niño. No apuntaba a nada pero le daba a todo. Las arañas huían. Cuando se detuvo, nada se movía. Nos salvó. Me acerqué a ella, muy despacio, comprobando el equipo y lo único que pude balbucear fue: "Eso fue... increíble". Me miró fríamente, bajó el arma y dijo: "No hace falta que me lo digas".',
            'drop_from' => 'Engramas excepcionales; objetos soltados extremadamente escasos.',
            'img_url' => 'https://www.bungie.net/common/destiny2_content/icons/f997235a74d948f98c0f83817d8a5143.jpg',
            'fk_id_seasons' => 1,
            'fk_id_weapon' => 1,
            'fk_id_armor' => null,
            'fk_id_accessory' => null,
            'fk_id_book' => null,
            'updated_by' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('lore_items')->insert([
            'name' => 'Sturm',
            'quality' => 'Excepcional',
            'item_lore' => 'Estas antiguas pistolas ceremoniales datan de principios de la Edad de Oro. Una inscripción desgastada reza: "Para Sigrun, de Victor". "¡Por favor! No lo entiendes. Debo estar en esa nave". El guardia sonrió a Sigrun con una condescendencia amable. "Eso no puede ser, señora". Entendió por qué lo decía; todos los colonos habían sido criogenizados dos semanas antes, pero veía a la tripulación saludando para las fotos. ¡Estaban despiertos! Ella también podía estarlo. "Tengo que estar en esa nave", insistió, inclinándose alrededor del guardia. Aún había tiempo. Encontraría el horrible ataúd criogénico en el que habían cargado a Victor. Se arrodillaría ante él y le suplicaría que la perdonara. No la oiría, pero todavía no se había ido. "Tengo que pedirle que retroceda, señora". "¡Capitán Jacobson!". Sigrun se zafó a toda prisa del guardia. "¡Soy una colona! ¡No puede irse sin mí!"',
            'drop_from' => 'Monumento a las luces perdidas',
            'img_url' => 'https://www.bungie.net/common/destiny2_content/icons/1d3733c665f01b4adea1c5f65558ddde.jpg',
            'fk_id_seasons' => 1,
            'fk_id_weapon' => null,
            'fk_id_armor' => null,
            'fk_id_accessory' => null,
            'fk_id_book' => null,
            'updated_by' => 1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
