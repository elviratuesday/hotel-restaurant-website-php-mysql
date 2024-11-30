const voornaam = document.querySelector("#voornaam");
const achternaam = document.querySelector("#achternaam");
const adres = document.querySelector("#adres");
const postcode = document.querySelector("#postcode");
const plaats = document.querySelector("#plaats");
const land = document.querySelector("#land");
const email = document.querySelector("#email");
const aankomstSave = document.querySelector("#aankomstdatum");
const vertrekSave = document.querySelector("#vertrekdatum");
const aantalKamers = document.querySelector("#aantalkamers");

const form = document.querySelector("form");
const submit = document.querySelector("#reserveer-button");

const YOUFAurl = "https://api.yourfutureacademy.net/";

form.addEventListener("submit", (e) => {
    e.preventDefault();

    const check = function(response) {
        if(!response.ok) {
            throw (response.status + ": " + response.statusText);
        }
        return response.json();
    }    

    var urlRequest = YOUFAurl + "?request=100" +
                        "&voornaam=" + voornaam.value + 
                        "&achternaam=" + achternaam.value +
                        "&aankomstDatum=" + aankomstSave.value +
                        "&vertrekDatum=" + vertrekSave.value +
                        "&kamerType=" + kamerType +
                        "&email=" + email.value;
    console.log(urlRequest);

        fetch(urlRequest, {
            headers: {
                "Content-Type": "application/json",
                "Authkey": "YFA2022100"
            }
        })
            .then(response => check(response))
            .then(data => succeed(data))
            .catch((error) => fail(error));
});

const succeed = function(response) {
    window.location.assign("succes.php");
}

const fail = function(response) {
    console.log(response);
}

submit.addEventListener("click", () => {
    sessionStorage.setItem("voornaam", voornaam.value);
    sessionStorage.setItem("achternaam", achternaam.value);
    sessionStorage.setItem("adres", adres.value);
    sessionStorage.setItem("postcode", postcode.value);
    sessionStorage.setItem("plaats", plaats.value);
    sessionStorage.setItem("land", land.value);
    sessionStorage.setItem("email", email.value);
    sessionStorage.setItem("aankomst", aankomstSave.value);
    sessionStorage.setItem("vertrek", vertrekSave.value);
    sessionStorage.setItem("aantalKamers", aantalKamers.value);
    sessionStorage.setItem("kamerType", kamerType);
});