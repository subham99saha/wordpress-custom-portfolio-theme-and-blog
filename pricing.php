
<div id="pricing" class="py-5 bg-dark text-light">
	<div class="container">
	<div class="row d-flex justify-content-center p-2">
		
		<div class="text-left w-75 mt-3 mb-3 px-4">
			<h1 class="text-left mb-4"><b><?php echo $dir.' '; ?>Pricing</b></h1>
			<p>The first few features are same for all tiers and have been decided to ensure minimum costs and maximum performance, but can be adjusted to suit your needs*.</p>
		</div>
		<!-- <h1 class="text-left w-75 mb-3"><b>Pricing</b></h1> -->
		<?php 
			$config = file_get_contents($path.'config.json');
			$obj = json_decode($config); 
			$pricing = $obj->pricing->{str_replace(" ","_",$dir)};
			foreach($pricing->variable as $category) {
				?>
				<div class="col-md-4" >
				<div class="card m-3 p-3 border border-light rounded bg-dark" style="">
				  <div class="card-body">
				  	<h2 class="card-title mb-3"><b><?php echo $category->name; ?></b></h2>
				    <p class="card-text"><?php echo $category->description; ?></p>
				    <p class="card-text">
				    	<?php 
				    		// $features = array_merge($pricing->constants,$category->services);
				    		?><ul><?php
				    		foreach($pricing->constants as $feature) {
				    			echo "<li class='text-secondary'>".$feature."</li>";
				    		}
				    		foreach($category->services as $feature) {
				    			echo "<li>".$feature."</li>";
				    		}
				    		?></ul><?php
				    	?>		
				    </p>
				    <p class="display-5"><?php echo "₹".$category->price; ?></p>
				    <a href="" data-toggle="modal" data-target="#contactUsModal" class="btn btn-outline-light btn-lg mt-3" role="button" aria-pressed="true">Get Started</a>					    
				  </div>
				</div>
				</div><?php
			}
		?>
		<div class="text-left w-75 mt-5 px-4">
			<p>All sites will be delivered within a week or a month depending on your requirements. In case the list missed out on something that you want in your site, we can come up with a custom solution for your needs.</p>
			<p class="text-secondary">* Total price may vary depending on the market price of this feature at that moment.</p>
		</div>
	</div>
	</div>
</div>
