<?php

//namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'img' => 'laravel.jpg',
            'title' => 'Laravel入門',
            'start_page' => '0',
            'end_page' => '351',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()

        ];
        DB::table('books')->insert($param);

        $param = [
            'img' => 'java.jpg',
            'title' => 'スッキリわかるJava入門 第3版',
            'start_page' => '0',
            'end_page' => '768',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()

        ];
        DB::table('books')->insert($param);

        $param = [
            'img' => 'kihonjyouhou.jpg',
            'title' => 'キタミ式イラストIT塾 基本情報技術者',
            'start_page' => '0',
            'end_page' => '728',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()

        ];
        DB::table('books')->insert($param);
        
        $param = [
            'img' => 'javascript.jpg',
            'title' => '確かな力が身につくJavaScript「超」入門 第2版',
            'start_page' => '0',
            'end_page' => '336',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()

        ];
        DB::table('books')->insert($param);
        
        $param = [
            'img' => 'react.jpg',
            'title' => 'React.js&Next.js超入門',
            'start_page' => '0',
            'end_page' => '455',
            'created_at'=> new DateTime(),
            'updated_at'=> new DateTime()

        ];
        DB::table('books')->insert($param);
    }
}
