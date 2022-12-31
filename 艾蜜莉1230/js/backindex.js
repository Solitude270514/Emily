//---------按下店家介紹-------------
const formdivdivdivstore_in = document.querySelectorAll('.form-div-div-div-store_in');
formdivdivdivstore_in[0].addEventListener('click', function () {
    document.querySelector('#store_in').setAttribute('style', '');
    document.querySelector('#store_in-form').setAttribute('class', 'spaceInDown');
});
//---------------按下店家介紹裡面的x-----------------
const store_informx = document.querySelector('#store_in-form-x');
store_informx.addEventListener('click', function () {
    document.querySelector('#store_in-form').setAttribute('class', 'spaceOutDown');
    setTimeout(function () {
        document.querySelector('#store_in').setAttribute('style', 'display:none');
    }, 1000);   
});

