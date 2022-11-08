/* this is connected to changing the theme */
const setTheme = theme => document.documentElement.className = theme;


function PictureChangeDark()
{







      document.getElementById("book-again1").style="border:1px solid white;";
      document.getElementById("book-again2").style="border:1px solid white;";
      
      document.getElementById("button").style="border:1px solid white;";


     
}
function PictureChangeLight()
{



      document.getElementById("button").style="border:1px solid black;";


   

}



var slideIndex = 1;
showSlides(slideIndex);
 
function plusSlides(n) {
    showSlides(slideIndex += n);
}
 
function currentSlide(n) {
    showSlides(slideIndex = n);
}
 
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("fill-out");
    var dots = document.getElementsByClassName("dot");
    if (n > slides.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = slides.length }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}
 
 