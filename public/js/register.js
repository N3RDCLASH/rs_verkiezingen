const registratie_form = document.getElementById('registratie_form')
const persoonlijke_gegevens_btn = document.getElementById('persoonlijke_gegevens_btn')
const persoonlijke_gegevens_section = document.getElementById('persoonlijke_informatie')

const account_gegevens_btn = document.getElementById('account_gegevens_btn')
const account_gegevens_section = document.getElementById('account_informatie')

const progress_bar = document.querySelector('.determinate')

let STEP_1_COMPLETE = false
let STEP_2_COMPLETE = false

function checkForError() {

    let step_1 = persoonlijke_gegevens_section.querySelectorAll('input,select')
    let step_2 = account_gegevens_section.querySelectorAll('input,select')
    let current = (STEP_1_COMPLETE ? step_2 : step_1)

    for (let [index, input] of current.entries()) {
        if (index === current.length) {
            console.log('check finished ✔️')
            return true
        }
        if (!input.classList.contains('select-dropdown') && !input.classList.contains('datepicker-select')) {
            if (input.type == 'select-one') {
                let name = input.parentElement.parentElement.querySelector('label').innerText
                if (input.selectedIndex === 0) {
                    input.focus()
                    return Swal.fire(`U heeft geen ${name} geselecteerd.`, `Bekijk uw ${name} en probeer het opnieuw. uw`, 'error')

                }
            }
            else {
                let name = input.parentElement.querySelector('label').innerText
                if (input.validity.valueMissing) {
                    input.focus()
                    return Swal.fire(`U heeft geen ${name} ingevuld.`, `Bekijk uw ${name} en probeer het opnieuw.`, 'error')
                }
                if (input.validity.patternMismatch) {
                    input.focus()
                    return Swal.fire(`U heeft een verkeerd ${name} ingevuld.`, `Bekijk uw ${name} en probeer het opnieuw.`, 'error')
                }
            }
        }
    }
}



registratie_form.addEventListener('submit', (e) => {
    e.preventDefault()
    // get data 
    // add data to formData object
    if (!STEP_1_COMPLETE) {
        let registratie_gegevens = new FormData(registratie_form)
        STEP_1_COMPLETE = true


        // hide/display formgroup
        persoonlijke_gegevens_section.classList.add('hidden')
        account_gegevens_section.classList.remove('hidden')

        // update progress bar 
        progress_bar.style.width = "50%"
        document.querySelector('.milestone.account').classList.add('complete')
    } else {
        let passwords = document.querySelectorAll('input[type="password"]')
        if (STEP_1_COMPLETE && passwords[0].value !== passwords[1].value) {
            return Swal.fire(`De ingevoerde wachtwoorden komen niet overeen!`, `Bekijk uw wachtwoord en probeer het opnieuw.`, 'error')
        } else if (passwords[0].value = '' || passwords[1].value == '') {
            return Swal.fire(`U heeft geen wachtwoord ingevoerd!`, `Bekijk uw wachtwoord en probeer het opnieuw.`, 'error')

        }
        else {
            progress_bar.style.width = "100%"
            document.querySelector('.milestone.finished').classList.add('complete')
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            })

            Toast.fire({
                icon: 'success',
                title: 'Registered successfully'
            }).then(
                () => {
                    registratie_form.submit();
                }
            )
        }
    }


})

persoonlijke_gegevens_btn.addEventListener('click', () => { checkForError() })