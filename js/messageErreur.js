//----------------------- Boutton message d'erreur quand pseudo ou mail identique -------------

const button = document.querySelector('.msgErreur ion-icon')
const card = document.querySelector('.wrapper-msgErreur *')
const fullCard = document.querySelector('.wrapper-msgErreur')

let arrStockage = [button, fullCard]
button.addEventListener('click', function(){
    fullCard.style.display = "none"
})
fullCard.addEventListener('click', function(e){
    if(!e.target.matches('.wrapper-msgErreur *')){
        fullCard.style.display = "none"
    }
})