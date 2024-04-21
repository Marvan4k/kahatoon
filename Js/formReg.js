const btn = document.querySelector('.addperson');
const user = document.querySelectorAll('.user');
let index = 0;

function show(ind) {
    user[ind].classList.remove('hidden');
    index = ind;
}

btn.addEventListener('click', function() {
    let ind = index + 1;
    show(ind);
    if (ind == 5) {
        btn.classList.add('hidden');
    }
})