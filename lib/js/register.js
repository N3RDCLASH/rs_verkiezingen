const registratie_form = document.getElementById('registratie_form')
const persoonlijke_gegevens_btn = document.getElementById('persoonlijke_gegevens_btn')
const persoonlijke_gegevens_section = document.getElementById('persoonlijke_informatie')

const account_gegevens_btn = document.getElementById('account_gegevens_btn')
const account_gegevens_section = document.getElementById('account_informatie')

const progress_bar = document.querySelector('.determinate')

let STEP_1_COMPLETE = false
let STEP_2_COMPLETE = false

registratie_form.addEventListener('submit', (e) => {
    e.preventDefault()
    // get data 
    // add data to formData object
    if (STEP_1_COMPLETE == false) {
        let registratie_gegevens = new FormData(registratie_form)
        STEP_1_COMPLETE = true


        // hide/display formgroup
        persoonlijke_gegevens_section.classList.add('hidden')
        account_gegevens_section.classList.remove('hidden')

        // update progress bar 
        progress_bar.style.width = "50%"
        document.querySelector('.milestone.account').classList.add('dark')
    } else {
        
    }
})

// console.log(registratie_gegevens.entries())