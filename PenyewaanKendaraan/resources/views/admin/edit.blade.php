@extends('layout.main')

@section('title')
    <title>Edit Karyawan</title>
@endsection

@section('content')
    <div class="container text-center mt-4">
        <h1 style="font-weight: bold;">Edit Karyawan</h1>

        <form action="{{ route('admin.update', ['id' => $employee->id]) }}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $employee->email }}" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

        <a href="{{ route('admin.view') }}" class="btn btn-secondary mt-3">Kembali</a>
    </div>
@endsection
