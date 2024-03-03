@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('View Student') }}</div>

                    <div class="card-body">
                        <div>
                            <strong>Name:</strong> {{ $student->name }}<br>
                            <strong>Roll:</strong> {{ $student->roll }}<br>
                            <strong>Gender:</strong> {{ $student->gender }}<br>
                            <strong>Age:</strong> {{ $student->age }}<br>
                            <strong>District:</strong> {{ $student->district }}<br>
                            <strong>country:</strong> {{ $student->country }}<br>
                            <strong>Phone:</strong> {{ $student->phone }}<br>
                            <strong>Gmail:</strong> {{ $student->email }}<br>    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection