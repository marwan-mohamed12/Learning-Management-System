@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Courses</h1>
    <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3"><i class="fas fa-plus"></i> Add Course</a>

    <!-- Desktop View -->
    <div class="d-none d-md-block table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $course)
                <tr>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->start_date }}</td>
                    <td>{{ $course->end_date }}</td>
                    <td>
                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm"><i
                                class="fas fa-eye"></i></a>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm"><i
                                class="fas fa-edit"></i></a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#deleteModal{{ $course->id }}"><i class="fas fa-trash"></i></button>

                        <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal{{ $course->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="deleteModalLabel{{ $course->id }}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="deleteModalLabel{{ $course->id }}">Confirm Delete
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete the course "{{ $course->title }}"?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Delete Confirmation Modal -->
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Mobile View -->
    <div class="d-block d-md-none">
        @foreach ($courses as $course)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $course->title }}</h5>
                <p class="card-text">{{ $course->description }}</p>
                <p class="card-text"><small class="text-muted">Start Date: {{ $course->start_date }}</small></p>
                <p class="card-text"><small class="text-muted">End Date: {{ $course->end_date }}</small></p>
                <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm"><i
                        class="fas fa-eye"></i></a>
                <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm"><i
                        class="fas fa-edit"></i></a>
                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                    data-bs-target="#deleteModalMobile{{ $course->id }}"><i class="fas fa-trash"></i></button>
            </div>
        </div>

        <!-- Delete Confirmation Modal for Mobile View -->
        <div class="modal fade" id="deleteModalMobile{{ $course->id }}" tabindex="-1" role="dialog"
            aria-labelledby="deleteModalLabelMobile{{ $course->id }}" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabelMobile{{ $course->id }}">Confirm Delete</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete the course "{{ $course->title }}"?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                            style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Delete Confirmation Modal for Mobile View -->
        @endforeach
    </div>
</div>


@endsection