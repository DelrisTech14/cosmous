@extends('admin.layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>pro List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="d-flex justify-content-between align-items-center ">
        <h1>pro List</h1>
        <div>
            <a href="{{ route('pro.index') }}" class="btn btn-primary">Add pro</a>
        </div>
    </div>

    <form method="GET" action="{{ route('pro.view') }}" class="form-inline mb-3">
        <div class="form-group mr-2">
            <input type="text" name="search" class="form-control" placeholder="Search" value="{{ request('search') }}">
        </div>
        <div class="form-group mr-2">
            <select name="status" class="form-control">
                <option value="">All</option>
                <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Active</option>
                <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>deactive</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Filter</button>
    </form>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Mrp Price</th>
                <th>Special Price</th>
                <th>Availability</th>
                <th>Sku</th>
                <th>Description</th>
                <th>Stock</th>
                <th>Image</th>
                <th>Other Images</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name}}</td>
                    <td>{{ $product->mrp_price }}</td>
                    <td>{{ $product->special_price }}</td>
                    <td>{{ $product->availability}}</td>
                    <td>{{ $product->sku}}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->stock}}</td>
                    <td><img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->title }}" width="100"></td>
                   <td><img src="{{ asset('other_imagess/' . $product->other_images) }}" alt="{{ $product->title }}" width="100"></td>
                    <td>
                <span >
                    @if($product->status == 'active')
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Deactive</span>
                    @endif
                </span>

                     </td>

                    <td>
                        <a href="{{ route('pro.edit', $product->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('pro.delete', $product->id) }}" method="POST" style="display:inline-block;">
                            <!--@csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this pro?')">Delete</button>-->
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const statusToggle = document.getElementById("statusToggle");
        const statusInput = document.getElementById("status");

        statusToggle.addEventListener("change", function() {
            if (statusToggle.checked) {
                statusInput.value = "active";
            } else {
                statusInput.value = "inactive";
            }
        });
    });
</script>

</html>
@endsection