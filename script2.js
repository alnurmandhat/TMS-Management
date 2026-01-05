let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let formClose = document.querySelector('#form-close');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let videoBtn = document.querySelectorAll('.vid-btn');

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');
}

menu.addEventListener('click', () =>{
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () =>{
    loginForm.classList.add('active');
});

formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});

videoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
       document.querySelector('.controls .active').classList.remove('active');
       btn.classList.add('active');
       var src = btn.getAttribute('data-src');
      document.querySelector('#video-slider').src = src;
    });
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
    },
});

let slideIndex = 0;
      let timeoutId = null;
      const slides = document.getElementsByClassName("mySlides");
      const dots = document.getElementsByClassName("dot");
      
      showSlides();
      function currentSlide(index) {
           slideIndex = index;
           showSlides();
      }
     function plusSlides(step) {
        
        if(step < 0) {
            slideIndex -= 2;
            
            if(slideIndex < 0) {
              slideIndex = slides.length - 1;
            }
        }
        
        showSlides();
     }
      function showSlides() {
        for(let i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
          dots[i].classList.remove('active');
        }
        slideIndex++;
        if(slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].classList.add('active');
         if(timeoutId) {
            clearTimeout(timeoutId);
         }
        timeoutId = setTimeout(showSlides, 5000); // Change image every 5 seconds
      }

//validation

function myfun() {
  var email = document.getElementById('emailcheck').value;
  var passcheck = document.getElementById('passcheck').value;
  var pattern=/^[a-z0-9](\.?[a-z0-9]){3,}@[Gg][Mm][Aa][Ii][Ll]\.com+$/
  var pattern2=/^[a-z0-9](\.?[a-z0-9]){3,}@[Rr][Kk][Uu]\.ac.in+$/
  var pass = /^[a-z]\w{7,14}$/;//password

  if ((pattern.test(email)) || (pattern2.test(email)) && (email.indexOf('@')) && (pass.test(passcheck))) {
      emailcheck.value = "";
      passcheck.value = "";
      alert("sign up succefull");
  }
  else {
      // alert("Sorry Email id is not correct");
      alert("Sorry login failed");

      return false;

  }

}
    function my(){
var phoneNumber = document.getElementById('nu').value;
var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
var email=document.getElementById('email').value;
var pattern=/^[a-z0-9](\.?[a-z0-9]){3,}@[Gg][Mm][Aa][Ii][Ll]\.com+$/
var p=/^[a-z0-9](\.?[a-z0-9]){3,}@[Rr][Kk][Uu]\.ac.in+$/

//number
if (filter.test(phoneNumber)) {
  if(phoneNumber.length==10){
       var validate = true;
  } 
  else if(phoneNumber.length>=10) {
      alert('Please put 10  digit mobile number');
      var validate = false;
return false;
  }
}
else {
  alert('Not a valid number');
  var validate = false;
}
// email
  if(email.indexOf('@')<=0){
          alert('invalide @ position');
          return false;
  }
else if((email.charAt(email.length-4)!='.')&&(email.charAt(email.length-3)!='.')){
alert('invalide . position');
return false;
}
else if((pattern.test(email)) || (p.test(email)))
{
   
}
else
{
alert("check your email id");
return false;
}
alert("sign in successfully")
}
function my1(){
  var phoneNumber = document.getElementById('nu').value;
  var filter = /^((\+[1-9]{1,4}[ \-]*)|(\([0-9]{2,3}\)[ \-]*)|([0-9]{2,4})[ \-]*)*?[0-9]{3,4}?[ \-]*[0-9]{3,4}?$/;
  var email=document.getElementById('email').value;
  var pattern=/^[a-z0-9](\.?[a-z0-9]){3,}@[Gg][Mm][Aa][Ii][Ll]\.com+$/
  var p=/^[a-z0-9](\.?[a-z0-9]){3,}@[Rr][Kk][Uu]\.ac.in+$/
  
  //number
  if (filter.test(phoneNumber)) {
    if(phoneNumber.length==10){
         var validate = true;
    } 
    else if(phoneNumber.length>=10) {
        alert('Please put 10  digit mobile number');
        var validate = false;
  return false;
    }
  }
  else {
    alert('Not a valid number');
    var validate = false;
  }
  // email
    if(email.indexOf('@')<=0){
            alert('invalide @ position');
            return false;
    }
  else if((email.charAt(email.length-4)!='.')&&(email.charAt(email.length-3)!='.')){
  alert('invalide . position');
  return false;
  }
  else if((pattern.test(email)) || (p.test(email)))
  {
     
  }
  else
  {
  alert("check your email id");
  return false;
  }
  alert("thank you for contact us")
  }

//booking

function m(){
var t=document.getElementById('t').value;
if(t==' ')
{
alert('please select city');
return false;
}

  alert("Thank You For Booking In Our Tour & Travel agency");
}