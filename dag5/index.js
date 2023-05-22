var GUIOmraadeEl = document.getElementById("GUIOmraade");
var knappEl = document.getElementById("trykk");
var adding = document.getElementById("adding");
var results = document.getElementById("results");

knappEl.addEventListener("click", leggTilFag);

var fag = ["norsk", "matte", "KRØ", "KRLE", "naturfag"];
var fagSlidersListe = [];


function leggtillGUI(fagnavn) {
    var labelEl = document.createElement("label");
    labelEl.htmlFor = fagnavn;
    labelEl.innerHTML = fagnavn;
    GUIOmraadeEl.appendChild(labelEl);


    var fagSliderEl = document.createElement("input");
    fagSliderEl.type = "range";
    fagSliderEl.name = fagnavn;
    fagSliderEl.min = 1;
    fagSliderEl.max = 6;
    fagSlidersListe.push(fagSliderEl);
    GUIOmraadeEl.appendChild(fagSliderEl);
    
    for (var i = 0; i < fagSlidersListe.length; i++) {
        fagSlidersListe[i].addEventListener("change", beregnSnitt);
    }
}

// function leggtillGUI (fagnavn) {
//     GUIOmraadeEl.innerHTML += `<label for"${fagnavn}">${fagnavn}</label>`;
//     GUIOmraadeEl.innerHTML += `<input type="range" min="1" max="6" name="${fagnavn}" class="fag">`

//     for (var i = 0; i < fagSlidersListe.length; i++) {
//         fagSlidersListe[i].addEventListener("change", beregnSnitt);
//     }
// }


function leggTilFag (e){
    leggtillGUI(adding.value);
}


function beregnSnitt(e) {
    var sum = 0;
    for (i = 0; i < fagSlidersListe.length; i++){
        sum += Number(fagSlidersListe[i].value);
    }
    var snitt = sum / fagSlidersListe.length;
    console.log(sum);
    console.log(snitt);
    results.innerHTML = snitt;
}

for (var i = 0; i < fag.length; i++) {
    leggtillGUI(fag[i]);
}



// function beregnSnitt(e) {
//     var sum = 0;
//     var alleFag = document.getElementsByClassName(fag);
//     for (i = 0; i < alleFag.length; i++){
//         sum += Number(alleFag[i].value);
//     }
//     var snitt = sum / alleFag.length;
//     console.log(sum);
//     console.log(snitt);
//     results.innerHTML = snitt;
// }

// for (var i = 0; i < fag.length; i++) {
//     leggtillGUI(fag[i]);
// }

// GUIOmraadeEl.innerHTML += "<h1>OVERSKRIFT</h1>";


// var overskriftEl = document.createElement("h1");
// overskriftEl.innerHTML += "her er teksten til den andre";
// GUIOmraadeEl.appendChild(overskriftEl);
// document.body.appendChild(overskriftEl);