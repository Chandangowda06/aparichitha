function myFunction() {
    var x = document.getElementById("myTopnav");
    var y = document.getElementById("menu");
    if (x.className === "") {
      x.className += "open";
    } else {
      x.className = "";
    }
    if(x.className === "open"){
        y.innerHTML = "<i class=\"fa fa-window-close\"></i>";
    }
    else
    y.innerHTML = "<i class=\"fa fa-bars\"></i>"
  }


