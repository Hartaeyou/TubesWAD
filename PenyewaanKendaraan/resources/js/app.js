import './bootstrap';

$('.delete-button').on('click', function() {
    const motorId = $(this).data('id');

    if (confirm('Apakah Anda yakin?')) {
        $.ajax({
            url: `/delete/${motorId}`,
            type: 'DELETE',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(response) {
                if (response.success) {
                    Swal.fire('Terhapus!', 'Data telah dihapus.', 'success');
                    location.reload();
                } else {
                    Swal.fire('Gagal!', response.error || 'Gagal menghapus data.', 'error');
                }
            },
            error: function() {
                Swal.fire('Error!', 'Something went wrong.', 'error');
            }
        });
    }
});
