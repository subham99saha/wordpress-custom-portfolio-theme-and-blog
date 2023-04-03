<?php include('./variables.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Content Ladder</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


<!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css2?family=Raleway&family=Arimo:ital,wght@1,700&family=Oswald:wght@500&display=swap" rel="stylesheet">

<link href=<?php echo $path.'styles/main.css' ?> rel="stylesheet" type="text/css" />

<?php include($path.'styles/dynamic-module.php') ?>
</head>
<body class="position-relative">
	<div class="position-fixed m-3 p-3 end-0 display-1 " style="z-index:1; bottom:3%;">
		<a href="" class="text-secondary d-block display-2" data-toggle="modal" data-target="#contactUsModal" style="text-decoration:none;"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
		<a href="#home" class="text-secondary d-block" style="text-decoration:none;"><i class="fa fa-chevron-circle-up" aria-hidden="true"></i></a>
	</div>
	<!-- Modal -->
	<?php 
		$config = file_get_contents($path.'config.json');
		$obj = json_decode($config); 
		$whatsapp = $obj->whatsapp;
	?>
	<div class="modal fade" id="contactUsModal" tabindex="-1" role="dialog" aria-labelledby="contactUsModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered p-5" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="contactUsModalLabel"><b>Contact Us</b></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>Email us at <b>info@contentladder.in</b> or connect with us on WhatsApp.</p>
	      	<p>Call us at 8697894080 / 8420588781</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <a href="https://wa.me/<?php echo $whatsapp; ?>" target="_blank" type="button" class="btn btn-success">WhatsApp <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
	      </div>
	    </div>
	  </div>
	</div>