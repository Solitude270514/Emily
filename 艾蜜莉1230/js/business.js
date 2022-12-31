//12/01
//---------------按下營業時間-----------------
const formdivdivdivdivspanbusiness = document.querySelectorAll('#form-div-div-div-div-span-business');
formdivdivdivdivspanbusiness[0].addEventListener('click', function () {
    document.querySelector('#business').setAttribute('style', '');
    document.querySelector('#business-form').setAttribute('class', 'spaceInDown');
});


//---------------按下營業時間裡面的x-----------------
/* const businessformx = document.querySelector('#business-form-x');
businessformx.addEventListener('click', function () {
    document.querySelector('#business-form').setAttribute('class', 'spaceOutDown');
    setTimeout(function () {
        document.querySelector('#business').setAttribute('style', 'display:none');
    }, 1000);   
}); */
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