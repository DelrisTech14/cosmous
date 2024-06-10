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
            <form action="{{route('pro.store')}}" method="post" enctype="multipart/form-data">
                @csrf

                <h4 class="text-center mt-3">{{ $title }}</h4>

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Enter name">
                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="mrp_price" class="form-label">MRP Price</label>
                    <input type="text" name="mrp_price" id="mrp_price" class="form-control" value="{{ old('mrp_price') }}" placeholder="Enter mrp_price">
                    @error('mrp_price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="special_price" class="form-label">Special Price</label>
                    <input type="text" name="special_price" id="special_price" class="form-control" value="{{ old('special_price') }}" placeholder="Enter special_price">
                    @error('special_price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="availability" class="form-label">Availability</label>
                    <input type="text" name="availability" id="availability" class="form-control" value="{{ old('availability') }}" placeholder="Enter availability">
                    @error('availability')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="sku" class="form-label">Sku</label>
                    <input type="text" name="sku" id="sku" class="form-control" value="{{ old('sku') }}" placeholder="Enter sku">
                    @error('sku')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" name="description" id="description" class="form-control" value="{{ old('description') }}" placeholder="Enter description"></textarea>
                    @error('description')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="stock" class="form-label">Stock</label>
                    <input type="text" name="stock" id="stock" class="form-control" value="{{ old('stock') }}" placeholder="Enter stock">
                    @error('stock')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @error('image')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="other_images" class="form-label">Other Images</label>
                    <input type="file" name="other_images[]" multiple>
                    @error('other_images')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
    CKEDITOR.replace('description');
</script>

</body>
</html>

@endsection
