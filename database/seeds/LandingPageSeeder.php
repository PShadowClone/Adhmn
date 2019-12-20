<?php

use Illuminate\Database\Seeder;

class LandingPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Core\Settings\Models\LandingPage::create(['KEY' => 'SLIDER']);
        \Core\Settings\Models\LandingPage::create(['KEY' => 'WHO_WE_ARE']);
        \Core\Settings\Models\LandingPage::create(['KEY' => 'SERVICES']);
        \Core\Settings\Models\LandingPage::create(['KEY' => 'WORKS']);
        \Core\Settings\Models\LandingPage::create(['KEY' => 'PARTNERS']);
    }
}
