//---------------按下註冊---------------
const formdivdivdivdivspanregister = document.querySelectorAll('#form-div-div-div-div-span-register');
formdivdivdivdivspanregister[0].addEventListener('click', function () {
    document.querySelector('#register').setAttribute('style', '');
    document.querySelector('#register-form').setAttribute('class', 'spaceInDown');
});
//---------------按下我再考慮看看-----------------------------
const registerformbuttonn = document.querySelector('#register-form-button-n');
registerformbuttonn.addEventListener('click', function () {
    document.querySelector('#register-form').setAttribute('class', 'spaceOutDown');
    setTimeout(function () {
        document.querySelector('#register').setAttribute('style', 'display:none');
    }, 1000);   
});