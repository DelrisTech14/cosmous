<?php

namespace App\Http\Controllers\aboutus;

use Illuminate\Http\Request;
use App\Models\aboutus;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class aboutusController extends Controller
{
    public function index()
    {
        $url = url('/admin/dashboard');
        $title = "aboutus Category";
        $data = compact('url', 'title');
        return view('aboutus/create')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'shortdescription' => 'required',
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

        $aboutus = new aboutus();
        $aboutus->title = $request->input('title');
        $aboutus->shortdescription = $request->input('shortdescription');
        $aboutus->description = $request->input('description');
        $aboutus->image = $imageFileName;
        $aboutus->status = $request->input('status');
    
        $aboutus->save();
        return redirect()->route('aboutus.view')->with('success', 'aboutus uploaded successfully.');
    }

    public function view(Request $request)
    {
        $search = $request->input('search') ?? "";
        $status = $request->input('status') ?? "";

        $query = aboutus::query();

        if ($search != "") {
            $query->where('title', 'LIKE', "%$search%");
        }

        if ($status != "") {
            $query->where('status', $status);
        }

        $aboutuss = $query->get();

        $data = compact('aboutuss', 'search', 'status');
        return view('aboutus/view')->with($data);
    }

    public function delete($id)
    {
        $aboutus = aboutus::find($id);
        if (!is_null($aboutus)) {
            $aboutus->delete();
        }
        return redirect()->route('aboutus.view')->with('error', 'aboutus deleted successfully.');
    }

    public function edit($id)
    {
        $aboutus = aboutus::find($id);
        if (is_null($aboutus)) {
            return redirect('view');
        } else {
            $title = "Update aboutus";
            $url = url('/aboutuss/update') . "/" . $id;
            $data = compact('aboutus', 'url', 'title');
            return view('aboutus.update')->with($data);
        }
    }



    public function update($id, Request $request)
{
    $aboutus = aboutus::findOrFail($id);

    $request->validate([
        'title' => 'required',
        'shortdescription' => 'required',
        'description' => 'required',
        'status' => 'required|in:active,inactive',
    ]);

    try {
        $aboutus->title = $request->input('title');
        $aboutus->shortdescription = $request->input('shortdescription');
        $aboutus->description = $request->input('description');
        $aboutus->status = $request->input('status');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $aboutus->image = $imageName;
        }

        $aboutus->save();

        return redirect()->route('aboutus.view')->with('success', 'aboutus updated successfully.');
    } catch (\Exception $e) {
        
        return back()->withInput()->with('error', 'Error updating aboutus: ' . $e->getMessage());
    }
}

}
