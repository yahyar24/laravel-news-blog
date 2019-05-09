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
            'contact_email'  => 'info@laravel_blog.com',
            'iphone'  => 'iphone1',
            'iphone_b' => 'iphone_b',
            'anderwed' =>'anderwed',
            'anderwed_b' =>'anderwed_b',
            'rebot' =>'rebot',
            'rebot_b' =>'rebot_b',
            'esay' =>'esay',
            'esay_b' =>'esay_b',
            'amet' =>'amet',
            'amet_bo' =>'amet_bo',
            'amet_b' =>'amet_b'
        ]);
    }
}
