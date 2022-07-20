let ticz = 2000,
    ciaz = 0,
    imacz = document
                .querySelectorAll("#slider2 img")
    max = imacz.length;

function nextImagecz() {

    imacz[ciaz]
        .classList.remove("selected2")

    ciaz++

    if(ciaz >= max)
        ciaz = 0

    imacz[ciaz]
        .classList.add("selected2")
}

function start() {
    setInterval(() => {
        // troca de image
        nextImagecz()
    }, ticz)
}

window.addEventListener("load", start)