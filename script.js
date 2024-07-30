const desa = document.getElementById('hover-desa')
const dropdown = document.getElementById('dropdown')
const hamburger = document.getElementById('hamburger-menu')
const fa = document.getElementById('fa')
const menu = document.getElementById('menu')
const toogle = document.getElementById('toggle-profil')
const dropdownDesa = document.getElementById('dropdown-desa')

desa.addEventListener('mouseenter', (e) => {
    e.preventDefault()

    dropdown.classList.toggle('hidden')
})
desa.addEventListener('mouseleave', (e) => {
    e.preventDefault
    
    dropdown.classList.toggle('hidden')
})
dropdown.addEventListener('mouseenter', (e) => {
    e.preventDefault
    
    dropdown.classList.toggle('hidden')
})
dropdown.addEventListener('mouseleave', (e) => {
    e.preventDefault
    
    dropdown.classList.toggle('hidden')
})
hamburger.addEventListener('click', (e) => {
    e.preventDefault
    
    dropdown.classList.toggle('hidden')
    menu.classList.toggle('hidden')
    fa.classList.toggle('fa-x')
    dropdownDesa.classList.add('hidden')
})
toogle.addEventListener('click', (e) => {
    e.preventDefault

    dropdownDesa.classList.toggle('hidden')
})
