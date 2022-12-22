<?php

//  
if (isset($_POST['send'])) {

	// getting post values
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = 'Ecommerce SEO Service Form';

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

	<title>Professional Shopify Website Development Services | ClickBox</title>

	<meta name=description content="ClickBox Shopify development company is thoroughly prominent and trusted by top companies for their most critical Shopify website design projects. Read more..." />

	<meta name=keywords content="shopify website developer, hire shopify developer, shopify development agency, shopify development service, shopify website development services, shopify website design" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="www.clickboxagency.com" />

	<meta name="copyright" content="www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="www.clickboxagency.com/shopify-website-development-service/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="www.clickboxagency.com/shopify-website-development-service/" />

	<meta property="og:site_name" content="www.clickboxagency.com/shopify-website-development-service/" />

	<meta property="og:image" content="www.clickboxagency.com/images/logo-01.png" />

	<meta property="og:title" content="Professional Shopify Website Development Services | ClickBox" />

	<meta property="og:description" content="ClickBox Shopify development company is thoroughly prominent and trusted by top companies for their most critical Shopify website design projects. Read more..." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Professional Shopify Website Development Services | ClickBox" />

	<meta name="twitter:description" content="ClickBox Shopify development company is thoroughly prominent and trusted by top companies for their most critical Shopify website design projects. Read more..." />

	<meta name="twitter:image" content="www.clickboxagency.com/images/logo-01.png" />
	<?php include('header-style.php') ?>

</head>



<body>

	<?php include('header.php') ?>

	<!-- HERO-8
			============================================= -->
	<section id="hero-8" class="bg-fixed hero-section division">
		<div class="container">
			<div class="row d-flex align-items-center">


				<!-- HERO IMAGE -->
				<div class="col-lg-5 order-last order-lg-2">
					<div class="hero-8-img pc-20 text-center">
						<img class="img-fluid" src="../images/hero-8-img.png" alt="hero-image">
					</div>
				</div>


				<!-- HERO TEXT -->
				<div class="col-lg-7 order-first order-lg-2">
					<div class="hero-8-txt">

						<!-- Title -->
						<h2 class="h2-md">Create A Professional Website With Us!</h2>



						<!-- HERO QUICK FORM -->
						<form name="quickform" class="quick-form shadow-form">

							<!-- Form Inputs -->
							<div class="input-group">
								<!-- <input type="email" name="email" class="form-control email" placeholder="Your email address" autocomplete="off" required> -->
								<span class="input-group-btn form-btn">
									<button type="submit" class="btn btn-md btn-skyblue black-hover submit">Try Out Today</button>
								</span>
							</div>

							<!-- Form Message -->
							<!-- <div class="quick-form-msg"><span class="loading"></span></div> -->

						</form>

					</div>
				</div> <!-- END HERO TEXT -->


			</div> <!-- End row -->
		</div> <!-- End container -->


		<!-- WAVE SHAPE BOTTOM -->
		<div class="wave-shape-bottom">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 140">
				<path fill="#ffffff" fill-opacity="1" d="M0,64L120,74.7C240,85,480,107,720,117.3C960,128,1200,128,1320,128L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
			</svg>
		</div>


	</section> <!-- END HERO-8 -->


	<!-- CONTENT-6
			============================================= -->
	<section id="content-6" class="content-6 wide-60 pb-60 content-section division">
		<div class="container">

			<div class="row d-flex align-items-center">
				<!-- TEXT BLOCK -->
				<div class="col-md-12 col-lg-7">
					<div class="txt-block left-column wow fadeInRight">

						<!-- TEXT BOX -->
						<div class="txt-box mb-30">

							<!-- Title -->
							<!-- <h5 class="h5-md">Advanced Analytics Review</h5> -->

							<!-- Text -->
							<p class="p-lg">A Shopify website design business and Shopify Partner, ClickBox Marketing and Advertising Agency have the skills to develop unique Shopify themes that suit your requirements and price range. Refrain from using an accessible template. Set your business out from the competition with a customized template designed by the Shopify website designers at ClickBox. Reach clients on desktop and mobile with a fully customizable shopify website design. 500+ eye-catching templates with integrated professional business tools are available. Get access to hundreds of design options and effects, make stunning product galleries, and expand your brand's online visibility.</p>
							<p class="p-lg">A website that is expertly designed is essential to building an online store that converts. Our Shopify web designers are available to offer professional insight into how your online store should look to help you improve your brand aesthetic and promote online conversions, from enabling you to stand out ahead of the competition to providing a professional online touchpoint that promotes credibility. Hire ClickBox’s shopify developer now!
							</p>

						</div>


					</div>
				</div>


				<!-- IMAGE BLOCK -->
				<div class="col-md-12 col-lg-5">
					<div class="img-block right-column wow fadeInLeft">
						<img class="img-fluid" src="../images/seo-06.png" alt="content-image">
					</div>
				</div>


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-6 -->

	<!-- CONTENT-5
			============================================= -->
	<section id="content-5" class="content-5 ws-wrapper content-section division">
		<div class="container">
			<div class="content-5-wrapper bg-whitesmoke">
				<div class="row d-flex align-items-center">


					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6">
						<div class="img-block left-column wow fadeInLeft">
							<img class="img-fluid" src="../images/seo-04.png" alt="content-image">
						</div>
					</div>

					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block right-column wow fadeInRight">

							<!-- Section ID -->
							<!-- <span class="section-id txt-upcase">Quick and Secure</span> -->

							<!-- Title -->
							<h4 class="h4-lg">What is a ClickBox Shopify Design? </h4>

							<p class="p-lg">A custom Shopify design made by ClickBox that is perfectly expressive of your brand will mix your ideas with those of our team of Shopify specialists to provide a unique design that not only evokes your branding but elevates it. A custom Shopify design will be built with you in mind from the ground up, allowing your business to differentiate itself from the competition.</p>


						</div>
					</div> <!-- END TEXT BLOCK -->


				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-5 -->


	<!-- CONTENT-1
			============================================= -->
	<section id="content-1" class="content-1 mt-30 content-section division">
		<div class="container">
			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">

						<!-- Title -->
						<h3 class="h3-lg">What Is The Importance of Developing a Shopify Website Design?</h3>

						<!-- Text -->
						<p class="p-lg">Compared to other website builder tools, Shopify Website service offers you the following benefits.</p>
					</div>
				</div>
			</div>

			<div class="row d-flex align-items-center">


				<!-- TEXT BLOCK -->
				<div class="col-md-7 col-lg-6 order-last order-md-2">
					<div class="txt-block left-column wow fadeInRight">

						<!-- TEXT BOX -->
						<div class="txt-box">

							<ul class="simple-list">

								<li class="list-item">
									<p class="p-lg">Your Online Store can be easily set up by using a website builder. Such a tool is fantastic for helping new online shops launch their businesses quickly and with minimal work or technical expertise. Shopify provides a variety of editable templates to speed up the process of building your website. Additionally, compared to hiring a web designer or developer, the Shopify Website Design process is less expensive. You may quickly optimize your website using its drag-and-drop design system and easy-to-use interface.
									</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Thanks to the Shopify website service process, it is simple for business owners to accept credit cards and other payment methods is simple for business owners to accept credit cards and other payment methods. Express payment methods like Shop Pay, PayPal, Google Pay, and Shopify Payments, which are included with all Shopify plans, can be made available. You are not required to control third-party activations while setting up Shopify Payments. To begin your online business immediately, all you need is your Employer ID number and banking information. </p>
								</li>

								<li class="list-item">
									<p class="p-lg">Shopify gives you unlimited bandwidth, so even if the amount of traffic on your website increases, you'll never be charged more. It features quick servers that are reachable from anywhere in the world. For new websites, Shopify also offers the option of using a free domain until you're ready to personalize one.
									</p>
								</li>

							</ul>

						</div> <!-- END TEXT BOX -->

					</div>
				</div> <!-- END TEXT BLOCK -->


				<!-- IMAGE BLOCK -->
				<div class="col-md-5 col-lg-6 order-first order-md-2">
					<div class="rel img-block right-column wow fadeInLeft">
						<img class="img-fluid" src="../images/seo-05.png" alt="content-image">
					</div>
				</div>


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-1 -->


	<!-- FEATURES-8
			============================================= -->
	<section id="features-8" class="wide-60 features-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">

						<!-- Title -->
						<h3 class="h3-lg">Why Choose ClickBox For Shopify Website Development Service?
						</h3>

						<!-- Text -->
						<p class="p-xl">Shopify is the ideal e-commerce option for people establishing new businesses or even for well-known brands. The advantages of choosing our Shopify Website development services are listed below.
						</p>

					</div>
				</div>
			</div>


			<!-- FEATURES-8 WRAPPER -->
			<div class="fbox-8-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-2">


					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/digital-marketing-service6.jpg" alt="Digital marketing services" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Customer Engagement
							</h5>

							<!-- Text -->
							<p class="p-lg">The foundation of our website builder is design and simplicity. We design, adapt and market a beautiful website. Our website builder aids in realizing your distinctive vision. No prior design or coding knowledge is necessary. Create your own unique, mobile-friendly website with digital wording.
							</p>

						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/digital-marketing-service4.jpg" alt="Social media marketing" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Cheapest Price
							</h5>

							<!-- Text -->
							<p class="p-lg">Our sequence pricing is reasonable and competitive. The benefit for our customers is that they can select the segment based on their comfort and happiness. Our non-premium segment offers excellent goods and services.

							</p>

						</div>
					</div>





				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->

			<!-- FEATURES-8 WRAPPER -->
			<div class="fbox-8-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-2">


					<!-- FEATURE BOX #4-->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/digital-marketing-service2.jpg" alt="google Ads management" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Easy and Effective

							</h5>

							<!-- Text -->
							<p class="p-lg">
								Our service platform provides a number of solutions that are simple to adopt and plug in. It offers a variety of goods, services, and solutions that users can choose from according to their needs and convenience.


							</p>

						</div>
					</div>


					<!-- FEATURE BOX #5 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/digital-marketing-service3.jpg" alt="ecommerce seo services image" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Experienced Website developers

							</h5>

							<!-- Text -->
							<p class="p-lg">Our skilled designers, who have experience working on a variety of projects, will be at your disposal as needed. We pledge to assist you swiftly, urgently, and, of course, with a human connection.
							</p>

						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->



		</div> <!-- End container -->
	</section> <!-- END FEATURES-8 -->

	<!-- CONTENT-1
			============================================= -->
	<section id="content-1" class="content-1 content-section division">
		<div class="container">
			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">

						<!-- Title -->
						<h2 class="h2-sm">Our Work Process</h2>

						<!-- Text -->
						<p class="p-lg">Our skilled website developers are skilled at creating and enhancing your online identity, by creating a professional Shopify website design. When you choose to work with ClickBox, our enthusiastic internal team of Shopify professionals will create your website. You will have a single point of contact controlling every step of the journey, from conception and Shopify web design all the way through to development, sign-off, and launch, with a dedicated project manager assigned to work with you through the project.</p>
					</div>
				</div>
			</div>

			<div class="row d-flex align-items-center">


				<!-- TEXT BLOCK -->
				<div class="col-md-7 col-lg-6 order-last order-md-2">
					<div class="txt-block left-column wow fadeInRight">

						<!-- TEXT BOX -->
						<div class="txt-box">



							<p class="p-lg"><b>Recognition of Customers' Needs</b><br>In order to go forward in the proper way, we first carefully and thoroughly listen to our client's needs. We next make sure to answer all of their questions.</p>


							<p class="p-lg"><b>Conceptual model and Planning</b><br>To make the process of developing your website manageable and structured, we create a tested plan. We are aware of how critical it is to both accomplish objectives and provide excellent customer experiences.</p>


							<p class="p-lg"><b>Design and Implement</b><br>When a platform is finished being designed, we deliver it to the client for review and input. We will continue looking for creative finishing touches till you are pleased with our work. The approved design will then be developed and coded.</p>


							<p class="p-lg"><b>Testing</b><br>To ensure that the website is responsive, user-friendly, and error-free in accordance with Web standards validation, we test it on a variety of devices and employ cutting-edge techniques. If there is a problem, we make sure to fix it so that we can provide high-quality projects. Our web development service is best for creating a professional website for your company.</p>


							<p class="p-lg"><b>Launching</b>
								<br>After ensuring that your website is error-free, we deploy it to your server for market launch, making it accessible to you, your staff, and users. In case you encounter any performance problems, we also offer maintenance and assistance.
							</p>

						</div> <!-- END TEXT BOX -->

					</div>
				</div> <!-- END TEXT BLOCK -->


				<!-- IMAGE BLOCK -->
				<div class="col-md-5 col-lg-6 order-first order-md-2">
					<div class="rel img-block right-column wow fadeInLeft">
						<img class="img-fluid" src="../images/seo-05.png" alt="content-image">
					</div>
				</div>


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-1 -->

	<!-- OUR CLIENTS ADD -->
	<?php include('our-clients.php') ?>
	<!-- OUR CLIENTS END -->

	<!-- FAQs-2>
			============================================= -->
	<section id="faqs-2" class="wide-60 faqs-section division">
		<div class="container">

			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-80">

						<!-- Title -->
						<h2 class="h2-md">Frequently Asked Questions</h2>


					</div>
				</div>
			</div>

			<!-- FAQs-2 QUESTIONS -->
			<div class="faqs-2-questions">
				<div class="row row-cols-1 row-cols-lg-2">

					<!-- START QUESTIONS HOLDER -->
					<div class="col">
						<div class="questions-holder pr-15">
							<!-- QUES 1 -->
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingOne">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<b>Will Google and other search engines list my website?</b>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Yes! All of our websites are search engine friendly, and we also provide search engine optimization services that can help you rank highly in search engines like Google, Yahoo, Bing, and others. You can get assistance from our team of knowledgeable SEOs in selecting the best keywords for your website.</p>


										</div>
									</div>
								</div>

								<!-- QUES 2 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<b>Can you develop WordPress websites as well?</b>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<!-- TEXT BOX -->
											<div class="txt-box">

												<p class="p-lg">Yes, in addition to Shopify, we also develop websites for Hubspot, Drupal, and WordPress.</p>
												<p class="p-lg">We have created our own custom Shopify and Shopify Plus theme. It is a basic theme with a minimalist design that is ideal for things like.</p>
												<ul class="simple-list">

													<li class="list-item">
														<p class="p-lg">Page Speed.
														</p>
													</li>

													<li class="list-item">
														<p class="p-lg">Sections on Shopify.</p>
													</li>

													<li class="list-item">
														<p class="p-lg">Optimization for search engines.
														</p>
													</li>

												</ul>
												<p class="p-lg">After establishing a strong foundation, we next create wholly unique child themes through our Shopify website design services for each of our clients who benefit from these improvements.</p>


											</div> <!-- END TEXT BOX -->

										</div>
									</div>
								</div>


							</div>
						</div> <!-- END QUESTIONS HOLDER -->
					</div>
					<!-- FIRST COLUMN END -->

					<!-- START SECOND COLUMN -->
					<div class="col">
						<div class="questions-holder pr-15">
							<!-- START QUESTIONS HOLDER -->
							<!-- QUES 3 -->

							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFour">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											<b>What kinds of Shopify customers do you work with, and what experience do you have?</b>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">On the Shopify and Shopify Plus platforms, we mostly work with fashion, technology, and beauty Ecommerce businesses, while we have experience in a variety of other industries.
												We will design Shopify websites for e-commerce businesses in any sector! Check out our client list to learn more about the people we've collaborated with. Hire ClickBox’s shopify developer now!
											</p>

										</div>
									</div>
								</div>
								<!-- QUES 4-->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<b>Do you provide digital marketing services, such as Ecommerce SEO?</b>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">

											<!-- TEXT BOX -->
											<div class="txt-box">
												<p class="p-lg">Yes, we provide a complete range of digital marketing services, we can help you with your marketing strategy, whether you need social media marketing, content marketing, Shopify SEO, or any other service at an affordable price. </p>



											</div> <!-- END TEXT BOX -->

										</div>
									</div>
								</div>




							</div>
						</div> <!-- END QUESTIONS HOLDER -->
					</div>
					<!-- SECOND COLUMN END -->
				</div> <!-- End row -->
			</div> <!-- END FAQs-2 QUESTIONS -->

			<!-- MORE QUESTIONS BUTTON -->

			<!-- MORE QUESTIONS BUTTON -->
			<div class="row">
				<div class="col  ">
					<div class="more-questions">
						<h5 class="h5-sm ">Have more questions? <a href="../contacts">Ask your question here</a></h5>
					</div>
				</div>
			</div>


		</div> <!-- End container -->
	</section> <!-- END FAQs-2 -->

	<!-- DIVIDER LINE -->
	<hr class="divider">

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
							<a href="../contacts/" class="btn btn-skyblue tra-white-hover">Get in touch with us</a>

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
			"url": "https://www.clickboxagency.com/shopify-website-development-service/"
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/shopify-website-development-service/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "Professional Shopify Website Development Services | ClickBox",
			"alternateName": "shopify website developer, hire shopify developer, shopify development agency, shopify development service, shopify website development services, shopify website design "/>
			"url": "https://www.clickboxagency.com/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "Professional Shopify Website Development Services | ClickBox",
			"url": "https://www.clickboxagency.com/shopify-website-development-service/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "ClickBox Shopify development company is thoroughly prominent and trusted by top companies for their most critical Shopify website design projects. Read more... " / >
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