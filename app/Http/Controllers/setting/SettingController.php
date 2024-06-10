<?php

namespace App\Http\Controllers\setting;

use Illuminate\Http\Request;
use App\Models\setting;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;

class settingController extends Controller
{
    public function index()
    {
        $url = url('/admin/dashboard');
        $title = "setting Category";
        $data = compact('url', 'title');
        return view('setting/create')->with($data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image',
            'description' => 'required',
            'number' => 'required',
            'email' => 'required',
            'address' => 'required',
            'status' => 'required|in:active,inactive',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageFileName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageFileName);
        } else {
            throw new \Exception('Please upload an image file.');
        }

        $setting = new setting();
        $setting->image = $imageFileName;
        $setting->description = $request->input('description');
        $setting->number = $request->input('number');
        $setting->email = $request->input('email');
        $setting->address = $request->input('address');
        $setting->status = $request->input('status');
    
        $setting->save();
        return redirect()->route('setting.view')->with('success', 'setting uploaded successfully.');
    }

    public function view(Request $request)
    {
        $search = $request->input('search') ?? "";
        $status = $request->input('status') ?? "";

        $query = setting::query();

        if ($search != "") {
            $query->where('title', 'LIKE', "%$search%");
        }

        if ($status != "") {
            $query->where('status', $status);
        }

        $settings = $query->get();

        $data = compact('settings', 'search', 'status');
        return view('setting/view')->with($data);
    }

    public function delete($id)
    {
        $setting = setting::find($id);
        if (!is_null($setting)) {
            $setting->delete();
        }
        return redirect()->route('setting.view')->with('error', 'setting deleted successfully.');
    }

    public function edit($id)
    {
        $setting = setting::find($id);
        if (is_null($setting)) {
            return redirect('view');
        } else {
            $title = "Update setting";
            $url = url('/settings/update') . "/" . $id;
            $data = compact('setting', 'url', 'title');
            return view('setting.update')->with($data);
        }
    }



    public function update($id, Request $request)
{
    $setting = setting::findOrFail($id);

    $request->validate([
            'image' => 'required|image',
            'description' => 'required',
            'number' => 'required',
            'email' => 'required',
            'address' => 'required',
        'status' => 'required|in:active,inactive',
    ]);

    try {
        $setting->description = $request->input('description');
        $setting->number = $request->input('number');
        $setting->email = $request->input('email');
        $setting->address = $request->input('address');
        $setting->status = $request->input('status');

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::random(20) . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $setting->image = $imageName;
        }

        $setting->save();

        return redirect()->route('setting.view')->with('success', 'setting updated successfully.');
    } catch (\Exception $e) {
        
        return back()->withInput()->with('error', 'Error updating setting: ' . $e->getMessage());
    }
}

}
