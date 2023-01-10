function rotatearrow(){
    const kuncinav = document.getElementById("kuncinav");

    if (window.matchMedia('(max-width: 629px)').matches) {
        kuncinav.style.transform = "rotate(90deg)";

        if (document.getElementById("check").checked){
            kuncinav.style.transform = "rotate(90deg)";
        }
        else {
            kuncinav.style.transform = "rotate(-90deg)";
        }
    }
    else{
        kuncinav.style.transform = "rotate(180deg)";

        if (document.getElementById("check").checked){
            kuncinav.style.transform = "rotate(0deg)";
        }
        else {
            kuncinav.style.transform = "rotate(180deg)";
        }
    }
}