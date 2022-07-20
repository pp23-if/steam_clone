let tiba = 2000,
    ciba = 0,
    imaba = document
                .querySelectorAll("#slider4 img")
    max = imaba.length;

function nextImagea() {

    imaba[ciba]
        .classList.remove("selected4")

    ciba++

    if(ciba >= max)
        ciba = 0

    imaba[ciba]
        .classList.add("selected4")
}

function start() {
    setInterval(() => {
        // troca de imagec
        nextImagea()
    }, tiba)
}

window.addEventListener("load", start)