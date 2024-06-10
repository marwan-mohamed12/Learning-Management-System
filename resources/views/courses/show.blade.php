@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card my-4 shadow-sm">
        <div class="card-body">
            <h1 class="card-title">{{ $course->title }}</h1>
            <p class="card-text">{{ $course->description }}</p>
            <hr>
            <p><strong>Start Date:</strong> {{ \Carbon\Carbon::parse($course->start_date)->format('F j, Y') }}</p>
            <p><strong>End Date:</strong> {{ \Carbon\Carbon::parse($course->end_date)->format('F j, Y') }}</p>
            <a href="{{ route('courses.index') }}" class="btn btn-secondary mt-3"><i class="fas fa-arrow-left"></i>
                Back</a>
        </div>
    </div>
</div>
@endsection