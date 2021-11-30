<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Understand extends Model
{
    //
    public function task(){
        return $this->hasMany('App\Task');
    }
    public function getData(){
        return $this->understand_level;
    }
}
