const { default: axios } = require("axios");

function hapusPerangkatDesa(event) {
    const btnDelete = document.querySelector('#btn-delete-perangkat-desa');
    const form = btnDelete.closest("form");

    event.preventDefault();

    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {

        form.submit();

        if (result.isConfirmed) {
            Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
            )

            event.preventDefault();
        }
    })
}


