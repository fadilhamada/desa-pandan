
const toggle = document.getElementById('toggle')
const width = document.getElementById('width-toggle')

toggle.addEventListener('click', (e) => {
    e.preventDefault()
    
    width.classList.toggle('w-0')
})


// $(document).ready(function(){
//     $('#tabel-data').DataTable();
// });
