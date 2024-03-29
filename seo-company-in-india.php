<?php

if (isset($_POST['send'])) {

	// getting post values
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$subject = 'Enquiry From Logo Design';
	$to = "sales@akkenna.com,james@akkenna.com,pradeep@akkenna.com,info@clickboxagency.com,muthu@akkenna.com";
	$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Clickbox Agencies</title> 
    </head> 
    <body> 
        <h3>Thanks you for joining with us!</h3> 
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

	// Additional headers 
	$m = mail($to, $subject, $htmlContent, $headers);
	echo $m;
	// Set content-type header for sending HTML email

	if (!$m) {
		echo 'Message could not be sent.';
	} else {
		$result = '
		One of our representative will get in touch you.';
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Result Driven SEO Company In India</title>

	<meta name=description content="As a leading SEO Company in India, we provide professional SEO services to our clients with effective practical strategies like organic search growth, etc.," />

	<meta name=keywords content="seo company india, seo services india, search engine optimization india, seo agency india" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/seo-company-in-india/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/seo-company-in-india/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/seo-company-in-india/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="Professional SEO Company In India" />

	<meta property="og:description" content="As a leading SEO company in India, we provide professional SEO services to our clients with effective practical strategies like organic search growth, etc.," />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Professional SEO Company In India" />

	<meta name="twitter:description" content="As a leading SEO company in India, we provide professional SEO services to our clients with effective practical strategies like organic search growth, etc.," />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<?php include('header-style.php') ?>
	<style>
		.review-4 {
			height: 310px;
		}
	</style>

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
						<h1 class="h2-lg txtyelloww">Result Driven SEO Company In India</h1>

						<!-- List -->
						<ul class="simple-list">

							<li class="list-item">
								<p class="p-xl txt-justify">Rank Your Website On 1st Page Google Search. ClickBox Agency is here to help you! Contact today.</p>
							</li>

							<li class="list-item">
								<p class="p-xl txt-justify">We are one of the top SEO companies in India where our expert marketing strategies help to
									boost your website traffic and sales growth.
								</p>
							</li>

						</ul>

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
						<h4 class="h4-xs">Premium Search Engine Optimization Services. Schedule a Call TODAY.</h4>

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
								<input type="number" name="phone" class="form-control phone" maxlength="10" placeholder="Mobile Number*" autocomplete="off" required>
							</div>
							</br>

							<!-- Form Button -->
							<div class="col-md-12 form-btn mt-10">
								<button type="submit" class="btn btn-md btn-pink yellow-hover submit" name="send">Get Started
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
	<!-- CONTENT-2
			============================================= -->
	<section id="content-2" class="content-2 bg-snow wide-60 content-section division">
		<div class="container">
			<div class="row d-flex align-items-center">
				<!-- IMAGE BLOCK -->
				<div class="col-md-5 col-lg-6">
					<div class="rel img-block left-column wow fadeInRight">
						<img class="img-fluid" src="../images/Search engine optimization/1-02.jpg" alt="video-preview">
					</div>
				</div>


				<!-- TEXT BLOCK -->
				<div class="col-md-7 col-lg-6">
					<div class="txt-block right-column wow fadeInLeft">

						<!-- Title -->
						<h1 class="h2-xs txtyelloww">Top-Notch SEO Solutions</h1>

						<!-- List -->
						<ul class="simple-list">

							<li class="list-item">
								<p class="p-lg txt-justify">SEO (Search Engine Optimization) is a process where SEO specialists optimize a client’s website based on ranking keywords and high-quality SEO content.
								</p>
							</li>

							<li class="list-item">
								<p class="p-lg txt-justify">At ClickBox Agency, we will analyze your website quality and niche. According to your industry and website performance, we develop a separate, new, and complete SEO strategy. With this proven method, your on-page and off-page activities will be optimized and receive high quality and organic traffic. ClickBox Agency is a friendly place where are providing the best SEO services for our clients all over the world. </p>
							</li>

							<li class="list-item">
								<p class="p-lg txt-justify">With our dedicated marketing team and well-planned SEO method, we together improve your website growth.
								</p>
							</li>

						</ul>

						<div class="more-btn mt-20">
							<a href="https://clickboxagency.com/contacts/" class="btn btn-red yellow-hover">Talk to Your SEO Consultant</a>
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
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-80">
						<!-- Title -->
						<h2 class="h2-md txtbluee">Our Professional SEO Services</h2>
						<!-- Text -->
						<p class="p-xl">Look at the following search engine optimization services that are provided by us to our customers.
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
								<img src="../images/Search engine optimization/Icon/1_2.svg" class="mt-25" alt="On-Page SEO" />
								<!-- <span class="flaticon-idea"></span> -->
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">On-Page SEO</h5>

								<!-- Text -->
								<p class="p-lg">Our on-page services include the process of optimizing search engine friendly content. It includes website content like heading (H1, H2...H6), descriptions, tags, keywords, blog, etc., Also the internal linking quality is also analyzed. These tasks will help to list your website on top of search engine results on Google, Bing, etc.,
								</p>
							</div>

						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-red red-color">
								<img src="../images/Search engine optimization/Icon/2_3.svg" class="mt-25" alt="Off-Page SEO" />
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">Off-Page SEO
								</h5>

								<!-- Text -->
								<p class="p-lg">The off-page process is the activity of building backlinks to your website. The more quality backlinks, the more reach your website will receive. So, we assure you by building the best backlinks to your site by writing SEO content blog, press releases, attractive profile creations, etc.,
								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-skyblue skyblue-color">
								<img src="../images/Search engine optimization/Icon/3_2.svg" class="mt-25" alt="Website Optimization Services" />
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">Website Optimization Services</h5>

								<!-- Text -->
								<p class="p-lg">Our website optimization services include the process of analyzing website designs, keyword counts, page loading, image or video quality uploaded in the site, etc., As a whole, we will deliver an interactive website to turn your visitors into customers.


								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #4 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-orange orange-color">
								<img src="../images/Search engine optimization/Icon/4_2.svg" class="mt-25" alt="Content Optimization Services" />
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">Content Optimization Services</h5>

								<!-- Text -->
								<p class="p-lg">In content optimization services, the SEO friendliness of the content is checked. It is similar to on-page services, but here, we not only analyze the on-page contents but also focus on contents that are created for social media posts.</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #5 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-yellow yellow-color">
								<img src="../images/Search engine optimization/Icon/5_2.svg" class="mt-25" alt="Local SEO Service" />
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">Local SEO Service</h5>

								<!-- Text -->
								<p class="p-lg">We as a local SEO company, provide local SEO services that mean, we optimize your website keywords based on local searches by your customers. If you are running a business with a local audience target, then local SEO service is the best choice.</p>
							</div>
						</div>
					</div>


					<!-- FEATURE BOX #6 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-green green-color">
								<img src="../images/Search engine optimization/Icon/6_2.svg" class="mt-25" alt="International SEO Services" />
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">International SEO Services
								</h5>

								<!-- Text -->
								<p class="p-lg">In addition to local SEO services, we also help our abroad customers by providing international SEO services. Here, we optimize the site by using either global keywords or keywords focusing on particular regions. If your audience target is all over the world, then this service is perfect for your website.

								</p>
							</div>

						</div>
					</div>
					<!-- FEATURE BOX #4 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-orange orange-color">
								<img src="../images/Search engine optimization/Icon/7_2.svg" class="mt-25" alt="Mobile SEO" />
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">Mobile SEO</h5>

								<!-- Text -->
								<p class="p-lg">People are using mobile apps more than websites and web apps, hence optimizing your mobile app or your website on the mobile screen is an important activity. So, mobile SEO is carried out here. We will help you to design a website that is perfect for mobile screens and also help you to optimize keywords based on mobile app searches.
								</p>
							</div>

						</div>
					</div>


					<!-- FEATURE BOX #5 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-yellow yellow-color">
								<img src="../images/Search engine optimization/Icon/8_2.svg" class="mt-25" alt="Ecommerce SEO Services" />
							</div>
							<!-- Text -->
							<div class="fbox-txt-center">
								<!-- Title -->
								<h5 class="h5-md">Ecommerce SEO Services</h5>

								<!-- Text -->
								<p class="p-lg">A normal business website is different from an eCommerce website as the eCommerce site is all about selling different products to the customers. In eCommerce SEO services, we make a deep analysis to find the top and best keywords of the products that your customers are looking for. Based on this research, we will update your website on eCommerce keywords.
								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #6 -->
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-green green-color">
								<img src="../images/Search engine optimization/Icon/9_2.svg" class="mt-25" alt="Small-scale and Large-scale" />
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md">Small-scale and Large-scale Business</h5>

								<!-- Text -->
								<p class="p-lg">We expand our company by providing small business SEO and large business SEO services all over the world. From small-scale to large-scale business, we will help our customers to achieve wide branch reach and traffic conversion rate. Also, we are landing on all niches and uses a separate strategy for each niche.
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
							<span class="section-id txt-upcase">Our SEO Process </span>

							<!-- Title -->
							<h2 class="h2-xs txtredd">How will you start your SEO process?</h2>

							<p class="p-lg">You can follow the simple steps given below:</p>

							<!-- List -->
							<ol type="1" class="simple-list">

								<li class="list-item">
									<p class="p-lg">Website Analysis.</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Competitor Analysis – We find and check your competitor’s website to improve your website better than them.</p>
								</li>

								<li class="list-item">
									<p class="p-lg">On-page and Off-Page Optimization.</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Backlink Submissions.</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Monitoring and Providing Analytics Report.</p>
								</li>


								<li class="list-item">
									<p class="p-lg">Reoptimizing Website Based on Reports.</p>
								</li>

							</ol>
						</div>
					</div> <!-- END TEXT BLOCK -->
					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6">
						<div class="img-block right-column wow fadeInLeft">
							<img class="img-fluid" src="../images/Search engine optimization/2-02.jpg" alt="content-image">
						</div>
					</div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-5 -->

	<!-- TESTIMONIALS-4
			============================================= -->
	<section id="reviews-4" class="rel pt-20 reviews-section division">

		<!-- SECTION TITLE -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-60">

						<!-- Title -->
						<h2 class="h2-md txtyelloww">Stories From Our Customers</h2>

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
									<p class="p-lg txt-justify">ClickBox Agency provided our new business in various countries, with amazing web design for our company and
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
									<p class="p-lg txt-justify">ClickBox Agency Team, has done the SEO work for our website www.efieldData.com and he is also running our
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
									<p class="p-lg txt-justify">We were truly impressed! Their social media marketing work was excellent too. All the deliverables reached
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
									<p class="p-lg txt-justify">We recently worked with James and his team to get our brand-new website. It is fantastic.
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
									<p class="p-lg txt-justify">The ClickBox team has been a solid advertising and marketing partner for a variety of needs as my
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

	<!-- BRANDS-2 ============================================= -->
	<!-- ADD OUR CLIENTS IN PHP FILE -->
	<?php include('our-clients.php') ?>

	<!-- FAQs-2
			============================================= -->
	<!-- FAQs-2 QUESTIONS -->
	<section id="faqs-2" class="pt-20 faqs-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-80">
						<h2 class="h3-xs text-center">FAQ On <span class="txtred">Our Social Media Marketing Service</span></h2>
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
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<b>How much time does it take to get SEO results?</b>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">SEO is not a one-day process. It is a slow process but will give consistent and organic results depending on the strategies. In general, a new website or blog takes 6-12 months to rank top on Google. But if you are using other marketing methods (like Social media marketing, paid ads) in addition to SEO, you may able to reach your customers soon. Remember that, SEO is an inexpensive method when compared to another method. So, you need a minimum of 3 months to get rankings.</p>
											
										</div>
									</div>
								</div>
								<!-- QUES 2 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<b>Do you offer monthly SEO price packages?</b>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<!-- TEXT BOX -->
											<div class="txt-box">
												<p class="p-lg">Yes!, As you can see from our affordable SEO packages, we are offering monthly price plans, we are appreciating to take monthly plans for 1 or 2 months. Since SEO services need some time to merge your website on Google, you can use form monthly packages at least for 3 months to see some results.</p>
											</div>
										</div>
									</div>
								</div>
								<!-- QUES 3 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingThree">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<b>How to choose the right SEO company in India?</b>
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<!-- TEXT BOX -->
											<div class="txt-box">
												<p class="p-lg">In India, you can find different SEO agencies, but the main thing is, you have to choose the suitable SEO experts for your business. You can find the companies’ list on social media, Google, or company review sites like Clutch. Once you listed some companies, then you can check old client's feedbacks & reviews, their previous projects to decide whether the company is suitable for you or not.
													<br>ClickBox Agency is a leading SEO company in India as we are delivering proven ranking results to our happy clients. You can check our portfolio here.
												</p>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div> <!-- END QUESTIONS HOLDER -->
					</div>
					<div class="col">
						<div class="questions-holder pr-15">
							<div class="accordion" id="accordionExample">
								<!-- Ques 4 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingSeven">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
											<b>How can I track the project status?</b>
										</button>
									</h2>
									<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<!-- TEXT BOX -->
											<div class="txt-box">
												<p class="p-lg">When we start the SEO projects, we will provide the following reports to our clients. Thus, you can track the service status easily.</p>
												<ul class="simple-list">
													<li class="list-item">
														<p class="p-lg">Keyword Ranking Reports</p>
													</li>
													<li class="list-item">
														<p class="p-lg">Competitor Analysis Report</p>
													</li>
													<li class="list-item">
														<p class="p-lg">Analytics Report with tools like Google Analytics and Google Search Console</p>
													</li>
													<li class="list-item">
														<p class="p-lg">Backlinks Reports</p>
													</li>
													<li class="list-item">
														<p class="p-lg">Optimized Content Strategy</p>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
								<!-- QUES 5 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<b> What is the difference between white-hat and black-hat SEO?</b>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">White hat SEO is the process where the SEO strategies follow Google’s or other search engines’ policies and terms and optimize the site based on these conditions.
												<br>Black hat SEO is a process that includes unfair SEO strategies that are against search engine policies. This SEO method is not advisable as your website will be removed from search results if you implement black hat SEO methods.
												<br>At ClickBox Agency, we are using only white hat SEO methods and are not appreciating black-hat SEO methods.
											</p>
										</div>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col  ">
						<div class="more-questions">
							<h5 class="h5-sm ">Have more questions? <a href="https://clickboxagency.com/contacts/" aria-label="contact us" title="contact us">Ask your question here</a></h5>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!--  -->
	<!--  -->
	<section id="content-3" class="bg-white pt-30 content-3  content-section division">
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="col-md-12 col-lg-8">
					<div class="txt-block left-column  wow fadeInLeft">
						<h2 class="h3-xs text-center">Ready to make us your SEO consultant in India? Let’s join together and increase your brand reach to the right audience and get your sales done! <a href="https://clickboxagency.com/contacts/">Contact Us</a></h2>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--  -->




	<?php include('footer.php') ?>
	</div> <!-- END PAGE CONTENT -->

	<?php include('footer-script.php') ?>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "https://www.clickboxagency.com/seo-company-in-india/",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/seo-company-in-india/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "Result Driven SEO Company In India",
			"alternateName": "seo company india, seo services india, search engine optimization india, seo agency india",
			"url": "https://www.clickboxagency.com/seo-company-in-india/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "Result Driven SEO Company In India",
			"url": "https://www.clickboxagency.com/seo-company-in-india/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "As a leading SEO Company in India, we provide professional SEO services to our clients with effective practical strategies like organic search growth, etc.,",
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


</body>

</html>