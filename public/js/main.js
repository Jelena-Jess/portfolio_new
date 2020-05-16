//TIMELINE
const items = document.querySelectorAll('#timeline li');

const isInViewport = el => {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) && 
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
};

const run = () =>
items.forEach(item => {
  if (isInViewport(item)) {
    item.classList.add('show');
  }
});

window.addEventListener('load', run);
window.addEventListener('resize', run);
window.addEventListener('scroll', run);

//NAVBAR
$(document).ready(function() {

$(window).scroll(function () { 
  console.log($(window).scrollTop())
if ($(window).scrollTop() > 850) {
  $('.navbar').addClass('navbar-fixed');
  $('.nav-link').addClass('nav-link-fixed');
  $('.nav-link-small').addClass('nav-link-small-fixed');
}
if ($(window).scrollTop() < 851) {
  $('.navbar').removeClass('navbar-fixed');
  $('.nav-link').removeClass('nav-link-fixed');
  $('.nav-link-small').removeClass('nav-link-small-fixed');
}
});
});

//BACK TO TOP BUTTON
$(window).scroll(function() {
  var height = $(window).scrollTop();
  if (height > 300) {
      $('.gotop').fadeIn();
  } else {
      $('.gotop').fadeOut();
  }
});
$(document).ready(function() {
  $(".gotop").click(function(event) {
      event.preventDefault();
      $("html, body").animate({ scrollTop: 0 }, "slow");
      return false;
  });
});

//SCROLL REVEAL
window.sr = ScrollReveal({ duration: 1000 });
sr.reveal('.reveal');

sr.reveal('.animate-left', {
  easing: 'ease-in-out',
  origin: 'left',
  distance: '10rem',
  delay: 300
});
sr.reveal('.animate-right', {
  easing: 'ease-in-out',
  origin: 'right',
  distance: '10rem',
  delay: 300
});
sr.reveal('.animate-top', {
  easing: 'ease-in-out',
  origin: 'top',
  distance: '10rem',
  delay: 600
});
sr.reveal('.animate-bottom', {
  easing: 'ease-in-out',
  origin: 'bottom',
  distance: '10rem',
  delay: 600
});

//ACCORDION
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}


//SIDEBAR
function openNav() {
  document.getElementById("mySidebar").style.height = "100vh";
  document.getElementById("main").style.marginBottom= "100vh";
}

function closeNav() {
  document.getElementById("mySidebar").style.height = "0";
  document.getElementById("main").style.marginBottom= "0";
}


//FOOTER UPPER SPLIT PAGE
const left = document.querySelector('.left');
const right = document.querySelector('.right');
const center = document.querySelector('.center');
const footerupper = document.querySelector('.footer-upper');

left.addEventListener('mouseenter', () => {
  footerupper.classList.add('hover-left');
});

left.addEventListener('mouseleave', () => {
  footerupper.classList.remove('hover-left');
});

right.addEventListener('mouseenter', () => {
  footerupper.classList.add('hover-right');
});

right.addEventListener('mouseleave', () => {
  footerupper.classList.remove('hover-right');
});

center.addEventListener('mouseenter', () => {
  footerupper.classList.add('hover-center');
});

center.addEventListener('mouseleave', () => {
  footerupper.classList.remove('hover-center');
});


