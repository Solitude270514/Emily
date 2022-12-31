const formdivdivdivdivspanconsult = document.querySelector('#form-div-div-div-div-span-consult');
formdivdivdivdivspanconsult.addEventListener('click', function () {
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



