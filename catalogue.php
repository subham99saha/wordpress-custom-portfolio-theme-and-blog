
<div class="container d-flex justify-content-center my-5">
	<div class="mx-5 col-md-9">
		<h1 class="text-secondary mx-3"><b><?php echo $dir.' '; ?>Catalogue</b></h1>
		<?php 
			$config = file_get_contents($path.'config.json');
			$obj = json_decode($config); 
			$portfolio = $obj->portfolio->{str_replace(" ","_",$dir)};
			foreach($portfolio as $category) {
				?>
				<div id=<?php echo str_replace(" ","-",$category->title); ?> class="row mx-2 my-4">
				<h2 class="mb-3 text-secondary"><b><?php echo $category->title ?></b></h2>
				<p class=""><?php echo $category->description ?></p>
				<?php
					foreach($category->samples as $sample) {
						?>
						<div class="card col-md-5 m-2 border border-dark" style="">
						  <!-- <img class="" src=<?php echo $path.$sample->thumbnail; ?> /> -->
						  <div class="card-body">
						  	<h5 class="card-title mb-3 text-secondary"><b><?php echo $sample->company; ?></b></h5>
						    <p class="card-text small">
						    	<?php echo $sample->caption; ?><br />
						    	<span class="badge badge-pill badge-info mt-2">client</span>		
						    </p>
						    <?php 
						    	if ($sample->url != '') {
						    		?><a href=<?php echo $sample->url ?> target="blank" class="btn btn-outline-secondary">Explore content</a><?php
						    	}
						    ?>						    
						  </div>
						</div><?php
					}
				?></div><?php
			}
		?>
		</div>
		
	</div>
</div>
