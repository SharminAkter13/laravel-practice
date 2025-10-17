@extends('master')
@section('page')
<div class="container mt-4">
    <h4>Edit Employer</h4>
    <form action="{{ route('employers.update', $employer->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $employer->user->name }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="email" class="form-control" value="{{ $employer->user->email }}" required>
        </div>
        <div class="mb-3">
            <label>Company Name</label>
            <input type="text" name="company_name" class="form-control" value="{{ $employer->company_name }}">
        </div>
        <div class="mb-3">
            <label>Website</label>
            <input type="text" name="website" class="form-control" value="{{ $employer->website }}">
        </div>
        <div class="mb-3">
            <label>Phone</label>
            <input type="text" name="phone" class
