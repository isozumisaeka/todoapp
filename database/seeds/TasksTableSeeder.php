<?php

//namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'task' => 'Laravel入門を学習1',
            'book_id' => '1',
            'start_page' => 0,
            'end_page' => 10,
            // 'total_page' => end_page-start_page+1,
            'start_date' => '2021-10-05',
            'start_time' => '15:25',
            // 'end_date' => '2021-10-10',
            'end_time' => '15:25',
            'reward' => 'チョコを食べる',
            'memo' => '頑張る',
            'understand_id' => '1',
            'status_id' => '1',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()

        ];
        DB::table('tasks')->insert($param);

        $param = [
            'task' => 'Laravel入門を学習2',
            'book_id' => '1',
            'start_page' => '11',
            'end_page' => '20',
            // 'start_date' => '2021-10-05 15:25',
            // 'end_date' => '2021-10-10 15:25',
            'start_date' => '2021-12-05',
            'start_time' => '15:25',
            // 'end_date' => '2021-10-10',
            'end_time' => '16:25',
            'reward' => 'おかしを食べる',
            'memo' => '頑張る',
            'understand_id' => '1',
            'status_id' => '1',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()

        ];
        DB::table('tasks')->insert($param);

        $param = [
            'task' => 'Laravel入門を学習3',
            'book_id' => '1',
            'start_page' => '21',
            'end_page' => '30',
            // 'start_date' => '2021-10-05 15:25',
            // 'end_date' => '2021-10-10 15:25',
            'start_date' => '2021-12-05',
            'start_time' => '16:25',
            // 'end_date' => '2021-10-10',
            'end_time' => '17:25',
            'reward' => '居酒屋に行く',
            'memo' => '頑張る',
            'understand_id' => '1',
            'status_id' => '1',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()


        ];
        DB::table('tasks')->insert($param);

        $param = [
            'task' => 'Laravel入門を学習4',
            'book_id' => '1',
            'start_page' => '31',
            'end_page' => '40',
            // 'start_date' => '2021-10-05 15:25',
            // 'end_date' => '2021-10-10 15:25',
            'start_date' => '2021-12-05',
            'start_time' => '17:25',
            // 'end_date' => '2021-10-10',
            'end_time' => '18:25',
            'reward' => '居酒屋に行く',
            'memo' => '頑張る',
            'understand_id' => '1',
            'status_id' => '1',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()


        ];
        DB::table('tasks')->insert($param);

        $param = [
            'task' => 'Laravel入門を学習a',
            'book_id' => '3',
            'start_page' => '41',
            'end_page' => '50',
            // 'start_date' => '2021-10-05 15:25',
            // 'end_date' => '2021-10-10 15:25',
            'start_date' => '2021-12-15',
            'start_time' => '15:25',
            // 'end_date' => '2021-10-10',
            'end_time' => '16:25',
            'reward' => '居酒屋に行く',
            'memo' => '頑張る',
            'understand_id' => '1',
            'status_id' => '2',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()


        ];
        DB::table('tasks')->insert($param);

        $param = [
            'task' => 'Laravel入門を学習b',
            'book_id' => '3',
            'start_page' => '51',
            'end_page' => '60',
            // 'start_date' => '2021-10-05 15:25',
            // 'end_date' => '2021-10-10 15:25',
            'start_date' => '2021-12-15',
            'start_time' => '16:25',
            // 'end_date' => '2021-10-10',
            'end_time' => '17:25',
            'reward' => '居酒屋に行く',
            'memo' => '頑張る',
            'understand_id' => '1',
            'status_id' => '2',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()


        ];
        DB::table('tasks')->insert($param);

        $param = [
            'task' => '学習1',
            'book_id' => '1',
            'start_page' => '51',
            'end_page' => '60',
            // 'start_date' => '2021-10-05 15:25',
            // 'end_date' => '2021-10-10 15:25',
            'start_date' => '2021-12-30',
            'start_time' => '16:25',
            // 'end_date' => '2021-10-10',
            'end_time' => '17:25',
            'reward' => '居酒屋に行く',
            'memo' => '頑張る',
            'understand_id' => '1',
            'status_id' => '2',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()


        ];
        DB::table('tasks')->insert($param);

        $param = [
            'task' => '学習1',
            'book_id' => '3',
            'start_page' => '51',
            'end_page' => '60',
            // 'start_date' => '2021-10-05 15:25',
            // 'end_date' => '2021-10-10 15:25',
            'start_date' => '2021-12-30',
            'start_time' => '16:25',
            // 'end_date' => '2021-10-10',
            'end_time' => '17:25',
            'reward' => '居酒屋に行く',
            'memo' => '頑張る',
            'understand_id' => '1',
            'status_id' => '2',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()


        ];
        DB::table('tasks')->insert($param);
    }
}
