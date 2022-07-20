let tib = 2000,
    cib = 0,
    imab = document
                .querySelectorAll("#slider3 img")
    max = imab.length;

function nextImagec() {

    imab[cib]
        .classList.remove("selected3")

    cib++

    if(cib >= max)
        cib = 0

    imab[cib]
        .classList.add("selected3")
}

function start() {
    setInterval(() => {
        // troca de imagec
        nextImagec()
    }, tib)
}

window.addEventListener("load", start)