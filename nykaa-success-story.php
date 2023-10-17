<?php

//  
if (isset($_POST['send'])) {

	// getting post values
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = 'Blog Details Feedback Form';
	$message = $_POST['message'];
	$to = 'sales@clickboxagency.com';
	$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Clickbox Agencies</title> 
    </head> 
    <body> 
        <h1>Thanks you for joining with us!</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr> 
                <th>Name:</th><td>' . $name . '</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Email:</th><td>' . $email . '</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
            <th>Phone:</th><td>' . $phone . '</td> 
        </tr> 
		<tr style="background-color: #e0e0e0;"> 
		<th>Message:</th><td>' . $message . '</td> 
	</tr> 


        </table> 
    </body> 
    </html>';

	// Set content-type header for sending HTML email 
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'Cc: iamjamesstephan@gmail.com' . "\r\n";
	$headers .= 'Cc: pradeepavm@gmail.com' . "\r\n";

	// Additional headers 


	$m = mail($to, $subject, $htmlContent, $headers);

	// Set content-type header for sending HTML email

	if (!$m) {
		echo 'Message could not be sent.';
	} else {
		// echo 'Message has been sent';
		$result = '
    One of our representative will get in touch you.';
	}
}
// else{
//     print_r("ssdfs");die;
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Nykaa: A Huge Success in Beauty and Fashion in India</title>

	<meta name=description content="In today's world, buying cosmetics from a store is a bit tough. Why don't we buy cosmetics online that everything has 
		been made simple and we can get everything from the comfort of our own homes? This is where Nykaa began." />

	<meta name=keywords content="nykaa, beauty products, cosmetics market, women entrepreneur, nykaa online shopping, ecommerce shopping" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/nykaa-success-story/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/nykaa-success-story/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/nykaa-success-story/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="Nykaa: A Huge Success in Beauty and Fashion in India " />

	<meta property="og:description" content="In today's world, buying cosmetics from a store is a bit tough. Why don't we buy cosmetics online that everything has 
		been made simple and we can get everything from the comfort of our own homes? This is where Nykaa began." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Nykaa: A Huge Success in Beauty and Fashion in India" />

	<meta name="twitter:description" content="In today's world, buying cosmetics from a store is a bit tough. Why don't we buy cosmetics online that everything has 
		been made simple and we can get everything from the comfort of our own homes? This is where Nykaa began." />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />
	<!--FAVICON-->

	<link rel="icon" href="https://clickboxagency.com/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="https://clickboxagency.com/images/favicon.png" type="image/x-icon">

	<?php include('header-style.php') ?>

	<!-- STYLE -->


	<!-- STYLE -->


</head>



<body>




	<?php include('header.php') ?>




	<!-- SINGLE POST
			============================================= -->
	<section id="single-post" class="wide-30 inner-page-hero single-post-section division">
		<div class="container">


			<!-- SINGLE POST CONTENT -->
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="single-post-wrapper">

						<!-- BLOG POST INNER IMAGE -->
						<div class="post-inner-img">
							<img class="img-fluid" src="../images/blog/nykaa-1.jpg" alt="blog-post-image" />
						</div><!-- SINGLE POST CONTENT -->
						<div class="row justify-content-center ">
							<div class=" col-lg-1 mb-4  order-md-first">
								<div class="icon-sticky">
                            <div class="share text-center">
							<div class="clap">
								<div class="hover-effect"></div>
								<div class="confetti-effect">
									<div class="confetti-wrap">
										<div class="group group-1">
											<span class="circle"></span>
											<span class="triangle"></span>
										</div>
										<div class="group group-2">
											<span class="circle"></span>
											<span class="triangle"></span>
										</div>
										<div class="group group-3">
											<span class="circle"></span>
											<span class="triangle"></span>
										</div>
										<div class="group group-4">
											<span class="circle"></span>
											<span class="triangle"></span>
										</div>
										<div class="group group-5">
											<span class="circle"></span>
											<span class="triangle"></span>
										</div>
									</div>
								    </div>
							    	<div class="clap-icon"><span>👏</span></div>
							    </div>
										<p class="sharecolour "> Share</p>
										<ul class="shareitnow">
											<li> <a target="_blank" href="https://twitter.com/clickboxagency" aria-label="Twitter"> <img src="../images\x-logo\logo-black.png" class="twitter-size-x" alt="clickboxagency-twitter"> </a></li>
											<li> <a target="_blank" href="https://www.facebook.com/Clickbox-Agency-106763298597846/" aria-label="Facebook"> <i class="fa fa-facebook"></i> </a></li>
											<li> <a target="_blank" href="https://in.pinterest.com/clickboxagency/_saved/" aria-label="Pinterest"> <i class="fa fa-pinterest"></i> </a></li>
											<li> <a target="_blank" href="https://www.linkedin.com/company/clickbox-agency/" aria-label="Linkedin"> <i class="fa fa-linkedin"></i> </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-9 ">



								<!-- SINGLE POST TITLE -->
								<div class="single-post-title">

									<!-- TITLE -->
									<h1 class="h2-md">NYKAA- A HUGE SUCCESS </h1>
									<hr>
									<h4 class="h2-md">“AGE IS JUST A NUMBER”- HERE IS THE SUCCESS STORY OF NYKAA<br>
										<hr>
										HOW NYKAA EVOLVED!
									</h4>


								</div> <!-- END SINGLE POST TITLE -->





								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">

									<!-- Text -->
									<p class="p-md">

										Everyone is naturally good-looking, but with the correct cosmetics, they can enhance their natural beauty. However, in today's
										world, buying cosmetics from a store is a bit tough. Why don't we buy cosmetics online that everything has been made simple and
										we can get everything from the comfort of our own homes? This is where Nykaa began. Nykaa is a brand that everyone interested in
										beauty is familiar with.
									</p>

									<p class="p-md">
										<center><b>“Beauty is power, and makeup is something that enhances that; it’s a woman’s secret.” – Charlotte Tilbury </b></center>
									</p>

								</div>


								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">

									<!-- Title -->
									<h4 class="h4-lg">Why Cosmetics?</h4>


									<!-- Text -->
									<p class="p-md"> Cosmetics play an important role in all of our lives, from learning makeovers to trying out different shades on
										free days, to grooming ourselves before a wedding or to just putting on a little coating before work to look bright.
									</p>


									<!-- Title -->
									<h4 class="h4-lg">About Nykaa</h4>

									<!-- Text -->
									<p class="p-md">
										Nykaa is derived from the Sanskrit word nayaka, which means "one who is in the spotlight." Nykaa was launched in April 2012 by
										Falguni Nayar, a former managing director at Kotak Mahindra Capital Company, Mumbai. It started as an e-commerce site that collected a
										variety of health and beauty products. Nykaa's customer care line is meant to support consumers in selecting products and services
										that are specific to their needs. The products offered by this beauty and wellness company are purchased directly from the
										manufacturers, ensuring authenticity. They are also ready to be delivered! <br><br>
										Even if the market demand was great, India's beauty and cosmetics market did not match the extent of the products as it did
										in other countries such as France and Japan. Furthermore, the products were found to be unavailable in several locations around
										the country, triggering Nykaa's establishment. <br><br>
										Nykaa is a Mumbai-based firm that includes all types of beauty and cosmetics products, as well as fashion and also intimate
										wear, through an online app and its website.</p>

									<!-- Title -->
									<h4 class="h4-lg">About the founder</h4>

									<div class="post-inner-img">
										<img class="img-fluid" src="../images/blog/nykaa-founder.png" width="400" height="500" alt="nykaa founder" />
									</div>
									<!-- Text -->
									<p class="p-md">Nykaa was founded by Falguni Nayar, and it is now one of India's largest lifestyle and fashion platforms.
										Nayar graduated from IIM Ahmedabad with a master's degree in finance. Soon after graduation, she joined Kotak Mahindra Capital
										Company, India's leading investment bank. In 2005, Nayar was named Managing Director of the bank's same division.
										She worked for the bank for 18 years before resigning to pursue her business goal of Nykaa.com full-time. <br><br>
										Age is just a number for her. She is a responsible homemaker and also a successful women entrepreneur. She is a member of several
										boards. Her involvement and dedication to her career made her number one today. She has set an example for all the women who are
										trying to start something new.</p>


									<h4 class="h4-lg">Beginning of Nykaa</h4>

									<p class="p-md">
										<center><b>“Falguni saw that there was a huge opportunity in the online space and considering all the different areas she could invest
												in or start a company, she focused on beauty”</b> </center>
										<center>– Mihir Parikh, Chief Business Officer at Nykaa</center> <br><br>
										The development of the internet was seen by early 2010. The emergence of companies such as Flipkart and SnapDeal has made
										e-commerce shopping a common thing. Everything was available at the touch of a button, from fashion to household things.
										Customers, on the other hand, had no choice when it came to purchasing authentic, verified, beauty and wellness items online.<br>
										<b>Here is where Nykaa began!</b>
									</p>


									<!-- Text -->
									<p class="p-md">Nykaa began selling original products directly through its self-built e-commerce site after forming partnerships
										with national and international beauty and wellness businesses. Nykaa's selection of a diverse list of items and product
										categories, backed by a guarantee of genuineness, ensured that clients could now shop for beauty and wellness products without
										leaving their homes. <br><br>Nykaa takes a unique approach to its clients. It did not make any product offerings. They didn't sell anything for a low price.
										They place a premium on quality. Their main goal was to make sure that regardless of the price, the quality was good.</p>


									<!-- Text -->
									<p class="p-md">As we know the name Nykaa means <b>“one in a spotlight”</b>. The tagline of the company reads <b>'Your Beauty, Our Passion'</b>.
										Even the logo's color was chosen to appeal to young females. As a result, the colors pink and red would be the most appropriate for them.
										Nykaa has established itself as one of the most capable companies in the beauty and fashion field because of its solid marketing approach,
										which is centered on digital marketing. It mainly targeted middle and upper-middle-class people.</p>


									<h4 class="h4-lg">Nykaa’s Social Media Marketing</h4>
									<p class="p-md"> Nykaa has four social media profiles for marketing, Nykaa beauty for e-commerce platform promotion, Nykaa
										fashion for e-commerce apparel store promotion, and Nykaa beauty book for e-commerce beauty and makeup suggestions.<br><br>
										Nykaa has a unique youtube marketing strategy. The firm does not use its Youtube channel to sell products, instead focused on
										providing consumable content to its target customers, such as beauty, personal care tips, cosmetic hacks, and more. In addition,
										the firm uses Youtube advertisements to target its clients from time to time. In this way, the company attracts the audience and
										keeps them engaged. <br><br>
										In the field of content marketing, the company has different plans to attract an audience. It has its blog, "Nykaa beauty book,"
										where it publishes beauty, cosmetics, and personal care blogs. In addition, the brand produces video content such as cosmetic
										tutorials, DIYs, and more.</p>



									<h4 class="h4-lg">IPO ( Initial Public Offering)</h4>


									<p class="p-md"> The platform's initial public offering (IPO) was open for subscription from October 28 to November 1, with a
										price range of Rs 1,085-1,125 per share. Nykaa's initial public offering (IPO) was oversubscribed by 81.78 times the 2.64 crore
										shares available. <br><br>
										Investors reacted positively to Nykaa's initial public offering (IPO) when it was made available for subscription.
										The platform was launched on the BSE and NSE on November 10 and entered the 1 lakh crore market capitalization club when its
										stocks closed at 2,206.70, nearly double the issue price, valuing the beauty firm at about $14 billion.</p>


									<h4 class="h4-lg"> Struggles faced By Nykaa</h4>


									<p class="p-md">Like any other company, Nykaa also faced many challenges in its field. Ajio and Myntra are two of the most
										prominent company in Nykaa's sector. It also needs to have a unique selling proposition in the fashion industry.</p>

									<h4 class="h4-lg">Nykaa’s Success</h4>

									<ul class="digit-list">
										<li>
											<p class="p-md">● On April 22, 2022 - Nykaa acquired Nudge Wellness company, which is a Nutraceuticals and wellness
												brand.</p>
										</li>
										<li>
											<p class="p-md">● On April 22, 2022 - it acquired Kica, a Women swimwear brand.</p>
										</li>
										<li>
											<p class="p-md">● On October 22, 2021 - it acquired Dot & Key Wellness, a skincare brand based in Kolkata.</p>
										</li>
										<li>
											<p class="p-md">● On April 12, 2021 - it acquired Pipa. Bella, and Jewelry brand.</p>
										</li>
										<li>
											<p class="p-md">● On March 22, 2019 - it acquired 20 Dresses, Fashion, and eCommerce platform from Mumbai. </p>
										</li>
									</ul>


									<p class="p-md">The company has 17 million active users. And also has 15 million active users. Nykaa has 105 stores across India.
										Like any company, it also faced its downfall during a pandemic. But with continuous hard work and dedication, it recovered soon.
										The company launched its new brand Nykd in October 2022. <br><br>
										In the future, the company is planning to expand its offline store to 180 stores across India by 2024.<br><br>
										Nykaa has recently launched several new items, some of which have celebrities through nykaa online shopping. In addition,
										they have included several new collections into their brand. Overall, Nykaa's success may be summed up as a story about having a
										clear vision and taking meaningful moves at the correct time. It's also worth noting that Nykaa's team didn't only focus on growing
										their brand; they also made sure that all of their partners grew and were part of their success story.<br><br></p>


									<p class="p-md"> <b>Clickbox Agency</b>, a digital marketing company specializes in uplifting your business through their marketing expertise. If you need assistance to upgrade your business, kindly click on this website: https://www.clickboxagency.com/</p>


								</div> <!-- END BLOG POST TEXT -->
								<!-- SINGLE POST SHARE LINKS -->
								<div class="row post-share-links d-flex align-items-center">

									<!-- POST TAGS -->
									<div class="col-md-12 col-xl-12 post-tags-list">
										<div class='didide '>
											<span><a href="#">nykaa, beauty products</a></span>
											<span><a href="#">cosmetics market</a></span>
											<span><a href="#">women entrepreneur</a></span>
											<span><a href="#">nykaa online shopping</a></span>
											<span><a href="#"> ecommerce shopping</a></span>

										</div>

									</div>

									<!-- POST SHARE ICONS -->

								</div> <!-- SINGLE POST SHARE LINKS END -->
								<div class="row d-flex align-items-center justify-content-center mt-50 gap-3">
									<div class="col-md-2 d-flex align-items-center justify-content-center flex-column">
										<img src="../images/clickbox-linkedin-profile.png" alt="John Click">
										<a target="_blank" href="https://www.linkedin.com/in/john-click-167b94238/" aria-label="Linkedin click john" class="linkedin-link-align"> <i class="fa fa-linkedin p-2"></i> </a>
									</div>
									<div class="col-md-8">
										<h4 class="h4-lg txtredd">John Click</h4>
										<p class="p-md txt-justify txtbluee">Digital Marketer | SEO Copywriter | Content Strategist</p>
										<p class="p-md txt-justify ">Experienced digital marketer with a proven track record in creating compelling content that not only engages audiences but also drives conversions and enhances SEO visibility. My expertise extends beyond marketing strategy to crafting persuasive narratives that resonate with your target audience. I combine data-driven strategies with captivating writing to deliver measurable results, ensuring your brand shines in the digital landscape.</p>
										<!-- Connect with me on LinkedIn(https://www.linkedin.com/in/john-click-167b94238/) or visit my website "https://clickboxagency.com/" to explore more about my work and stay updated with the latest digital marketing trends. -->
									</div>
								</div>
							</div>
						</div>
					</div> <!-- END SINGLE POST CONTENT -->


				</div> <!-- End container -->
	</section> <!-- END SINGLE POST -->
	<!-- POST COMMENTS
			============================================= -->
	<section id="contacts-2" class="bg-snow pt-10 contacts-section division">
		<div class="container">
			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="section-title title-02 mb-80">
						<!-- Title -->
						<h2 class="p-md txtredd">Questions? We're Here To Help. <br>Send Us A Message!</h2>
					</div>
				</div>
			</div>
			<!-- CONTACT FORM -->
			<div class="row justify-content-center">
				<div class="col-lg-6 col-xl-6">
					<div class="post-inner-img">
						<img class="img-fluid" src="https://www.clickboxagency.com/images/contacts.png" width="300" height="300" alt="Branch office" />
					</div>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="form-holder">
						<form name="contactform" method="post" class="row contact-form">
							<!-- Contact Form Input -->
							<div class="col-md-6">
								<input type="text" name="name" class="form-control name" placeholder="Your Name*">
							</div>
							<div class="col-md-6">
								<input type="email" name="email" class="form-control email" placeholder="Email Address*">
							</div>
							<div class="col-md-6">
								<input type="number" maxlength="10" name="phone" class="form-control phone" placeholder="Mobile Number*">
							</div>
							<div class="col-md-6">
								<input type="text" name="company" class="form-control company" placeholder="Company Name*">
							</div>

							<div class="col-md-6">
								<select class="form-select" aria-label="services" name="services" id="services" required>
									<option value="">Select your services</option>
									<option value="Mobile App Development">Mobile App Development</option>
									<option value="Web App Development">Web App Development</option>
									<option value="Hire Dedicated Development">Hire Dedicated Development</option>
									<option value="Ecommerce Development">Ecommerce Development</option>
									<option value="Logo Design">Logo Design</option>
									<option value="UI UX Design">UI UX Design</option>
									<option value="Website Design and Development">Website Design and Development</option>
									<option value="Wordpress Development">Wordpress Development</option>
									<option value="Shopify Website Development">Shopify Website Development</option>
									<option value="Website Redesigning">Website Redesigning</option>
									<option value="Digital Marketing">Digital Marketing</option>
									<option value="Search Engine Optimization">Search Engine Optimization</option>
									<option value="Social Media Marketing">Social Media Marketing</option>
									<option value="Pay Per Click Advertising">Pay Per Click Advertising</option>
									<option value="Explainer Video Creation">Explainer Video Creation</option>

								</select>
							</div>
							<div class="col-md-6">
								<select class="form-select" aria-label="budget" name="budget" id="budget" required>
									<option value="">Select your budget</option>
									<option value="Less than 10K USD">Less than 10K USD</option>
									<option value="10K-25K USD">10K-25K USD</option>
									<option value="25K-50K USD">25K-50K USD</option>
									<option value="50K-100K USD">50K-100K USD</option>
									<option value="More than 100K USD">More than 100K USD</option>
								</select>
							</div>
							<div class="col-md-12">
								<textarea class="form-control message" name="message" rows="6" placeholder="Share Your Requirements:"></textarea>
							</div>
							<div class="col-md-6">
								<input type="checkbox" name="sendNDA" class="checkboxone">
								<label for="sendNDA">Send NDA</label>
							</div>
							<!-- Contact Form Button -->
							<div class="col-md-12 mt-15 form-btn text-right">
								<button type="submit" class="btn btn-skyblue yellow-hover submit" name="send">Submit Request</button>
							</div>
							<!-- Contact Form Message -->
							<div class="col-lg-12 contact-form-msg">
								<span class="loading"></span>
							</div>
							<div class="form-group">
								<div class="col-sm-10 col-sm-offset-2">
									<?php if (!empty($result)) {
										echo '<div class="alert alert-success"><b>Your message sent successfully! </b>' . $result . '</div>';
									} ?>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div> <!-- END CONTACT FORM -->
		</div> <!-- End container -->
	</section> <!-- END CONTACTS-2 -->




	<!-- BLOG-1
			============================================= -->
	<section id="blog-1" class="bg-whitesmoke-gradient blog-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mt-20">
						<!--wide-60  -->
						<h2 class="p-md txtredd">Stay Engaged With Our Content</h2>
					</div>
				</div>
			</div>
			<!-- INCLUDE BLOGS -->

			<?php include('newblog2.php') ?>


</div> <!-- End container -->
</section> <!-- END BLOG-1 -->

<a id="back-to-top" class="back-to-top"><img src="../images/up-arrow.svg" class="up-arrow" alt="back-to-top"></a>


<?php include('footer.php') ?>

</div> <!-- END PAGE CONTENT -->

<?php include('footer-script.php') ?>

<script>
var backTop = $('#back-to-top');

$(window).scroll(function() {
	if ($(window).scrollTop() > 400) {
		backTop.addClass('show');
	} else {
		backTop.removeClass('show');
	}
});

backTop.on('click', function(e) {
	e.preventDefault();
	$('html, body').animate({
		scrollTop: 0
	}, '300');
});
</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"url": "https://www.clickboxagency.com/nykaa-success-story/",

			"potentialAction": {

				"@type": "SearchAction",

				"target": "https://www.clickboxagency.com/nykaa-success-story/find?q={search_term_string}",

				"query-input": "required name=search_term_string"

			}

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"name": "Nykaa: A Huge Success in Beauty and Fashion in India",

			"alternateName": "nykaa, beauty products, cosmetics market, women entrepreneur, nykaa online shopping, ecommerce shopping",

			"url": "https://www.clickboxagency.com/nykaa-success-story/"

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "https://schema.org",

			"@type": "Organization",

			"name": "Nykaa: A Huge Success in Beauty and Fashion in India",

			"url": "https://www.clickboxagency.com/nykaa-success-story/",

			"email": "info@clickboxagency.com",

			"foundingDate": "2022",

			"description": "In today's world, buying cosmetics from a store is a bit tough. Why don't we buy cosmetics online that everything has been made simple and we can get everything from the comfort of our own homes? This is where Nykaa began.",

			"logo": "https://www.clickboxagency.com/images/logo-01.png",

			"contactPoint": {

				"@type": "ContactPoint",

				"telephone": "+91 8870578887",

				"contactType": "sales",

				"contactOption": "Customer Service",

				"areaServed": "India, United States, Australia, Canada, United Kingdom",

				"availableLanguage": "en"

			},

			"aggregateRating": {

				"@type": "AggregateRating",

				"ratingValue": "4.9",

				"reviewCount": "1407"

			},

			"sameAs": [

				" https://twitter.com/clickboxagency",
				" https://www.facebook.com/people/Clickbox-Agency/100078058999078/",
				" https://www.instagram.com/clickbox_agency/",
				" https://www.linkedin.com/company/clickbox-agency/",
				" https://www.youtube.com/channel/UCcIsJX8IMuVwg5m-w3ehpXw",
				" https://in.pinterest.com/clickboxagency/"

			]

		}
	</script>
	<!-- Custom Script -->
	<script src="../js/custom.js"></script>
	<?php include('popup1.php') ?><script>
		var owl = $('.service-carousel');
		owl.owlCarousel({
			items: 3,
			loop: !0,
			autoplay: !0,
			navBy: 1,
			nav: !1,
			autoplayTimeout: 4e3,
			autoplayHoverPause: !1,
			smartSpeed: 2e3,
			responsive: {
				0: {
					items: 2
				},
				550: {
					items: 3
				},
				767: {
					items: 3
				},
				768: {
					items: 3
				},
				991: {
					items: 3
				},
				1e3: {
					items: 3
				}
			}
		});
	</script>
	<script>
		$(function() {
			function randomNum(m, n) {
				m = parseInt(m);
				n = parseInt(n);
				return Math.floor(Math.random() * (n - m + 1)) + m;
			}

			var clap = $('.clap');
			var confetti = $('.confetti-effect');

			clap.on('click', function() {

				confetti.css('transform', 'rotate(' + randomNum(0, 180) + 'deg)')
				clap.children('.clap-icon').stop().toggleClass('clap-hover');
				
			
				confetti.children('.confetti-wrap').stop().addClass('expand');
				setTimeout(function() {
					confetti.children('.confetti-wrap').removeClass('expand');
				}, 700)
			});
		});
	</script>

	<!--<script>-->
	<!--	let parent = document.querySelector('.sticky-top').parentElement;-->

	<!--	while (parent) {-->
	<!--		const hasOverflow = getComputedStyle(parent).overflow;-->
	<!--		if (hasOverflow !== 'visible') {-->
	<!--			console.log(hasOverflow, parent);-->
	<!--		} else {-->
	<!--			console.log("none");-->
	<!--		}-->
	<!--		parent = parent.parentElement;-->
	<!--	}-->
	<!--</script>-->

</body>

</html>