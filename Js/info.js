const headerItem = document.querySelectorAll('.tabs-list-content');
const mainContent = document.querySelectorAll('.nameofcomand-bot');


for (let item of headerItem) {

    item.addEventListener('click', function() {

        for (let element of mainContent) {
            element.classList.add('hidden');
        }
        for (let pice of headerItem) {
            pice.classList.add('hid');
        }

        const content = document.querySelector('#' + item.dataset.tab);

        item.classList.remove('hid');
        content.classList.remove('hidden');
    })
}

const ans = document.querySelector('.modal');
const btn  = document.querySelector('.list-of-question-point-href__addquestion');

btn.addEventListener('click', () => {
    ans.classList.remove('hidden');

    const close = document.querySelector('.modal-window-back');

    close.addEventListener('click', () => {
        ans.classList.add('hidden');
    })
})
