@extends('master')
@section('page')
<div class="card bg-primary ">

      <div class="text-center">

        <p>Add Category</p>

      </div>

      <div class="container bg-secondary m-5 p-5 rounded">
        <form method="POST" action="{{ route('store') }}" class="p-2 m-5">
          @csrf
            <div class="mb-3">
              <label for="detailsa" class="form-label">Name</label>
              <input type="text" name="name" class="form-control"  required>

            </div>
            <div class="mb-3">
                <label for="detailsa" class="form-label">amount</label>
                <input type="number" name="amount" class="form-control" required >

              </div>
              <div class="mb-3">
                <label for="detailsa" class="form-label">price</label>
                <input type="number" name="price" class="form-control" required >

              </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
      </div>
 </div>
@endsection