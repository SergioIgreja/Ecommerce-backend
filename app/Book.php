<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['author_id', 'title', 'genre_id', 'description', 'cover', 'price'];
    //
    public function genre() {
        return $this->belongsTo('App\Genre');
    }

    public function author() {
        return $this->belongsTo('App\Author');
    }
}
