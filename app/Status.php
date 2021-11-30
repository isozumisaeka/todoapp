<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function task(){
        return $this->hasMany('App\Task');
    }
    public function getData(){
        return $this->status_level;
    }
}
