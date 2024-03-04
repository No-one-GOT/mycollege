@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit student') }}</div>

                    <div class="card-body">
                        <form action="{{route('student.update',$id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group mt-2">
                                <label for="name">Name:</label>
                                <input type="text" class="form-control" name="name" value="{{$student->name}}">
                                @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="roll">Roll:</label>
                                <input type="text" class="form-control" name="roll" value="{{$student->roll}}">
                                @error('roll')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="gender">Gender:</label>
                                <select class="form-control" name="gender">
                                    <option value="{{$student->gender}}">{{$student->gender}}</option>
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
                                <input type="number" class="form-control" name="age" value="{{$student->age}}">
                                @error('number')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="district">District:</label>
                                <input type="text" class="form-control" name="district" value="{{$student->district}}">
                                @error('district')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="country">Country:</label>
                                <input type="text" class="form-control" name="country" value="{{$student->country}}">
                                @error('country')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="phone">Phone:</label>
                                <input type="tel" class="form-control" name="phone" value="{{$student->phone}}">
                                @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mt-2">
                                <label for="email">gmail:</label>
                                <input type="emial" class="form-control" name="email" value="{{$student->email}}">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- <div class="form-group mt-2">
                                <label for="">Upload Image</label>
                                <input type="file" name="image"  value="{{ $student->image }}" required class="course form-control">
                            </div> -->
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
