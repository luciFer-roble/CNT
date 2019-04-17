<?php

use Illuminate\Database\Seeder;

class TarifasInternetFijoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents(database_path('seeds/jsons/tablesTarifasInternetFijo.json'));
        $fields = json_decode($file);

        foreach ($fields as $field) {
            \App\Models\InternetFijo\TarifasInternetFijo::create([
                'name' => $field->name,
                'type' => $field->type,
                'technology' => $field->technology,
                'cost' => $field->cost,
                'download' => $field->download,
                'upload' => $field->upload,
                'instalation_cost' => $field->instalation_cost,
            ]);
        }
    }
}
