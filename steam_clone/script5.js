let tibad = 2000,
    cibad = 0,
    imabad = document
                .querySelectorAll("#slider5 img")
    max = imabad.length;

function nextImagead() {

    imabad[cibad]
        .classList.remove("selected5")

    cibad++

    if(cibad >= max)
        cibad = 0

    imabad[cibad]
        .classList.add("selected5")
}

function start() {
    setInterval(() => {
        // troca de imagec
        nextImagead()
    }, tibad)
}

window.addEventListener("load", start)