function myFunction() {
    var x = document.getElementById("responsive-nav");
    if (x.className === "mainmenu") {
      x.className += " responsive";
    } else {
      x.className = "mainmenu";
    }
  }
