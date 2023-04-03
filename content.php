

<!-- Navbar (sticky bottom) -->
<!--<div class="w3-bottom w3-hide-small">
  <div class="w3-bar w3-white w3-center w3-padding ">
    <a href="#home" style="width:25%" class="w3-bar-item">Home</a>
    <a href="#us" style="width:25%" class="w3-bar-item">Jane & John</a>
    <a href="#wedding" style="width:25%" class="w3-bar-item">Wedding</a>
    <a href="#rsvp" style="width:25%" class="w3-bar-item">RSVP</a>
  </div>
</div>-->

<div class="w3-container w3-padding-64 px-5 bg-dark" id="aboutUs">
  <div class="w3-content text-right col-md-7">
    <h1 class="w3-text-grey mb-4"><b>Our Work Principle</b></h1>
    <div class="mb-5">
		<h3 class="w3-text-grey mb-3"><b>Our Belief</b></h3>
		<p class="w3-text-grey">We believe that no job is done until you take the most satisfactory sigh. We want to redefine content marketing and our Content Ladder is your own ladder to climb success!</p>
	</div>
	<div class="mb-5">
		<h3 class="w3-text-grey mb-3"><b>Our Speciality</b></h3>
		<p class="w3-text-grey">In this digital age, content is not only a pillar that helps businesses to gain customers but also allows them to explore different fields and keep diving into new industries. Keeping the necessities of every business requirement in mind, we have raised a team of professional writers who can provide curative solutions of words at your service. Having experience of over 7 years, we have specialized ourselves in all sorts of content requirements that an enterprise needs for its marketing. We are now working with several digital marketing agencies as well as leading companies from the finance, food, travel, and tourism industries.</p>
	</div>
	<div class="mb-5">
		<h3 class="w3-text-grey mb-3"><b>Our Promise</b></h3>
		<p class="w3-text-grey">Whatever be the length of the project, we welcome bulk content requirements for your business and offer completion within the least possible time.</p>
	</div>
  </div>
</div>

<!-- Background photo -->
<!--<div class="w3-display-container bgimg2 bg-dark">
  <div class="w3-display-middle w3-text-white w3-center">
    <h1 class="w3-jumbo">You Are Invited</h1><br>
    <h2>Of course..</h2>
  </div>
</div>-->

<div class="w3-container w3-padding-64 w3-text-grey" id="services">
  <div class="w3-content">
    <div class="p-3 mb-4">
		<h1 class=""><b>How can we help you?</b></h1>
		<p class="">
		Name it and we will get it done for you!
		Webpage content, backlink blogs/articles, newsletters, press releases, emailers, product descriptions, and the list goes on! You won’t have to look anywhere when you have us!
		</p>
	</div>
	<?php 
		class Service
		{
			public $head;
			public $body;
		}
		
		$s1 = new Service();
		$s1->head = 'Webpage Content';
		$s1->body = 'Get highly appealing webpage content for your brand’s website. Your company’s homepage, landing page, service pages, and everything else have to be presented in the best possible way. If you can explain your business to the audience, your marketing job is almost done!';
		
		$s2 = new Service();
		$s2->head = 'Blogs/Articles';
		$s2->body = 'Use the power of content marketing by leveraging the perks of backlinking content on your website. Increase traffic on your website and convert more customers using stellar blogs and articles written by our highly experienced and professional writers.';
		
		$s3 = new Service();
		$s3->head = 'Product Description';
		$s3->body = 'The competition here can subdue even the best product if it is not marketed properly. But wait! But why even this worry? Your product deserves the best description to stand out in the industry. Try us and we will make sure that your product’s content marketing is done right.';
		
		$s4 = new Service();
		$s4->head = 'News Writing';
		$s4->body = 'Bitcoin is down! or Fast and Furious 57 cast revealed! We know how time-sensitive news is. Don’t worry! We will write the best quality and gripping news stories before anyone can. You will have the highest quality content at the best speed with us.';
		
		$s5 = new Service();
		$s5->head = 'Social Media Posts';
		$s5->body = 'Different social media platforms require different content. You cannot use a single post for both LinkedIn and Instagram. Please don’t! We will learn your business like no one else and make sure that you smile and feel content with the social media posts we create for you.';
		
		$s6 = new Service();
		$s6->head = 'What Else?';
		$s6->body = 'Newsletter✓ Press Release✓ You will get a complete content writing service package from us. No need to look anywhere else. Oh, one more thing! We also offer graphic design, and product catalog making services.';
		
		$services = array($s1, $s2, $s3, $s4, $s5, $s6);
		
		for ($i=0; $i<sizeof($services); $i++ ) {
			if ($i % 2 == 0) {
				echo '<div class="w3-row">
				  <div class="w3-half p-3">
					<h2>'.$services[$i]->head.'</h2>
					<p>'.$services[$i]->body.'</p>
				  </div>
				  <div class="w3-half p-3">
					<h2>'.$services[$i+1]->head.'</h2>
					<p>'.$services[$i+1]->body.'</p>
				</div></div>';
			}
		}
	?>
  </div>
</div>


<!--
<div class="w3-container w3-padding-64 w3-pale-red w3-center w3-wide" id="rsvp">
  <h1>HOPE YOU CAN MAKE IT!</h1>
  <p class="w3-large">Kindly Respond By January, 2017</p>
  <p class="w3-xlarge">
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-round w3-red w3-opacity w3-hover-opacity-off" style="padding:8px 60px">RSVP</button>
  </p>
</div>

<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="padding:32px;max-width:600px">
    <div class="w3-container w3-white w3-center">
      <h1 class="w3-wide">CAN YOU COME?</h1>
      <p>We really hope you can make it.</p>
      <form>
        <input class="w3-input w3-border" type="text" placeholder="Name(s)" name="name">
      </form>
      <p><i>Sincerely, John &amp; Jane</i></p>
      <div class="w3-row">
        <div class="w3-half">
          <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-block w3-green">Going</button>
        </div>
        <div class="w3-half">
          <button onclick="document.getElementById('id01').style.display='none'" type="button" class="w3-button w3-block w3-red">Can't come</button>
        </div>
      </div>
    </div>
  </div>
</div>
-->