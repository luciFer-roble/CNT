<?php

use Illuminate\Database\Seeder;

class MobilePriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents(database_path('seeds/jsons/tablesTarifasPlanesMovil.json'));
        $fields = json_decode($file);

        foreach ($fields as $field) {
            \App\Models\Mobile\MobilePrice::create([
                'name' => $field->name,
                'cost' => $field->cost,
                'gigs' => $field->gigs,
                'whatsapp' => $field->wa,
                'facebook' => $field->fb,
                'instagram' => $field->inst,
                'twitter' => $field->tw,
                'deezer' => $field->dee,
                'minutes' => $field->minutes,
                'free_minutes' => $field->free_minutes,
            ]);
        }
    }
}
