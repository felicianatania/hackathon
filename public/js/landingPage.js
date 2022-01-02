window.onscroll = function(){  
    if(window.pageYOffset > 5){
        document.getElementById("navigationBar").style.backgroundColor = "rgba(51, 66, 87, 0.8)";
    } else {
        document.getElementById("navigationBar").style.backgroundColor = "rgba(51, 66, 87, 0)";
    }
}