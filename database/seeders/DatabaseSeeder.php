<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
        DB::table('authors')->insert([
            ['id' => 1, 'name' => 'Robert Pirsig'],
            ['id' => 2, 'name' => 'Franz Kafka'],
            ['id' => 3, 'name' => 'Arthur Clarke'],
            ['id' => 4, 'name' => 'Viktor Pelevin'],
            ['id' => 5, 'name' => 'Dmitry Glukhovsky'],
        ]);

        DB::table('books')->insert([
            ['title' => 'Zen and the Art of Motorcycle Maintenance', 'author_id' => 1],
            ['title' => 'Process', 'author_id' => 2],
            ['title' => 'Childhood\'s End', 'author_id' => 3],
            ['title' => '2001: A Space Odyssey', 'author_id' => 3],
            ['title' => 'A Fall of Moondust', 'author_id' => 3],
            ['title' => 'Generation P', 'author_id' => 4],
            ['title' => 'Omon Ra', 'author_id' => 4],
            ['title' => 'Metro 2035', 'author_id' => 5],
        ]);
    }
}
