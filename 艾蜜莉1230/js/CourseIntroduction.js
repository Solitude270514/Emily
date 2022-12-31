// 按下預約有登入的話
const courseformbuttom = document.querySelectorAll('.courseform-buttom');
for (var i = 0; i < courseformbuttom.length; i++) {
    courseformbuttom[i].addEventListener('click', function () {
        document.querySelector('#coursewindow').setAttribute('style', '');
        document.querySelector('#coursewindow-qq').setAttribute('style', '');
        document.querySelector('#coursewindow-form').setAttribute('class', 'spaceInDown');
    });
}
//按下預約沒登入的話跳出登入
const courseformbuttomlogin = document.querySelectorAll('.courseform-buttom-login');
for (var i = 0; i < courseformbuttomlogin.length; i++) {
    courseformbuttomlogin[i].addEventListener('click', function () {
        document.querySelector('#login').setAttribute('style', '');
        document.querySelector('#login-form').setAttribute('class', 'spaceInDown');
    });
}
//---------------按下登入裡面的x-----------------
const loginformx = document.querySelector('#login-form-x');
loginformx.addEventListener('click', function () {
    document.querySelector('#login-form').setAttribute('class', 'spaceOutDown');
    setTimeout(function () {
        document.querySelector('#login').setAttribute('style', 'display:none');
    }, 1000);
});
//按下小視窗的取消
const coursewindowformx = document.querySelector('#coursewindow-form-x');
coursewindowformx.addEventListener('click', function () {
    document.querySelector('#coursewindow-form').setAttribute('class', 'spaceOutDown');
    setTimeout(function () {
        document.querySelector('#coursewindow').setAttribute('style', 'display:none');
        document.querySelector('#coursewindow-qq').setAttribute('style', 'display:none');
    }, 500);
});

