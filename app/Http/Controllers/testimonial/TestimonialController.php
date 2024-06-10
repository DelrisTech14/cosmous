<?php

namespace App\Http\Controllers\testimonial;

use Illuminate\Http\Request;
use App\Models\testimonial;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class testimonialController extends Controller
{
    public function index()
    {
        $url = url('/admin/dashboard');
        $title = "testimonial Category";
        $data = compact('url', 'title');
        return view('testimonial/create')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
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

        $testimonial = new testimonial();
        $testimonial->name = $request->input('name');
        $testimonial->shortdescription = $request->input('shortdescription');
        $testimonial->description = $request->input('description');
        $testimonial->image = $imageFileName;
        $testimonial->status = $request->input('status');
    
        $testimonial->save();
        return redirect()->route('testimonial.view')->with('success', 'testimonial uploaded successfully.');
    }

    public function view(Request $request)
    {
        $search = $request->input('search') ?? "";
        $status = $request->input('status') ?? "";

        $query = testimonial::query();

        if ($search != "") {
            $query->where('title', 'LIKE', "%$search%");
        }

        if ($status != "") {
            $query->where('status', $status);
        }

        $testimonials = $query->get();

        $data = compact('testimonials', 'search', 'status');
        return view('testimonial/view')->with($data);
    }

    public function delete($id)
    {
        $testimonial = testimonial::find($id);
        if (!is_null($testimonial)) {
            $testimonial->delete();
        }
        return redirect()->route('testimonial.view')->with('error', 'testimonial deleted successfully.');
    }

    public function edit($id)
    {
        $testimonial = testimonial::find($id);
        if (is_null($testimonial)) {
            return redirect('view');
        } else {
            $title = "Update testimonial";
            $url = url('/testimonials/update') . "/" . $id;
            $data = compact('testimonial', 'url', 'title');
            return view('testimonial.update')->with($data);
        }
    }



    public function update($id, Request $request)
{
    $testimonial = testimonial::findOrFail($id);

    $request->validate([
        'name' => 'required',
        'shortdescription' => 'required',
        'description' => 'required',
        'status' => 'required|in:active,inactive',
    ]);

    try {
        $testimonial->name = $request->input('name');
        $testimonial->shortdescription = $request->input('shortdescription');
        $testimonial->description = $request->input('description');
        $testimonial->status = $request->input('status');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $testimonial->image = $imageName;
        }

        $testimonial->save();

        return redirect()->route('testimonial.view')->with('success', 'testimonial updated successfully.');
    } catch (\Exception $e) {
        
        return back()->withInput()->with('error', 'Error updating testimonial: ' . $e->getMessage());
    }
}

}
