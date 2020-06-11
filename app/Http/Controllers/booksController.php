<?php

namespace App\Http\Controllers;
use App\books;
use App\cart;
use Illuminate\Http\Request;
use Session;

class booksController extends Controller
{
    public function getindex(){
        $books=books::all();
        return view('index',['books'=>$books]);
    }
    public function getAdd(Request $request ,$id){
        $book =books::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') :null;
        $cart =new cart($oldCart);
        $cart->add($book, $book->id);
        $request ->Session()->put('cart',$cart);
        dd($request->Session()->get('cart'));
        return redirect()-> route('index');


    }
    public function getCart(){
        if(!Session::has('cart')){
            return view('sCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('sCart' ,['products'=>$cart->items ,'total price'=>$cart ->totalPrice]);
    }
}
