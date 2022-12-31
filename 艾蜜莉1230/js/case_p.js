//---------按下案例圖片-------------
const formdivdivdivcase_p = document.querySelectorAll('.form-div-div-div-case_p');
formdivdivdivcase_p[0].addEventListener('click', function () {
    document.querySelector('#case_p').setAttribute('style', '');
    document.querySelector('#case_p-form').setAttribute('class', 'spaceInDown');
});


//---------------按下案例圖片裡面的x-----------------
const case_pformx = document.querySelector('#case_p-form-x');
case_pformx.addEventListener('click', function () {
    document.querySelector('#case_p-form').setAttribute('class', 'spaceOutDown');
    setTimeout(function () {
        document.querySelector('#case_p').setAttribute('style', 'display:none');
    }, 1000);   
});
