const ent = document.querySelector('.login');
const lable = document.querySelector('.login-ent');

ent.addEventListener('click', () => {
    lable.classList.remove('hider');

    const reg = document.querySelector('.reg');
    const exit = document.querySelector('.login-ent-back');

    exit.addEventListener('click', () => {
        lable.classList.add('hider');
    }) 
    reg.addEventListener('click', () => {
        lable.classList.add('hider');
        entr.classList.remove('hider');
    }) 
})

const entr = document.querySelector('.singUp-button');
const labler = document.querySelector('.form-reg');

entr.addEventListener('click', () => {
    labler.classList.remove('hider');

    const exit = document.querySelector('.form-reg-back');

    exit.addEventListener('click', () => {
        labler.classList.add('hider');
    }) 
})

let i = 1;
$(document).ready(function(){
    $('.addperson').on('click', () => {
    if(i < 7){
        $('.addperson').before(`<div class="user">
            <h2>Участник ${i}</h2>
            <div class="info">
                <div class="info-left">
                    <p class="form__title">Имя*:</p>
                    <input pattern="^[А-Яа-яЁё\s]+$" required type="text" class="form__field" name="name${i}" id="name${i}">
                    <p class="form__title">Фамилия*:</p>
                    <input pattern="^[А-Яа-яЁё\s]+$" required type="text" class="form__field" name="female${i}" id="femalle${i}">
                    <p class="form__title">Отчество*:</p>
                    <input pattern="^[А-Яа-яЁё\s]+$" required type="text" class="form__field" name="lastname${i}" id="lastname${i}">
                </div>
                <div class="info-right">
                    <p class="form__title">Дополнительная ифнормация</p>
                    <textarea type="text" class="form__field" name="information${i}" id="information${i}"></textarea>
                    <p class="buner-text">Добавить фотографию участника*:</p>
                    <input required accept="image/png, image/jpeg, image/pdf" type="file" class="file" name="file${i}" id="file${i}">
                </div>
            </div>
        </div>`)
        }
        $('.register-btn').removeAttr('disabled');
        i++;
        if(i == 7){
            $('.addperson').slideUp();
        }
    }
    );
    $('.deletePerson').on('click', () => {
        if(i > 1) {
                $('.user:last').remove();
            i--;
            if(i < 2){
                $('.register-btn').prop("disabled", true);
            }
        }
    });
    $('#reg').on('click', () => {
        $('.autorization').css('display', 'none');
        $('.regestration').css('display', 'inline-block');
    });
});