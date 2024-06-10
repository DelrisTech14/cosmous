<?php

namespace App\Http\Controllers\expert;

use Illuminate\Http\Request;
use App\Models\expert;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class expertController extends Controller
{
    public function index()
    {
        $url = url('/admin/dashboard');
        $title = "expert Category";
        $data = compact('url', 'title');
        return view('expert/create')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'status' => 'required|in:active,inactive',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageFileName);
        } else {
            throw new \Exception('Please upload an image file.');
        }

        $expert = new expert();
        $expert->name = $request->input('name');
        $expert->description = $request->input('description');
        $expert->image = $imageFileName;
        $expert->status = $request->input('status');
    
        $expert->save();
        return redirect()->route('expert.view')->with('success', 'expert uploaded successfully.');
    }

    public function view(Request $request)
    {
        $search = $request->input('search') ?? "";
        $status = $request->input('status') ?? "";

        $query = expert::query();

        if ($search != "") {
            $query->where('title', 'LIKE', "%$search%");
        }

        if ($status != "") {
            $query->where('status', $status);
        }

        $experts = $query->get();

        $data = compact('experts', 'search', 'status');
        return view('expert/view')->with($data);
    }

    public function delete($id)
    {
        $expert = expert::find($id);
        if (!is_null($expert)) {
            $expert->delete();
        }
        return redirect()->route('expert.view')->with('error', 'expert deleted successfully.');
    }

    public function edit($id)
    {
        $expert = expert::find($id);
        if (is_null($expert)) {
            return redirect('view');
        } else {
            $title = "Update expert";
            $url = url('/experts/update') . "/" . $id;
            $data = compact('expert', 'url', 'title');
            return view('expert.update')->with($data);
        }
    }



    public function update($id, Request $request)
{
    $expert = expert::findOrFail($id);

    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'status' => 'required|in:active,inactive',
    ]);

    try {
        $expert->name = $request->input('name');
        $expert->description = $request->input('description');
        $expert->status = $request->input('status');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $expert->image = $imageName;
        }

        $expert->save();

        return redirect()->route('expert.view')->with('success', 'expert updated successfully.');
    } catch (\Exception $e) {
        
        return back()->withInput()->with('error', 'Error updating expert: ' . $e->getMessage());
    }
}

}
