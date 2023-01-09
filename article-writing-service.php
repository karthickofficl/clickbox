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

	<title>Professional Article Writing Service | ClickBox</title>

	<meta name=description content="Our article writing services come in a variety of levels. based entirely on your requirements for quality. ClickBox Agency is the best option if you're looking for engaging SEO content." />

	<meta name=keywords content="article writing service, seo article writing service, best article writing services, article writing companies, professional article writing service" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="www.clickboxagency.com" />

	<meta name="copyright" content="www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="www.clickboxagency.com/article-writing-service/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="www.clickboxagency.com/article-writing-service/" />

	<meta property="og:site_name" content="www.clickboxagency.com/article-writing-service/" />

	<meta property="og:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="Professional Article Writing Service | ClickBox" />

	<meta property="og:description" content="Our article writing services come in a variety of levels. based entirely on your requirements for quality. ClickBox Agency is the best option if you're looking for engaging SEO content." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Professional Article Writing Service | ClickBox" />

	<meta name="twitter:description" content="Our article writing services come in a variety of levels. based entirely on your requirements for quality. ClickBox Agency is the best option if you're looking for engaging SEO content." />

	<meta name="twitter:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />
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
						<img class="img-fluid" src="https://clickboxagency.com/images/hero-8-img.png" alt="hero-image">
					</div>
				</div>


				<!-- HERO TEXT -->
				<div class="col-lg-7 order-first order-lg-2">
					<div class="hero-8-txt">

						<!-- Title -->
						<h2 class="h2-md">An expert in Providing Content Writing Service.</h2>

						<!-- Text -->
						<p class="p-lg">Fast Service | SEO Friendly | Within 2 Days | Unlimited Revisions | Free Meta Details | 100% Original Content.
						</p>

						<!-- HERO QUICK FORM -->
						<form name="quickform" class="quick-form shadow-form">

							<!-- Form Inputs -->
							<div class="input-group">
								<!--<input type="email" name="email" class="form-control email" placeholder="Your email address" autocomplete="off" required>-->
								<span class="input-group-btn form-btn">
									<button type="submit" class="btn btn-md btn-skyblue black-hover submit">Order Now</button>
								</span>
							</div>

							<!-- Form Message -->
							<div class="quick-form-msg"><span class="loading"></span></div>

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


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">

						<!-- Title -->
						<h2 class="h2-sm">Affordable And High Quality Article Writing Service</h2>

						<!-- Text -->
						<p class="p-md">One of the best strategies to increase your results is to post articles on your website. Our SEO article writing services include original, pertinent content that raises the ranking of your website on search engines and draws in more people. However, a good post will also persuade readers to purchase your goods or services. ClickBox is one of the best article writing companies, providing perfect content for all types of sectors.</p>


					</div>
				</div>
			</div>


			<div class="row d-flex align-items-center">


				<!-- TEXT BLOCK -->
				<div class="col-md-12 col-lg-7">
					<div class="txt-block left-column wow fadeInRight">

						<!-- TEXT BOX -->
						<div class="txt-box mb-30">

							<!-- Title -->
							<!-- <h5 class="h5-md">Advanced Analytics Review</h5> -->

							<!-- Text -->
							<p class="p-lg">But you should be aware of the main distinctions between articles and blogs before you start writing and posting them to your website. You can then select the one that best fits your business in this manner. You might want to use both in some circumstances. An article typically has a longer and more formal tone than a blog entry.</p>
							<p class="p-lg">For accuracy and perfect flow, most articles are revised. You'll probably notice longer sentences and more complex language as you read an article.</p>
							<p class="p-lg">Article writers frequently conduct research on their subjects and reference sources in their writing. They might also speak with subject-matter experts for more evidence to enhance the content's legitimacy.<br>
								The best way to create strong and valuable backlinks to your website is probably through article writing. For high content for your article marketing strategy, use our SEO writing service, and watch the results on content.</p>
							<p class="p-lg">With ClickBox's article writing service, you can receive reasonable, SEO-friendly content on a budget. If you're seeking for a company that offers low-cost article writing services while delivering high-quality work, you've come to the right place. With our article writing service, you can be confident that you will receive high-quality content that will help your business.</p>

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
							<h3 class="h3-lg">Why Is Article Writing Important for Branding?</h3>

							<p class="p-lg">When compared to other marketing strategies, article writing is the most effective because of its many advantages, like increased traffic, strong client retention, and advancements in social media and SEO. The possibility to draw more attention to your business is the most obvious benefit of regularly publishing articles for your website. The process of creating an article requires intense focus and goal-oriented work. As a result, writing regularly can help you become much more effective in other aspects of your life.</p>

						</div>
					</div> <!-- END TEXT BLOCK -->


				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-5 -->


	<!-- FEATURES-8
			============================================= 
			<section id="features-8" class="bg-snow wide-60 features-section division">
				<div class="container">


					<!-- SECTION TITLE 
					<div class="row justify-content-center">	
						<div class="col-lg-10 col-xl-8">
							<div class="section-title title-01 mb-70">		

								<!-- Title 
								<h2 class="h2-md">What Makes OLMO Different</h2>	

								<!-- Text 	
								<p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero
								   tempus, blandit and cursus varius and magnis sapien
								</p>
									
							</div>	
						</div>
					</div>


					<!-- FEATURES-8 WRAPPER 	
			 		<div class="fbox-8-wrapper text-center">
			 			<div class="row row-cols-1 row-cols-md-3">


		 					<!-- FEATURE BOX #1 
		 					<div class="col">
		 						<div class="fbox-8 mb-40 wow fadeInUp">

									<!-- Image 
									<div class="fbox-img bg-whitesmoke-gradient">
										<img class="img-fluid" src="images/img-21.png" alt="feature-icon" />
									</div>

									<!-- Title 
									<h5 class="h5-md">All-in-One Platform</h5>
											
									<!-- Text 
									<p class="p-lg">Feugiat primis ultrice semper lacus cursus feugiat undo primis ultrice a 
									   ligula an auctor tempus magnis
									</p>

		 						</div>
		 					</div>


		 					<!-- FEATURE BOX #2 
		 					<div class="col">
		 						<div class="fbox-8 mb-40 wow fadeInUp">

									<!-- Image 
									<div class="fbox-img bg-whitesmoke-gradient">
										<img class="img-fluid" src="images/img-24.png" alt="feature-icon" />
									</div>

									<!-- Title 
									<h5 class="h5-md">Real Time Statistic</h5>
											
									<!-- Text 
									<p class="p-lg">Feugiat primis ultrice semper lacus cursus feugiat undo primis ultrice a 
									   ligula an auctor tempus magnis
									</p>

		 						</div>
		 					</div>


		 					<!-- FEATURE BOX #3 
		 					<div class="col">
		 						<div class="fbox-8 mb-40 wow fadeInUp">

									<!-- Image 
									<div class="fbox-img bg-whitesmoke-gradient">
										<img class="img-fluid" src="images/img-23.png" alt="feature-icon" />
									</div>

									<!-- Titl
									<h5 class="h5-md">Concrete Security</h5>
											
									<!-- Text 
									<p class="p-lg">Feugiat primis ultrice semper lacus cursus feugiat undo primis ultrice a 
									   ligula an auctor tempus magnis
									</p>

		 						</div>
		 					</div>	


				 		</div>  <!-- End row 	
				 	</div>	<!-- END FEATURES-8 WRAPPER -->


	</div>
	<!-- End container 		
			</section>	<!-- END FEATURES-8 -->



	<!-- FEATURES-5
			============================================= -->
	<section id="features-5" class="wide-60 features-section division">
		<div class="container">

			<!-- SECTION TITLE  -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">

						<!-- Title  -->
						<h2 class="h2-md">Why Choose ClickBox For Article Writing Service?</h2>

						<!-- Text  -->
						<p class="p-md">We have a dedicated team of workers, who ensure that your project deliverables meet your quality requirements and deadlines.
						</p>

					</div>
				</div>
			</div>

			<!-- FEATURES-5 WRAPPER -->
			<div class="fbox-5-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-3">


					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-5 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-analytics"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">100% Work Satisfaction Guarantee</h5>

							<!-- Text -->
							<p class="p-lg">Gain peace of mind and confidence when presenting a project. Because we will never be satisfied until you are happy with our work!</p>


						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-5 bg-white mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-web-search-engine"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Personalized Orders & Integration</h5>

							<!-- Text -->
							<p class="p-lg">Save your completed content as a Word document, an HTML file, or a unique template.</p>


						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-5 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-line-graph-1"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">SEO Optimization</h5>

							<!-- Text -->
							<p class="p-lg">Complete SEO-optimized content would then increase website traffic.
							</p>

						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- END FEATURES-5 WRAPPER -->

			<!-- FEATURES-5 WRAPPER -->
			<div class="fbox-5-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-3">


					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-5 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-analytics"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Human Excellence</h5>

							<!-- Text -->
							<p class="p-lg">We can provide high-quality texts for half the price of a traditional agency because of our comprehensive multiphasic screening and continuing evaluations.</p>


						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-5 bg-white mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-web-search-engine"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Immediate Ordering</h5>

							<!-- Text -->
							<p class="p-lg">Within a few minutes, place your order by completing our simple form. It is truly hassle-free!</p>


						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-5 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-line-graph-1"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Qualified Writers</h5>

							<!-- Text -->
							<p class="p-lg">With many years of experience in this field, we will always be responsible for producing your content.
							</p>

						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- END FEATURES-5 WRAPPER -->

			<!-- FEATURES-5 WRAPPER -->
			<div class="fbox-5-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-3">


					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-5 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-analytics"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Specialized Project Manager</h5>

							<!-- Text -->
							<p class="p-lg">Expert project managers are vital in ensuring that our writing team continues to perform at a high level.</p>


						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-5 bg-white mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-web-search-engine"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Discount For Loyal Customers</h5>

							<!-- Text -->
							<p class="p-lg">By frequently using our services, you can treat yourself. You'll benefit from the most affordable prices as well as exclusive savings.</p>


						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-5 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-line-graph-1"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Specific Content</h5>

							<!-- Text -->
							<p class="p-lg">We provide unique content. Content written especially for your website will make it stand out.
							</p>

						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- END FEATURES-5 WRAPPER -->


		</div> <!-- End container -->
	</section> <!-- END FEATURES-5 -->


	<!-- CONTENT-2
			============================================= -->
	<section id="content-2" class="content-2 pb-60 content-section division">
		<div class="container">
			<div class="row d-flex align-items-center">


				<!-- IMAGE BLOCK -->
				<div class="col-md-5 col-lg-6">
					<div class="rel img-block left-column wow fadeInRight">
						<img class="img-fluid" src="../images/seo-01.png" alt="video-preview">
					</div>
				</div>


				<!-- TEXT BLOCK -->
				<div class="col-md-7 col-lg-6">
					<div class="txt-block right-column wow fadeInLeft">

						<!-- TEXT BOX -->
						<div class="txt-box">

							<!-- Title -->
							<h5 class="h5-md">The Benefits of Our Article Writing Services</h5>

							<!-- List -->
							<ul class="simple-list">

								<li class="list-item">
									<p class="p-lg">Experts in a variety of areas and expertise publish articles.
									</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Low-cost, excellent article writing service.</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Originality tested by Copyscape at 100%.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Multiple revisions.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">SEO-friendly content with keywords.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Free trial available.</p>
								</li>
							</ul>

						</div> <!-- END TEXT BOX -->

					</div>
				</div> <!-- END TEXT BLOCK -->


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-2 -->




	<!-- CONTENT-1
			============================================= -->
	<section id="content-1" class="content-1 content-section division">
		<div class="container">
			<div class="row d-flex align-items-center">


				<!-- TEXT BLOCK -->
				<div class="col-md-7 col-lg-6 order-last order-md-2">
					<div class="txt-block left-column wow fadeInRight">

						<!-- TEXT BOX -->
						<div class="txt-box">

							<!-- Title -->
							<h5 class="h5-md">How It Works</h5>
							<p class="p-md">Your content reaches you in this way.</p>

							<p class="p-lg">Our content writing company guarantees economical, top-notch, SEO-optimized content writing services. Along with qualified content writers, our team also benefits from the experience of seasoned editors and proofreaders to guarantee error-free delivery.
							</p>



							<p class="p-lg">In order to increase content quality and rank higher in Google's index, we use data and statistics in an efficient approach. The procedure we use to produce SEO-friendly content for our exclusive set of clients from around the world is illustrated below. Are you looking for a professional article writing service? Check out Clickbox’s seo article writing service to increase the traffic of your website. </p>






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
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-70">

						<!-- Title -->
						<h2 class="h2-sm">Our Work Process</h2>

						<!-- Text -->

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
								<h5 class="h5-sm">In-depth Evaluation</h5>

								<!-- Text -->
								<p class="p-lg">Our professional team conducts a complete analysis of the customers’ needs and prepares the content accordingly.</p>


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
								<h5 class="h5-sm">Group Assignment</h5>

								<!-- Text -->
								<p class="p-lg">The following step is to plan a specific project and allocate it to the appropriate team to create a specific project and allocate it to the appropriate team for creating unique, customized content. The next stage is to develop a project strategy.
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
								<h5 class="h5-sm">Editing</h5>

								<!-- Text -->
								<p class="p-lg">This necessary part involves placing the carefully produced text to the test before it reaches the editor's desk. The leading editors then complete the last stage of rectification, using their excellent editing abilities to produce text that is comprehensible, compelling, and clear.
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
								<h5 class="h5-sm">SEO/Packaging Audit</h5>

								<!-- Text -->
								<p class="p-lg">As a digital marketing company that offers web content writing services, we know the importance of SEO and use tools to make our content more search engine friendly.
								</p>

							</div>

						</div>
					</div>


				</div>
			</div> <!-- END FEATURES-4 WRAPPER -->


		</div> <!-- End container -->
	</section> <!-- END FEATURES-4 -->

	<!-- DIVIDER LINE -->
	<hr class="divider">

	<!-- FAQs-2
			============================================= -->
	<section id="faqs-2" class="pb-60 faqs-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="section-title title-02 mb-75">

						<!-- Section ID -->
						<span class="section-id txt-upcase">Frequently Asked Questions</span>

						<!-- Title -->
						<h3 class="h3-xl">Everything you need to know before getting started</h3>

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
								<h5 class="h5-sm">What differentiates a blog from an article?</h5>

								<!-- Answer -->
								<p class="p-lg">A blog post is typically written from a personal perspective based on opinion; it may also include facts or information, but it is more personal and based on experience. An article is often written to present information, news, facts, and an objective viewpoint.
								</p>

							</div>


							<!-- QUESTION #2 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-sm">Do you use any content writing tools?</h5>

								<!-- Answer -->
								<p class="p-lg">Yes. We make use of premium products like Copyscape, Grammarly, SEMRush, and others.
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
								<h5 class="h5-sm">What process does ClickBox follow?</h5>

								<!-- Answer -->

								<p class="p-lg">We adhere to a strict methodology for generating the content, with an emphasis on research and business understanding. Editing and precise phrasing come next. We know that we serve as your communication agency rather than merely a content writing service.
								</p>



							</div>

							<!-- QUESTION #4 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-sm">Why should I trust ClickBox?</h5>

								<!-- Answer -->
								<p class="p-lg">We work with a variety of diverse client bases, each with their own needs and demands, who stick with us after seeing the lengths we will go to guarantee their pleasure. You can count on us to put in a lot of effort to get to know you, your business, and your brand early on in the process because we want to be your go-to agency for everything content-related and the first ones you recommend to your colleagues who require comparable services.
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
						<h5 class="h5-sm">Have more questions? <a href="https://clickboxagency.com/contacts/">Ask your question here</a></h5>
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
			"url": "https://www.clickboxagency.com/article-writing-service/",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/article-writing-service/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "Professional Article Writing Service | ClickBox",
			"alternateName": "article writing service, seo article writing service, best article writing services, article writing companies, professional article writing service",
				"url": "https://www.clickboxagency.com/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "Professional Article Writing Service | ClickBox",
			"url": "https://www.clickboxagency.com/article-writing-service/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "Our article writing services come in a variety of levels. based entirely on your requirements for quality. ClickBox Agency is the best option if you're looking for engaging SEO content.",
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