@extends('layout.main')

@section('title')
<title>Data Karyawan</title>
@endsection

@section('content')
    <div class="container text-center mt-4">
        <h1 style="font-weight: bold;">Admin Dashboard</h1>
        <img src="{{ URL('img/admin_logo.png') }}" alt="Admin Logo" width="575" height="530"
            class="d-inline-block align-text-top mt-3">
        
        <div class="mt-4">
            <button type="button" class="btn btn-dark mx-2">View Data</button>
            <button type="submit" class="btn btn-dark mx-2" name="add">Add User</button>
            <button type="button" class="btn btn-dark mx-2">Settings</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
@endsection
