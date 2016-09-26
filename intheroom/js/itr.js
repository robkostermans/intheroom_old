function filter(b,v) {
    a = document.querySelectorAll("a[data-f='" + v + "']");
    for (e in a) {
       if (e == parseInt(e,10)) {
           a[e].classList.toggle("a");
        }
    }
}

function show(c) {

    c.parentNode.classList.toggle("a");

}

