/---------«ö¤U°ÝÃD-------------/
const backgroundtable = document.querySelectorAll('#background-table');
const backgroundtable2 = document.querySelectorAll('#background-table-2');
const backgroundtable2span = document.querySelectorAll('#background-table-2-span');
backgroundtable[0].addEventListener('click', function () {
    if (backgroundtable2[0].getAttribute('style') == "height:0px;") {
        backgroundtable2span[0].setAttribute('style', '');
        backgroundtable2span[1].setAttribute('style', '');
        backgroundtable2span[2].setAttribute('style', '');
        backgroundtable2span[3].setAttribute('style', '');
        backgroundtable2span[4].setAttribute('style', '');
        backgroundtable2[0].setAttribute('style', '');
    }
    else {
        backgroundtable2[0].setAttribute('style', 'height:0px;');
        backgroundtable2span[0].setAttribute('style', 'font-size:0px;');
        backgroundtable2span[1].setAttribute('style', 'font-size:0px;');
        backgroundtable2span[2].setAttribute('style', 'font-size:0px;');
        backgroundtable2span[3].setAttribute('style', 'font-size:0px;');
        backgroundtable2span[4].setAttribute('style', 'font-size:0px;');
        
    }
});


const backgroundtable2span2 = document.querySelectorAll('#background-table-2-span2');
backgroundtable[1].addEventListener('click', function () {
    if (backgroundtable2[1].getAttribute('style') == "height:0px;") {
        backgroundtable2span2[0].setAttribute('style', '');
        backgroundtable2[1].setAttribute('style', '');
    }
    else {
        backgroundtable2[1].setAttribute('style', 'height:0px;');
        backgroundtable2span2[0].setAttribute('style', 'font-size:0px;');
    }
});

const backgroundtable2span3 = document.querySelectorAll('#background-table-2-span3');
backgroundtable[2].addEventListener('click', function () {
    if (backgroundtable2[2].getAttribute('style') == "height:0px;") {
        backgroundtable2span3[0].setAttribute('style', '');
        backgroundtable2[2].setAttribute('style', '');
    }
    else {
        backgroundtable2[2].setAttribute('style', 'height:0px;');
        backgroundtable2span3[0].setAttribute('style', 'font-size:0px;');
    }
});