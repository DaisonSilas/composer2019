<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = array('comentario', 'post_id');

    public function post(){
        return $this->belongsTo('App\Post');
    }
}
