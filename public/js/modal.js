const opnieuw = document.querySelector("#annuleerModal");
// const voornaam = document.querySelector("#voornaam");

opnieuw.addEventListener("click", sluitModal, false);

function sluitModal() {
    modal.style.display = "none";
    kamersTonen();
}

function showModal(){
    modal.style.display = "flex";
    let gastnaam = voornaam.value;
    
    if (voornaam.value == '') {
        overzichtVoornaam.innerHTML = "Beste gast, uw tijd is helaas voorbij";
    } else {
        overzichtVoornaam.innerHTML = "Beste " + gastnaam + ", uw tijd is helaas voorbij";
    }
}

function kamersTonen() {
    kamerSection.style.display = "flex";
    bevestiging.style.display = "none";
    document.querySelector("#bookingForm").reset();

    clearInterval(interval);
    teller[2] = secondenMaalHonderd;
}