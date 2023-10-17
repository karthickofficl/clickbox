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

	<title>Professional Website Redesign Service | ClickBox</title>

	<meta name=description content="For expanding online businesses, ClickBox provides a website redesign service. The greatest UX strategies are the main emphasis of our website redesign and development process. Read more…" />

	<meta name=keywords content="website redesign, website redesign service, website redesign company, website redesign cost, site redesign, revamping website" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/website-redesigning-service/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/website-redesigning-service/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/website-redesigning-service/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content=" Professional Website Redesign Service | ClickBox" />

	<meta property="og:description" content="For expanding online businesses, ClickBox provides a website redesign service. The greatest UX strategies are the main emphasis of our website redesign and development process. Read more…" />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content=" Professional Website Redesign Service | ClickBox" />

	<meta name="twitter:description" content="For expanding online businesses, ClickBox provides a website redesign service. The greatest UX strategies are the main emphasis of our website redesign and development process. Read more…" />

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
							<p class="p-lg">Every company has a unique identity, and we think that identity should be expressed clearly on the website. However, not all websites can keep their audience's attention with the same standard website designs, especially if people view your website from a variety of various devices with varying screen sizes. The custom website redesign service offered by ClickBox in India is created with your target market, industry, and most crucial target audience in mind.</p>
							<p class="p-lg">To give your audience new content, it is crucial to update the look of your website. ClickBox is a reputable website redesigning company in India that can assist you in revamping a website to give it a unique look, call-to-action, and captivating visual appeal. Your engagement is how we start the process of redesigning the website. Your feedback on your current website, your dislikes about it, and your expectations for a website redesign will be carefully recorded by our web developers and UX designers as they listen to you.</p>
							<p class="p-lg">We will draw ideas from websites you admire, gather the necessary information from your current website, and consult with your team to determine what kind of website redesign or website renovation will satisfy you. We'll start working on the website revamp once we get all the data.
								<br>Every step of the website redesign process will keep you updated. After the website creation is complete, we'll move all the data over to the new website and make it public.
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
							<h4 class="h4-lg">Various Sectors that Can Benefit from Our Website Redesign Services Are</h4>

							<p class="p-lg">A well-designed website communicates the value of your brand, thus it is essential to have one that tempts visitors to stay on it for an extended period of time so that brand awareness and conversion can rise. As a top website redesign company, we have years of expertise redesigning websites and know how to update the entire site to give both new users and returning visitors a fresh experience.</p>
							<p class="p-lg">At ClickBox, our team of website redesign specialists is experienced in creating cutting-edge solutions for clients in a wide range of sectors and verticals. The team providing website redesign and revamping website services is committed to assisting companies in the travel, hospitality & restaurant, educational, medical, and real estate sectors to increase their leads, conversions, and repeat business.</p>

						</div>
					</div> <!-- END TEXT BLOCK -->


				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-5 -->




	<!-- FEATURES-5
			============================================= -->
	<section id="features-5" class="wide-60 features-section division">
		<div class="container">

			<!-- SECTION TITLE  -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">

						<!-- Title  -->
						<h3 class="h3-md">Why Choose ClickBox For Website Redesign Service?</h3>

						<!-- Text  -->
						<p class="p-md">A comprehensive range of website design services is offered by ClickBox to both small and large businesses. Our team of skilled web designers and seasoned digital marketing professionals create user-friendly business websites and dynamic web applications using the most recent technology and tried-and-true marketing techniques, then market them to increase client reach.
						</p>

					</div>
				</div>
			</div>

			<!-- FEATURES-5 WRAPPER -->
			<div class="fbox-5-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-2">


					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-5 bg-white h-100 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-analytics"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Customer Engagement</h5>

							<!-- Text -->
							<p class="p-lg">The foundation of our website builder is design and simplicity. We design, adapt and market a beautiful website. Our website builder aids in realizing your distinctive vision. No prior design or coding knowledge is necessary. Create your own unique, mobile-friendly website with digital wording.</p>


						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-5 bg-white h-100 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-web-search-engine"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Affordable Price</h5>

							<!-- Text -->
							<p class="p-lg">Our sequence pricing is reasonable and competitive. The benefit for our customers is that they can select the segment based on their comfort and happiness. Our non-premium segment offers excellent goods and services.</p>


						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col mt-4">
						<div class="fbox-5 bg-white h-100 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-line-graph-1"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Easy and Effective</h5>

							<!-- Text -->
							<p class="p-lg">Our service platform provides a number of solutions that are simple to adopt and plug in. It offers a variety of goods, services, and solutions that users can choose from according to their needs and convenience.
							</p>

						</div>
					</div>


					<!-- FEATURE BOX #4 -->
					<div class="col mt-4">
						<div class="fbox-5 bg-white h-100 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-analytics"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Experienced Website Developers</h5>

							<!-- Text -->
							<p class="p-lg">Our skilled designers, who have experience working on a variety of projects, will be at your disposal as needed. We pledge to assist you swiftly, urgently, and, of course, with a human connection.</p>


						</div>
					</div>



				</div> <!-- End row -->
			</div> <!-- END FEATURES-5 WRAPPER -->
		</div> <!-- End container -->

	</section> <!-- END FEATURES-5 -->




	<!-- CONTENT-1
			============================================= -->
	<section id="content-1" class="content-1 content-section division">
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
						<h2 class="h2-sm">Our Work Process</h2>

						<!-- Text -->
						<p class="p-lg">For expanding online businesses, ClickBox provides website redesign service. The greatest UX strategies are the main emphasis of our website redesign and development process. With regard to lead generation and brand recognition requirements, we will fulfill the commercial requirements of the website redesign. We provide website redesign, development, and digital marketing services to increase website traffic, user experience, and return on investment.</p>
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
								<h5 class="h5-sm">Recognition of Customers' Needs</h5>

								<!-- Text -->
								<p class="p-lg">In order to go forward in the proper way, we first carefully and thoroughly listen to our client's needs. Next, we make sure to answer all of their questions.</p>


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
								<h5 class="h5-sm">Conceptual Model and Planning</h5>

								<!-- Text -->
								<p class="p-lg">To make the process of developing your website manageable and structured, we create a tested plan. We are aware of how critical it is to both accomplish objectives and provide excellent customer experiences.
								</p>

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
								<h5 class="h5-sm">Design and Implement</h5>

								<!-- Text -->
								<p class="p-lg">When a platform is finished being designed, we deliver it to the client for review and input. We will continue looking for creative finishing touches till you are pleased with our work. The approved design will then be developed and coded.
								</p>

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
								<h5 class="h5-sm">Testing</h5>

								<!-- Text -->
								<p class="p-lg">To ensure that the website is responsive, user-friendly, and error-free in accordance with Web standards validation, we test it on a variety of devices and employ cutting-edge techniques. If there is a problem, we make sure to fix it so that we can provide high-quality projects. Our website redesign service is best for creating a professional website for your company.
								</p>

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

								<!-- Text -->
								<p class="p-lg">After ensuring that your website is error-free, we deploy it to your server for market launch, making it accessible to you, your staff, and users. In case you encounter any performance problems, we also offer maintenance and assistance.
								</p>

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
											<b>What is a website redesign?</b>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Redesigning a website involves updating it with fresh themes and elements. This distinguishes your website from those of your competitors.</p>


										</div>
									</div>
								</div>

								<!-- QUES 2 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<b>Why Do I Need a Service for Website Redesign?</b>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<!-- TEXT BOX -->
											<div class="txt-box">

												<p class="p-lg">If your website appears dated or if the design does not match your brand identity, it might need to be updated. A website makeover can boost your online visibility, attract more visitors, and alter the entire appearance of your website.</p>


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
											<b>How much does the service for website redesign cost?</b>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">The size of the website you want to design, along with the features and tools you want to use during the website redesigning process, will all affect how much the service to redesign your website will cost. To get a complete quote price, kindly contact ClickBox.</p>

										</div>
									</div>
								</div>
								<!-- QUES 4-->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<b>What advantages do website redesigns offer?</b>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">

											<!-- TEXT BOX -->
											<div class="txt-box">
												<p class="p-lg">With a team of digital designers who specialize in redesigning and creating mobile-friendly websites, ClickBox is an award-winning website redesign company that:</p>
												<!-- List -->
												<ul class="simple-list">

													<li class="list-item">
														<p class="p-lg">Greater leads.
														</p>
													</li>

													<li class="list-item">
														<p class="p-lg">Increases sales.</p>
													</li>

													<li class="list-item">
														<p class="p-lg">Reduce marketing expenses.</p>
													</li>
													<li class="list-item">
														<p class="p-lg">Make their brands stand out in the marketplace.
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
				"target": "https://www.clickboxagency.com/website-redesigning-service/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "Professional Website Redesign Service | ClickBox",
			"alternateName": "website redesign, website redesign service, website redesign company, website redesign cost, site redesign, revamping website ",
				"url": "https://www.clickboxagency.com/website-redesigning-service/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "Professional Website Redesign Service | ClickBox",
			"url": "https://www.clickboxagency.com/website-redesigning-service/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "For expanding online businesses, ClickBox provides a website redesign service. The greatest UX strategies are the main emphasis of our website redesign and development process. Read more…",
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