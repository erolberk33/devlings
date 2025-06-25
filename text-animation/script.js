const dataCont = document.querySelectorAll('.auto_text');
var texts = [];
var reverse = false;
var idx = 0;
var txtNum = 0;
var speed = 200;
var waitAtTheEnd = 2;

dataCont.forEach(text => {
    let data = text.getAttribute("data");
    texts.push(data);

});

var write = setInterval(() => {

    if (idx == 0 || idx < texts[txtNum].length + waitAtTheEnd && !reverse) {

        reverse = false;
        dataCont[0].innerHTML = texts[txtNum].toString().slice(0, idx);
        idx++;
    } else {
        reverse = true;
        dataCont[0].innerHTML = texts[txtNum].toString().slice(0, idx);
        idx--;
        if (idx == 0) {
            txtNum == texts.length - 1 ? txtNum = 0 : txtNum++;
        }
    }

}, speed)