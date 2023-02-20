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

	<meta name="Author" content="www.clickboxagency.com" />

	<meta name="copyright" content="www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/nykaa-success-story/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/nykaa-success-story/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/nykaa-success-story/" />

	<meta property="og:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="Nykaa: A Huge Success in Beauty and Fashion in India " />

	<meta property="og:description" content="In today's world, buying cosmetics from a store is a bit tough. Why don't we buy cosmetics online that everything has 
		been made simple and we can get everything from the comfort of our own homes? This is where Nykaa began." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Nykaa: A Huge Success in Beauty and Fashion in India" />

	<meta name="twitter:description" content="In today's world, buying cosmetics from a store is a bit tough. Why don't we buy cosmetics online that everything has 
		been made simple and we can get everything from the comfort of our own homes? This is where Nykaa began." />

	<meta name="twitter:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />
	<!--FAVICON-->

	<link rel="icon" href="https://clickboxagency.com/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="https://clickboxagency.com/images/favicon.png" type="image/x-icon">

	<?php include('header-style.php') ?>

	<!-- STYLE -->

	<style>
		.post-tags-list span {
			margin: 1% 0%;
			display: inline-block;

		}

		.post-share-links {
			padding: 0 0% !important;
		}

		@media (max-width: 425px) {

			.didide {
				flex-wrap: nowrap;
				display: flex;
				flex-direction: column;
			}

			.post-tags-list span a {
				margin: 4px;
				display: block;
			}

		}
	</style>

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
						</div>


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
						<div class="single-post-txt">

							<!-- Text -->
							<p class="p-lg">

								Everyone is naturally good-looking, but with the correct cosmetics, they can enhance their natural beauty. However, in today's
								world, buying cosmetics from a store is a bit tough. Why don't we buy cosmetics online that everything has been made simple and
								we can get everything from the comfort of our own homes? This is where Nykaa began. Nykaa is a brand that everyone interested in
								beauty is familiar with.
							</p>

							<p class="p-lg">
								<center><b>“Beauty is power, and makeup is something that enhances that; it’s a woman’s secret.” – Charlotte Tilbury </b></center>
							</p>

						</div>


						<!-- BLOG POST TEXT -->
						<div class="single-post-txt">

							<!-- Title -->
							<h4 class="h4-lg">Why Cosmetics?</h4>


							<!-- Text -->
							<p class="p-lg"> Cosmetics play an important role in all of our lives, from learning makeovers to trying out different shades on
								free days, to grooming ourselves before a wedding or to just putting on a little coating before work to look bright.
							</p>


							<!-- Title -->
							<h4 class="h4-lg">About Nykaa</h4>

							<!-- Text -->
							<p class="p-lg">
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
							<p class="p-lg">Nykaa was founded by Falguni Nayar, and it is now one of India's largest lifestyle and fashion platforms.
								Nayar graduated from IIM Ahmedabad with a master's degree in finance. Soon after graduation, she joined Kotak Mahindra Capital
								Company, India's leading investment bank. In 2005, Nayar was named Managing Director of the bank's same division.
								She worked for the bank for 18 years before resigning to pursue her business goal of Nykaa.com full-time. <br><br>
								Age is just a number for her. She is a responsible homemaker and also a successful women entrepreneur. She is a member of several
								boards. Her involvement and dedication to her career made her number one today. She has set an example for all the women who are
								trying to start something new.</p>


							<h4 class="h4-lg">Beginning of Nykaa</h4>

							<p class="p-lg">
								<center><b>“Falguni saw that there was a huge opportunity in the online space and considering all the different areas she could invest
										in or start a company, she focused on beauty”</b> </center>
								<center>– Mihir Parikh, Chief Business Officer at Nykaa</center> <br><br>
								The development of the internet was seen by early 2010. The emergence of companies such as Flipkart and SnapDeal has made
								e-commerce shopping a common thing. Everything was available at the touch of a button, from fashion to household things.
								Customers, on the other hand, had no choice when it came to purchasing authentic, verified, beauty and wellness items online.<br>
								<b>Here is where Nykaa began!</b>
							</p>


							<!-- Text -->
							<p class="p-lg">Nykaa began selling original products directly through its self-built e-commerce site after forming partnerships
								with national and international beauty and wellness businesses. Nykaa's selection of a diverse list of items and product
								categories, backed by a guarantee of genuineness, ensured that clients could now shop for beauty and wellness products without
								leaving their homes. <br><br>Nykaa takes a unique approach to its clients. It did not make any product offerings. They didn't sell anything for a low price.
								They place a premium on quality. Their main goal was to make sure that regardless of the price, the quality was good.</p>


							<!-- Text -->
							<p class="p-lg">As we know the name Nykaa means <b>“one in a spotlight”</b>. The tagline of the company reads <b>'Your Beauty, Our Passion'</b>.
								Even the logo's color was chosen to appeal to young females. As a result, the colors pink and red would be the most appropriate for them.
								Nykaa has established itself as one of the most capable companies in the beauty and fashion field because of its solid marketing approach,
								which is centered on digital marketing. It mainly targeted middle and upper-middle-class people.</p>


							<h4 class="h4-lg">Nykaa’s Social Media Marketing</h4>
							<p class="p-lg"> Nykaa has four social media profiles for marketing, Nykaa beauty for e-commerce platform promotion, Nykaa
								fashion for e-commerce apparel store promotion, and Nykaa beauty book for e-commerce beauty and makeup suggestions.<br><br>
								Nykaa has a unique youtube marketing strategy. The firm does not use its Youtube channel to sell products, instead focused on
								providing consumable content to its target customers, such as beauty, personal care tips, cosmetic hacks, and more. In addition,
								the firm uses Youtube advertisements to target its clients from time to time. In this way, the company attracts the audience and
								keeps them engaged. <br><br>
								In the field of content marketing, the company has different plans to attract an audience. It has its blog, "Nykaa beauty book,"
								where it publishes beauty, cosmetics, and personal care blogs. In addition, the brand produces video content such as cosmetic
								tutorials, DIYs, and more.</p>



							<h4 class="h4-lg">IPO ( Initial Public Offering)</h4>


							<p class="p-lg"> The platform's initial public offering (IPO) was open for subscription from October 28 to November 1, with a
								price range of Rs 1,085-1,125 per share. Nykaa's initial public offering (IPO) was oversubscribed by 81.78 times the 2.64 crore
								shares available. <br><br>
								Investors reacted positively to Nykaa's initial public offering (IPO) when it was made available for subscription.
								The platform was launched on the BSE and NSE on November 10 and entered the 1 lakh crore market capitalization club when its
								stocks closed at 2,206.70, nearly double the issue price, valuing the beauty firm at about $14 billion.</p>


							<h4 class="h4-lg"> Struggles faced By Nykaa</h4>


							<p class="p-lg">Like any other company, Nykaa also faced many challenges in its field. Ajio and Myntra are two of the most
								prominent company in Nykaa's sector. It also needs to have a unique selling proposition in the fashion industry.</p>

							<h4 class="h4-lg">Nykaa’s Success</h4>

							<ul class="digit-list">
								<li>
									<p class="p-lg">● On April 22, 2022 - Nykaa acquired Nudge Wellness company, which is a Nutraceuticals and wellness
										brand.</p>
								</li>
								<li>
									<p class="p-lg">● On April 22, 2022 - it acquired Kica, a Women swimwear brand.</p>
								</li>
								<li>
									<p class="p-lg">● On October 22, 2021 - it acquired Dot & Key Wellness, a skincare brand based in Kolkata.</p>
								</li>
								<li>
									<p class="p-lg">● On April 12, 2021 - it acquired Pipa. Bella, and Jewelry brand.</p>
								</li>
								<li>
									<p class="p-lg">● On March 22, 2019 - it acquired 20 Dresses, Fashion, and eCommerce platform from Mumbai. </p>
								</li>
							</ul>


							<p class="p-lg">The company has 17 million active users. And also has 15 million active users. Nykaa has 105 stores across India.
								Like any company, it also faced its downfall during a pandemic. But with continuous hard work and dedication, it recovered soon.
								The company launched its new brand Nykd in October 2022. <br><br>
								In the future, the company is planning to expand its offline store to 180 stores across India by 2024.<br><br>
								Nykaa has recently launched several new items, some of which have celebrities through nykaa online shopping. In addition,
								they have included several new collections into their brand. Overall, Nykaa's success may be summed up as a story about having a
								clear vision and taking meaningful moves at the correct time. It's also worth noting that Nykaa's team didn't only focus on growing
								their brand; they also made sure that all of their partners grew and were part of their success story.<br><br></p>


							<p class="p-lg"> <b>Clickbox Agency</b>, a digital marketing company specializes in uplifting your business through their marketing expertise. If you need assistance to upgrade your business, kindly click on this website: https://www.clickboxagency.com/</p>


						</div> <!-- END BLOG POST TEXT -->
						<!-- SINGLE POST SHARE LINKS -->
						<div class="row post-share-links d-flex align-items-center">

							<!-- POST TAGS -->
							<div class="col-md-9 col-xl-9 post-tags-list">
								<div class='didide '>
									<span><a href="#">nykaa, beauty products</a></span>
									<span><a href="#">cosmetics market</a></span>
									<span><a href="#">women entrepreneur</a></span>
									<span><a href="#">nykaa online shopping</a></span>
									<span><a href="#"> ecommerce shopping</a></span>

								</div>

							</div>

							<!-- POST SHARE ICONS -->
							<div class="col-md-3 col-xl-3 post-share-list text-end">
								<ul class="share-social-icons ico-25 text-center clearfix">
									<li><a href="https://twitter.com/clickboxagency" class="share-ico"><span class="flaticon-twitter"></span></a></li>
									<li><a href=" https://www.facebook.com/people/Clickbox-Agency/100078058999078/" class="share-ico"><span class="flaticon-facebook"></span></a></li>
									<li><a href="#" class="share-ico"><span class="flaticon-bookmark"></span></a></li>
								</ul>
							</div>

						</div> <!-- SINGLE POST SHARE LINKS END -->




					</div>
				</div>
			</div> <!-- END SINGLE POST CONTENT -->


		</div> <!-- End container -->
	</section> <!-- END SINGLE POST -->







	<!-- POST COMMENTS
			============================================= -->
	<section id="post-comments" class=" post-comments division">
		<div class="container">
			<div class="row">


				<!-- COMMENTS WRAPPER -->
				<div class="col-lg-10 offset-lg-1">
					<div class="comments-wrapper">


						<!-- COMMENT FORM -->
						<div id="leave-comment">

							<!-- Title -->
							<h5 class="h5-lg">Leave a Comment</h5>

							<!-- Text -->
							<p class="p-md">Your email address will not be published. Required fields are marked *</p>

							<form name="commentForm" method="post" class="row comment-form">

								<div class="col-md-12">
									<p>Name*</p>
									<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required>
								</div>

								<div class="col-md-6">
									<p>Email*</p>
									<input type="email" name="email" class="form-control email" placeholder="Enter Your Email*" required>
								</div>

								<div class="col-md-6">
									<p>Phone*</p>
									<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone No*" required>
								</div>

								<div class="col-md-12 input-message">
									<p>Subject *</p>
									<textarea class="form-control message" name="message" rows="6" placeholder="Enter Your Comment Here* ..." required></textarea>
								</div>

								<!-- Contact Form Button -->
								<div class="col-lg-12 form-btn">
									<button type="submit" class="btn btn-skyblue tra-skyblue-hover submit" name="send">Submit</button>
								</div>

								<!-- Contact Form Message -->
								<div class="col-md-12 comment-form-msg text-center">
									<div class="sending-msg"><span class="loading"></span></div>
								</div>
								<div class="form-group">
									<div class="col-sm-10 col-sm-offset-2">
										<?php if (!empty($result)) {
											echo '<div class="alert alert-success"><b>Your message sent successfully! </b>' . $result . '</div>';
										} ?>
									</div>
								</div>

							</form>

						</div> <!-- END COMMENT FORM -->

					</div>
				</div> <!-- END COMMENTS WRAPPER -->


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END POST COMMENTS -->

	<!-- BLOG-1
			============================================= -->
	<section id="blog-1" class="bg-whitesmoke-gradient  blog-section division">
		<div class="container">

			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mt-70">
						<h2 class="h2-md">Keep Reading...</h2>
					</div>
				</div>
			</div>
			<!-- INCLUDE BLOGS -->

			<?php include('newblog.php') ?>
		</div> <!-- End container -->
	</section> <!-- END BLOG-1 -->
	<!-- CALL TO ACTION-5
			============================================= -->
	<section id="cta-5" class="cta-section division ">
		<div class="container">
			<div class="rel bg-10 cta-5-wrapper">
				<div class="row justify-content-center">

					<!-- CALL TO ACTION TEXT -->
					<div class="col-lg-8">
						<div class="cta-5-txt white-color text-center">

							<!-- Title -->
							<h2 class="h2-xs">Build Your Business Online Without Borders</h2>

							<!-- Text -->
							<p class="p-md">We will help you bring your brand to life. Our digital marketing team is always ready to help.

							</p>

							<!-- Button -->
							<a href="https://clickboxagency.com/contacts/" class="btn btn-skyblue tra-white-hover">Get in touch with us</a>

						</div>
					</div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CALL TO ACTION-5 -->
	<?php include('footer.php') ?>

	</div> <!-- END PAGE CONTENT -->

	<?php include('footer-script.php') ?>


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

			"logo": "www.clickboxagency.com/images/logo-01.png",

			"contactPoint": {

				"@type": "ContactPoint",

				"telephone": "+91 7358644710",

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
	<?php include('popup1.php') ?>

</body>

</html>