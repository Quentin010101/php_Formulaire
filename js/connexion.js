const inscription = document.getElementById('inscription')
const connexion = document.getElementById('connexion')
const formulaireInscription = document.querySelector('.form-inscription')
const formulaireConnexion = document.querySelector('.form-connexion')
const all = document.querySelector('.container-f')
const root = document.querySelector(':root')
const timeTransitionString = window.getComputedStyle(root, null).getPropertyValue("--transitionForm")
let timeTransition = timeTransitionString.substring(0, timeTransitionString.length - 1) * 1000


window.addEventListener('click', function (event) {
    if (!event.target.matches('.container-f *')) {
        formulaireInscription.classList.remove('formulaireHeight')
        formulaireConnexion.classList.remove('formulaireHeight')
    }
})


inscription.addEventListener('click', function () {
    formulaireInscription.classList.remove('formulaireHeight')
    formulaireConnexion.classList.remove('formulaireHeight')
    setTimeout(() => {
        formulaireInscription.classList.add('formulaireHeight')
    }, timeTransition);
})
connexion.addEventListener('click', function () {
    formulaireConnexion.classList.remove('formulaireHeight')
    formulaireInscription.classList.remove('formulaireHeight')
    setTimeout(() => {
        formulaireConnexion.classList.add('formulaireHeight')
    }, timeTransition);
})