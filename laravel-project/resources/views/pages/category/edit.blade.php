@extends('master')
@section('page')
<div class="card bg-primary-subtle p-5 w-100">
  <!-- Full-width background container -->
  <div class="bg-info-subtle p-5 rounded w-100 mt-5">
    
    <!-- Centered form inside full-width container -->
    <div class="d-flex justify-content-center">
      <form method="POST" action="{{ route('editStore') }}" class="w-100" style="max-width: 500px;">
        @csrf
        <h1 class="text-center mb-4">Update Categories</h1>

        <input type="text" name="category_id" class="form-control" hidden value="{{$cat->id}}">

        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" name="name" class="form-control" required value="{{$cat->name}}">
        </div>

        <div class="mb-3">
          <label class="form-label">Amount</label>
          <input type="number" name="amount" class="form-control" required value="{{$cat->amount}}">
        </div>

        <div class="mb-3">
          <label class="form-label">Price</label>
          <input type="number" name="price" class="form-control" required value="{{$cat->price}}">
        </div>

        <div class="text-center">
          <button type="submit" class="btn btn-primary form-control">Update</button>
        </div>
      </form>
    </div>

  </div>
</div>
@endsection
