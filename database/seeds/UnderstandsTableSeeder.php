<?php

//namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnderstandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'understand_flg' => '1',
            'understand_level' => '理解不能',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()

        ];
        DB::table('understands')->insert($param);

        $param = [
            'understand_flg' => '2',
            'understand_level' => 'やや理解している',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()

        ];
        DB::table('understands')->insert($param);

        $param = [
            'understand_flg' => '3',
            'understand_level' => '普通',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()

        ];
        DB::table('understands')->insert($param);

        $param = [
            'understand_flg' => '4',
            'understand_level' => '結構理解している',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()

        ];
        DB::table('understands')->insert($param);

        $param = [
            'understand_flg' => '5',
            'understand_level' => '完全に理解している',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()
        ];
        DB::table('understands')->insert($param);
    }
}
