@extends('master')

@section('page')

{{-- BEGIN: Breadcrumb --}}
<nav aria-label="breadcrumb" class="mt-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categories.index') }}">Categories List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Category</li>
    </ol>
</nav>
{{-- END: Breadcrumb --}}

<div class="card bg-primary-subtle p-5 w-100">
    <div class="bg-info-subtle p-5 rounded w-100 mt-5">
        <div class="d-flex justify-content-center">
            <form method="POST" action="{{ route('categories.update', $cat->id) }}" class="w-100" style="max-width: 500px;">
                @csrf
                @method('PUT')

                <h1 class="text-center mb-4 fw-bold text-dark">Edit Category</h1>

                <!-- Category Name -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Category Name</label>
                    <input type="text" name="name" class="form-control" value="{{ old('name', $cat->name) }}" required>
                </div>

                <!-- Icon (optional) -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Icon Class</label>
                    <input type="text" name="icon" class="form-control" value="{{ old('icon', $cat->icon) }}" placeholder="e.g. ti-home or bi bi-code-slash">
                </div>

                <!-- Job Count -->
                <div class="mb-3">
                    <label class="form-label fw-semibold">Job Count</label>
                    <input type="number" name="job_count" class="form-control" value="{{ old('job_count', $cat->job_count) }}" min="0" required>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary form-control">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
