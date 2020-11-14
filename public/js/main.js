
document.addEventListener('DOMContentLoaded', () => {
    M.AutoInit()
    const user_dropdown = document.getElementsByClassName('user-dropdown').length <= 0 ? null : document.getElementsByClassName('user-dropdown')
    const user_dropdown_content = document.getElementsByClassName('user-dropdown-content') ?? null
    const sidebar_toggle = document.getElementById('sidebar_toggle')
    const sidebar = document.querySelector('.sidenav')
    const main = document.querySelector('.main-content')

    if (user_dropdown) {
        user_dropdown[0].onclick = () => {
            !user_dropdown_content[0].classList.contains('toggle') ? user_dropdown_content[0].classList.add('toggle') : user_dropdown_content[0].classList.remove('toggle')
        }
    }

    if (document.querySelectorAll('.select-wrapper')) {
        for (let select of document.querySelectorAll('.select-wrapper>input')) {
            select.classList.add('rsv-input')
            select.parentElement.querySelector('ul').classList.add('rsv-select-content')
        }
    }

    if (sidebar) {
        sidebar_toggle.addEventListener('click', () => {
            if (!sidebar.classList.contains('half')) {
                console.log('test1')
                sidebar.classList.add('half')
                main.classList.add('half')
                sidebar_toggle.classList.add('is-active')

            } else if (sidebar.classList.contains('half')) {
                console.log('test2')
                sidebar.classList.remove('half')
                main.classList.remove('half')
                sidebar_toggle.classList.remove('is-active')
            }

        })
    }


})

function selectType(data, element) {
    typeValue = [...element.options].map(el => el.value)
    element.options[typeValue.findIndex(id => id == data.type)].setAttribute('selected', true)
    element.options[typeValue.findIndex(id => id == data.type)].classList.add('white-text')
}


function refreshSelect(el) {
    let instance = M.FormSelect.getInstance(el)
    instance.destroy()
    el.classList.add('white-text')
    M.FormSelect.init(el)
    document.getElementsByClassName("select-dropdown dropdown-trigger")[0].classList.add("rsv-input")
}

// Deletion Logic 
const typeObject = objectDeleteType()

function objectDeleteType() {
    let value
    switch (window.location.pathname) {
        case '/partijen':
            value = "Partij"
            break;
        case '/kandidaten':
            value = "Kandidaat"
            break;
        case '/districten':
            value = "District"
            break;

        default:
            break;
    }
    return value;
}

function confirmDelete(id) {
    form = document.querySelector(`#delete_form_${id}`)
    Swal.fire({
        title: 'Bent U zeker dat U deze kandidaat wilt verwijderen',
        showDenyButton: true,
        confirmButtonText: `Ja`,
        denyButtonText: `Nee`,
        html: `Insert ${typeObject} info here...`
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            Swal.fire(`${typeObject} verwijderd!`, '', 'success')
            form.submit();
        } else if (result.isDenied) {
            Swal.fire(`${typeObject} niet verwijderd`, '', 'error')
        }
    })
}


