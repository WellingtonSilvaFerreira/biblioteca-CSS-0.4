/* rolagem suave */

jQuery(document).ready(function($) { 
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({scrollTop:$(this.hash).offset().top}, 800);
	});
});

/* Katy Perry */

function katy() {

if (screen.width<=480)
    
    document.getElementById("id_da_img_1").src="imagens/img_1_480",
    document.getElementById("id_da_img_2").src="imagens/img_2_480",
    document.getElementById("id_da_img_3").src="imagens/img_3_480"

else if (screen.width<=768)

	document.getElementById("id_da_img_1").src="imagens/img_1_768",
    document.getElementById("id_da_img_2").src="imagens/img_2_768",
    document.getElementById("id_da_img_3").src="imagens/img_3_768"

else

	document.getElementById("id_da_img_1").src="imagens/img_1_full",
    document.getElementById("id_da_img_2").src="imagens/img_2_full",
    document.getElementById("id_da_img_3").src="imagens/img_3_full"

}