function confirmDelete(id) {
    form = document.querySelector(`#delete_form_${id}`)
    Swal.fire({
        title: 'Bent U zeker dat U deze kandidaat wilt verwijderen',
        showDenyButton: true,
        confirmButtonText: `Ja`,
        denyButtonText: `Nee`,
        html: `Insert Kandidaat info here...`
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            Swal.fire('Kandidaat verwijderd!', '', 'success')
            form.submit();
        } else if (result.isDenied) {
            Swal.fire('Kandidaat niet verwijderd', '', 'error')
        }
    })
}


