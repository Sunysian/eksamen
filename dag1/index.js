var nedtrekkEl = document.getElementById("foodchoice");
var utskrift = document.getElementById("utskrift");
var radioknappListe = document.getElementsByClassName("radioknapper");
var checkListe = document.getElementsByClassName("checkboxes");
var buttie = document.getElementById("buttie");
var sliderEl = document.getElementsByClassName("slider");
var check1 = document.getElementById("check1");
var check2 = document.getElementById("check2");
var check3 = document.getElementById("check3");
var check4 = document.getElementById("check4");





nedtrekkEl.addEventListener("change", velgerFraNedtrekk);

for (var i = 0; i < radioknappListe.length; i++) {
radioknappListe[i].addEventListener("change", endrerRadioknapp);
};

buttie.addEventListener("click", totalbutton);

sliderEl.addEventListener("change", changevalue);






function velgerFraNedtrekk(e) {
    if (nedtrekkEl.value == 1) {
        check1.innerHTML = "chicken";
    }
    

    console.log(e.target.options[e.target.selectedIndex].text);
    console.log(e.target.options[e.target.selectedIndex].value);
    console.log(e.target.selectedIndex);
};

function endrerRadioknapp (e){
    console.log(e.target.value);
};


function totalbutton(e) {
    for (var i = 0; i < checkListe.length; i++) {
        if(checkListe[i].checked){
            console.log(checkListe[i].value);
            utskrift.innerHTML += checkListe[i].value + ", ";
        }
    };
};


function changevalue(e) {
    console.log(sliderEl.value)
}



//utskrift.innerHTML = "Du har valgt " + e.target.options[e.target.selectedIndex].text + ", og det koster " + e.target.options[e.target.selectedIndex].value + " kr.";