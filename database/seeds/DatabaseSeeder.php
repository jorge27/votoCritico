<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create();

    	DB::table('users')->insert([
       		"nombre" => "admin",
       		"email" => "admin@admin.com",
       		"passwd" => password_hash('secret',PASSWORD_BCRYPT),
       		"user_permission" => 1,
        ]);

        for ($i=0; $i < 50; $i++) { 
        	DB::table('users')->insert([
        		"nombre" => $faker->name,
        		"email" => $faker->safeEmail,
        		"passwd" => password_hash('secret',PASSWORD_BCRYPT),
        		"user_permission" => rand(1,5),
        	]);
        }

        /*----  Estados y municipios extraidos desde wikiimco   -----*/
        /*----  http://api.imco.org.mx/wiki/index.php/Listado_de_estados_de_la_Rep%C3%BAblica_Mexicana  ----*/
        /*  Llamar municipios desde el CSV  */
        $file_municipio = dirname(__FILE__).'/municipios.csv';

        if ($handle = fopen($file_municipio ,'r')) {
            while (($data = fgetcsv($handle, 1000, ","))){
                DB::table('municipio')->insert([
                    'id_imco' => $data[1],
                    'nombre' => $data[2],
                    'short_name' => preg_replace('/[^A-Za-z0-9_]/', '',$data[2].$data[1]),
                ]);
            }
        }
        fclose($handle);

        /*  Llamar estados desde el CSV */
        $file_municipio = dirname(__FILE__).'/estados.csv';

        if ($stream = fopen($file_municipio ,'r')) {
            while (($datos = fgetcsv($stream, 1000, ","))){
                DB::table('estado')->insert([
                    'nombre' => $datos[1],
                    'short_name' => $datos[2]
                ]);
            }
        }
        fclose($stream);

        $file_municipio = dirname(__FILE__).'/estado_municipio.csv';

        if ($file = fopen($file_municipio ,'r')) {
            while (($datos = fgetcsv($file, 1000, ","))){
                DB::table('estado_municipio')->insert([
                    'estado' => $datos[1],
                    'municipio' => $datos[0]
                ]);
            }
        }
        fclose($file);

        for ($i=0; $i < 4; $i++) {
            if ($i == 0) {
                $partido = (json_encode(array("PRI")));
            }
            if ($i == 1) {
                $partido = (json_encode(array("PAN")));
            }
            if ($i == 2) {
                $partido = (json_encode(array("PRD")));
            }
            if ($i == 3) {
                $partido = (json_encode(array("MORENA")));
            }
            for ($j=0; $j < 32; $j++) { 
                DB::table('candidato')->insert([
                    "nombre" => $faker->name,
                    "partido" => $partido,
                    "tipo_candidatura" => 2,
                    "email" => $faker->userName.$faker->lastName.$faker->domainWord.'@'.$faker->domainName,
                    "sitio" => (json_encode(array('sitio' => 'www.ejemplo.mx', 'twitter' => '@ejemplo', 'facebook' => 'ejemplo'))),
                    "id_estado" => $j+1,
                    "telefono" => (json_encode(array("123456789"))),
                ]);

                for ($k=0; $k < 4 ; $k++) { 
                    DB::table('candidato')->insert([
                        "nombre" => $faker->name,
                        "partido" => $partido,
                        "tipo_candidatura" => 3,

                        "email" => $faker->userName.$faker->lastName.$faker->domainWord.'@'.$faker->domainName,
                        "sitio" => (json_encode(array('sitio' => 'www.ejemplo.mx', 'twitter' => '@ejemplo', 'facebook' => 'ejemplo'))),
                        "id_estado" => $j+1,
                        "telefono" => (json_encode(array("123456789"))),
                    ]);
                }

                for ($k=0; $k < 4 ; $k++) { 
                    DB::table('candidato')->insert([
                        "nombre" => $faker->name,
                        "partido" => $partido,
                        "tipo_candidatura" => 4,

                        "email" => $faker->userName.$faker->lastName.$faker->domainWord.'@'.$faker->domainName,
                        "sitio" => (json_encode(array('sitio' => 'www.ejemplo.mx', 'twitter' => '@ejemplo', 'facebook' => 'ejemplo'))),
                        "id_estado" => $j+1,
                        "telefono" => (json_encode(array("123456789"))),
                    ]);
                }
            }

            for ($k=0; $k < 2457 ; $k++) { 
                DB::table('candidato')->insert([
                    "nombre" => $faker->name,
                    "partido" => $partido,
                    "tipo_candidatura" => 5,
                    "email" => $faker->userName.$faker->lastName.$faker->domainWord.'@'.$faker->domainName,
                    "sitio" => (json_encode(array('sitio' => 'www.ejemplo.mx', 'twitter' => '@ejemplo', 'facebook' => 'ejemplo'))),
                    "id_estado_municipio" => $k+1,
                    "telefono" => (json_encode(array("123456789"))),
                ]);
            }

        }

        for ($i=0; $i < count(DB::table('candidato')->where(1)->get()) ; $i++) { 
            DB::table('propuestas')->insert([
                    "id_candidato" => $i,
                    "tipo_propuesta" => 'educacion',
                    "propuesta" => $faker->text(2000),
                ]);

                DB::table('propuestas')->insert([
                    "id_candidato" => $i,
                    "tipo_propuesta" => 'seguridad',
                    "propuesta" => $faker->text(2000),
                ]);

                DB::table('propuestas')->insert([
                    "id_candidato" => $i,
                    "tipo_propuesta" => 'comercio',
                    "propuesta" => $faker->text(2000),
                ]);

                DB::table('propuestas')->insert([
                    "id_candidato" => $i,
                    "tipo_propuesta" => 'agricultura',
                    "propuesta" => $faker->text(2000),
                ]);

                DB::table('propuestas')->insert([
                    "id_candidato" => $i,
                    "tipo_propuesta" => 'salud',
                    "propuesta" => $faker->text(2000),
                ]);
        }
        
        echo 'done\n';

    }
}
