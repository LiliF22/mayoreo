<pre><?php print_r($_GET)?></pre>
<div class="mfp-content"><div class="ajax-text-and-image white-popup-block">
	<style>
	.ajax-text-and-image {
		max-width:800px; margin: 20px auto; background: #FFF; padding: 0; line-height: 0;
	}
	.ajcol {
		width: 50%; float:left;
	}
	.ajcol img {
		width: 100%; height: auto;
	}
	@media all and (max-width:30em) {
		.ajcol { 
			width: 100%;
			float:none;
		}
	}
	</style>
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">


<?php 
$texto = "";
$img= "";

				switch ($_GET['id']) {
					case 1:
						$texto = "
						<h3 class='nombre'>Carne de res</h3>
						Rib Eye Wagyu<br>
						Rib Eye de Res<br>
						Aguja Norteña <br>
						New York <br>
						Arrachera de Diezmillo <br>
						Picaña <br>
						Vacío de Res <br>
						Costillas de Res <br>
						Tuétanos de Res <br>
						Short Rib <br>
						Top Sirloin <br>
						Bistec de Res <br>
						Medallón de Res <br>";
						$img= "img/carne_de_res.jpg";
						break;
					case 2:
						echo "i es igual a 1";
						break;
					case 3:
						echo "i es igual a 2";
						break;
				}
			?>
	<div class="ajcol">
		<img src="<?php echo $img; ?>">
	</div>
	<div class="ajcol" style="line-height: 1.231;">
		<div style="padding: 1em">
			<?php echo $texto; ?>
		</div>
	</div>
	<div style="clear:both; line-height: 0;"></div>
<button title="Close (Esc)" type="button" class="mfp-close">×</button></div></div>