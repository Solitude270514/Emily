// JavaScript source code
'use strict';

//------------------------work���U------------------------------------------------
const work = document.querySelector('#work');
work.addEventListener('click', function () {
    document.querySelector('#work').setAttribute('class', 'vanishOut');
    setTimeout(function () {
        document.querySelector('#form').setAttribute('style', '');
    }, 300);
    setTimeout(function () {
        document.querySelector('#form').setAttribute('class', 'swashIn');
    }, 300);    
});



//------------------------���Ucolosex------------------------------------------------
const formclose = document.querySelector('#form-close');
formclose.addEventListener("mousemove", function () {
    document.querySelector('#form-close').setAttribute('class', 'puffIn');
}, false);
formclose.addEventListener("mouseleave", function () {
    document.querySelector('#form-close').setAttribute('class', '');
}, false);
formclose.addEventListener('click', function () {
    document.querySelector('#work').setAttribute('class', '');
    document.querySelector('#form').setAttribute('class', 'holeOut');
    setTimeout(function () {
        document.querySelector('#form').setAttribute('style', 'display:none');
    }, 1000);
});

//---------���U�n�J-------------
const formdivdivdivdivspanlogin = document.querySelectorAll('#form-div-div-div-div-span-login');
formdivdivdivdivspanlogin[0].addEventListener('click', function () {
    document.querySelector('#login').setAttribute('style', '');
    document.querySelector('#login-form').setAttribute('class', 'spaceInDown');
});


//---------------���U�n�J�̭���x-----------------
const loginformx = document.querySelector('#login-form-x');
loginformx.addEventListener('click', function () {
    document.querySelector('#login-form').setAttribute('class', 'spaceOutDown');
    setTimeout(function () {
        document.querySelector('#login').setAttribute('style', 'display:none');
    }, 1000);   
});
