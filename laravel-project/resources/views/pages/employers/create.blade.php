@extends('master')
@section('page')
<div class="container mt-4">
    <h4>Create Employer</h4>
    <form action="{{ route('employers.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="password" name="password" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Company Name</label>
            <input type="text" name="company_name" class="form-control">
        </div>
        <div class="mb-3">
            <label>Website</label>
            <input type="text" name="website" class="form-control">
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control">
        </div>
        <div class="mb-3">
            <label>Address</label>
            <input type="text" name="address" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Save Employer</button>
    </form>
</div>
@endsection
