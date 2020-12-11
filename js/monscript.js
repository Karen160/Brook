//Menu burger
var tlmenu = new TimelineMax({paused:true});
tlmenu.to('nav', 1, {opacity:0.9, autoAlpha:1});

var tlmenuAnim = new TimelineMax({paused:false});//pour que mon animation démarre seulement lorsque mes fonction sont actives et que ça n'impact pas ma nav normal

$('.click').click(function(){ //Ouvre le menu en appuyant sur les traits
    tlmenu.play(0);
    tlmenuAnim.staggerFromTo('nav a', 0.7, {x:200, opacity:0}, {x:0, opacity:1}, 0.1); //animation a 
     $(this).slideToggle('.boutonFermer') //Apparitrion de la croix pour fermer
     $('.boutonFermer p').css('display','block');
});
                       
$('.boutonFermer p').click(function(){ //Appuie sur la croix
    tlmenu.reverse(0);
    tlmenuAnim.staggerFromTo('nav a', 0.2, {x:0, opacity:1}, {x:200, opacity:0}, 0.1); //animation a 
    $(this).slideToggle('.click') //Apparitrion du menu pour fermer
    $('.click').css('display','block');
});

$('.menu').click(function(){ //Appuie sur le menu
    tlmenu.reverse(0);
    $('.click').css('display','block')
    $('.boutonFermer p').css('display','none');
});

//Header
TweenMax.fromTo('header h1', 1, {y:200, opacity:0}, {y:50, opacity:1, delay:1, ease:Back.easeOut});
TweenMax.fromTo('header img', 1, {opacity:0}, {opacity:1, delay:0.5});

//Personnage
var tlanimation = new TimelineMax({paused:true});
tlanimation
    .to('.bio', 1, {x:'-35%', delay:0.2})
    .to('#personnage h2', 1, {x:300, delay:0});

$('.polaroid').click(function(){
    tlanimation.play(0)
    $('#personnage .bio').css('width','80%')
    $('#personnage').css('background-color','darkred')
    $('#personnage .polaroid').css('filter','none')
    $('#personnage .polaroid:hover').css('transform','none')
    $('#personnage .polaroid img').css('filter','none')
    $('#personnage .polaroid img:hover').css('transform','none')
    $('#personnage .description').css('display','block')
    $('#personnage .fa-skull').css('visibility','hidden')
    $('#personnage .clique').css('display','none')
    TweenMax.fromTo('#personnage .description', 1, {opacity:0}, {opacity:1, delay:2});
});

// Nouveautés de la semaine : images qui s'agrandissent
$("#imgMoment img").hover(changement);
function changement(){
    $(this).toggleClass('#imgMoment .img');
};
                     
                            
                            
                            
                            
                            
                            
                            
<script>
jQuery(document).ready(function( $ ) {
 
src="https://code.jquery.com/jquery-2.1.4.min.js";
src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js";
	
	
	$('.boutonins').click(function(){ 
		$('.woocommerce').flip();
// 		$('#connexion')
// 			.css('animation','rotation 4s ease-in-out')
// 		$('#inscription')
// 			.css('animation','rotation2 2s ease-in-out')
	});
	

});

</script>         
                            
                            
                            
                            
                            
                            
                            