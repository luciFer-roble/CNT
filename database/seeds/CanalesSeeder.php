<?php

use Illuminate\Database\Seeder;

class CanalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents(database_path('seeds/jsons/tablesCanales.json'));
        $fields = json_decode($file);

        foreach ($fields as $field) {
            \App\Models\TV\Canales\Canal::create([
                'name' => $field->name,
                'number'=> $field->number,
                'type'=>$field->type,
                'category'=> $field->category,
             ]);
        }
    }
}