<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
            'site_name' => "laravel's blog",
            'address'  => 'Russia, Petersburg',
            'contact_number' => '8 900 7582 4844',
            'contact_email'  => 'info@laravel_blog.com'
        ]);
    }
}
