function myFunction() {
    alert("Page is loaded");
  }
function confirm(){
 alert('Are you sure you want to leave this page?');
}
function myFunction2() {
  x = document.querySelector(".form");
  x.innerHTML = "Registered Successfully!!!";
  x.style.fontSize = "5vw";
  x.style.color = "#30a830cc";
  x.style.justifyContent = "center";
  x.style.alignItems = "center";
  x.style.height = "70vh"

  y = document.querySelector(".container");
  y.style.height = "100vh"
}

function focus_func(x) {
  x.style.borderWidth = "5px";
}

function bigImg(x) {
  x.style.justifyContent = "center"
  x.style.height = "70px";
  x.style.width = "150px";
}

function normalImg(x) {
  x.style.justifyContent = "center"
  x.style.height = "65px";
  x.style.width = "120px";
}

// function setCookie(){
// f = document.getElementById("first-name").value;
// l = document.getElementById("last-name").value;
// document.cookie = "fname" + "=" + f;
// document.cookie = "lname" + "=" + l;
// alert(document.cookie);
// }