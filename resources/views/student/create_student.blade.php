@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create.student') }}</div>
                    <div class="card-body">
                        <form action="{{route('store.student')}}//" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mt-2">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter name">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="roll">Roll:</label>
                                <input type="text" class="form-control" name="roll" placeholder="Enter roll number">
                                @error('roll')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="gender">Gender:</label>
                                <select class="form-control" name="gender">
                                    <option value="">Select gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="age">Age:</label>
                                <input type="number" class="form-control" name="age" placeholder="Enter age">
                                @error('age')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="district">District:</label>
                                <input type="text" class="form-control" name="district" placeholder="Enter district">
                                @error('district')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                                <div class="form-group mt-2">
                                <label for="country">Country:</label>
                                <input type="text" class="form-control" name="country" placeholder="Enter country Name">
                                @error('country')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="phone">Phone:</label>
                                <input type="tel" class="form-control" name="phone" placeholder="Enter phone number">
                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="email">Gmail:</label>
                                <input type="email" class="form-control" name="email" placeholder="Enter gmail account">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        
                            <div class="form-group mt-2">
                                <label for="">Upload Image</label>
                                <input type="file" name="image" required class="course form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
<script>
  @if(Session::has('success'))
        toastr.success("{{ Session::get('success') }}");
  @endif
</script>
@endsection
