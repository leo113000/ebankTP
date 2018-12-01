@extends('layouts.app')

@section('content')
<header>
	 <div class="navbar">
		<nav>
			 <div class="nav-wrapper red accent-4">
				<a href="#" class="brand-logo center">La casa de Papel</a>
				<ul class="right">
					<a href="login" class="btn red z-depth-4 ">E-Banking</a>
				</ul>
			</div>
		</nav>   
	</div>
</header>
<div class="parallax-container">
	<div class="parallax"><img src="images/parallax1.jpg"></div>
</div>
<div class="row container">
	<h2 class="header center">Banco nacional de moneda y timbre</h2>

	<p>
		La Fábrica Nacional de Moneda y Timbre nace en 1893 con la fusión de dos organismos seculares: la Casa de la Moneda y la Fábrica del Sello. Ambas instituciones compartían desde 1861 el edificio de Colón, aunque eran independientes y tenían administraciones separadas. Desde entonces, y bajo el denominador común de la seguridad, no ha dejado de extender su ámbito de actividad.
	</p>
	<p>
		Con una larga tradición, la Fábrica Nacional de Moneda y Timbre-Real Casa de la Moneda (FNMT-RCM) trabaja para entidades públicas y privadas, ofreciendo soluciones adaptadas, con total garantía de custodia de los datos facilitados, diseñando y fabricando documentos a los que incorpora las más adelantadas medidas de seguridad, desarrollando nuevos sistemas de identificación...
	</p>
	<p>
		Su actividad comprende la fabricación de papel de seguridad, la impresión de billetes de banco, sellos de correo, precintos fiscales, etiquetas de seguridad, documentos de identificación, pasaportes, entradas de espectáculos, la acuñación de monedas circuladas y de colección, el desarrollo y la fabricación de tarjetas inteligentes y certificados digitales, y los servicios de implantación y desarrollo integral de sistemas nacionales de identificación.
	</p>
	<p>
		Sus productos y servicios siempre han incorporado el saber hacer, la experiencia y la apuesta por la tecnología más adelantada en cada momento histórico. Un gran abanico de soluciones de calidad ampliamente reconocida con certificaciones internacionales.
	</p>
</div>
<div class="parallax-container">
	<div class="parallax"><img src="images/parallax2.jpg"></div>
</div>
<div class="row container">
	<h2 class="center">Maxima seguridad</h2>
	<p>
		
	</p>
</div>
<div class="parallax-container">
	<di1v class="parallax"><img src="images/parallax3.jpg"></di1v>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.parallax').parallax();
		});
</script>
@stop