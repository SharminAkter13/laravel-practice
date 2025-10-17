@extends('master')
@section('page')
<div class="container mt-4">
    <a href="{{ route('employers.create') }}" class="btn btn-primary mb-3">Add Employer</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Company</th>
                <th>Website</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($employers as $e)
            <tr>
                <td>{{ $e->user->name }}</td>
                <td>{{ $e->user->email }}</td>
                <td>{{ $e->company_name }}</td>
                <td>{{ $e->website }}</td>
                <td>{{ $e->phone }}</td>
                <td>{{ $e->address }}</td>
                <td>
                    <a href="{{ route('employers.edit', $e->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('employers.destroy', $e->id) }}" method="POST" style="display:inline;">
                        @csrf @method('DELETE')
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
