
document.addEventListener('DOMContentLoaded', () => {
    M.AutoInit()
    const user_dropdown = document.getElementsByClassName('user-dropdown') ?? null
    const user_dropdown_content = document.getElementsByClassName('user-dropdown-content') ?? null

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

})