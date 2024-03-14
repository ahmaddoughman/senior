
// for index img animation in home page
let slideIndex = 0;
showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 5 seconds
}


// we use it to count the time in shop page

var countDownDate = new Date("Dec 14, 2023 00:00:00").getTime;
var x = setInterval(function () {
    var now = new Date().getTime();
    var distance = countDownDate - now;

    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("days").innerHTML = days;
    document.getElementById("hours").innerHTML = hours;
    document.getElementById("minutes").innerHTML = minutes;
    document.getElementById("seconds").innerHTML = seconds;

}, 1000);


// move data to products page

function handleButtonClick(button) {
    var productDiv = button.closest('.pro'); // Locate the nearest 'pro' class container
    var paragraphText = productDiv.querySelector('.paragraphId').textContent;
    var descriptionText = productDiv.querySelector('.descriptionId').textContent;
    var imageSource = productDiv.querySelector('img').src;

    selectImageAndPrice(imageSource, paragraphText, descriptionText);
    moveToPage2();
}

function selectImageAndPrice(imageSource, price, desc) {
    sessionStorage.setItem('selectedImage', imageSource);
    sessionStorage.setItem('selectedPrice', price);
    sessionStorage.setItem('selectedDesc', desc);
}

function moveToPage2() {
    window.location.href = 'products.php';
}




// 
// move data to products page

function handleButtonClick1(button) {
    var productDiv = button.closest('.pro1'); // Locate the nearest 'pro' class container
    var paragraphText = productDiv.querySelector('.paragraphId').textContent;
    var descriptionText = productDiv.querySelector('.descriptionId').textContent;
    var imageSource = productDiv.querySelector('img').src;

    selectImageAndPrice(imageSource, paragraphText, descriptionText);
    moveToPage2();
}

function selectImageAndPrice(imageSource, price, desc) {
    sessionStorage.setItem('selectedImage', imageSource);
    sessionStorage.setItem('selectedPrice', price);
    sessionStorage.setItem('selectedDesc', desc);
}

function moveToPage2() {
    window.location.href = 'products.php';
}


