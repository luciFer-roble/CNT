<?php

use Illuminate\Database\Seeder;

class TVPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents(database_path('seeds/jsons/tablesPlanTV.json'));
        $fields = json_decode($file);

        foreach ($fields as $field) {
            \App\Models\TV\TVPlan::create([
                'name' => $field->name,
                'copy' => $field->copy,
                'benefits' => $field->benefits,
                'cost' => $field->cost,
                'conditions' => $field->conditions,
            ]);
        }
    }
}
