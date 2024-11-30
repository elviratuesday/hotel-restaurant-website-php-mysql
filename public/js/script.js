const reserveerStandaard = document.querySelector("#reserveerStandaard");
const reserveerFamilie = document.querySelector("#reserveerFamilie");
const reserveerSuite = document.querySelector("#reserveerSuite");
const bevestiging = document.querySelector("#bevestiging");
const kamerSection = document.querySelector("#kamer-section");

const bevestigingType = document.querySelector("#bevestigingType");
const bevestigingImage = document.querySelector("#bevestigingImage");
const bevestigingDescShort = document.querySelector("#bevestigingDescShort");
const bevestigingDescLong = document.querySelector("#bevestigingDescLong");

const annulerenBtn = document.querySelector("#annuleerBtn");

var kamerType;

function reserveerKamer(kamer){
switch(kamer){
    case 1:        
        bevestigingType.innerHTML = kamers[0].roomType;
        bevestigingImage.setAttribute("src", kamers[0].roomImg);
        bevestigingDescShort.innerHTML = kamers[0].roomShortDesc;
        bevestigingDescLong.innerHTML = kamers[0].roomLongDesc;
        break;
    case 2: 
        bevestigingType.innerHTML = kamers[1].roomType;
        bevestigingImage.setAttribute("src", kamers[1].roomImg);
        bevestigingDescShort.innerHTML = kamers[1].roomShortDesc;
        bevestigingDescLong.innerHTML = kamers[1].roomLongDesc;
        break;
    case 3:
        bevestigingType.innerHTML = kamers[2].roomType;
        bevestigingImage.setAttribute("src", kamers[2].roomImg);
        bevestigingDescShort.innerHTML = kamers[2].roomShortDesc;
        bevestigingDescLong.innerHTML = kamers[2].roomLongDesc;
        break;
}
    kamerSection.style.display = "none";
    bevestiging.style.display = "flex";
    //startCounter()
    kamerType = kamers[kamer].roomType;
};

reserveerStandaard.addEventListener("click", function(){ reserveerKamer(0);}, false);
reserveerFamilie.addEventListener("click", function(){ reserveerKamer(1);}, false);
reserveerSuite.addEventListener("click", function(){ reserveerKamer(2);}, false);

function annuleren() { 
    let confirm = window.confirm("Weet je het zeker?");

    if (confirm) {
        kamersTonen();
    } 
};

annulerenBtn.addEventListener("click", function(){ annuleren();}, false);
