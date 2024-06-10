<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use DB;
use Session;
use App\Models\checkout;
use Illuminate\Support\Facades\Auth;

class checkoutController extends Controller
{

    public function index()
    {
        $data['app'] = DB::select('SELECT * FROM settings');
        return view('checkout.create', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'email' => 'required',
            'number' => 'required',
            'description' => 'required',
        ]);

       

        $checkout = new checkout();
        $checkout->fname = $request->input('fname');
        $checkout->lname = $request->input('lname');
        $checkout->address = $request->input('address');
        $checkout->city = $request->input('city');
        $checkout->state = $request->input('state');
        $checkout->zip = $request->input('zip');
        $checkout->email = $request->input('email');
        $checkout->number = $request->input('number');
        $checkout->description = $request->input('description');
        $checkout->save();
        return redirect()->route('checkout.view')->with('success', 'checkout uploaded successfully.');
    }

//     public function view(Request $request)
//     {
//         $search = $request->input('search') ?? "";
//         $status = $request->input('status') ?? "";

//         $query = checkout::query();

//         if ($search != "") {
//             $query->where('title', 'LIKE', "%$search%");
//         }

//         if ($status != "") {
//             $query->where('status', $status);
//         }

//         $checkouts = $query->get();

//         $data = compact('checkouts', 'search', 'status');
//         return view('checkout/view')->with($data);
//     }

//     public function delete($id)
//     {
//         $checkout = checkout::find($id);
//         if (!is_null($checkout)) {
//             $checkout->delete();
//         }
//         return redirect()->route('checkout.view')->with('error', 'checkout deleted successfully.');
//     }

//     public function edit($id)
//     {
//         $checkout = checkout::find($id);
//         if (is_null($checkout)) {
//             return redirect('view');
//         } else {
//             $title = "Update checkout";
//             $url = url('/checkouts/update') . "/" . $id;
//             $data = compact('checkout', 'url', 'title');
//             return view('checkout.update')->with($data);
//         }
//     }



//     public function update($id, Request $request)
// {
//     $checkout = checkout::findOrFail($id);

//     $request->validate([
//         'name' => 'required',
//         'shortdescription' => 'required',
//         'description' => 'required',
//         'status' => 'required|in:active,inactive',
//     ]);

//     try {
//         $checkout->name = $request->input('name');
//         $checkout->shortdescription = $request->input('shortdescription');
//         $checkout->description = $request->input('description');
//         $checkout->status = $request->input('status');

//         if ($request->hasFile('image')) {
//             $image = $request->file('image');
//             $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
//             $image->move(public_path('images'), $imageName);
//             $checkout->image = $imageName;
//         }

//         $checkout->save();

//         return redirect()->route('checkout.view')->with('success', 'checkout updated successfully.');
//     } catch (\Exception $e) {
        
//         return back()->withInput()->with('error', 'Error updating checkout: ' . $e->getMessage());
//     }
// }

}

