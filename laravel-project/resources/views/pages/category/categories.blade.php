@extends('master')

@section('page')
<div class="card shadow-sm border-0 mt-4">

  <!-- Header Section -->
  <div class="header pb-4 pt-5 d-flex align-items-center" 
       style="min-height: 100px; background-image: url('{{ asset('assets/img/theme/profile-cover.jpg') }}'); background-size: cover; background-position: center top;">
    <span class="mask bg-gradient-dark opacity-8"></span>
    <div class="container-fluid d-flex align-items-center justify-content-center">
      <div class="text-center">
        <h1 class="display-5 text-white fw-bold">Categories List</h1>
        <a href="{{ route('categories.create') }}" class="btn btn-info mt-3">
          <i class="bi bi-plus-circle me-1"></i> Add Category
        </a>
      </div>
    </div>
  </div>

  <!-- Table Section -->
  <div class="card-body table-responsive">
    <table class="table table-hover align-middle">
      <thead class="table-light">
        <tr>
          <th scope="col" class="text-center">#</th>
          <th scope="col">Category Name</th>
          <th scope="col" class="text-center">Icon</th>
          <th scope="col" class="text-center">Job Count</th>
          <th scope="col" class="text-center">Actions</th>
        </tr>
      </thead>

      <tbody>
        @forelse ($categories as $category)
        <tr>
          <td class="text-center">{{ $loop->iteration }}</td>
          <td class="fw-semibold">{{ $category->name }}</td>
          <td class="text-center">
            <i class="{{ $category->icon }} fs-4 text-primary"></i>
          </td>
          <td class="text-center">
            {{ $category->job_count ?? 0 }}
          </td>
          <td class="text-center">
            <div class="btn-group" role="group">
              <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-success me-2">
                <i class="bi bi-pencil-square"></i>
              </a>

              <form action="{{ route('categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this category?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger">
                  <i class="bi bi-trash3-fill"></i>
                </button>
              </form>
            </div>
          </td>
        </tr>
        @empty
        <tr>
          <td colspan="5" class="text-center text-muted py-4">
            <i class="bi bi-inbox"></i> No categories found.
          </td>
        </tr>
        @endforelse
      </tbody>
    </table>
  </div>
</div>
@endsection
