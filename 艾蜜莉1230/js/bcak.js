//---------按下店家介紹-------------
const formdivdivdivstore = document.querySelector('.form-div-div-div-store_in');
formdivdivdivstore[0].addEventListener('click', function () {
    document.querySelector('#store_in').setAttribute('style', '');
    document.querySelector('#store_in-form').setAttribute('class', 'spaceInDown');
});


//---------按下營業時間-------------
const formdivdivdivbusiness_time = document.querySelector('.form-div-div-div-business_time');
formdivdivdivbusiness_time[0].addEventListener('click', function () {
    document.querySelector('#business_time').setAttribute('style', '');
    document.querySelector('#business_time-form').setAttribute('class', 'spaceInDown');
});

//---------按下案例圖片-------------
const formdivdivdivcase_P = document.querySelector('.form-div-div-div-case_P');
formdivdivdivcase_P[0].addEventListener('click', function () {
    document.querySelector('#case_P').setAttribute('style', '');
    document.querySelector('#case_P-form').setAttribute('class', 'spaceInDown');
});