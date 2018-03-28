//FOCUS TELEPHONE
var telElt = document.getElementById("tel");
var telRed = document.getElementById("tel1");
telElt.addEventListener("focus",function () {
    document.getElementById("aideTel").textContent = "ex: 06 12 34 56 78";
});
telElt.addEventListener("blur",function () {
    document.getElementById("aideTel").textContent = "";
    telRed.style.color="black";
});

//FORME--------------------------------------------------------
var form = document.querySelector("form");
form.addEventListener("submit", function (e) {

//varification telephone
  var tel = document.getElementById("tel").value;

      if (tel.length != 10) {
        telRed.style.color="red";
        telElt.focus();
        e.preventDefault();
      };
      if (isNaN(tel.trim()) == true) {
        telRed.style.color="red";
        telElt.focus();
        e.preventDefault();
      }



});
