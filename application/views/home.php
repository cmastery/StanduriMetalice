

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
			<div class="section">
				<div class="card hoverable">
					<img src="http://placehold.it/1000x300?text=Slideshow+cu+produse"/>
				</div>
			</div>
			<h4>Incepem cu un "Lorem Ipsum"</h4>
			<div class="divider"></div>
			<div class="section">
				<div class="prefata">
					<p class="flow-text">
					{prefata}
					</p>
				</div>
			</div>
        </div>
        </div>
      </div>
	  <br><br>
	  <h4 class="center-align">Clientii Nostri</h4>
	<div class="divider"></div>
    <div class="section">
		<div class="row">
			{clienti}
			<div class="col l1 s1">
				<div class="card hoverable">
					<a href="<?php echo base_url(); ?>assets/img/clienti/{link}" target="_blank"><img src="<?php echo base_url(); ?>assets/img/clienti/{logo}" class="responsive-img" /></a>
				</div>
			</div>
			{/clienti}
		</div>
    </div>

 
