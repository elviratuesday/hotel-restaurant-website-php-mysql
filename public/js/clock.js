var date = new Date();
console.log(date);

let hr = date.getHours();
let min = date.getMinutes();
let sec = date.getSeconds();
console.log("Hour: " + hr + " Minute: " + min + " Second: " + sec);

const welkomBericht = document.querySelector(".hotelHeader-container h1");
const welkomBericht2 = "Welkom bij The Academy Hotel en Restaurant.";

function clock(){
    if (hr >= 6, hr < 12) {
        welkomBericht.innerHTML = "Goedemorgen, " + (welkomBericht2);
    } else if (hr >= 12, hr < 18) {
        welkomBericht.innerHTML = "Goedemiddag, " + (welkomBericht2);
    } else if (hr >= 18) {
        welkomBericht.innerHTML = "Goedenavond, " + (welkomBericht2);
    } else {
        welkomBericht.innerHTML = (welkomBericht2);
    }
}

clock();