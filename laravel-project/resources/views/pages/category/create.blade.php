@extends('master')

@section('page')
<div class="card bg-primary-subtle p-5 w-100">
  <!-- Full-width background container -->
  <div class="bg-info-subtle p-5 rounded w-100 mt-5">
    
    <!-- Centered form inside full-width container -->
    <div class="d-flex justify-content-center">
      <form method="POST" action="{{ route('categories.store') }}" class="w-100" style="max-width: 500px;">
        @csrf
        <h1 class="text-center mb-4 fw-bold text-dark">Add Category</h1>

        <!-- Category Name -->
        <div class="mb-3">
          <label class="form-label fw-semibold">Category Name</label>
          <input type="text" name="name" class="form-control" placeholder="e.g. Finance, Design, IT" required>
        </div>

        <!-- Icon (optional) -->
        <div class="mb-3">
          <label class="form-label fw-semibold">Icon Class</label>
          <input type="text" name="icon" class="form-control" placeholder="e.g. ti-home or bi bi-code-slash">
          <small class="text-muted">You can use <a href="https://icons.getbootstrap.com/" target="_blank">Bootstrap Icons</a> or <a href="https://themify.me/themify-icons" target="_blank">Themify Icons</a>.</small>
        </div>

        <!-- Job Count -->
        <div class="mb-3">
          <label class="form-label fw-semibold">Job Count</label>
          <input type="number" name="job_count" class="form-control" placeholder="e.g. 500" min="0" required>
        </div>

        <!-- Submit Button -->
        <div class="text-center">
          <button type="submit" class="btn btn-primary form-control">Submit</button>
        </div>

      </form>
    </div>

  </div>
</div>
@endsection
