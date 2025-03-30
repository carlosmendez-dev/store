<?php

namespace App\Http\Controllers;

use App\Models\CartArticle;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cart = Cart::where("user_id",Auth::user()->id)->first();

        $cart_article = new CartArticle();
        $cart_article->cart_id = $cart->id;
        $cart_article->article_id = $request->article_id;
        $cart_article->quantity = 1;
        $cart_article->save();

    }

    /**
     * Display the specified resource.
     */
    public function show(CartArticle $cartArticle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CartArticle $cartArticle)
    {
        $cartArticle->quantity = $request->quantity;
        $cartArticle->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartArticle $cartArticle)
    {
        $cartArticle->delete();
    }
}
