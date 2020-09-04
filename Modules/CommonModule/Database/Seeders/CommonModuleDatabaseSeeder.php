<?php

namespace Modules\CommonModule\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\CommonModule\Entities\Apps;
use Modules\CommonModule\Entities\Language;

class CommonModuleDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'lang' => 'de',
            'display_lang' => 'German',
            'active' => 1
        ]);
        Language::create([
            'lang' => 'en',
            'display_lang' => 'English',
            'active' => 0
        ]);

        Language::create([
            'lang' => 'ar',
            'display_lang' => 'Arabic',
            'active' => 0
        ]);



        // Create default apps
        Apps::create([
            'key' => 'home_app',
            'title' => 'home',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'trips_app',
            'title' => 'trips',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'transfers_app',
            'title' => 'transfers',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'blog_app',
            'title' => 'blog',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'widgets_app',
            'title' => 'widgets',
            'active' => 1
        ]);
        Apps::create([
            'key' => 'booking_app',
            'title' => 'booking',
            'active' => 1
        ]);


    }
}
