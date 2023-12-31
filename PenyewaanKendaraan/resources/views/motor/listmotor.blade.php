@extends('layout.main')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://code.jquery.com/jquery-3.7.1.slim.js" integrity="sha256-UgvvN8vBkgO0luPSUl2s8TIlOSYRoGFAX4jlCIm9Adc=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

@section('content')
    <div class="container">
        <h1 style="font-weight: bold; margin-top: 30px; margin-bottom: 30px">List Data Motor</h1>
        <div>
            <table class="table" style="text-align: center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nama Motor</th>
                        <th scope="col">Brand Motor</th>
                        <th scope="col">Warna Motor</th>
                        <th scope="col">Plat Motor</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($motors as $key => $motor)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $motor->nama_motor }}</td>
                            <td>{{ $motor->brand_motor }}</td>
                            <td>{{ $motor->warna_motor }}</td>
                            <td>{{ $motor->plat_motor }}</td>
                            <td>
                                <a href="{{ route('detailmotor', $motor->id) }}" class="btn btn-primary"><i class="bi bi-search"></i></a>
                                <a href="{{ route('updateMotor', $motor->id) }}" class="btn btn-warning"><i class="bi bi-pencil-square"></i></a>
                                <a class="btn btn-danger delete" data-id="{{$motor->id}}" data-nama="{{$motor->nama_motor}}"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data ini akan dihapus!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/delete/${id}`,
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function (response) {
                            if (response.success) {
                                Swal.fire({
                                    title: 'Terhapus!',
                                    text: 'Data telah dihapus.',
                                    icon: 'success',
                                    showConfirmButton: false,
                                    timer: 1500
                                });
                                
                                $(`#row-${id}`).remove();
                            } else {
                                Swal.fire('Gagal!', 'Gagal menghapus data.', 'error');
                            }
                        },
                        error: function () {
                            Swal.fire('Error!', 'Something went wrong.', 'error');
                        }
                    });
                }
            });
        }
    </script>

@endsection