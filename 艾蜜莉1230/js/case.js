//12/08
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