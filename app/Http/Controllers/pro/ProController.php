<?php


namespace App\Http\Controllers\Pro;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class ProController extends Controller
{
    public function index()
    {
        $url = url('/admin/dashboard');
        $title = "Product Category";
        $data = compact('url', 'title');
        return view('pro.create')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mrp_price' => 'required',
            'special_price' => 'required',
            'availability' => 'required',
            'sku' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'other_images.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $imageFileName = '';
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageFileName);
        } else {
            throw new \Exception('Please upload an image file.');
        }

        $input=$request->all();
        $other_images=array();
        if($files=$request->file('other_images')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move('image',$name);
                $other_images[]=$name;
            }
            
        }
$product=new product();
        $product->name = $request->input('name');
        $product->mrp_price = $request->input('mrp_price');
        $product->special_price = $request->input('special_price');
        $product->availability = $request->input('availability');
        $product->sku = $request->input('sku');
        $product->description = $request->input('description');
        $product->stock = $request->input('stock');
        $product->image = $imageFileName;
        $product->other_images=implode("|",$other_images);
        $product->status = $request->input('status');
        $product->save();
        return redirect()->route('pro.view')->with('success', 'Product uploaded successfully.');
    }

    public function view(Request $request)
    {
        $search = $request->input('search') ?? "";
        $status = $request->input('status') ?? "";

        $query = Product::query();

        if ($search != "") {
            $query->where('name', 'LIKE', "%$search%");
        }

        if ($status != "") {
            $query->where('status', $status);
        }

        $products = $query->get();

        $data = compact('products', 'search', 'status');
        return view('pro.view')->with($data);
    }

    public function delete($id)
    {
        $product = Product::find($id);
        if (!is_null($product)) {
            $product->delete();
        }
        return redirect()->route('pro.view')->with('error', 'Product deleted successfully.');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        if (is_null($product)) {
            return redirect()->route('pro.view');
        } else {
            $title = "Update Product";
            $url = url('/products/update') . "/" . $id;
            $data = compact('product', 'url', 'title');
            return view('pro.update')->with($data);
        }
    }

    public function update($id, Request $request)
    {
        $product = Product::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'mrp_price' => 'required',
            'special_price' => 'required',
            'availability' => 'required',
            'sku' => 'required',
            'description' => 'required',
            'stock' => 'required',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'other_images.*' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|in:active,inactive',
        ]);

        $product->name = $request->input('name');
        $product->mrp_price = $request->input('mrp_price');
        $product->special_price = $request->input('special_price');
        $product->availability = $request->input('availability');
        $product->sku = $request->input('sku');
        $product->description = $request->input('description');
        $product->stock = $request->input('stock');
        $product->status = $request->input('status');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }
    
     $input = $request->all();
     $other_images = array();
     if ($files = $request->file('other_images')) {
         foreach ($files as $file) {
             $name = $file->getClientOriginalName();
             $file->move('images', $name);
             $other_images[] = $name;
             $product->other_images = json_encode($other_images);
         }
     }

        $product->save();

        return redirect()->route('pro.view')->with('success', 'Product updated successfully.');
    }
}
    
