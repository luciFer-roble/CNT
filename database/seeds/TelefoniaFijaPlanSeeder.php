<?php

use Illuminate\Database\Seeder;

class TelefoniaFijaPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents(database_path('seeds/jsons/tablesPlanTelefoníaFija.json'));
        $fields = json_decode($file);

        foreach ($fields as $field) {
            App\Models\TelefoniaFija\TelefoniaFijaPlan::create([
                'name' => $field->name,
                'copy'=> $field->copy,
                'benefits'=>$field->benefits,
                'note'=> $field->note,
                'category'=> $field->category,
                'conditions' => $field->conditions,
            ]);
        }
    }
}