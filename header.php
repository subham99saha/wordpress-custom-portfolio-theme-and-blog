<!-- Header / Home-->
<header class="w3-display-container w3-wide bgimg bg-dark" style="position: relative;" id="home">
	<div class="w3-jumbo logo absolute text-white py-2 px-4">
		<a href="<?php echo($path); ?>" class="text-light anch">CL</a>
	</div>

  <div class="w3-display-middle w3-text-white var-width">
    <div class="container" style="position:relative;">
    	<div class="bg-dark titleTrans1 titleTransition" style=""></div>
    	<div class="bg-dark titleTrans2 titleTransition" style=""></div>
    	<div class="bg-dark titleTrans3 titleTransition" style=""></div>
		<p class=""><?php 
			if ($dir != '') {
				echo '<a class="anch text-light" href="'.$path.'"> <b>HOME</b> </a> / '.$dir;
			} else {
				echo $dir;
			}

		?></p>
		<?php 
			
			for ($i=0; $i < sizeOf($items); $i++) {
				$color = (($i % 2) == 0) ? 'text-light' : 'text-secondary';
				echo '<a class="anch" href="'.$urls[$i].'"><h1 class="headliner d-inline text-uppercase '.$color.'">'.$items[$i].' </h1></a>';
			}
		?>
		<p class="small mt-3 mb-0 text-secondary">click on item to explore more...</p>
		<?php 
			//echo $_SERVER['SCRIPT_NAME'];
			if ($dir != '') {
				$config = file_get_contents($path.'config.json');
				$obj = json_decode($config); 
				$pricing = $obj->pricing->{str_replace(" ","_",$dir)};
				if ((array)$pricing) {
					?><div class="mt-4"><a href="#pricing" ><button type="button" class="btn btn-outline-light btn-lg font-weight-bold">Check prices</button></a></div><?php
				}
			}
		?>
	</div>
  </div>
</header>

<div class="w3-container w3-padding-64 px-5 bg-wall" id="us">
  <div class="w3-content w3-text-white text-left">
    <h1 class="mb-4"><b>Grow Your Business With Top-Notch Content Writing Services</b></h1>
    <p class="">Even the best brand needs proper marketing to create its presence. We are here to curate all your brand’s content needs so that you can focus entirely on your core business and grow further.
    </p><br>
    <!--<p class=""><a href="#services" class="w3-button w3-grey w3-round w3-padding-large w3-large" style="text-decoration: none">Explore services</a></p>-->
    <p class=""><a href="<?php echo $path; ?>#services" class="btn btn-outline-light btn-lg" role="button" aria-pressed="true">Explore services</a></p>
  </div>
</div>
