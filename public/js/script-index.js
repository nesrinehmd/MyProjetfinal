
let Topbutton = document.querySelector("#on-top");

Topbutton.onclick = function ToTheTop() {
  document.documentElement.scrollTop = 0; 
} 



var Topbutton2 = document.getElementById("myBtn");

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    Topbutton2.style.display = "block";
  } else {
    Topbutton2.style.display = "none";
  }
}

Topbutton2.onclick = function ToTheTop() {
  document.documentElement.scrollTop = 0; 
} 