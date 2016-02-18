var haut=document.querySelector('#header');
var gauche=document.querySelector('#entreprise');
var droit=document.querySelector('#revendeur');
var bas=document.querySelector('.buttonAventure');
var imageTete=document.querySelector('#oopsTete');

/*****************


SLIDER



***************/


$('.slider').slick({
  dots: true,
  autoplay: true,
  autoplaySpeed: 8000,
  mobileFirst: true,
  centerMode: true,
  centerPadding: '0px',
  arrows: false,
});

/********************
ANIMATION OOPS

Mettre tete expression


******************/


haut.addEventListener(
    'mouseover',
    function mettreTeteHaut() {
    imageTete.src="images/oopsHaut.png";
  }
    ,
    false
    );


gauche.addEventListener(
    'mouseover',
    function mettreTeteGauche() {
    imageTete.src="images/oopsBasGauche.png";
  }
    ,
    false
    );

droit.addEventListener(
    'mouseover',
    function mettreTeteDroit() {
    imageTete.src="images/oopsBasDroit.png";
  }
    ,
    false
    );

bas.addEventListener(
    'mouseover',
    function mettreTeteDroit() {
    imageTete.src="images/oopsBas.png";
  }
    ,
    false
    );

/*******************


Mettre tete neutre


*********************/
haut.addEventListener(
    'mouseout',
    mettreTeteNeutre
    ,
    false
    );



gauche.addEventListener(
    'mouseout',
    mettreTeteNeutre
    ,
    false
    );

droit.addEventListener(
    'mouseout',
    mettreTeteNeutre
    ,
    false
    );

bas.addEventListener(
    'mouseout',
    mettreTeteNeutre
    ,
    false
    );

function mettreTeteNeutre() {
  imageTete.src="images/oopsNeutre.png";
  
};



/*****************


clin d'oeuil


*****************/
var clin=setInterval(clinOeuil,3000);



 function clinOeuil() {
   console.log("ok");
   var srcPrece=imageTete.src ;
  imageTete.src="images/clin.png";
  var timer=setTimeout(function(){
     
    imageTete.src=srcPrece; 
  },100)
 
 };
