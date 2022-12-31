//index
//------------------------work按下------------------------------------------------
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
//------------------------按下colosex------------------------------------------------
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

//---------按下登入-------------
const formdivdivdivlogin = document.querySelectorAll('.form-div-div-div-login');
formdivdivdivlogin[0].addEventListener('click', function () {
    document.querySelector('#login').setAttribute('style', '');
    document.querySelector('#login-form').setAttribute('class', 'spaceInDown');
});


//---------------按下登入裡面的x-----------------
const loginformx = document.querySelector('#login-form-x');
loginformx.addEventListener('click', function () {
    document.querySelector('#login-form').setAttribute('class', 'spaceOutDown');
    setTimeout(function () {
        document.querySelector('#login').setAttribute('style', 'display:none');
    }, 1000);   
});
//index

//register
//---------------按下註冊---------------
const formdivdivdivregister = document.querySelectorAll('.form-div-div-div-register');
formdivdivdivregister[0].addEventListener('click', function () {
    document.querySelector('#register').setAttribute('style', '');
    document.querySelector('#register-form').setAttribute('class', 'spaceInDown');
});
//---------------按下取消-----------------------------
const registerformbuttonn = document.querySelector('#register-form-button-n');
registerformbuttonn.addEventListener('click', function () {
    document.querySelector('#register-form').setAttribute('class', 'spaceOutDown');
    setTimeout(function () {
        document.querySelector('#register').setAttribute('style', 'display:none');
    }, 1000);   
});
//---------------轉址動作-----------------------------
/*const formdivdivdivregister = document.querySelectorAll('#register-form-button-y');
formdivdivdivregister[0].addEventListener('click', function () {
    document.querySelector('#register').setAttribute('style', '');
    document.querySelector('#register-form').setAttribute('class', 'spaceInDown');
});*/

//register

//business
//---------------按下營業時間-----------------
const formdivdivdivbusiness = document.querySelectorAll('.form-div-div-div-business');
formdivdivdivbusiness[0].addEventListener('click', function () {
    document.querySelector('#business').setAttribute('style', '');
    document.querySelector('#business-form').setAttribute('class', 'spaceInDown');
});
//-----------------營業時間的幻燈片
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1} 
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none"; 
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block"; 
  dots[slideIndex-1].className += " active";
}
//---------------按下我要預約-----------------
const businessformbuttondo = document.querySelectorAll('#business-form-button-do');
businessformbuttondo[0].addEventListener('click', function () {
    document.querySelector('#login').setAttribute('style', '');
    document.querySelector('#login-form').setAttribute('class', 'spaceInDown');
	document.querySelector('#business-form').setAttribute('class', 'spaceOutDown');
    setTimeout(function () {
        document.querySelector('#business').setAttribute('style', 'display:none');
    }, 1000);
});
//---------------按下我再考慮看看-----------------------------
const businessformbuttonndo = document.querySelector('#business-form-button-ndo');
businessformbuttonndo.addEventListener('click', function () {
    document.querySelector('#business-form').setAttribute('class', 'spaceOutDown');
    setTimeout(function () {
        document.querySelector('#business').setAttribute('style', 'display:none');
    }, 1000);   
});
//business

//case
//---------------按下案例照片-----------------
const formdivdivdivcase = document.querySelectorAll('.form-div-div-div-case');
formdivdivdivcase[0].addEventListener('click', function () {
    document.querySelector('#case').setAttribute('style', '');
    document.querySelector('#case-form').setAttribute('class', 'spaceInDown');
});
//-----------------案例照片的幻燈片
var slideIndex2 = 1;
showSlides2(slideIndex2);
function plusSlides2(n) {
  showSlides2(slideIndex2 += n);
}
function currentSlide2(n) {
  showSlides2(slideIndex2 = n);
}
function showSlides2(n) {
  var i;
  var slides2 = document.getElementsByClassName("mySlides2");
  var dots2 = document.getElementsByClassName("dot2");
  if (n > slides2.length) {slideIndex2 = 1} 
  if (n < 1) {slideIndex2 = slides2.length}
  for (i = 0; i < slides2.length; i++) {
      slides2[i].style.display = "none"; 
  }
  for (i = 0; i < dots2.length; i++) {
      dots2[i].className = dots2[i].className.replace(" active", "");
  }
  slides2[slideIndex2-1].style.display = "block"; 
  dots2[slideIndex2-1].className += " active";
}
//---------------按下返回-----------------------------
const caseformbuttonno = document.querySelector('#case-form-button-no');
caseformbuttonno.addEventListener('click', function () {
    document.querySelector('#case-form').setAttribute('class', 'spaceOutDown');
    setTimeout(function () {
        document.querySelector('#case').setAttribute('style', 'display:none');
    }, 1000);   
});
//case

//consult
const formdivdivdivconsult = document.querySelector('.form-div-div-div-consult');
formdivdivdivconsult.addEventListener('click', function () {
    document.querySelector('#consult').setAttribute('style', '');
    document.querySelector('#consult-form').setAttribute('class', 'spaceInDown');
});

const consultformx = document.querySelector('#consult-form-x');
consultformx.addEventListener('click', function () {
    document.querySelector('#consult-form').setAttribute('class', 'spaceOutDown');
    setTimeout(function () {
        document.querySelector('#consult').setAttribute('style', 'display:none');
    }, 1000);
});
//consult

//courseintroduvtion
//按下預約
const courseformbuttomspan = document.querySelectorAll('#courseform-buttom');
for (var i = 0; i < courseformbuttomspan.length; i++) {
    courseformbuttomspan[i].addEventListener('click', function () {
        document.querySelector('#coursewindow').setAttribute('style', '');
        document.querySelector('#coursewindow-qq').setAttribute('style', '');
        document.querySelector('#coursewindow-form').setAttribute('class', 'spaceInDown');
    });
}
//courseintroduvtion