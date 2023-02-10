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

	<title>The Best Logo Design Service | ClickBox</title>

	<meta name=description content="With our most popular abstract logo design service, ClickBox Agency provides distinctive brand and business logos at a reasonable price. Our group of certified designers works to satisfy our clients with unique logo patterns." />

	<meta name=keywords content="logo design service, logo design company, custom logo design, logo design, best logo design, company logos" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="www.clickboxagency.com" />

	<meta name="copyright" content="www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="www.clickboxagency.com/logo-design-service/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="www.clickboxagency.com/logo-design-service/" />

	<meta property="og:site_name" content="www.clickboxagency.com/logo-design-service/" />

	<meta property="og:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="The Best Logo Design Service | ClickBox" />

	<meta property="og:description" content="With our most popular abstract logo design service, ClickBox Agency provides distinctive brand and business logos at a reasonable price. Our group of certified designers works to satisfy our clients with unique logo patterns." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="The Best Logo Design Service | ClickBox" />

	<meta name="twitter:description" content="With our most popular abstract logo design service, ClickBox Agency provides distinctive brand and business logos at a reasonable price. Our group of certified designers works to satisfy our clients with unique logo patterns." />

	<meta name="twitter:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />
	<?php include('header-style.php') ?>

</head>



<body>

	<?php include('header.php') ?>

	<!-- HERO-10
			============================================= -->
	<section id="hero-10" class="bg-scroll rel hero-section division">
		<div class="container">
			<div class="row d-flex align-items-center">
				<div class="col text-center">


					<!-- HERO TEXT -->
					<div class="hero-10-txt">

						<!-- Title -->
						<h3 class="h3-xs wow fadeInUp">
							Create a Lasting Impression Of Your Company With Our Logo Design Service
						</h3>

						<!-- Buttons Group -->
						<div class="btns-group wow fadeInUp mb-4">
							<a href="#content-3" class="btn btn-violet-red tra-violet-red-hover mr-15">Try Out Today</a>
							<!-- <a href="#features-4" class="btn btn-tra-black tra-violet-red-hover">Core Features</a> -->
						</div>

					</div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END HERO-10 -->

	<!-- CONTENT-2
			============================================= -->
	<section id="content-5" class="content-5 ws-wrapper content-section division">
		<div class="container">
			<div class="content-5-wrapper bg-whitesmoke">
				<!-- SECTION TITLE -->
				<div class="row justify-content-center">
					<div class="col-lg-10 col-xl-12">
						<div class="section-title title-01 mb-70">

							<!-- Title -->
							<h3 class="h3-xs">The Best Logo Design Service</h3>

							<!-- Text -->
							<p class="p-md">The best logos are more than just artistic marks. It makes it easier to recognize brands. As the best logo design firm in India, our professional logo creators know how to produce a distinctive logo that stands out visibly and eventually creates a distinct identity. Use our logo design service to obtain the ideal symbol that perfectly represents your company. </p>


						</div>
					</div>
				</div>
				<div class="row d-flex align-items-center">


					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block left-column wow fadeInRight">

							<!-- Section ID -->
							<!-- <span class="section-id purple-color txt-upcase">Fast Performance</span> -->

							<p class="p-lg">Consider a few of the brands you can instantly recall when you see their logo, including their full name and corporate background. From the above comes the power of a logo. To produce such a powerful logo, our skilled logo designers know how to combine the ideal number of symbols, calligraphy, design art, and other aesthetically pleasing graphic components. The logo excites feelings and experiences associated with your brand and aids in increasing recall to expand your audience. </p>

							<p class="p-lg">Our talented logo designers have created distinctive logos for small businesses as well as huge corporations around the world as a leading logo design firm in India. Our logo designs cover a variety of sectors, including real estate, education, finance, hospitality, culinary, information technology, fashion, and more. To meet the demands of every business, we provide a variety of packages for our custom logo design service. Contact us today for a comprehensive proposal on your logo needs and to collaborate with the top logo designers in the business.</p>
						</div>
					</div> <!-- END TEXT BLOCK -->


					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6">
						<div class="img-block right-column wow fadeInLeft">
							<img class="img-fluid" src="../images/img-13.png" alt="content-image">
						</div>
					</div>


				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-2 -->

	<!-- CONTENT-2
			============================================= -->
	<section id="content-3" class="content-3 wide-60 content-section division">
		<div class="container">



			<!-- TOP ROW -->
			<div class="top-row pb-50">
				<div class="row d-flex align-items-center">


					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="../images/img-06.png" alt="content-image">
						</div>
					</div>


					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">
							<!-- Title -->
							<h3 class="h2-xs">A Custom Logo Design Improves The Identity Of Your Brand</h3>

							<!-- Text -->
							<p class="p-lg">The foundation of your brand identification is a logo. A distinctive, enduring company logo serves as a powerful brand-building tool. Here, our logo design service promises to translate your concepts into a flawless logo.</p>
							<p class="p-lg">Your company logos are more than a tiny piece of art! In actuality, it goes beyond that. Your brand's logo serves as its spokesperson and aids in creating a distinctive brand identity. You can utilize a customized logo on your numerous branding materials and advertising platforms. It can be used on packaging, stationery, websites, business cards, social media, and labels. Your company will receive the exposure it needs if you do this.</p>
							<p class="p-lg">Keep in mind that branding is all you need to expand your company. And a distinctive, simple logo for your company only strengthens it! A well-designed logo conveys to everyone in a single glance the essence of your company and your core principles.</p>
							<p class="p-lg">ClickBox, a top provider of logo design service, makes sure you have complete flexibility. The top logo designer in the world is available here to create a unique logo for you. Even you have the option to use our logo builder to create a free logo or to hire a professional logo designer!</p>
						</div>
					</div> <!-- END TEXT BLOCK -->


				</div>
			</div> <!-- END TOP ROW -->



		</div> <!-- End container -->
	</section> <!-- END CONTENT-2 -->

	<!-- SECTION -->
	<section class="bg-snow content-3 features-section division ">
		<div class="container ">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<h2 class="h3-xs text-center">Why Choose ClickBox? </h2>

					</div>
				</div>
			</div>
			<!-- ADD CARD CONTANTS -->
			<!-- FEATURES-8 WRAPPER -->
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-2">
					<!-- FEATURE BOX #1 -->
					<div class="col ">
						<div class="fbox-8 mb-40 wow fadeInUp ">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/img-21.png" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md"> A Professional Logo Design Company</h5>

							<!-- Text -->
							<p class="p-lg">Your brand may become very recognizable and get user traction with the help of a fantastic logo design. At ClickBox, a reputable logo design company in India, we create eye-catching logos that strengthen your brand proposition at reasonable prices. To make your brand stand out, our talented logo designers use aesthetically pleasing graphic components, a pleasing color scheme, beautiful calligraphy, and exquisite design art. The company logos are important for branding your company. </p>


						</div>
					</div>
					<!-- FEATURE BOX #2 -->
					<div class="col ">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/img-22.png" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Create Distinctive Business Cards</h5>
							<!-- Text -->
							<p class="p-lg">Once you've created your logo, it's time to start spreading the news using personalized business cards. Utilizing our business card maker is quick and simple. Simply choose a template for a business card and customize it with your logo and contact details. Another option is to upload a picture from your PC. Once you're happy with the design, utilize our business card editor to further customize the front and back of your cards. Select a paper stock and matte or glossy finish before placing your order. </p>
						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->
			<!-- FEATURES-8 WRAPPER -->
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-2">
					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/img-seoservice.png" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Comprehensive Brand Analysis</h5>

							<!-- Text -->
							<p class="p-lg">After conducting a detailed research on your brand, logo design is started.
							</p>
						</div>
					</div>
					<!-- FEATURE BOX #4 -->
					<div class="col ">
						<div class="fbox-8 mb-40 wow fadeInUp ">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/img-21.png" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Several Packages</h5>
							<!-- Text -->
							<p class="p-lg">To meet different needs for business logo design, we provide a variety of solutions.
							</p>
						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->
			<!-- FEATURES-8 WRAPPER -->
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-2">
					<!-- FEATURE BOX #5 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/img-22.png" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Skilled Designers</h5>
							<!-- Text -->
							<p class="p-lg">With many years of experience, our designers have produced premium custom logo design.</p>
						</div>
					</div>
					<!-- FEATURE BOX #6 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/img-seoservice.png" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Different Design Concepts
							</h5>
							<!-- Text -->
							<p class="p-lg">For our clients' selection, we offer a variety of design possibilities.
							</p>
						</div>
					</div>
				</div>
			</div>
			<!-- FEATURES-8 WRAPPER -->
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-2">
					<!-- FEATURE BOX #7 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/img-22.png" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">100% Customizable</h5>
							<!-- Text -->
							<p class="p-lg">You may alter the text, font style, colors, size, and layout of your logo design with our logo editor tool.</p>
						</div>
					</div>
					<!-- FEATURE BOX #8 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/img-seoservice.png" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Files With Vector Images
							</h5>
							<!-- Text -->
							<p class="p-lg">With the purchase of a logo, you will receive high-quality image files in the EPS, SVG, PNG, and JPEG formats.</p>
						</div>
					</div>
				</div>
			</div>
			<!-- FEATURES-8 WRAPPER -->
		</div>
	</section>
	<!-- SECTION -->

	<!-- CONTENT-3
			============================================= -->
	<section id="content-2" class="content-2 bg-04 wide-60 content-section division">
		<div class="container">
			<div class="row d-flex align-items-center">
				<!-- IMAGE BLOCK -->
				<div class="col-md-5 col-lg-6">
					<div class="rel img-block left-column video-preview wow fadeInRight">
						<!-- Preview Image -->
						<img class="img-fluid" src="../images/img-08.png" alt="video-preview">

					</div>
				</div>


				<!-- TEXT BLOCK -->
				<div class="col-md-7 col-lg-6">
					<div class="txt-block right-column white-color wow fadeInLeft">

						<!-- Title -->
						<h3 class="h2-xs">Our Process</h3>



						<!-- List -->
						<ul class="simple-list">
							<h5 class="h5-md">1. Complete a Brief For a Logo.</h5>
							<li class="list-item">
								<p class="p-lg">Make a brief outline outlining the requirements for your logo design.</p>

							</li>

							<li class="list-item">
								<p class="p-lg">Inform the logo designers of your preferred color, typeface, and component choices.</p>
							</li>
							<li class="list-item">
								<p class="p-lg">Attaching a reference can assist them fully understand your unique logo needs.</p>
							</li>

						</ul>

						<!-- List -->
						<ul class="simple-list">
							<h5 class="h5-md">2. Launch a Test For a New Logo</h5>
							<li class="list-item">
								<p class="p-lg">Post your completed logo design brief online so that logo designers can find it.</p>

							</li>

							<li class="list-item">
								<p class="p-lg">Professional logo designers from all around the world will submit their designs in competition for your assignment.</p>
							</li>
							<li class="list-item">
								<p class="p-lg">In a few days, more than 50 designs are possible. Give comments and look for improvements.</p>
							</li>

						</ul>

						<!-- List -->
						<ul class="simple-list">
							<h5 class="h5-md">3. Select The Ideal Logo, Download it, and Take Ownership.</h5>
							<li class="list-item">
								<p class="p-lg">Pick the custom logo design that you adore the best.</p>

							</li>

							<li class="list-item">
								<p class="p-lg">Work together to make tweaks and modifications with the winning logo designer.</p>
							</li>
							<li class="list-item">
								<p class="p-lg">Get complete ownership of the logo's source files. Download and save.</p>
							</li>

						</ul>

					</div>
				</div> <!-- END TEXT BLOCK -->


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-3 -->




	<!-- OUR CLIENTS ADD -->
	<?php include('our-clients.php') ?>
	<!-- OUR CLIENTS END -->



	<!-- DIVIDER LINE -->
	<hr class="divider">

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
											<b>Does my company require a unique logo?</b>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Yes! A superb logo design is the foundation of a powerful brand identity. It's one of your most crucial design choices. Getting a personalized logo can help your brand succeed, regardless of how big or small your business dreams may be.
												<br>It's important to get your logo design perfect because it will be used everywhere, including on your website, on digital and print documents, in advertisements, and everywhere else your customers will see it.
											</p>
										</div>
									</div>
								</div>
								<!-- QUES 2 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<b>Is there anything I should do in advance to prepare for the design of my company's logo?</b>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Yes, it is necessary to be ready for suggestions. You likely already know what your company's logo should look like, as well as the color and icon that should be employed. The better results you are likely to get will depend on how well you describe your needs for a logo. If you're short on time, use this page as inspiration and some logo possibilities.</p>
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
											<b>How can I acquire a logo from ClickBox?</b>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Simply start a project on ClickBox, select your spending limit, and fill out your creative brief to describe what you require. ClickBox is the best logo design company that provides amazing logo design service to all sectors.
												<br>Find inspiring concepts and attention-grabbing logos that you and your clients will enjoy by working with the global community of professional designers at ClickBox and offering feedback.
											</p>
										</div>
									</div>
								</div>
								<!-- QUES 4 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<b>What must I do to obtain the best logo for my company?</b>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">To ensure you receive the ideal logo design for you, write a precise and thorough brief for the design of your logo, determine your budget, and offer direct, constructive feedback to designers throughout the creative process.
												<br>The outcomes will be better the more information you include in your logo design brief and the more input you give!
											</p>
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
				<div class="col ">
					<div class="more-questions">
						<h5 class="h5-sm ">Have more questions? <a href="https://clickboxagency.com/contacts/">Ask your question here</a></h5>
					</div>
				</div>
			</div>
		</div> <!-- End container -->
	</section> <!-- END FAQs-2 -->

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
			"url": "https://www.clickboxagency.com/logo-design-service/",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/logo-design-service/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "The Best Logo Design Service | ClickBox",
			"alternateName": "logo design service, logo design company, custom logo design, logo design, best logo design, company logos",
			"url": "https://www.clickboxagency.com/logo-design-service/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "The Best Logo Design Service | ClickBox",
			"url": "https://www.clickboxagency.com/logo-design-service/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "With our most popular abstract logo design service, ClickBox Agency provides distinctive brand and business logos at a reasonable price. Our group of certified designers works to satisfy our clients with unique logo patterns.",
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