document.getElementById('create').addEventListener("click", function () {

    let element = document.getElementById('c-create');
    var gats = document.getElementsByTagName("div");
    for (i=0; i<gats.length; i++){
        gats[i].classList.add("hide");
    }
    element.classList.remove("hide");
});

document.getElementById('list').addEventListener("click", function () {

    let element = document.getElementById('c-list');
    var gats = document.getElementsByTagName("div");
    for (i=0; i<gats.length; i++){
        gats[i].classList.add("hide");
    }
    element.classList.remove("hide");
});

document.getElementById('moderate').addEventListener("click", function () {

    let element = document.getElementById('c-moderate');
    var gats = document.getElementsByTagName("div");
    for (i=0; i<gats.length; i++){
        gats[i].classList.add("hide");
    }
    element.classList.remove("hide");
});

document.getElementById('my-comms').addEventListener("click", function () {

    let element = document.getElementById('c-my-comms');
    var gats = document.getElementsByTagName("div");
    for (i=0; i<gats.length; i++){
        gats[i].classList.add("hide");
    }
    element.classList.remove("hide");
});

document.getElementById('logout').addEventListener("click", function () {

    let element = document.getElementById('c-logout');
    var gats = document.getElementsByTagName("div");
    for (i=0; i<gats.length; i++){
        gats[i].classList.add("hide");
    }
    element.classList.remove("hide");
});