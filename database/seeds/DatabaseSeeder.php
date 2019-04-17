<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(TerminalSeeder::class);
         $this->call(MobilePriceSeeder::class);
         $this->call(TVPlanSeeder::class);
         $this->call(CanalesSeeder::class);
         $this->call(TelefoniaFijaPlanSeeder::class);
         $this->call(PlanMovilPospagoSeeder::class);
         $this->call(PlanMovilPrepagoSeeder::class);
         $this->call(TarifasInternetFijoSeeder::class);
    }
}
