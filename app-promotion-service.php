<?php

//  
if (isset($_POST['send'])) {

	// getting post values
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = 'SEO Service Form';

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
	$headers .= 'Bcc: techjam1993@gmail.com' . "\r\n";
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

	<title>The Best App Promotion Services | ClickBox</title>

	<meta name=description content="ClickBox is the best mobile app promotion services agency in India. We are experts in using the success of your company's business applications to provide you better results and traffic." />

	<meta name=keywords content="app promotion, promote application, mobile app promotion, app promotion services, app advertising services" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="www.clickboxagency.com" />

	<meta name="copyright" content="www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/app-promotion-service/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/app-promotion-service/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/app-promotion-service/" />

	<meta property="og:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="The Best App Promotion Services | ClickBox" />

	<meta property="og:description" content="ClickBox is the best mobile app promotion services agency in India. We are experts in using the success of your company's business applications to provide you better results and traffic." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="The Best App Promotion Services | ClickBox" />

	<meta name="twitter:description" content="ClickBox is the best mobile app promotion services agency in India. We are experts in using the success of your company's business applications to provide you better results and traffic." />

	<meta name="twitter:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />

	<?php include('header-style.php') ?>

</head>

<body>

	<?php include('header1.php') ?>

	<!-- HERO-4
			============================================= -->
	<section id="hero-4" class="bg-scroll hero-section division">
		<div class="container">
			<div class="row d-flex align-items-center">


				<!-- HERO TEXT -->
				<div class="col-md-6">
					<div class="hero-4-txt white-color">

						<!-- Title -->
						<h2 class="h2-md">Expand your Apps with us - ClickBox</h2>


					</div>
				</div> <!-- END HERO TEXT -->


				<!-- HERO REQUEST FORM -->
				<div class="col-md-6 col-xl-5 offset-xl-1">
					<div id="hero-4-form">

						<!-- Small Logo -->
						<div class="hero-logo-sm mb-20">
							<img class="img-fluid" src="https://clickboxagency.com/images/logo-01.png" alt="hero-logo">
						</div>

						<!-- Title -->
						<h4 class="h4-xs"> Professional App Promotion Service. Schedule a Call TODAY.</h4>

						<!-- Text -->
						<p class="p-lg"></p>

						<!-- Form -->
						<form method="post">

							<!-- Form Input -->
							<div class="col-md-12">
								<input type="text" name="name" class="form-control name" placeholder="Name*" autocomplete="off" required>
							</div>
							</br>

							<!-- Form Input -->
							<div class="col-md-12">
								<input type="email" name="email" class="form-control email" placeholder="Email*" autocomplete="off" required>
							</div>
							</br>

							<div class="col-md-12">
								<input type="number" name="phone" class="form-control phone" placeholder="Phone*" autocomplete="off" required>
							</div>
							</br>

							<!-- Form Button -->
							<div class="col-md-12 form-btn mt-10">
								<button type="submit" class="btn btn-md btn-pink tra-grey-hover submit" name="send">Get Started
									Now</button>
							</div>

							<!-- Form Message -->
							<div class="col-md-12 request-form-msg text-center">
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
				</div> <!-- END HERO REQUEST FORM -->


			</div> <!-- End row -->
		</div> <!-- End container -->


		<!-- WAVE SHAPE BOTTOM -->
		<div class="wave-shape-bottom">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 220">
				<path fill="#ffffff" fill-opacity="1" d="M0,192L120,197.3C240,203,480,213,720,197.3C960,181,1200,139,1320,117.3L1440,96L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z">
				</path>
			</svg>
		</div>
	</section> <!-- END HERO-4 -->

	<!-- CONTENT-1
			============================================= -->
	<section id="content-6" class="content-6 pt-40 content-section division">
		<div class="container">
			<div class="row d-flex align-items-center">


				<!-- TEXT BLOCK -->
				<div class="col-md-6 col-lg-7">
					<div class="txt-block left-column wow fadeInRight">

						<!-- TEXT BOX -->
						<div class="txt-box mb-30">
							<!-- Text -->
							<p class="p-lg">ClickBox, a top provider of mobile app promotion services with offices in India provides a variety of tried-and-true mobile app marketing techniques that work to firmly establish your mobile application's brand. Every app shop, including those from Apple, Android, BlackBerry, Windows Marketplace, and even Windows Play, is humming with thousands of programmes. It is nothing short of a task to stand out among the sea of other apps. With persuasive mobile app promotion campaigns from ClickBox's creative experts, win over your target audiences.</p>

							<p><b>How do we perform it?</b></p>
							<p class="p-lg">Our experts proactively connect your brand with your audience through a variety of creative marketing activities. We offer your mobile device a special value that will enable you to market it online. We design and deliver a linked strategy that covers all of your company's digital platforms. We pay close attention to user behavior, appreciate user input, and use these insights to every phase of the mobile app promotion services.</p>
						</div>
					</div>
				</div>


				<!-- IMAGE BLOCK -->
				<div class="col-md-6 col-lg-5">
					<div class="img-block right-column wow fadeInLeft">
						<img class="img-fluid" src="../images/img-19.png" alt="content-image">
					</div>
				</div>


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-1 -->

	<!--  -->
	<!-- CONTENT-3
			============================================= -->
	<section id="content-3" class="content-3 pt-20 content-section division">
		<div class="container">

			<!-- TOP ROW -->
			<div class="top-row pb-30">

				<div class="row d-flex align-items-center">


					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6 order-last order-md-2">
						<div class="txt-block left-column wow fadeInRight">

							<!-- TEXT BOX -->
							<div class="txt-box mb-20">

								<!-- Title -->
								<h5 class="h5-lg">Search engine optimization (SEO) for mobile apps</h5>

								<!-- Text -->
								<p class="p-lg">Search engines for mobile devices that list apps for download need to be optimized so that a potential audience can easily find them. When it comes to getting customers to find your app online, SEO for apps may be immensely helpful. The majority of app stores base their top rankings on an app's daily download rate, as well as its ratings and reviews. We can conduct a market analysis and develop a strategy to increase the visibility of your mobile app. We can build the traction needed to optimize your platform for search by allowing users to evaluate and review the app. Utilizing app store optimization will help you reach the users of your mobile app and use their feedback to expand your brand online.</p>
							</div>
						</div>
					</div> <!-- END TEXT BLOCK -->
					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6 order-first order-md-2">
						<div class="img-block right-column wow fadeInLeft">
							<img class="img-fluid" src="../images/img-06.png" alt="content-image">
						</div>
					</div>


				</div>
			</div> <!-- END TOP ROW -->
			<!-- BOTTOM ROW -->
			<div class="bottom-row">
				<div class="row d-flex align-items-center">
					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="../images/img-04.png" alt="content-image">
						</div>
					</div>
					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">
							<!-- Title -->
							<h5 class="h5-lg">Online Public Relations</h5>
							<p class="p-lg">A mobile app should connect to and integrate with other channels of your online presence because it is an extension of your brand. To ensure that the mobile app gets off to a strong start, our digital PR team concentrates on app branding and targets particular media audiences. Our staff has experience in mobile app PR, and we take the time to present original ideas and carefully consider which channels will best suit the target audience. Building brand recognition is equally as crucial as increasing app downloads.</p>

							<h5 class="h5-lg">Social Media Platforms</h5>
							<p class="p-lg">When launching the mobile app, having a strong social media presence for your brand and company will be really helpful. Which social media platforms are best for you and your brand? We can advise you on that. These profiles will be filled with the appropriate information to have an impact online. We'll give people who visit your social media page the details they need to learn more about your company and mobile app.</p>
						</div>
					</div> <!-- END TEXT BLOCK -->
				</div>

			</div> <!-- END BOTTOM ROW -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-3 -->

	<!-- CONTENT-2 ============================================= -->
	<section id="content-2" class="content-2 bg-03 wide-60 content-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-02 mb-85">
						<!-- Title -->
						<h3 class="h3-xs  white-color">5 stages to promoting mobile applications</h3>
						<!-- <p class="p-lg white-color">Our focus on results and uncompromising transparency are what keep us at the forefront.</p> -->

					</div>
				</div>
			</div>
			<div class="row d-flex align-items-center">


				<!-- IMAGE BLOCK -->
				<div class="col-md-5 col-lg-6">
					<div class="rel img-block left-column wow fadeInRight">
						<img class="img-fluid" src="../images/img-09.png" alt="content-image">
					</div>
				</div>


				<!-- TEXT BLOCK -->
				<div class="col-md-7 col-lg-6">
					<div class="txt-block right-column white-color wow fadeInLeft">
						<p class="p-lg">Focusing on the mobile application's end users is the first stage in a mobile app promotion service. It's crucial to research and examine the mobile behavior of your target market before developing a marketing strategy.</p>

						<p class="p-lg">You should constantly conduct a thorough analysis of client behavior patterns. Focusing on the target audience and coming up with strategies to engage them should be your top priorities when creating a mobile application marketing plan. Make a thorough analysis of the client's needs and identify their distinctive behavioral patterns. Studying the traffic on your mobile website would be the finest technique to assess customer behavior. The type of visitors can be utilized to infer information about their needs and requirements as well as the types of devices they use.</p>
						<p class="p-lg">The following action is to keep in mind the primary goal of the application design. The primary goal should be to give app users the most benefits possible. The success of a firm depends on its ability to satisfy its customers. The easiest way to achieve that is to engage actively with your target market, make them enticing offers and bargains, provide them with location-based information, social media sharing functionality, and many other things. App marketing is a crucial marketing strategy since it enables you to communicate directly with your customers. Don't let it go to waste by attempting to give your users the most comprehensive app experience.</p>
						<p class="p-lg">Refining your marketing plan is the next stage. The development of a marketing strategy entails careful planning, the creation of a team to oversee the app, work on its promotion and advertising, the processing and gathering of information, and—most importantly—the selection of the ideal mobile platform. In this stage of marketing strategy, you must also choose the duration of your promotional campaigns. If your application is a good fit for a business, you will need to concentrate on the app's pricing strategy.</p>
						<p class="p-lg">Choosing the best mobile technology for promoting your app is the last stage. One of the best ways to reach the largest audience for the least amount of money is through the Short Message Service (SMS). This approach is the most straightforward and flexible. Due to the increased number of smartphone and other mobile device users who are always connected to the internet, creating a mobile-friendly website could be another strategy.</p>
					</div>
				</div> <!-- END TEXT BLOCK -->


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-2 -->
	<!--  -->

<!--  -->
	<!-- CONTENT-3
			============================================= -->
			<section id="content-3" class="content-3 pt-20 content-section division">
		<div class="container">

	       <!-- BOTTOM ROW -->
			<div class="bottom-row">
				<div class="row d-flex align-items-center">
					
					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">
							<!-- Title -->
							<h5 class="h5-lg">Paid Promotion</h5>
							<p class="p-lg">Paid advertising enables you to tailor your campaign to a specific product, sphere of influence, or other market segment. We investigate and plan the demographics and keywords that should be targeted, and we can tailor your campaign to concentrate on a particular location depending on that. These app advertising services come in a variety of configurations to assist you in reaching the market that is most pertinent to your company. Users can download your mobile application, or you can use the platform to direct them to your website or social network profiles. We provide you with persuasive SEM for mobile apps to guide users in the proper route. We can assist you in reaching the market for your mobile app through a combination of design, copywriting, and smart placement.</p>

							<h5 class="h5-lg">Mobile App Promotion</h5>
							<p class="p-lg">One of the finest ways to take advantage of the special chances offered by the mobile is through mobile app promotion services. A wide range of channels, real-time, hyper-personalized interactions, and experiences are available via mobile. ClickBox is the solution for you if you're looking for the top mobile app promotion techniques in India. We provide some of India's top digital marketing services. We at ClickBox take into account the ensuing measures when creating mobile application marketing strategies, making us the best in the industry.</p>
						</div>
					</div> <!-- END TEXT BLOCK -->
					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="../images/img-04.png" alt="content-image">
						</div>
					</div>
				</div>

			</div> <!-- END BOTTOM ROW -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-3 -->


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
											<b>Why should I hire a company to promote my mobile app through the app store?</b>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">The first step in marketing an app is to optimize the app's page for search engines. Expertly implemented marketing mix strategies and well-researched content optimization can help businesses increase their audience and revenue. Additionally, it lowers operational costs and aids in obtaining quick results. Above all, the process of app advertising requires more skill and care than mobile app creation does.
											</p>


										</div>
									</div>
								</div>
								<!-- QUES 2 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<b>What should the frequency of app updates be?</b>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Developers commonly ask this question, but they presumably already know the answer, which is that it relies on a variety of things. These consist of:</p>
											<ul class="simple-list">

												<li class="list-item">
													<p class="p-lg">New technologies that your app might use are now available. </p>
												</li>

												<li class="list-item">
													<p class="p-lg">How well your competitors are doing.</p>
												</li>

												<li class="list-item">
													<p class="p-lg"> Negative reviews that draw attention to the flaws in your programme, which you must subsequently fix.
													</p>
												</li>
											</ul>


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
											<b>What are the most effective methods for mobile app advertising?</b>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Mobile app marketing can be done in a variety of ways, including but not limited to app store optimization, paid social media campaigns, influencer marketing, pre-launch app marketing, pay per click advertising on various platforms, such as the Play Store and the App Store, in-app advertisements, post-download app engagement campaigns, and many others.</p>

										</div>
									</div>
								</div>
								<!-- QUES 4 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<b>What typical eCommerce SEO mistakes are there?</b>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">

											<ul class="simple-list">

												<li class="list-item">
													<p class="p-lg">Ad banners</p>
												</li>

												<li class="list-item">
													<p class="p-lg">Ad notifications</p>
												</li>

												<li class="list-item">
													<p class="p-lg">Advertisement breaks
													</p>
												</li>
												<li class="list-item">
													<p class="p-lg">Ad notifications
													</p>
												</li>
												<li class="list-item">
													<p class="p-lg">Advanced overlay
													</p>
												</li>




											</ul>
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
	<section id="cta-5" class="cta-section division">
		<div class="container">
			<div class="rel bg-04 cta-5-wrapper">
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

	<?php include('footer1.php') ?>
	</div> <!-- END PAGE CONTENT -->

	<?php include('footer-script.php') ?>

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "https://www.clickboxagency.com/app-promotion-service/",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/app-promotion-service/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "Affordable eCommerce SEO Service | ClickBox",
			"alternateName": "app promotion, promote application, mobile app promotion, app promotion services, app advertising services",
			"url": "https://www.clickboxagency.com/app-promotion-service/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "Affordable eCommerce SEO Service | ClickBox",
			"url": "https://www.clickboxagency.com/app-promotion-service/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "ClickBox is the best mobile app promotion services agency in India. We are experts in using the success of your company's business applications to provide you better results and traffic. ",
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