<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Tag;

class Article extends Model
{
    protected $with = ["tag"];

    public function tag(){
        return $this->belongsTo(Tag::class);
    }
}
