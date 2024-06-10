@extends('admin.layouts.app')
@section('content')

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="{{ route('setting.update', $setting->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <h4 class="text-center mt-3">{{ $title }}</h4>

                <div class="mb-3">
                    <label for="image" class="form-label">Logo</label>
                    <input type="file" name="image" id="image" class="form-control">
                    <img src="{{ asset('images/' . $setting->image) }}" alt="Current Image" width="200">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" name="description" id="description" class="form-control" value="{{ old('description', $setting->description) }}" placeholder="Enter description">{{ old('description', $setting->description) }}</textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="number" class="form-label">Phone Number</label>
                    <input type="number" name="number" id="number" class="form-control" value="{{ isset($setting->number) ? $setting->number : '' }}" placeholder="Enter number">
                    @error('number')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ isset($setting->email) ? $setting->email : '' }}" placeholder="Enter email">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <textarea type="text" name="address" id="address" class="form-control" value="{{ old('address', $setting->address) }}" placeholder="Enter address">{{ old('address', $setting->address) }}</textarea>
                    @error('address')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select">
                        <option value="active" {{ $setting->status == 'active' ? 'selected' : '' }}>Active</option>
                        <option value="inactive" {{ $setting->status == 'inactive' ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                <br>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    CKEDITOR.replace('description');
    CKEDITOR.replace('address');
</script>

</body>
</html>

@endsection
