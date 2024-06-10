<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{

public function index()
{
    $data['app'] = DB::select('SELECT * FROM settings');
    $cart = Cart::where('user_id', Auth::id())->get();
    return view('cart.index', compact('cart','data'));
}
}

   /* public function store(Request $request)
    {
        $product = Product::find($request->product_id);
        if (!$product) {
            return redirect()->route('cart.index')->with('error', 'Product not found.');
        }

        $cartItem = Cart::where('product_id', $product->id)
            ->where('user_id', Auth::id())
            ->first();

        if ($cartItem) {
            $cartItem->quantity += $request->quantity;
            $cartItem->save();
        } else {
            Cart::create([
                'product_id' => $product->id,
                'user_id' => Auth::id(),
                'quantity' => $request->quantity,
            ]);
        }

        return redirect()->route('cart.index')->with('success', 'Product added to cart.');
    }

    public function destroy($id)
    {
        $cartItem = Cart::where('id', $id)
            ->where('user_id', Auth::id())
            
            ->first();

        if ($cartItem) {
            $cartItem->delete();
        }

        return redirect()->route('cart.index')->with('success', 'Product removed from cart.');
    }
}*/