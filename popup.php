<pre><?php print_r($_GET)?></pre>
<div class="mfp-content"><div class="ajax-text-and-image white-popup-block">
	<style>
	.ajax-text-and-image {
		max-width:800px; margin: 20px auto; background: #FFF; padding: 0; line-height: 0; border-radius: 30px; overflow: hidden; 
	}
	.ajcol {
		width: 50%; float:left;
	}
	.ajcol img {
		width: 100%; height: auto;
	}
	.mfp-content {
		padding: 15px;
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
						<h3 class='nombre'>CARNE DE RES</h3>
						<span class='linea-ipad'></span>
						<div class='text-modal'>
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
						Medallón de Res <br>
						</div>";
						$img= "img/carne_de_res.jpg";
						break;
					case 2:
						$texto = "
						<h3 class='nombre'>CARNE DE CERDO</h3>
						<span class='linea-ipad'></span>
						<div class='text-modal'>
						Chicharrón de Cerdo<br>
						Chuleta Ahumada de Cerdo<br>
						Baby Back Ribs de Cerdo <br>
						Pork Wings <br>
						Pulled Pork<br>
						Salchiribs <br>
						Carnitas de Cerdo <br>
						Asado de Cerdo <br>
						Tinga de Cerdo <br>
						</div>";
						$img="img/carne_de_cerdo.jpg";
						break;
					case 3:
						$texto = "
						<h3 class='nombre'>CARNE DE POLLO</h3>
						<span class='linea-ipad'></span>
						<div class='text-modal'>
						Pechuga de Pollo sin Piel<br>
						Pechuga Cocida Deshebrada<br>
						Piernas <br>
						Muslos <br>
						Pierna y Muslo <br>
						Milanesas <br>
						Milanesas Empanizadas <br>
						Fajitas <br>
						Fajitas Empanizadas <br>
						Tenders Empanizados <br>
						Boneless <br>
						Nuggets <br>
						Palomitas de Pechuga de Pollo <br>
						</div>";
						$img="img/carne_de_pollo.jpg";
						break;
						case 4:
							$texto = "
							<h3 class='nombre'>PESCADOS Y MARISCOS</h3>
							<span class='linea-ipad'></span>
							<div class='text-modal'>
							Salmón <br>
							Camarón <br>
							Medallones de Atún <br>
							Tilapia <br>
							Pulpo <br>
							Basa <br>
							Huachinango <br>
							Callo de hacha <br>
							Surimi <br>
							Mejillones <br>
							y más...
							</div>";
							$img="img/mariscos.jpg";
							break;
							case 5:
								$texto = "
								<h3 class='nombre'>OTROS</h3>
								<span class='linea-ipad'></span>
								<div class='text-modal'>
								Carne para Hamburguesa <br>
								La Ramos <br>
								Chicharrón de la Ramos <br>
								Papas a la Francesa <br>
								Papas Gajo <br>
								Aros de Cebolla <br>
								Discada <br>
								Chistorra <br>
								Tortillas de Maíz <br>
								Frutos Congelados <br>
								Helados <br>
								y más...
								</div>";
								$img="img/carne_de_cerdo.jpg";
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