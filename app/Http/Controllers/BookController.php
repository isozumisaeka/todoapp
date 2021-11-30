<?php

namespace App\Http\Controllers;

use App\Book;
use App\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index(Request $request){
        $books = Book::all();
        //dd($books);
        //$books = DB::table('books')->get();
        return view('main.addbook', ['books'=>$books, 'msg'=>'フォームを入力してください'] );
    }

    // 本を登録するため
    public function add(Request $request){
        return view('main.addbook',['msg'=>'フォームを入力してください']);
    }

    public function create(Request $request){
        //Bookクラスのインスタンス化とバリデーション
        $book = new Book;
        $this->validate($request, Book::$rules, Book::$message);
        //画像登録
        //画像登録は任意なので、もし画像が登録されなかったらnoimage.pngを登録する（デフォルト）
        // dd(isset($request['photo']));
        if(isset($request['photo'])){
            $filename = $request->photo->getClientOriginalName();
            $img = $request->photo->storeAs('', $filename, 'public');
        }else{
            $img = 'noimage.png';
        }
        //DBに登録
        $book->img = $img;
        $book->title = $request->title;
        $book->start_page = $request->start_page;
        $book->end_page = $request->end_page;
        $book->save();

        return view('main.addbook',  ['msg'=>'登録が完了しました！']);
    }

    //本の一覧を表示する
    public function viewbooks(Request $request){
       $books = Book::all();
       return view('main.viewbooks', ['books'=>$books]);
    }

    //本を削除する
    public function deletebook(Request $request){
        Task::where('book_id', $request->id)->delete();
        Book::find($request->id)->delete();
        return redirect('/viewbooks');
    }


}
