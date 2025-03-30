<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Cart;
use App\Models\Article;

class CartArticle extends Model
{
    protected $with = ["cart","article"];
    
    public function cart(){
        return $this->belongsTo(Cart::class);
    }

    public function article(){
        return $this->belongsTo(Article::class);
    }
}
