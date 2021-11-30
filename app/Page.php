<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['task_id','book_id','total_page']; 

    //Taskモデルとの紐づけ
    public function task(){
        return $this->belongsTo('App\Page');
    }

    public function getData(){
        return $this->book_id; $this->task_id;
    }
}
