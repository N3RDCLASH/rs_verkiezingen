
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
            console.log('test1')
            if (!sidebar.classList.contains('half')) {
                sidebar.classList.add('half')
                main.classList.add('half')
            } else {
                sidebar.classList.remove('half')
                main.classList.remove('half')
            }

        })
    }


})




