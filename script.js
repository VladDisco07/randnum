$(document).ready(function() {
    document.cookie = "randomNum=0";
    
    function putCookie(value) {
        document.cookie = `randomNum = ${value}`;
    }
    
    var titluText = $("#number :first");
    var generateButton = $("#generate :first");
    var randomNumber = null;

    generateButton.click(function() {
        randomNumber = 1 + Math.floor(Math.random() * 10000);
        putCookie(randomNumber);

        titluText.html(`<h2>${randomNumber}</h2>`);
    });
});