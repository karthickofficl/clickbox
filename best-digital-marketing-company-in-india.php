<?php

//  
if (isset($_POST['send'])) {

	// getting post values
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = 'Best Digital Marketting Service Page Form';

	$to = 'sales@clickboxagency.com';
	$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Clickbox Agency</title> 
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

	<title>Best Digital Marketing Company In India</title>

	<meta name=description content="Want to promote your business to your target audience? ClickBox Agency is one of the top digital companies in India that helps you to get traffic and sales. Let’s connect!" />

	<meta name=keywords content="best digital marketing company india, best digital marketing company india, best digital marketing service india, best digital marketing agency india, top marketing companies in india, top digital marketing companies in india, best digital marketing company in india, digital marketing consultant in india, best digital marketing agency in india, digital marketing specialist india, best digital marketing services india, digital marketing firm india" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="www.clickboxagency.com" />

	<meta name="copyright" content="www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/best-digital-marketing-company-in-india/" />

	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/best-digital-marketing-company-in-india/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/best-digital-marketing-company-in-india/" />

	<meta property="og:image" content="www.clickboxagency.com/images/logo-01.png" />

	<meta property="og:title" content="Best Digital Marketing Company In India" />

	<meta property="og:description" content="Want to promote your business to your target audience? ClickBox Agency is one of the top digital companies in India that helps you to get traffic and sales. Let’s connect!" />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Best Digital Marketing Company In India" />

	<meta name="twitter:description" content="Want to promote your business to your target audience? ClickBox Agency is one of the top digital companies in India that helps you to get traffic and sales. Let’s connect!" />

	<meta name="twitter:image" content="www.clickboxagency.com/images/logo-01.png" />
	<?php include('header-style.php') ?>

</head>

<body>
	<?php include('header.php') ?>

	<!-- HERO-18
			============================================= -->
	<section id="hero-18" class="rel bg-snow hero-section division">
		<div class="container">
			<div class="row d-flex align-items-center">


				<!-- HERO REQUEST FORM -->
				<div class="col-md-7 col-lg-6">
					<div id="hero-18-form">

						<!-- Title -->
						<h2 class="h2-sm">Result Oriented Digital Marketing Company In India
						</h2>

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
							<div class="col-md-12 form-btn mt-15">
								<button type="submit" class="btn btn-md btn-skyblue tra-grey-hover submit" name="send">Get Free Digital Audit!</button>
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

						<!-- Advantages List -->
						<ul class="advantages clearfix mt-20">
							<li class="first-li">
								<p>Google Ads, Fb & Insta Ads</p>
							</li>
							<li>
								<p>SEO Service</p>
							</li>
							<li class="last-li">
								<p>Ecommerce Marketing</p>
							</li>
						</ul>

					</div> <!-- END FORM -->
				</div> <!-- END HERO REQUEST FORM -->


				<!-- HERO IMAGE -->
				<div class="col-md-5 col-lg-6">
					<div class="hero-18-img wow fadeInLeft">
						<img class="img-fluid" src="../images/result-oriented-digitalmarketing.png" alt="hero-image">
					</div>
				</div>


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END HERO-18 -->




	<!-- CONTENT-2
			============================================= -->
	<section id="content-2" class="content-2 bg-snow wide-60 content-section division">
		<div class="container">
			<div class="row d-flex align-items-center">


				<!-- IMAGE BLOCK -->
				<div class="col-md-5 col-lg-6">
					<div class="rel img-block left-column wow fadeInRight">
						<img class="img-fluid" src="../images/best-digital-marketing360.png" alt="video-preview">
					</div>
				</div>


				<!-- TEXT BLOCK -->
				<div class="col-md-7 col-lg-6">
					<div class="txt-block right-column wow fadeInLeft">


						<!-- Title -->
						<h2 class="h2-xs">360° Digital Marketing Service</h2>

						<!-- List -->
						<ul class="simple-list">

							<li class="list-item">
								<p class="p-lg">With new technologies introduced and people are adapted to new changes in the world, the marketing world is also changing now. We at ClickBox Agency are updating ourselves with recent marketing trends to increase our clients’ ROI.
								</p>
							</li>

							<li class="list-item">
								<p class="p-lg">ClickBox Agency is the best digital marketing company in India and our marketers are working towards different marketing methods that meet our client needs.</p>
							</li>

							<li class="list-item">
								<p class="p-lg">Our marketing specialists have tested various marketing processes and provide creative and unique marketing plans for each of our clients. Hence, they will achieve better marketing results when compared to their competitors. Also, we are having a marketing expert for every digital marketing service, so that our client can solve all queries at any time.
								</p>
							</li>

							<li class="list-item">
								<p class="p-lg">Want to promote your products or services online? Be a part of our digital marketing team.
								</p>
							</li>

						</ul>

						<div class="more-btn mt-20">
							<a href="https://api.whatsapp.com/send?phone=918870578887" class="btn btn-violet-red tra-grey-hover">Join Us Now</a>
						</div>

					</div>
				</div> <!-- END TEXT BLOCK -->


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-2 -->


	<!-- FEATURES-3
			============================================= -->
	<section id="features-3" class="pb-60 features-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-80">

						<!-- Title -->
						<h2 class="h2-md">Our ROI Driven Digital Marketing Services</h2>

						<!-- Text -->
						<p class="p-xl">As one of the professional digital marketing firms in India, we provide only practically working marketing services to our clients. Our services are as follows:



						</p>

					</div>
				</div>
			</div>


			<!-- FEATURES-3 WRAPPER -->
			<div class="fbox-3-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">


					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-purple purple-color">
								<span class="flaticon-idea"></span>
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">Search Engine Optimization Services
								</h5>

								<!-- Text -->
								<p class="p-lg">SEO is the top-most process in digital marketing because most people are using search engines to find any products or
									services related to your niche.
									Our professional SEO services include the process of ranking your website position at top of the search engine results, that too organically.

								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-red red-color">
								<span class="flaticon-smartphone"></span>
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">Social Media Marketing Services
								</h5>

								<!-- Text -->
								<p class="p-lg">Next to search engines, social media is the most interactive platform to find information about products or services. Our SMM marketing expert helps you to build a strong profile on popular social media platforms like Facebook, Instagram, Twitter, LinkedIn, etc., and increase your profile engagement to get traffic to your website.

								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-skyblue skyblue-color">
								<span class="flaticon-algorithm"></span>
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">Pay-Per-Click Ads Services</h5>

								<!-- Text -->
								<p class="p-lg">SEO and SMM services are a free method that helps to receive organic traffic and needs more time (minimum of 3 months) to achieve results.
									If you want immediate traffic, then paid ads are the wisest way. Our PPC Ads services include Google Ads or YouTube Ads; also includes social media ads- depending on your website niche.

								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #4 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-orange orange-color">
								<span class="flaticon-web-design"></span>
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">Email Marketing Services</h5>

								<!-- Text -->
								<p class="p-lg">Email is one of the best ways to get more sales. Our Email marketers help to connect you with your targeted customer easily, which leads to having new and repeated customers to your business.

								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #5 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-yellow yellow-color">
								<span class="flaticon-layers"></span>
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">Content Marketing Services</h5>

								<!-- Text -->
								<p class="p-lg">Content is the main method for driving attention from your customers. We help you build a blog page to create articles that lead to increase traffic to your site. Our Content marketers also aid you to promote content on different platforms to drive more traffic.

								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #6 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-green green-color">
								<span class="flaticon-email"></span>
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">SEO Copywriting Services
								</h5>

								<!-- Text -->
								<p class="p-lg">Content writing includes the process of writing articles for your website traffic; Copywriting includes the process of writing sales copy content to get sales. Our SEO Copywriters will write SEO friendly sales copy that turns your visitors into customers.

								</p>

							</div>

						</div>
					</div>
					<!-- FEATURE BOX #4 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-orange orange-color">
								<span class="flaticon-web-design"></span>
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">Website Design Services</h5>

								<!-- Text -->
								<p class="p-lg">A website is a place where your customers will find your products and services. Once you connect with us, we will analyze your website and help you redesign the website that meets SEO friendly pattern.

								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #5 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-yellow yellow-color">
								<span class="flaticon-layers"></span>
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">Website Management Services</h5>

								<!-- Text -->
								<p class="p-lg">Also, with the website redesign process, our website management specialists manage your website from start and assure you to protect your customers’ information and helps you build loyalty between your clients.

								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #6 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-green green-color">
								<span class="flaticon-email"></span>
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">Reputation Management Services</h5>

								<!-- Text -->
								<p class="p-lg">With our reputation management services, you can control your web page results online when people are searching about your company or your products (I.e.,) You will decide, what will show online about your business.

								</p>

							</div>

						</div>
					</div>



				</div>
			</div> <!-- END FEATURES-3 WRAPPER -->


		</div> <!-- End container -->
	</section> <!-- END FEATURES-3 -->





	<!-- CONTENT-5
			============================================= -->
	<section id="content-5" class="content-5 ws-wrapper content-section division">
		<div class="container">
			<div class="content-5-wrapper bg-whitesmoke">
				<div class="row d-flex align-items-center">


					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block left-column wow fadeInRight">

							<!-- Section ID -->
							<span class="section-id txt-upcase">Digital Marketing Process </span>

							<!-- Title -->
							<h2 class="h2-xs">Our Digital Marketing Process </h2>

							<p class="p-lg">Start your digital marketing process just in a minute: </p>

							<!-- List -->
							<ol type="1" class="simple-list">

								<li class="list-item">
									<p class="p-lg">Deep marketing research on your niche.</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Website optimization details.</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Unique marketing plan based on your budget.</p>
								</li>

								<li class="list-item">
									<p class="p-lg"> Analytics Tool Report (Tracking Report).</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Gradual increase in your business revenue.</p>
								</li>

							</ol>
						</div>
					</div> <!-- END TEXT BLOCK -->


					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6">
						<div class="img-block right-column wow fadeInLeft">
							<img class="img-fluid" src="../images/our-digital-marketing-process.png" alt="content-image">
						</div>
					</div>


				</div>


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-5 -->





	<!-- TESTIMONIALS-4
			============================================= -->
	<section id="reviews-4" class="rel reviews-section division">


		<!-- SECTION TITLE -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-60">

						<!-- Title -->
						<h2 class="h2-md">Stories From Our Customers</h2>

					</div>
				</div>
			</div>
		</div>


		<div class="reviews-4-holder">
			<div class="container">
				<div class="row">

					<!-- TESTIMONIALS CAROUSEL -->
					<div class="col-md-12">
						<div class="owl-carousel owl-theme reviews-4-wrapper">


							<!-- TESTIMONIAL #1 -->
							<div class="review-4">


								<!-- Text -->
								<div class="review-4-txt">

									<!-- Text -->
									<p class="p-lg">ClickBox Agency provided our new business in various countries, with amazing web design for our company and
										also Search Engine Optimization and Google ads management. But most importantly they are great people and a pleasure to do
										business with. I would definitely recommend their SEO services and Google Ads service to all existing and new business start-ups.
									</p>

									<!-- Testimonial Author -->
									<div class="author-data clearfix">

										<!-- Testimonial Author -->
										<div class="review-author">

											<h6 class="h6-xl">Karunakaran, CEO</h6>
											<p class="p-md">PurchaseCommerce.com</p>

											<!-- Rating -->
											<div class="review-rating ico-15 yellow-color">
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-half-empty"></span>
											</div>

										</div>

									</div> <!-- End Testimonial Author -->

								</div> <!-- End Text -->

							</div> <!-- END TESTIMONIAL #1 -->


							<!-- TESTIMONIAL #2 -->
							<div class="review-4">

								<!-- Text -->
								<div class="review-4-txt">

									<!-- Text -->
									<p class="p-lg">ClickBox Agency Team, has done the SEO work for our website www.efieldData.com and he is also running our
										Google and Facebook campaign… James takes care of the Digital Marketing of our Website. We are very happy with his work and
										dedication. I would highly recommend his services to anyone in need of Digital Marketing Service.
									</p>

									<!-- Testimonial Author -->
									<div class="author-data clearfix">


										<!-- Testimonial Author -->
										<div class="review-author">

											<h6 class="h6-xl">Jeyanthi Rajaselvarasu , CEO</h6>
											<p class="p-md">eFieldData</p>

											<!-- Rating -->
											<div class="review-rating ico-15 yellow-color">
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-half-empty"></span>
											</div>

										</div>

									</div> <!-- End Testimonial Author -->

								</div> <!-- End Text -->

							</div> <!-- END TESTIMONIAL #2 -->


							<!-- TESTIMONIAL #3 -->
							<div class="review-4">

								<!-- Text -->
								<div class="review-4-txt">

									<!-- Text -->
									<p class="p-lg">We were truly impressed! Their social media marketing work was excellent too. All the deliverables reached
										us on time. The marketing produced definitive and solid results. Everything was organized to perfection and delivered very
										systematically. I cannot wait to work with James on the next expo and of course, on other projects!
									</p>

									<!-- Testimonial Author -->
									<div class="author-data clearfix">

										<!-- Testimonial Author -->
										<div class="review-author">

											<h6 class="h6-xl">Siva Kumar, Co-founder</h6>
											<p class="p-md">NSCHOOL Academy</p>

											<!-- Rating -->
											<div class="review-rating ico-15 yellow-color">
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-half-empty"></span>
											</div>

										</div>

									</div> <!-- End Testimonial Author -->

								</div> <!-- End Text -->

							</div> <!-- END TESTIMONIAL #3 -->


							<!-- TESTIMONIAL #4 -->
							<div class="review-4">

								<!-- Text -->
								<div class="review-4-txt">

									<!-- Text -->
									<p class="p-lg">We recently worked with James and his team to get our brand-new website. It is fantastic.
										We loved working with them, they were really communicative and made sure we were always in the loop.
										They took into ads account all of our opinions and our ideas for what we felt like the new campaign should be,
										and honestly, we are impressed. We love the branding and we got more leads, it's amazing. We highly recommend!
									</p>

									<!-- Testimonial Author -->
									<div class="author-data clearfix">


										<!-- Testimonial Author -->
										<div class="review-author">

											<h6 class="h6-xl">Gayathri Aravind, Founder</h6>
											<p class="p-md">Abhasa Wellness Rehab</p>

											<!-- Rating -->
											<div class="review-rating ico-15 yellow-color">
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-half-empty"></span>
											</div>

										</div>

									</div> <!-- End Testimonial Author -->

								</div> <!-- End Text -->

							</div> <!-- END TESTIMONIAL #4 -->


							<!-- TESTIMONIAL #5 -->
							<div class="review-4">

								<!-- Text -->
								<div class="review-4-txt">

									<!-- Text -->
									<p class="p-lg">The ClickBox team has been a solid advertising and marketing partner for a variety of needs as my
										business has evolved. From web strategy, to social media management and paid campaigns. We also utilize their marketing
										automation offering and appreciate the assistance provided with the execution of our campaigns for all our services.
									</p>

									<!-- Testimonial Author -->
									<div class="author-data clearfix">


										<!-- Testimonial Author -->
										<div class="review-author">

											<h6 class="h6-xl">Murugaesh Raja, CEO</h6>
											<p class="p-md">Saravana ePharmacy</p>

											<!-- Rating -->
											<div class="review-rating ico-15 yellow-color">
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-half-empty"></span>
											</div>

										</div>

									</div> <!-- End Testimonial Author -->

								</div> <!-- End Text -->

							</div> <!-- END TESTIMONIAL #5 -->
						</div>
					</div> <!-- END TESTIMONIALS CAROUSEL -->


				</div>
			</div> <!-- End container -->
		</div>


	</section> <!-- END TESTIMONIALS-4 -->




	<!-- BRANDS-2
============================================= -->
	<!-- ADD OUR CLIENTS IN PHP FILE -->
	<?php include('our-clients.php') ?>
	<!-- ADD OUR CLIENTS IN PHP FILE END -->



	<!-- FAQs-2
			============================================= -->
	<section id="faqs-2" class="wide-60 faqs-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="section-title title-02 mb-75">

						<!-- Section ID -->
						<span class="section-id txt-upcase">Frequently Asked Questions</span>

						<!-- Title -->
						<h2 class="h2-xs">Top Digital Marketing Service India</h2>

					</div>
				</div>
			</div>


			<!-- FAQs-2 QUESTIONS -->
			<div class="faqs-2-questions">
				<div class="row row-cols-1 row-cols-lg-2">


					<!-- QUESTIONS HOLDER -->
					<div class="col">
						<div class="questions-holder pr-15">


							<!-- QUESTION #1 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">What is digital marketing?</h5>

								<!-- Answer -->
								<p class="p-lg">This is the most basic question that most of the clients’ asked. Digital marketing is the process of promoting your brand online through free and paid methods. With digital marketing, you can reach your customers easily online, and in any regions of the world. Thus, you can get more traffic and sales to your website.
								</p>

							</div>

							</br></br></br>
							<!-- QUESTION #2 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">When will my business rank top on Google?</h5>

								<!-- Answer -->
								<p class="p-lg">As said above, if your website is new, then it takes a minimum of 3 to 6 months to rank top on search engines like Google. But if your website is already ranking on the second page of SERPs, then our marketers will help you to rank on top within a short time. (like minimum 1month).
								</p>

							</div>


						</div>
					</div> <!-- END QUESTIONS HOLDER -->


					<!-- QUESTIONS HOLDER -->
					<div class="col">
						<div class="questions-holder pl-15">


							<!-- QUESTION #3 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">Which digital marketing service is the best for my business?</h5>

								<!-- Answer -->
								<p class="p-lg">Among the different marketing methods, if you want immediate traffic, then you can implement PPC Ads. But, SEO and SMM are the best for less expensive marketing plans.

									<br>On the whole, it is appreciated to implement all of our digital marketing services (SEO, SMM, Content, Email, Paid Ads, etc.,) to improve the quality of your brand. Because every service leads to more brand reach.
								</p>

							</div>

							<!-- QUESTION #3 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">How do I start digital marketing?</h5>

								<!-- Answer -->
								<p class="p-lg">It is simple. When you merge with our team, our marketers will analyze your website requirements and take steps according to them. We will explain the best digital marketing strategy that your website is needed.
								</p>

							</div>


						</div>
					</div> <!-- END QUESTIONS HOLDER -->


				</div> <!-- End row -->
			</div> <!-- END FAQs-2 QUESTIONS -->


			<!-- MORE QUESTIONS BUTTON -->
			<div class="row">
				<div class="col">
					<div class="more-questions">
						<h5 class="h5-sm">Let’s talk and work together to convey your business to the right audience! <a href="../contacts">Contact Us</a></h5>
					</div>
				</div>
			</div>


		</div> <!-- End container -->
	</section> <!-- END FAQs-2 -->

	<!-- CALL TO ACTION-5
			============================================= -->
	<section id="cta-5" class="cta-section division">
		<div class="container">
			<div class="rel bg-02 cta-5-wrapper">
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
	<?php include('footer1.php') ?>

	</div> <!-- END PAGE CONTENT -->

	<?php include('footer-script.php') ?>

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "https://www.clickboxagency.com/best-digital-marketing-company-in-india/"
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/best-digital-marketing-company-in-india/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "Best Digital Marketing Company In India",
			"alternateName": "best digital marketing company india, best digital marketing company india, best digital marketing service india, best digital marketing agency india, top marketing companies in india, top digital marketing companies in india, best digital marketing company in india, digital marketing consultant in india, best digital marketing agency in india, digital marketing specialist india, best digital marketing services india, digital marketing firm india" / >
				"url": "https://www.clickboxagency.com/best-digital-marketing-company-in-india/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "Best Digital Marketing Company In India",
			"url": "https://www.clickboxagency.com/best-digital-marketing-company-in-india/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "Want to promote your business to your target audience? ClickBox Agency is one of the top digital companies in India that helps you to get traffic and sales. Let’s connect!" / >
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
</body>

</html>