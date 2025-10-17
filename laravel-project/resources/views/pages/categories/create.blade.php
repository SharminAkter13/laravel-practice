@extends('master')

@section('page')
<div class="container mt-4 p-5">
    
    <h2>Create Category</h2>

    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Icon (optional)</label>
            <input type="text" name="icon" class="form-control">
        </div>
        <button class="btn btn-success">Create</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
