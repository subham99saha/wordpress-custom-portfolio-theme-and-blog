<?php 

$gallery = $path."resources/gallery/website_development/";
// Open a directory, and read its contents
$images = [];
if (is_dir($gallery)){
  if ($dh = opendir($gallery)){
    while (($file = readdir($dh)) !== false){
      $name = explode('.',$file);
      $ext = $name[sizeof($name) - 1];
      if (in_array($ext, ['jpg','jpeg','png'])) {
      	// echo "filename:" . $file . " | ext: ".$ext." <br>";
      	$images[] = $file;
      }
    }
    closedir($dh);
  }
}
// print_r($images);

if (sizeof($images) != 0) {
	?>
	<div class="justify-content-center py-5">
	<div class="mt-5 mb-4 d-flex justify-content-center">
		<div class="" style="width:55%">
			<h1 class="text-secondary"><b><?php echo $dir.' '; ?>Gallery</b></h1>
			<p>The following designs have been scripted entirely using HTML and CSS. You can find the working CSS <a class="text-dark" href="https://subham99saha.github.io/templates.html" target="blank">here</a>.</p>
			<p class="text-secondary">We own the designs and not the images associated with it. The images are solely used for the purpose of adding structure to the layouts.</p>
		</div>
	</div>
	<div class="row mb-5 d-flex justify-content-center w-100 mx-0 my-3">
	<?php 
		for ($i=0; $i < sizeof($images); $i = $i + 2) {
			?>
			<div class="col-md-5 text-center">
				<div class="row d-flex justify-content-center">
					<div class="col-6 p-0">
						<img src=<?php echo $path."resources/gallery/website_development/".rawurlencode($images[$i]); ?> class="w-100 h-auto" />
					</div>
					<?php 
						if (($i + 1) < sizeof($images)) {
							?>
							<div class="col-6 p-0">
								<img src=<?php echo $path."resources/gallery/website_development/".rawurlencode($images[$i+1]); ?> class="w-100 h-auto" />
							</div>
							<?php
						} else {
							?>
							<div class="col-6 p-0"></div>
							<?php
						}
					?>
				</div>
			</div>
			<?php
		}
	?>
	</div>
	<div class="mt-5 mb-4 d-flex justify-content-center">
		<div class="" style="width:55%">
			<p>We'll make sure your site stands out by keeping the design matured, modern & minimalistic.</p>
			 <p>We'll build your site from a mobile-first approach. A mobile-first approach involves designing a desktop site starting with the mobile version, which is then adapted to larger screens (contrary to the traditional approach of starting with a desktop site and then shifting it to smaller screens)</p>
			 <p>We'll provide 3 different layouts for Mobile, Desktop, and Tablet</p>
		</div>
	</div>
	</div>
	<?php
}

?>