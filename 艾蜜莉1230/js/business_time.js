//---------按下營業時間-------------
const formdivdivdivbusiness_time = document.querySelectorAll('.form-div-div-div-business_time');
formdivdivdivbusiness_time[0].addEventListener('click', function () {
    document.querySelector('#business_time').setAttribute('style', '');
    document.querySelector('#business_time-form').setAttribute('class', 'spaceInDown');
});
//---------------按下營業時間裡面的x-----------------
const business_timeformx = document.querySelector('#business_time-form-x');
business_timeformx.addEventListener('click', function () {
    document.querySelector('#business_time-form').setAttribute('class', 'spaceOutDown');
    setTimeout(function () {
        document.querySelector('#business_time').setAttribute('style', 'display:none');
    }, 1000);   
});