<?php 
  $headers = explode('\\', __DIR__);
  array_splice($headers,sizeOf($headers)-4);
  $footer_url = implode('/', $headers).'/footer.php';
  $blog_path = get_bloginfo( 'wpurl' );
?>