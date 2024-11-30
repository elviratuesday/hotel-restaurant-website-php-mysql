var url = window.location.pathname;
console.log(url);

var urlSplit = window.location.pathname.split("/");
console.log(urlSplit);

var urlEnd = urlSplit[urlSplit.length - 1];

// Netlify conversion layer
var netlify = window.location.hostname.split(".").slice(1).join(".");
if (netlify == "netlify.app") {
    urlEnd = "/" + urlSplit[urlSplit.length - 1].split(".")[0];
}
console.log(urlEnd);

var navLink = document.querySelectorAll(".navLink");
console.log(navLink);

for (var i = 0; i <navLink.length; i++) {
    if (navLink[i].getAttribute("href") === urlEnd ) { 
        navLink[i].setAttribute("class","active"); 
    }
}