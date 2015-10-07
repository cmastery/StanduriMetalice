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
		
		<!-- Categorie -->
		{categorii}
		<div class="row">
			<div class="col l12 light-blue lighten-1 white-text">
				<h5>{categorie}</h5>
			</div>
		</div>
		
		<div class="row">
			{subcategorii}
			<div class=" col l4 m12 s12">
				<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
							<img class="activator" src="http://placehold.it/400x400?text=Imagine+categorie">
						</div>
						<div class="card-content">
							<span class="card-title grey-text text-darken-4"><a href="<?php echo base_url(); ?>produse/{nume}">{nume}</a></span>
						</div>
				</div>
			</div>
			{/subcategorii}
        </div>
		{/categorii}
		<!-- /Categorie -->
		
        </div>
      </div>
	  