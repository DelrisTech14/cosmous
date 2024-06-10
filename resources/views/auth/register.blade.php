

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
            <form action="{{route('register')}}" method="post" enctype="multipart/form-data">
                @csrf

                <h4 class="text-center mt-3">Registration</h4>

                <div class="mb-3">
                    <label for="username" class="form-label">User Name</label>
                    <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}" placeholder="Enter username">
                    @error('username')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" placeholder="abc@gmail.com">
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="cpassword" class="form-label">Confirm Password</label>
                    <input type="cpassword" name="cpassword" id="cpassword" class="form-control" value="{{ old('cpassword') }}">
                    @error('cpassword')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                
                <div class="mb-3">
                    <label for="number" class="form-label">Mobile Number</label>
                    <input type="number" name="number" id="number" class="form-control" value="{{ old('number') }}" placeholder="123456789">
                    @error('number')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                <label class="form-label"> Gender:</label>
                <input type="radio" name="gender" value="M" 
                 {{isset($user->gender)&& $user->gender=="M" ? "checked" : ""}}/>Male
                <input type="radio" name="gender" value="F" 
                 {{isset($user->gender)&& $user->gender=="F" ? "checked" : ""}}/>Female
                <input type="radio" name="gender" value="O" 
                {{isset($user->gender)&& $user->gender=="O" ? "checked" : ""}}/>Others
                    @error('gender')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">User Image</label>
                    <input type="file" name="image" id="image" class="form-control">
                    @error('image')
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
                <br>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

