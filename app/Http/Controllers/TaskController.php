<?php

namespace App\Http\Controllers;

use App\Task;
use App\Book;
//use App\Page;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(Request $request){
        // ペジネーション用
        $tasks = Task::all();
        $books = Book::all();
        //ソート用
        if(!$request->sort) {
            $sort = 'id';
        } else {
            $sort = $request->sort;
        }
        //ソート用
        $items = Task::orderBy($sort,'asc')->orderBy('start_date', 'asc')->orderBy('start_time', 'asc')->simplePaginate(5);
        
         // 今日のタスクか調べる
         $date = Carbon::today('Asia/Tokyo'); // 今日
         $i = Task::dateEqualsToday($date)->get();
        
        $param = ['sort'=>$sort,'items'=>$items,'books'=>$books,'tasks'=>$tasks, 'i'=>$i,'msg'=>'フォームを入力してください'];

        //dd($tasks);
        return view('main.viewtasks', $param );
    }

    public function checkTheDate(Request $request){
        //期限切れ対応
        $date = Carbon::today('Asia/Tokyo'); // 今日
        $time =  Carbon::now()->toTimeString();
        
        Task::dateLessThanToday($date,$time)->update(['status_id' => 3]);
        
        return view('main.index');
    }

    //ステータス表示用
    public function check(Request $request){
        //booksテーブルの情報
        $books = Book::all();
        //タスクから必要情報を取り出す
        $tasks = Task::selectRaw('task, book_id, start_date, start_time, end_time, end_page, start_page,status_id, end_page - start_page +1 AS total')->orderBy('status_id','desc')->get();

        // 今日のタスクか調べる
        $date = Carbon::today('Asia/Tokyo'); // 今日
        $items = Task::dateEqualsToday($date)->get();
        
        $param = ['tasks'=>$tasks, 'books'=>$books, 'items'=>$items];
        return view('main.viewall', $param );
        
    }

    //タスク追加用
    public function add(Request $request){
        $books = Book::all();
        return view('main.addtodo',['books'=>$books,'msg'=>'フォームを入力してください']);
    }

    public function create(Request $request){
        $books = Book::all();
        $this->validate($request, Task::$rules, Task::$message);
        $task = new Task;
        $form = $request->all();
        unset($form['_token']);
        $task->fill($form)->save();
        return view('main.addtodo',  ['books'=>$books,'msg'=>'登録が完了しました！']);
    }

    //タスク削除用
    public function delete($id){
        $task = \App\Task::find($id);
        $task->delete();
        return redirect('/viewtasks');
    }

   
    //更新機能
    public function edit(Request $request){
        $tasks = Task::all();
        $books = Book::all();
        $item = Task::find($request->id);
        //ソート用
        if(!$request->sort) {
            $sort = 'id';
        } else {
            $sort = $request->sort;
        }
        $items = Task::orderBy($sort,'desc')->simplePaginate(5);
        $params = ['form'=> $item, 'books'=>$books,'tasks'=>$tasks, 'items'=>$items,'sort'=>$sort];
        //dd($item);
        return view('main.edit', $params);
    }

    public function update(Request $request){
        $this->validate($request, Task::$rules,Task::$message);
        $item = Task::find($request->id);
        $form = $request->all();
        unset($form['_token']);
        $item->fill($form)->save();
        //ページ情報の更新
        // $page = new Page;
        // $form = $request->all();
        // unset($form['_token']);
        // $page->fill($form)->save();
        // dd($page);
        return redirect('/viewtasks');
    }

    //status用
    public function status(Request $request){
        // ペジネーション用
        $books = Book::all();
        $tasks = Task::all();
        $items = Task::orderBy('start_date','asc')->orderBy('start_time', 'asc')->get();
        // $items = Task::orderBy('start_date', 'asc')->orderBy($sort,'asc')->simplePaginate(3);
        $param = ['books'=>$books,'items'=>$items, 'tasks'=>$tasks];
        return view('main.viewstatus', $param );
        //return view('main.viewtasks', ['books'=>$books,'tasks'=>$tasks, 'items'=>$items, 'msg'=>'フォームを入力してください'] );
    }

    //understand用
    public function understand(Request $request){
        $tasks = Task::all();
        $books = Book::all();
        //ソート用
        if(!$request->sort) {
            $sort = 'id';
        } else {
            $sort = $request->sort;
        }
        //ソートを分ける
        // $tasks = Task::orderBy($sort,'desc');
        $items = Task::orderBy($sort,'asc')->get();;
        $param = ['sort'=>$sort,'items'=>$items,'books'=>$books,'tasks'=>$tasks];

        //dd($tasks);
        return view('main.viewunderstand', $param );
    }


    //一旦無視
    public function find(Request $request){
        $msg = '?????????????';
        return view('main.viewtasks', ['input.value()'=>'','msg'=>$msg]);
    }

    //一旦無視
    public function search(Request $request){
        $checked = array('understand'=>$request->input('understand'));
        $books = Book::all();
        $msg = '?????????????';
        dd($books);
        // $tasks = Task::where('task', $request->input)->get();
        // $param = ['input' =>$request->input, 'tasks'=>$tasks];
        return view('result.viewresult',['msg'=>$msg]);
    }

    public function getTitle($id){
        dd('$id');

        $ids = Book::where('id', $id)->get();
        return $ids;
    }

}
