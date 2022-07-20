let ti = 2000,
    ci = 0,
    ima = document
                .querySelectorAll("#slider1 img")
    max = ima.length;

function nextImaged() {

    ima[ci]
        .classList.remove("selected1")

    ci++

    if(ci >= max)
        ci = 0

    ima[ci]
        .classList.add("selected1")
}

function start() {
    setInterval(() => {
        // troca de image
        nextImaged()
    }, ti)
}

window.addEventListener("load", start)