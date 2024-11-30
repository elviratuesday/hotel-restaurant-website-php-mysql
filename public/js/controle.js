const aankomstDatum = document.querySelector("#aankomstdatum");
const vertrekDatum = document.querySelector("#vertrekdatum");

var date = new Date().setHours(0, 0, 0, 0);
var aankomst = new Date(aankomstDatum.value).setHours(0,0,0,0);
var vertrek = new Date(vertrekDatum.value).setHours(0,0,0,0);

function controle1() {
    var aankomst = new Date(aankomstDatum.value).setHours(0,0,0,0);
    if (aankomst <= date) {
        window.alert("De aankomst- en/of vertrekdatum valt in het verleden");
        document.querySelector("#aankomstdatum").focus();
        aankomstDatum.value = '';
    }
}

function controle2() {
    var aankomst = new Date(aankomstDatum.value).setHours(0,0,0,0);
    var vertrek = new Date(vertrekDatum.value).setHours(0,0,0,0);
    if (aankomstDatum.value == ''){
        window.alert("Vul eerst de aankomstdatum in");
        document.querySelector("#aankomstdatum").focus();
        vertrekDatum.value = '';
    }
    else if (aankomst > vertrek) {
        window.alert("De vertrekdatum moet na de aankomstdatum zijn");
        document.querySelector("#vertrekdatum").focus();
        vertrekDatum.value = '';
    }
}

aankomstDatum.addEventListener("blur", controle1, false);
vertrekDatum.addEventListener("blur", controle2, false);

