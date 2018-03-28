
//FOCUS CODE POSTAL
var posteElt = document.getElementById("cp");
var element = document.getElementById("cp1");
posteElt.addEventListener("focus",function () {
    document.getElementById("aidePost").textContent = "ex: 06000";
});
posteElt.addEventListener("blur",function () {
    document.getElementById("aidePost").textContent = "";
    element.style.color="black";
})

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

//FOCUS EFFECTIFS
var effElt = document.getElementById("eff");
var effRed = document.getElementById("eff1");
effElt.addEventListener("focus",function () {
    document.getElementById("aideEff").textContent = "Only chiffres"
});
effElt.addEventListener("blur",function () {
    document.getElementById("aideEff").textContent = ""
    effRed.style.color="black";
});

//FOCUS CA
var caElt = document.getElementById("ca");
var caRed = document.getElementById("ca1");
caElt.addEventListener("focus",function () {
    document.getElementById("aideCa").textContent = "Only chiffres"
});
caElt.addEventListener("blur",function () {
    document.getElementById("aideCa").textContent = ""
    caRed.style.color="black";
});



//FORME--------------------------------------------------------
var form = document.querySelector("form");
form.addEventListener("submit", function (e) {

//verification de CODE POSTAL
var cp = document.getElementById("cp").value;
      if (cp.length != 5) {
          element.style.color="red";
          posteElt.focus();
          e.preventDefault();
      }
      if (isNaN(cp.trim()) == true)
      {
            element.style.color="red";
            posteElt.focus();
            e.preventDefault();
      }
      if(cp.trim() == "")
      {
            element.style.color="red";
            posteElt.focus();
            e.preventDefault();
      }

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

  var eff = document.getElementById("eff").value;
      if (isNaN(eff.trim()) == true) {
          effRed.style.color="red";
          effElt.focus();
          e.preventDefault();
      }

      var ca = document.getElementById("ca").value;
          if (isNaN(ca.trim()) == true) {
              caRed.style.color="red";
              caElt.focus();
              e.preventDefault();
          }

});
