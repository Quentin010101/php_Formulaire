

//------------------- Validation formulaire -----------------------------------
const validerFormulaireInscription = document.querySelector('.form-inscription')
const validerFormulaireConnexion = document.querySelector('.form-connexion')
const pseudo = document.getElementById('pseudo')
const email = document.getElementById('email')
const mdp = document.getElementById('mdp')
const mdpConfirm = document.getElementById('mdp-confirm')
const pseudoConnexion = document.getElementById('pseudo-connexion')
const mdpConnexion = document.getElementById('mdp-connexion')


validerFormulaireInscription.addEventListener('submit', function (event) {
    checkingInputs()
    if(!checkingInputs()){
        event.preventDefault()
    }
})
validerFormulaireConnexion.addEventListener('submit', function(event){
    checkingInputsConnexion()
    if(!checkingInputsConnexion()){
        event.preventDefault()
    }
})
function checkingInputs() {
    let arr = [pseudo, email, mdp, mdpConfirm]
    let confirmation = true
    if (pseudo.value.length >= 4) {
        validate(pseudo)
    } else {
        inValidate(pseudo)
        confirmation = false
    }
    if (mdp.value === mdpConfirm.value) {
        validate(mdp)
        validate(mdpConfirm)
        document.querySelector('#mdp ~ span').innerText = ""
    } else {
        inValidate(mdp)
        inValidate(mdpConfirm)
        document.querySelector('#mdp ~ span').innerText = "*Vos mot de passe ne correspondent pas"
        confirmation = false
    }
    let regex = new RegExp('@')
    if(regex.test(email.value)){
        validate(email)
    } else{
        inValidate(email)
        confirmation = false
    }
    arr.forEach((element) => {
        if (element.value == "") {
            inValidate(element)
            confirmation = false
        }
    })
    return confirmation
}
function checkingInputsConnexion(){
    let arr = [pseudoConnexion, mdpConnexion]
    let confirmationConnexion = true
    arr.forEach((element)=>{
        if (element.value == "") {
            inValidate(element)
            confirmationConnexion = false
        } else {
            validate(element)
        }
    })
    return confirmationConnexion
}

function validate(elem) {
    elem.style.border = "2px solid green"
}
function inValidate(elem) {
    elem.style.border = "2px solid red"
}
