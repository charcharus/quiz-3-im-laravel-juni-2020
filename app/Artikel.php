<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Artikel extends Model
{
    protected $table = 'artikel';
    protected $fillable = ['id', 'user_id', 'judul', 'isi', 'slug', 'tag'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
