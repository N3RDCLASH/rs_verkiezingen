for (let card of document.getElementsByClassName('kandidaat')) {
    card.addEventListener('click', selecteerKandidaat)
}

function selecteerKandidaat() {
    this.querySelector('input').checked = true
    console.log(isChecked)
}


