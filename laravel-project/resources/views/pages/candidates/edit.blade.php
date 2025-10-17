@extends('master')
@section('page')
<div class="container mt-4">
    <h4>Edit Candidate</h4>
    <form action="{{ route('candidates.update', $candidate->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $candidate->user->name }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $candidate->user->email }}" required>
        </div>
        <div class="mb-3">
            <label>Resume</label>
            <input type="text" name="resume" class="form-control" value="{{ $candidate->resume }}">
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" value="{{ $candidate->phone }}">
        </div>
        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="address" class="form-control" value="{{ $candidate->address }}">
        </div>
        <button type="submit" class="btn btn-success">Update Candidate</button>
    </form>
</div>
@endsection
