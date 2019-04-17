<?php

use Illuminate\Database\Seeder;

class TerminalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents(database_path('seeds/jsons/tablesTerminales.json'));
        $fields = json_decode($file);

        foreach ($fields as $field) {

            // Ingresar el nombre del modelo
            \App\Models\Terminales\Terminal::create([
                'name' => $field->name,
                'brand' => $field->brand,
                'copy' => $field->copy,
                'state' => $field->state,
                'cash_price' => $field->cash_price,
                'from_price' => $field->from_price,
                'screen_size' => $field->screen_size,
                'front_cam' => $field->front_cam,
                'back_cam' => $field->back_cam,
                'os' => $field->os,
                'memory' => $field->memory,
                'extensible_memory' => $field->extensible_memory,
                'height' => $field->height,
                'width' => $field->width,
                'depth' => $field->depth,
                'battery' => $field->battery,
                'colors' => $field->colors,
                'img' => $field->img
            ]);
        }
    }
}
