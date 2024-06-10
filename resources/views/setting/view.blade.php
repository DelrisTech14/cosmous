@extends('admin.layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
    <title>setting List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <div class="d-flex justify-content-between align-items-center ">
        <h1>setting List</h1>
        <div>
            <a href="{{ route('setting.index') }}" class="btn btn-primary">Add setting</a>
        </div>
    </div>

    <form method="GET" action="{{ route('setting.view') }}" class="form-inline mb-3">
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
                <th>Image</th>
                <th>Description</th>
                <th>Number</th>
                <th>Email</th>
                <th>Address</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($settings as $setting)
                <tr>
                    <td>{{ $setting->id }}</td>
                    <td><img src="{{ asset('images/' . $setting->image) }}" alt="{{ $setting->title }}" width="100"></td>
                    <td>{{ $setting->description }}</td>
                    <td>{{ $setting->number }}</td>
                    <td>{{ $setting->email }}</td>
                    <td>{{ $setting->address }}</td>
                    <td>
                    
                <span >
                    @if($setting->status == 'active')
                        <span class="badge bg-success">Active</span>
                    @else
                        <span class="badge bg-danger">Deactive</span>
                    @endif
                </span>

                     </td>

                    <td>
                        <a href="{{ route('setting.edit', $setting->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('setting.delete', $setting->id) }}" method="POST" style="display:inline-block;">
                            <!--@csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this setting?')">Delete</button>-->
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