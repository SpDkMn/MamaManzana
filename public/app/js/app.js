$(document).ready(function(){

  /*$('.navbar-toggle').click(function(e) {
    e.preventDefault();
    $('.navbar-toggle').toggleClass('active');
    $('.nav_color').toggleClass('active');
  });*/

  $('#slider_home').carousel({
    interval: 3000,
    pause: false,
  });

  window.sr = new scrollReveal();
  
  $('.btn-up').click(function(e) {
  	e.preventDefault();
  	$("html, body").animate({
        scrollTop: 0
    }, 1000); 
  });

  $('.button-collapse').sideNav({'edge': 'left'});

  /*document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value;
  };*/
  
}); 