const toggle = document.getElementById('toggle');
const width = document.getElementById('width-toggle');
const profile = document.querySelector('#profile')
const hide = document.querySelector('#hide')

toggle.addEventListener('click', (e) => {
    e.preventDefault();
    
    width.classList.toggle('w-0');
})

profile.addEventListener('click', () => {
    hide.classList.toggle('hidden')
})

// profile.addEventListener('click', (e) => {
//     if(!hide.contains(e.target) ||) {
//         hide.classList.toggle('hidden')
//     }
// })

// $(document).ready(function(){
//     $('#tabel-data').DataTable();
// });
