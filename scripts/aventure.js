//scrollReveal

var fooRevealBottom = {
  distance: '150px',
  origin: 'bottom',
  ease: 'cubic-bezier(0, 1, 0.5, 1)',
  scale: 1,
  reset: 'true',
  viewFactor: 0.6,
};

var fooRevealScale = {
  distance: '0px',
  origin: 'center',
  ease: 'cubic-bezier(0.25,0.76,1,0.98)',
  scale: 0.7,
  reset: 'true',
  viewFactor: 0.6,
};

var fooRevealUp = {
  distance: '90px',
  origin: 'top',
  ease: 'cubic-bezier(0, 1, 0.5, 1)',
  scale: 1,
  reset: 'true',
  viewFactor: 2,
};

window.sr = ScrollReveal();
sr.reveal('.foo', fooRevealBottom);
sr.reveal('.pull-right', fooRevealBottom);
sr.reveal('.pull-up', fooRevealUp);
sr.reveal('.foot', fooRevealScale)

/************

Animation bonhomme

*************/

var count = 0

function herve() {
  if (count == 0) {
    count = 1
    var herve = document.querySelector('#oopsSection img');
    herve.src = "images/Herve.gif";
    setTimeout(function () {
      count = 0
      console.log('hello');
      herve.src = "images/Herve.png";
    }, 800);
  }
}

/****************

Animation de la section pro

******************/
var scooter = document.querySelector("#scooter");
var position = 850;

function entreprise() {
  position = position - 2.5;
  scooter.style.transform = "ScaleX(-1)"
  scooter.style.left = position + 'px';
  setTimeout(entreprise,0.1);
  if (position < -200){
    window.location.href = "file:///C:/Users/ybaun/Desktop/Semaine%20intensive/Site%20Web/entreprise.html";
  }
}

function revendeur() {
  position = position + 2.5;
  scooter.style.left = position + 'px';
  setTimeout(revendeur,0.1);
  if (position > 1920){
    window.location.href = "file:///C:/Users/ybaun/Desktop/Semaine%20intensive/Site%20Web/revendeur.html";
  }
}

/************

Animsition

************/

    $(document).ready(function () {
      $(".animsition").animsition({
        inClass: 'fade-in-left',
        outClass: 'fade-out-left',
        inDuration: 1500,
        outDuration: 800,
        linkElement: '.animsition-link',
        // e.g. linkElement: 'a:not([target="_blank"]):not([href^=#])'
        loading: true,
        loadingParentElement: 'body', //animsition wrapper element
        loadingClass: 'animsition-loading',
        loadingInner: '', // e.g '<img src="loading.svg" />'
        timeout: false,
        timeoutCountdown: 5000,
        onLoadEvent: true,
        browser: ['animation-duration', '-webkit-animation-duration'],
        // "browser" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
        // The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
        overlay: false,
        overlayClass: 'animsition-overlay-slide',
        overlayParentElement: 'body',
        transition: function (url) {
          window.location.href = url;
        }
      });
    });

var s = skrollr.init();