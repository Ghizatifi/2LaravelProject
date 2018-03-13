<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    public $table="articles";
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
//appartient
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
