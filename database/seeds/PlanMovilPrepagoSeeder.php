<?php

use Illuminate\Database\Seeder;

class PlanMovilPrepagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents(database_path('seeds/jsons/tablesPlanMovilPrepago.json'));
        $fields = json_decode($file);

        foreach ($fields as $field) {
            \App\Models\Mobile\PlanMovilPrepago::create([
                'name' => $field->name,
                'copy' => $field->copy,
                'benefits' => $field->benefits,
                'note' => $field->note,
                'price' => $field->price,
                'tariff_ec' => $field->tariff_ec,
                'tariff_out' => $field->tariff_out,
                'conditions' => $field->conditions,
            ]);
        }
    }
}
