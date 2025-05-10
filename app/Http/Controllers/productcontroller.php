<?php

namespace App\Http\Controllers;


use App\Models\product;
use Illuminate\Http\Request;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;


class productController extends Controller
{

    function index()
    {
        $data= product::all();                              // pull all rows from products table uing eloquent (ORM= OBJECT RELATIONAL MAPPER) = A tools that lets you interact with the database using php rather then using raw queries.
        return view('product',['products'=>$data]);         //$data to store collection of product object
        }                                                   //return view = loads a blade view named product.blade.php and passe it to the $data under the variale name proucts.
                                                            // product = is product view uses the variable name produts


    function detail($id)                                    //it takes "id" as a paramete
    {
        $data =product::find($id);
        return view('detail',['product'=>$data]);                       // to fetch the single record from produts table
    }                                                                    //reutn directly could be null ifnot found the poduct

    function search(Request $req){
        return $req->input();
        return $data= product::where('name', 'like' , '%'.$req->input('query').'%')->get();
        return view('search',['$products'=>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('/login');
        }

    }
    static function cartItem()
    {
        $userId= Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function cartList()
    {
        $userId= Session::get('user')['id'];
        $data= DB::table('cart')
        ->join('products','cart.product_id','products.id')
        ->Select('products.*')
        ->where('cart.user_id',$userId)
        ->get();

        return view('cartlist',['products'=>$data]);
    }

}
