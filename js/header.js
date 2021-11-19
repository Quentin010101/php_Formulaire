const lion = document.querySelector('.logo')
const header = document.querySelector('header')
const nav = document.querySelectorAll('header a')


lion.addEventListener('click', function(){
    header.classList.toggle('headerWidth')
    lion.classList.toggle('lionRotation')
})

nav.forEach((element) => {
    element.addEventListener('click', function () {
        header.classList.toggle('headerWidth')
        lion.classList.toggle('lionRotation')
    })
});