<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Session;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $data['app'] = DB::select('SELECT * FROM settings');
        return view('products', compact('data'))->with('products', Product::all());
    }

    public function cart()
    {
        $data['app'] = DB::select('SELECT * FROM settings');
        return view('cart', compact('data'));
        //return view('cart');
    }

    public function addToCart(Product $product)
    {
        $cart = session()->get('cart');
        if(!$cart){
            $cart=[
                $product->id=>[
                    'name'=>$product->name,
                    'quantity'=>1,
                    'special_price'=>$product->special_price,
                    'image'=>$product->image,
                ]
                ];
                session()->put('cart', $cart);
                return redirect()->route('cart')->with('success',"Added to cart");
        }
        if(isset($cart[$product->id])){
            $cart[$product->id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->route('cart')->with('success',"Added to cart");
        }

        $cart[$product->id] = [
                'name'=>$product->name,
                'quantity'=>1,
                'special_price'=>$product->special_price,
                'image'=>$product->image,
        ];
        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success',"Added to cart");
    }

    public function changeQty(Request $request, Product $product)
    {
        $cart = session()->get('cart');
        if ($request->change_to === 'down') {
            if (isset($cart[$product->id])) {
                if ($cart[$product->id]['quantity'] > 1) {
                    $cart[$product->id]['quantity']--;
                    return $this->setSessionAndReturnResponse($cart);
                } else {
                    return $this->removeFromCart($product->id);
                }
            }
        } else {
            if (isset($cart[$product->id])) {
                $cart[$product->id]['quantity']++;
                return $this->setSessionAndReturnResponse($cart);
            }
        }

        return back();
    }

    public function removeFromCart($id)
    {
       $cart=session()->get('cart');
       if(isset($cart[$id])){
        unset($cart[$id]);
session()->put('cart',$cart);
       }
       return redirect()->back()->with('success',"Removed From cart");
    }

    protected function sessionData(Product $product)
    {
       
    }

    protected function setSessionAndReturnResponse($cart)
    {
        session()->put('cart', $cart);
        return redirect()->route('cart')->with('success', "Added to Cart");
}


}
