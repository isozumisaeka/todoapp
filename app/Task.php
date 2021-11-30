<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

/**
 * 絞り込み・キーワード検索
 * @param \Illuminate\Database\Eloquent\Builder
 * @param array
 * @return \Illuminate\Database\Eloquent\Builder
 */

class Task extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'task' => 'required|max:50',
        'book_id' => 'required',
        'start_page' => 'required|numeric|between:0,1000',
        'end_page' => 'required|numeric|between:0,1000|gt:start_page',
        'start_date' => 'required|date',
        'start_time' => 'required',
        'end_time' => 'required|after:start_time',
        'understand_id' => 'required',
        'status_id' => 'required'
    );

    public static $message = array(
        'task.required' => 'タスク名は必ず入力してください',
        'task.max' => 'タスク名は全角50文字以内で入力してください',
        'start_page.required' => '開始ページは必ず入力してください',
        'end_page.required' => '終了ページは必ず入力してください',
        'end_page.gt' => '開始ページより前のページ数は登録できません',
        'start_date.required' => '開始日は必ず入力してください',
        // 'start_date.after_or_equal' => '今日より前の日付は登録できません',
        'start_time.required' => '開始時刻は必ず入力してください',
        'end_time.required' => '終了時刻は必ず入力してください',
        'end_time.after' => '開始時刻より前の時間は登録できません',
        // updateに必要
        'understand_id.required' => '理解度は必ず選択してください',
        'status_id.required' => 'ステータスは必ず選択してください'
    );

    use Softdeletes;

    // protected $fillable = ['body'];
    // protected $dates = ['deleted_at'];

    //Bookモデルとの紐づけ
    public function book()
    {
        return $this->belongsTo('App\Book');
    }

    //Statusモデルとの紐づけ
    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    //Understandモデルとの紐づけ
    public function understand()
    {
        return $this->belongsTo('App\Understand');
    }

    //pageモデルとの紐づけ
    public function page()
    {
        return $this->hasMany('App\Page');
    }

    public function getData()
    {
        return $this->book_id;
        $this->task_id;
    }

    //今日より前か調べる,時間が今より前か調べる
    public function scopeDateLessThanToday($query, $date, $time)
    {
        return $query->where('start_date', '<=', $date)->where('end_time', '<', $time)->where('status_id', "1");
    }

    //今日か調べる
    public function scopeDateEqualsToday($query, $date){
        return $query->where('start_date', $date);
    }

    //時間が今より前か調べる
    // public function scopeTimeLessThanNow($query, $time)
    // {
    //     return $query->where('end_time', '<', $time)->where('status_id', "1");
    // }

    //ステータスが完了かどうか調べる
    public function scopeStatusIsTwo($query)
    {
        return $query->where('status_id', "2");
    }

    //今日の日付を取得
    public function getToday($date){
        $today = Carbon::today('Asia/Tokyo'); // 今日
        if($today == $date){
            return true;
        }else{
            return false;
        }
    }
    

}
