const buttonVoirPlus = document.querySelectorAll('.cardExtend')

buttonVoirPlus.forEach((element) => {
    element.addEventListener('click', function(){
    let parent = element.parentElement.parentElement
    let cardExtend = parent.nextElementSibling
    cardExtend.classList.toggle('cardMaxHeight')
})
})