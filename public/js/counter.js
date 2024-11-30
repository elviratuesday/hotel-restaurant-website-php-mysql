function leadingZero(time) {
if (time <= 9) {
  time = "0" + time;
}
return time;
}

const secondenMaalHonderd = 6000;
var teller =[0,0,secondenMaalHonderd]; 
var interval;

function runteller(){
  let boekingsTijd = leadingZero(teller[0]) +":"+ leadingZero(teller[1]);
  document.querySelector('.timer').innerHTML = boekingsTijd;
  teller[2]--;
  teller[0] = Math.floor((teller[2]/100)/60); 
  teller[1] = Math.floor((teller[2]/100) - (teller[0]*60));
  if (teller[2] < 100) {clearInterval(interval); 
    showModal();}
}

function startCounter(){
    interval= setInterval(runteller,10); 
  }
