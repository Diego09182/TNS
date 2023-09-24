$(document).ready(function(){
	$('.datepicker').datepicker({
        format: 'yyyy-mm-dd'
    });
	$('.fixed-action-btn').floatingActionButton({
        direction: 'left',
		hoverEnabled: false
    });
	$('.tabs').tabs();
    $('.parallax').parallax();
    $('.button-collapse').sidenav();
    $('.carousel.carousel-slider').carousel({ fullWidth: true });
    $('.modal').modal();
    $('.materialboxed').materialbox();
    $('.tooltipped').tooltip();
    $('.chips').chips();
    $('.collapsible').collapsible();
    $('.carousel').carousel();
    $('.slider').slider({ fullWidth: true });
    $('select').formSelect();
	$('.sidenav').sidenav();
});
