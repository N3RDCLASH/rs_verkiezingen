function toggleForm() {
    // isChecked = console.log(document.querySelector('#role_toggle').checked)
    if (document.querySelector('#form_user').classList.contains('hide')) {
        document.querySelector('#form_user').classList.remove('hide')
        document.querySelector('#form_admin').classList.add('hide')
    } else {
        document.querySelector('#form_user').classList.add('hide')
        document.querySelector('#form_admin').classList.remove('hide')
    }
}