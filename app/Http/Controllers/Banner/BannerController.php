<?php

namespace App\Http\Controllers\banner;

use Illuminate\Http\Request;
use App\Models\banner;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class bannerController extends Controller
{
    public function index()
    {
        $url = url('/admin/dashboard');
        $title = "banner Category";
        $data = compact('url', 'title');
        return view('banner/create')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
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

        $banner = new banner();
        $banner->title = $request->input('title');
        $banner->description = $request->input('description');
        $banner->image = $imageFileName;
        $banner->status = $request->input('status');
    
        $banner->save();
        return redirect()->route('banner.view')->with('success', 'banner uploaded successfully.');
    }

    public function view(Request $request)
    {
        $search = $request->input('search') ?? "";
        $status = $request->input('status') ?? "";

        $query = banner::query();

        if ($search != "") {
            $query->where('title', 'LIKE', "%$search%");
        }

        if ($status != "") {
            $query->where('status', $status);
        }

        $banners = $query->get();

        $data = compact('banners', 'search', 'status');
        return view('banner/view')->with($data);
    }

    public function delete($id)
    {
        $banner = banner::find($id);
        if (!is_null($banner)) {
            $banner->delete();
        }
        return redirect()->route('banner.view')->with('error', 'banner deleted successfully.');
    }

    public function edit($id)
    {
        $banner = banner::find($id);
        if (is_null($banner)) {
            return redirect('view');
        } else {
            $title = "Update banner";
            $url = url('/banners/update') . "/" . $id;
            $data = compact('banner', 'url', 'title');
            return view('banner.update')->with($data);
        }
    }



    public function update($id, Request $request)
{
    $banner = banner::findOrFail($id);

    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'status' => 'required|in:active,inactive',
    ]);

    try {
        $banner->title = $request->input('title');
        $banner->description = $request->input('description');
        $banner->status = $request->input('status');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $banner->image = $imageName;
        }

        $banner->save();

        return redirect()->route('banner.view')->with('success', 'banner updated successfully.');
    } catch (\Exception $e) {
        
        return back()->withInput()->with('error', 'Error updating banner: ' . $e->getMessage());
    }
}

}
