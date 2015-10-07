<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<div class="col s12 m9">
		 <div class="row">
			 <nav class="light-blue lighten-1" role="navigation">
				<div class="nav-wrapper container">
					<ul class="right hide-on-med-and-down">
						<li><a href="index.html"><i class="small material-icons">home</i></a></li>
						<li><a href="#">Despre noi</a></li>
						<li><a href="cerere.html">Cere o oferta</a></li>
						<li><a href="produse.html">Produse</a></li>
						<li><a href="#">Contact</a></li>
					</ul>

					<ul id="nav-mobile" class="side-nav">
						<li><a href="index.html">Acasa</a></li>
						<li><a href="#">Despre noi</a></li>
						<li><a href="cerere.html">Cere o oferta</a></li>
						<li><a href="produse.html">Produse</a></li>
						<li><a href="#">Contact</a></li>
					 </ul>
					<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
				</div>
			</nav>
		</div>
			<div class="row">
			{produse}
				<div class="col l4 m6 s12">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://placehold.it/400x400?text=Imagine+produs">
						</div>
						<div class="card-content">
							<span class="card-title activator grey-text text-darken-4">{nume}<i class="material-icons right">more_vert</i></span>
							<p><a href="<?php echo base_url(); ?>produse/{url}">Detalii</a></p>
						</div>
						<div class="card-reveal">
							<span class="card-title grey-text text-darken-4">{nume}<i class="material-icons right">close</i></span>
							<p>{desc}</p>
							<p class="flow-text left"><a href="<?php echo base_url(); ?>produse/{url}">Detalii</a></p>
							<p class="flow-text right"><a href="cerere.html">Comanda</a></p>
						</div>
					</div>
				</div>
				{/produse}
			</div>
			