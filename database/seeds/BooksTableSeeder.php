<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Book::create([
            'number_man' => "1",
            'number_ch' => "1",
            'cheak_one' => "larav",
            "cheak_last" =>"ls"

        ]);
      
    }
}
