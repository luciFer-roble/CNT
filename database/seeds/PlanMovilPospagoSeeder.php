<?php

use Illuminate\Database\Seeder;

class PlanMovilPospagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents(database_path('seeds/jsons/tablesPlanMovilPospago.json'));
        $fields = json_decode($file);

        foreach ($fields as $field) {
           \App\Models\Mobile\PlanMovilPospago::create([
               'name' => $field->name,
               'copy' => $field->copy,
               'benefits' => $field->benefits,
               'conditions' => $field->conditions,
            ]);
        }
    }
}
