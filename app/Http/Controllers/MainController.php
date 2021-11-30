<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


// <!-- ここでは関数をまとめます -->

class MainController extends Controller{
    // addtodoのファンクション
    public function index(Request $request){
        $items = DB::table('books')->get();
        return view('main.addtodo', ['items'=>$items, 'msg'=>'フォームを入力してください'] );
    }

    public function post(Request $request){
        $validate_rule =[
            'task' => 'required',
            //'book_id' => 'required',
            'start_page' => 'numeric|between:0,1000',
            'end_page' => 'numeric|between:0,1000',
            'start_date' => 'date',
            'end_date' => 'date'
        ];

        $this->validate($request, $validate_rule);
        
        $items = DB::table('books')->get();

        //以下タスク登録のため
        $param = [
            'task' => $request->task,
            'book_id' => $request->book_id,
            'start_page' => $request->start_page,
            'end_page' => $request->end_page,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'reward' => $request->reward,
            'memo' => $request->memo,
            'understand_id' => $request -> understand_id,
            'status_id' => $request -> status_id
            // 'created_at' => $request -> created_at,
            // 'updated_at' => $request -> updated_at,
            // 'deleted_at' => $request -> deleted_at
        ];

        DB::insert('insert into tasks(task, book_id, start_page, end_page,
                    start_date,end_date, reward, memo, understand_id,status_id) 
                    values (:task, :book_id, :start_page, :end_page,
                    :start_date, :end_date, :reward, :memo, :understand_id, :status_id)', $param);
        //ココマデ

        return view('main.addtodo', ['items'=>$items, 'msg'=>'入力が完了しました！']);
    }


    //viewtasksのファンクション
    public function getview(Request $request){
        $items = DB::table('books')->get();
        $tasks = DB::table('tasks')->get();
        return view('main.viewtasks', ['tasks'=>$tasks, 'items'=>$items, 'msg'=>'フォームを入力してください'] );
    }

    public function viewpost(Request $request){
        $validate_rule =[
            'task' => 'required',
            //'book_id' => 'required',
            'start_page' => 'numeric|between:0,1000',
            'end_page' => 'numeric|between:0,1000',
            'start_date' => 'date',
            'end_date' => 'date'
        ];

        $this->validate($request, $validate_rule);
        
        $items = DB::table('books')->get();
        $tasks = DB::table('tasks')->get();

        //以下タスク登録のため
        $param = [
            'task' => $request->task,
            'book_id' => $request->book_id,
            'start_page' => $request->start_page,
            'end_page' => $request->end_page,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'reward' => $request->reward,
            'memo' => $request->memo,
            'understand_id' => $request -> understand_id,
            'status_id' => $request -> status_id
            // 'created_at' => $request -> created_at,
            // 'updated_at' => $request -> updated_at,
            // 'deleted_at' => $request -> deleted_at
        ];

        DB::update('insert into tasks(task, book_id, start_page, end_page,
                    start_date,end_date, reward, memo, understand_id,status_id) 
                    values (:task, :book_id, :start_page, :end_page,
                    :start_date, :end_date, :reward, :memo, :understand_id, :status_id)', $param);
        //ココマデ

        return view('main.viewtasks', ['tasks'=>$tasks,'items'=>$items, 'msg'=>'入力が完了しました！']);
    }

}