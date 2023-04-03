<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title><?php echo get_bloginfo( 'name' ); ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/blog/">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://getbootstrap.com/docs/4.0/examples/blog/blog.css" rel="stylesheet">
	
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&family=Arimo:ital,wght@1,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Raleway&family=Arimo:ital,wght@1,700&family=Comfortaa:wght@300&family=Oswald:wght@500&display=swap" rel="stylesheet">    
	
  
  <style>
	.logo {
		font-family: 'Arimo', sans-serif; !important
	}
	.anch {
		text-decoration: none!important;
	}
	.para {
		font-family: 'Comfortaa', cursive;
	}
	.content-header {
		font-family: 'Oswald', sans-serif;
	}
	footer {
		font-family: "Raleway", sans-serif;
	}
  </style>
  <?php wp_head();?>
  </head>

  <body>

    <div class="container">
      <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-4 pt-1">
            <!--<a class="text-muted" href="#">Subscribe</a>-->
          </div>
          <div class="col-4 text-center w3-jumbo font-weight-bold font-italic logo">
			<?php 
				$wp_url = get_bloginfo( 'wpurl' );
				$headers = explode('/', $wp_url);
				unset($headers[sizeof($headers)-1]);
				$lp_url = implode('/', $headers);        
			?>
            <a class="anch text-dark" href="<?php echo $lp_url;?>">CL</a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <!--<a class="text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
            </a>
            <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
          </div>-->
        </div>
      </header>

      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
          <a class="p-2 text-muted" href="#">World</a>
          <a class="p-2 text-muted" href="#">U.S.</a>
          <a class="p-2 text-muted" href="#">Technology</a>
          <a class="p-2 text-muted" href="#">Design</a>
          <a class="p-2 text-muted" href="#">Culture</a>
          <a class="p-2 text-muted" href="#">Business</a>
          <a class="p-2 text-muted" href="#">Politics</a>
          <a class="p-2 text-muted" href="#">Opinion</a>
          <a class="p-2 text-muted" href="#">Science</a>
          <a class="p-2 text-muted" href="#">Health</a>
        </nav>
      </div>