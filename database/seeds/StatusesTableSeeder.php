<?php

//namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'status_flg' => '1',
            'status_level'=>'進行中',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()

        ];
        DB::table('statuses')->insert($param);

        $param = [
            'status_flg' => '2',
            'status_level'=>'完了',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()

        ];
        DB::table('statuses')->insert($param);

        $param = [
            'status_flg' => '3',
            'status_level'=>'期限切れ',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()

        ];
        DB::table('statuses')->insert($param);
    }
}
