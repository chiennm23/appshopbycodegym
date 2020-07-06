<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function addToCart($idProduct)
    {
        $product = $this->product->findOrFail($idProduct);
        $oldCart = Session::get('cart');

        $newCart = new Cart($oldCart);
        $newCart->add($product);

        Session::put('cart', $newCart);
        Session::flash('add-to-cart-success', 'Them sp vao gio hang thang cong');
        return back();
    }

    public function index()
    {
        $cart = Session::get('cart');
        return view('cart.index', compact('cart'));
    }
}
