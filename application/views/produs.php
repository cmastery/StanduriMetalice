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
			<div class="section">
				<h5>{nume}</h5>
			<div class="row">
				<div class="col l3  s12">
					<div class="card">
						<div class="card-image waves-effect waves-block waves-light">
								<img class="materialboxed" src="<?php echo base_url(); ?>/assets/img/{img1}">
						</div>
						<div class="card-content">
						</div>
					</div>
					
					
				</div>
				<div class="col l6 m7 s12">
					<h1 class="flow-text">Descriere</h1>
					<div class="divider"></div>
					<p>
					{descriere}
					</p>
					<a href="cerere.html" class="btn light-blue right">Comanda acum</a>
				</div>
			</div>
		</div>
			