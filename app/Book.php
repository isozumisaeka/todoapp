<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    protected $guarded = array('book_id');
    
    use SoftDeletes;

    public static $rules = array(
        'title' => 'required|max:30',      
        'start_page' => 'required|numeric|between:0,2000',
        'end_page' => 'required|numeric|between:0,2000|gt:start_page'
    );

    public static $message = array(
        'title.required' => '本のタイトルは必ず入力してください',
        'title.max' => '本のタイトルは全角30文字以内で入力してください',
        'start_page.required' => '開始ページは必ず入力してください',
        // 'start_page.before' => '開始ページは必ず入力してください',
        'end_page.required' => '終了ページは必ず入力してください',
        'end_page.gt' => '開始ページより大きい数字を入力してください'

    );


    //Taskモデルとの紐づけ
    public function task(){
        return $this->hasMany('App\Task');
    }
    public function getData(){
        return $this->title; 
    }

    public function getData2(){
        return $this->img;
    }

    //総ページ数を出す
    public function getTotal($a, $b, $c){
        $totalpageall = $a + $b + $c;
        return $totalpageall;
    }

    public function getTitle($id){
        // dd('$id');

        $ids = Book::where('id', $id)->first();
        // dd($ids);
        return $ids;
    }

}
