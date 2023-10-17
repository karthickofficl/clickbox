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

	<title>The Best Mobile App Development Services | ClickBox</title>

	<meta name=description content="ClickBox Agency is one of the best mobile application development companies in India.  We create all types of mobile apps including progressive, hybrid, and native mobile applications." />

	<meta name=keywords content="app development, mobile app development, mobile app development company, mobile application development, mobile app development services" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/mobile-app-development-service/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/mobile-app-development-service/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/mobile-app-development-service/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="The Best Mobile App Development Services | ClickBox" />

	<meta property="og:description" content="ClickBox Agency is one of the best mobile application development companies in India.  We create all types of mobile apps including progressive, hybrid, and native mobile applications." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="The Best Mobile App Development Services | ClickBox" />

	<meta name="twitter:description" content="ClickBox Agency is one of the best mobile application development companies in India.  We create all types of mobile apps including progressive, hybrid, and native mobile applications." />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />
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
						<h1 class="h2-md">We Develop Your Concept Into A Valuable Business.</h1>



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
							<p class="p-lg">Our dependence on mobile devices has grown to the point that we spend most of each day using them. The majority of our tasks or jobs involve it. Mobile app development is therefore required to enable the cooperative communication of two separate operating systems or varied functions on various devices.
								<br>According to reports, there has been easy development or improvisation of mobile accessible services. The result of all software designed to run on smartphones or tablets is also included in the term "mobile app development."
							</p>
							<p class="p-lg">We provide our clients across the globe with unique services for developing Android and iPhone applications, websites, search engine optimization, online marketing, and marketing.</p>
							<p class="p-lg">Your online presence in the digitization era sets you apart from the competition. To make the most of the online world, the technology you use needs to be dependable and practical. You may be in the right place if you're seeking a remedy that will help and is also inexpensive. Being one of the top firms for developing mobile applications, we provide effective services and have years of experience thanks to the numerous mobile app development projects we have worked on for various businesses.</p>


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
							<ul class="simple-list">

								<li class="list-item">
									<p class="p-lg">A track record of success developing apps.</p>

								</li>

								<li class="list-item">
									<p class="p-lg">User experience design as a priority.</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Each project has its own dedicated crew.</p>

								</li>
								<li class="list-item">
									<p class="p-lg">Effective quality control team.</p>

								</li>
								<li class="list-item">
									<p class="p-lg">App marketing and promotion.</p>

								</li>
								<li class="list-item">
									<p class="p-lg">Rapid and efficient assistance.</p>

								</li>


							</ul>
						</div>
					</div> <!-- END TEXT BLOCK -->


				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-5 -->


	<!-- CONTENT-1
			============================================= -->
	<section id="content-1" class="content-1 content-section division mt-3">
		<div class="container">
			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">

						<!-- Title -->
						<h3 class="h3-sm">Choices For Our Website Redesign Service</h3>
					</div>
				</div>
			</div>

			<div class="row d-flex align-items-center">


				<!-- TEXT BLOCK -->
				<div class="col-md-7 col-lg-6 order-last order-md-2">
					<div class="txt-block left-column wow fadeInRight">

						<!-- TEXT BOX -->
						<div class="txt-box">



							<p class="p-lg"><b>Redesigned E-commerce Website</b><br>Our service for redesigning e-commerce websites assists companies with rebranding, lowering bounce rates and card abandonment, and enhancing user experience (UX).</p>


							<p class="p-lg"><b>Redesign of a B2C Website</b><br>Your website's visitors will spend more time on it for longer, which will improve engagement and boost conversions thanks to our customer-focused B2C website redesign.</p>


							<p class="p-lg"><b>Redesign of a B2B website</b><br>Redesigning the corporate website will increase email subscribers and quote/demo requests. Our goal is to provide your website a professional, recognizable style that distinguishes you from competitors.</p>


							<p class="p-lg"><b>Access to MarketingCloudFX</b><br>You want a revamped website that not only looks great but also generates income. Because of this, we created MarketingCloudFX, our platform for accelerating revenue that facilitates quicker and easier tracking, measuring, and revenue capture.</p>


							<p class="p-lg"><b>Custom web design</b>
								<br>A creative design unique to your company drives our website redevelopment process. In order to build a website that effectively represents your brand and increases your online visibility, we consider your target demographic, the design of your logo, and your website goals.
								<br>We create an adaptive website, all of our expert website redesigns come with a responsive design, ensuring that your website looks great on all gadgets, including computers, tablets, and mobile phones. You won't have to worry about developing a special "mobile website" if you choose a responsive design.
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

	<!-- FEATURES-4
			============================================= -->
	<section id="features-4" class="wide-60 features-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">

						<!-- Title -->
						<h2 class="h2-sm">Our Mobile App Development Process</h2>

						<!-- Text -->
						<p class="p-lg">At ClickBox, we adhere to the generally accepted development procedure, which includes every step of the full mobile app development process.</p>
					</div>
				</div>
			</div>

			<!-- FEATURES-4 WRAPPER -->
			<div class="fbox-4-wrapper fbox-4-wide">
				<div class="row row-cols-1 row-cols-md-2">


					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-4 pr-25 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico">
								<div class="ico-65 skyblue-color">
									<span class="flaticon-album"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-sm">Analysis of Requirements</h5>

								<!-- Title -->
								<ul class="simple-list">

									<li class="list-item">
										<p class="p-lg">Interacting with customers.</p>

									</li>

									<li class="list-item">
										<p class="p-lg">Collecting the app's precise requirements.</p>
									</li>

									<li class="list-item">
										<p class="p-lg">Providing comprehensive app solutions.</p>
									</li>


								</ul>
							</div>

						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-4 pl-25 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico">
								<div class="ico-65 skyblue-color">
									<span class="flaticon-seo"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-sm">Wireframing and Designing</h5>

								<!-- Title -->
								<ul class="simple-list">

									<li class="list-item">
										<p class="p-lg">Brainstorming for UI and UX.</p>

									</li>

									<li class="list-item">
										<p class="p-lg">Blueprint for the app's structure.</p>
									</li>

									<li class="list-item">
										<p class="p-lg">Create your app layout.</p>
									</li>


								</ul>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-4 pr-25 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico">
								<div class="ico-65 skyblue-color">
									<span class="flaticon-click-2"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-sm">App Design</h5>

								<!-- Title -->
								<ul class="simple-list">

									<li class="list-item">
										<p class="p-lg">The applications' coding.</p>

									</li>

									<li class="list-item">
										<p class="p-lg">Constructing the key sections.</p>
									</li>

									<li class="list-item">
										<p class="p-lg">Obtaining customer feedback.</p>
									</li>


								</ul>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #4 -->
					<div class="col">
						<div class="fbox-4 pl-25 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico">
								<div class="ico-65 skyblue-color">
									<span class="flaticon-layers"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-sm">App Evaluation</h5>
								<!-- Title -->
								<ul class="simple-list">

									<li class="list-item">
										<p class="p-lg">Evaluating the programme.</p>

									</li>

									<li class="list-item">
										<p class="p-lg">Ensuring the bug-free version.</p>
									</li>

									<li class="list-item">
										<p class="p-lg">Obtaining the client's ultimate consent.</p>
									</li>


								</ul>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #6 -->
					<div class="col">
						<div class="fbox-4 pl-25 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico">
								<div class="ico-65 skyblue-color">
									<span class="flaticon-layers"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-sm">Launching</h5>

								<!-- Title -->
								<ul class="simple-list">

									<li class="list-item">
										<p class="p-lg">Launching the respective app stores.</p>

									</li>

									<li class="list-item">
										<p class="p-lg">Give it to the customer.</p>
									</li>

									<li class="list-item">
										<p class="p-lg">Allowing all users access to the app.</p>
									</li>


								</ul>

							</div>

						</div>
					</div>

				</div>
			</div> <!-- END FEATURES-4 WRAPPER -->


		</div> <!-- End container -->
	</section> <!-- END FEATURES-4 -->


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
											<b>Why are mobile applications essential for businesses?</b>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Every business needs mobile applications, because they provide their customers with top-notch customer service. They gain revenue from practices like brand promotion, growing their clientele, giving a wide range of exclusive features like hotel bookings, money transfers, product ordering, and so forth. In order to fulfill people's wishes and expectations, numerous mobile app development companies have started creating thousands of apps.</p>
										</div>
									</div>
								</div>

								<!-- QUES 2 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<b>Can you create an app for my website, as well?</b>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<!-- TEXT BOX -->
											<div class="txt-box">

												<p class="p-lg">Yes, we must explain why it was once difficult to convert a website to an app and why it is still necessary now. Following are a few justifications for turning a website into an app:</p>
												<!-- List -->
												<ul class="simple-list">

													<li class="list-item">
														<p class="p-lg">Expectations of users.</p>
													</li>

													<li class="list-item">
														<p class="p-lg">Improving user experience.</p>
													</li>

													<li class="list-item">
														<p class="p-lg">More involvement and involvement.</p>
													</li>
													<li class="list-item">
														<p class="p-lg">Gain for the company.
														</p>
													</li>
													<li class="list-item">
														<p class="p-lg">Push notifications are a possibility.
														</p>
													</li>
													<li class="list-item">
														<p class="p-lg">A section in the app store.
														</p>
													</li>


												</ul>
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
											<b>Can you create customized apps for any industry?</b>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Custom application development is the process of creating software applications for a single user within a company. It is created especially for programmes that modify applications to cater to particular user needs. You might create a unique app specifically for your company if you own or operate a business in the area.</p>

										</div>
									</div>
								</div>
								<!-- QUES 4-->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<b>What are the advantages of having a mobile app?</b>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">

											<!-- TEXT BOX -->
											<div class="txt-box">
												<p class="p-lg">The following are just a few of the many benefits of recommending custom apps for all types of businesses:</p>
												<!-- List -->
												<ul class="simple-list">

													<li class="list-item">
														<p class="p-lg">Expand the audience you have online.</p>
													</li>

													<li class="list-item">
														<p class="p-lg">Make you distinctive from other people.</p>
													</li>

													<li class="list-item">
														<p class="p-lg">Improve the way you manage your online reputation.</p>
													</li>
													<li class="list-item">
														<p class="p-lg">Boosting the volume of traffic to your website.
														</p>
													</li>
													<li class="list-item">
														<p class="p-lg">Boost your company's internet visibility.
														</p>
													</li>
													<li class="list-item">
														<p class="p-lg">Enhancing the caliber of your offerings.
														</p>
													</li>


												</ul>

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
						<h5 class="h5-sm ">Have more questions? <a href="https://clickboxagency.com/contacts/">Ask your question here</a></h5>
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
			"url": "https://www.clickboxagency.com/website-redesigning-service/",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/mobile-app-development-service/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "The Best Mobile App Development Services | ClickBox",
			"alternateName": "app development, mobile app development, mobile app development company, mobile application development, mobile app development services",
			"url": "https://www.clickboxagency.com/mobile-app-development-service/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "The Best Mobile App Development Services | ClickBox",
			"url": "https://www.clickboxagency.com/mobile-app-development-service/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "ClickBox Agency is one of the best mobile application development companies in India.  We create all types of mobile apps including progressive, hybrid, and native mobile applications.",
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
	<?php include('popup1.php') ?>

</body>

</html>