<?php

use Illuminate\Database\Seeder;

class PromocionesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents(database_path('seeds/jsons/tablesPromociones.json'));
        $fields = json_decode($file);

        foreach ($fields as $field) {

            // Ingresar el nombre del modelo
            \App\Models\Promociones\Promociones::create([
                'name' => $field->name,
                'copy'=>$field->copy,
                'conditions'=>$field->conditions,
            ]);
        }
    }
}