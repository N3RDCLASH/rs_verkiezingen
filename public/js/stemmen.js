
let isChecked
const stem_btn = document.querySelector('#stem_btn')
stem_btn.addEventListener('click', showConfirmationModal)

for (let card of document.getElementsByClassName('kandidaat')) {
    card.addEventListener('click', selecteerKandidaat)

}


function selecteerKandidaat() {
    this.querySelector('input[type=radio]').checked = true;
    stem_btn.classList.remove('hide');
    isChecked = this
}


function showConfirmationModal() {
    Swal.fire({
        title: 'Weet U zeker dat U op deze kandidaat wilt stemmen?',
        showDenyButton: true,
        confirmButtonText: `Ja`,
        confirmButtonColor: `#41E254`,
        denyButtonText: `Nee`,
        denyButtonColor: `#EF1212`,
        reverseButtons: true,
        html: getSelectedKandidaatInfo()
    }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
            id = isChecked.querySelector('.kandidaat-info').dataset.kandidaat_id
            form = document.querySelector(`#stem_form_${id}`)
            Swal.fire('U heeft gestemd!', '', 'success')
            form.submit()
        } else if (result.isDenied) {
            Swal.fire('U heeft niet gestemd', '', 'error')
        }
    })
}

function getSelectedKandidaatInfo() {
    let image = isChecked.querySelector('.kandidaat-circle').src
    let naam = isChecked.querySelector('.kandidaat-info>span').innerText
    let partij = isChecked.querySelector('.kandidaat-info>p').innerText
    let info = `<div class="kandidaat-confirm-modal">
    <div><img src="${image}" alt="" class="kandidaat-circle"></div>
    <div>
        <span>${naam}</span>
        <p>${partij}</p>
    </div>
    </div>`
    return info
}

function confirmStem(id) {

}