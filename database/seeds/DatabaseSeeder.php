<?php
 //namespace Database\seeds;
//namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BooksTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(UnderstandsTableSeeder::class);
        $this->call(TasksTableSeeder::class);
        //$this->call(PageTableSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
