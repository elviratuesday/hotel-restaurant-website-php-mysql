const voornaamGet = sessionStorage.getItem("voornaam");
const achternaamGet = sessionStorage.getItem("achternaam");
const adresGet = sessionStorage.getItem("adres");
const postcodeGet = sessionStorage.getItem("postcode");
const plaatsGet = sessionStorage.getItem("plaats");
const landGet = sessionStorage.getItem("land");
const emailGet = sessionStorage.getItem("email");
const aankomstGet = sessionStorage.getItem("aankomst");
const vertrekGet = sessionStorage.getItem("vertrek");
const aantalKamersGet = sessionStorage.getItem("aantalKamers");
const kamerTypeGet = sessionStorage.getItem("kamerType")


const voorNaam = document.querySelector("#voorNaam"); 
const kamerSelectie = document.querySelector("#kamerType");
// const aankomstDatum = document.querySelector("#aankomstDatum");


voorNaam.textContent = `${voornaamGet}`;
kamerSelectie.textContent = `${kamerTypeGet}`;
aankomstDatum.textContent = `${aankomstGet}`;