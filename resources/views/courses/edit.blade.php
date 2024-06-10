@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Edit Course</h1>
    <div class="bg-light p-5 rounded shadow-sm">
        <form action="{{ route('courses.update', $course->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    value="{{ $course->title }}" required>
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description"
                    class="form-control @error('description') is-invalid @enderror" rows="5"
                    required>{{ $course->description }}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="date" name="start_date" id="start_date"
                    class="form-control @error('start_date') is-invalid @enderror" value="{{ $course->start_date }}"
                    required>
                @error('start_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="end_date" class="form-label">End Date</label>
                <input type="date" name="end_date" id="end_date"
                    class="form-control @error('end_date') is-invalid @enderror" value="{{ $course->end_date }}"
                    required>
                @error('end_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('courses.index') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>
                    Back</a>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
            </div>
        </form>
    </div>
</div>

@endsection