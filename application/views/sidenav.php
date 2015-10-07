<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
		<div class="row">
			<div class="col s12 m3 l3">
			{categorii}
					<ul class="collection with-header">
						<li class="collection-header light-blue"><h6 class="center-align"><a href="<?php echo base_url(); ?>categorii/{url}" class="white-text">{categorie}</a></h6></li>
							{subcategorii}
								<li class="collection-item"><a href="<?php echo base_url(); ?>categorii/{url}">{subcategorie}</a></li>
							{/subcategorii}
					</ul>
			{/categorii}
			</div>