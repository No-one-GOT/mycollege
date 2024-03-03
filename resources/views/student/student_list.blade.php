@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header"><a href="create-student">{{ __('Create student') }}</a></div>
                    <div class="card-body">
                        <div class="container">
                            <h2 class="text-center mt-4">Student Information Table</h2>
                            <hr>
                            <table class="table">
                                <thead>
                                <tr style="text-align: center;">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>District</th>
                                    <th>Image</th>
                                    <th>Created By</th>
                                    <th>Updated By</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach( $students as $key => $student )
                                    <tr style="text-align: center;">
                                        <td>{{++$key}}</td>
                                        <td>{{$student->name}}</td>
                                        <td>{{$student->phone}}</td>
                                        <td>{{$student->district}}</td>
                                        <td><img src="<?php echo asset('storage/' . $student->image); ?>" class="rounded-circle" width="50" height="50" ></td>
                                        <td>{{ $student->user->name }}</td>
                                        <td>{{$student->updated_by}}</td>
                                        <td>
                                            <div>
                                                <td>
                                                    <a href="{{route('student.edit', $student->id)}}" class="btn btn-primary me-1">edit</a>
                                                </td>
                                                <td>
                                                    <form action="{{route('student.delete', $student->id)}}" method="POST" >
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-primary me-1 ">Delete</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <a href="{{route('student.view', $student->id)}}" class="btn btn-primary me-1 ">view</a>
                                                </td>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
