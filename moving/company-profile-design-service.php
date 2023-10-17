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

	<title>The Best Company Profile Design Services | ClickBox</title>

	<meta name=description content="ClickBox is the most Professional Company Profile Designers, and we create all different types of profiles for any type of company. Our list of global clients mentions..." />

	<meta name=keywords content="company profile design services, company profile design, business profile design, corporate profile design, company profile layout" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/company-profile-design-service/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/company-profile-design-service/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/company-profile-design-service/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="The Best Company Profile Design Services | ClickBox" />

	<meta property="og:description" content="ClickBox is the most Professional Company Profile Designers, and we create all different types of profiles for any type of company. Our list of global clients mentions..." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="The Best Company Profile Design Services | ClickBox" />

	<meta name="twitter:description" content="ClickBox is the most Professional Company Profile Designers, and we create all different types of profiles for any type of company. Our list of global clients mentions..." />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />
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
							Get Effective With Our Company Profile Design

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

				<div class="row d-flex align-items-center">


					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block left-column wow fadeInRight">

							<!-- Section ID -->
							<!-- <span class="section-id purple-color txt-upcase">Fast Performance</span> -->

							<p class="p-lg">A successful technique to present the company. According to the proverb, first impressions last, so businesses need an engaging company profile to make a good one. A corporate profile design is a brief overview of an organization that enables various groups of individuals to have a general understanding of the company's target market, special strengths, and track record. </p>

							<p class="p-lg">A professionally created profile or brochure is a great and useful tool that can persuade and urge potential clients to choose you. A company's profile or imaginative brochure can greatly increase customer conversions and increase revenue in a way that no other strategy can.</p>
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


	<section id="content-2" class="content-2 bg-snow pb-30 pt-30 content-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-40">
						<h2 class="h3-xs text-center">Get Profile Design Service Stages</h2>

					</div>
				</div>
			</div>


			<div class="row d-flex align-items-center">
				<!-- TEXT BLOCK -->
				<div class="col-md-7 col-lg-6 order-last order-lg-1 order-md-1">
					<div class="txt-block left-column wow fadeInLeft">

						<!-- TEXT BOX -->
						<div class="txt-box">
							<ul class="simple-list">

								<li class="list-item">
									<p class="p-lg">Please give us relevant information about your business, including your domain and logo.</p>

								</li>

								<li class="list-item">
									<p class="p-lg">We'll create material about your business with the help of our qualified content writers.</p>
								</li>

								<li class="list-item">
									<p class="p-lg">You will receive content from us to review and accept.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">A design will be chosen and prepared for your profile.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">The first draught will be delivered to you for inspection and approval.</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Then we'll talk about how your philosophy and our design can work together.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Finally, we will send you a copy for printing after receiving your approval.</p>
								</li>

							</ul>
						</div> <!-- END TEXT BOX -->

					</div>
				</div> <!-- END TEXT BLOCK -->

				<!-- IMAGE BLOCK -->
				<div class="col-md-5 col-lg-6 order-first order-lg-2 order-md-2">
					<div class="rel img-block right-column wow fadeInRight">
						<img class="img-fluid" src="../images/img-16.png" alt="video-preview">
					</div>
				</div>

			</div> <!-- End row -->

			<!-- #1 ROW END -->


			<!-- ##2 RoW START -->
			<div class="row d-flex align-items-center">

				<!-- IMAGE BLOCK -->
				<div class="col-md-5 col-lg-6">
					<div class="rel img-block left-column wow fadeInRight">
						<img class="img-fluid" src="../images/img-16.png" alt="video-preview">
					</div>
				</div>

				<!-- TEXT BLOCK -->
				<div class="col-md-7 col-lg-6">
					<div class="txt-block right-column wow fadeInLeft">

						<!-- TEXT BOX -->
						<div class="txt-box">
							<p class="p-lg">Our talented and effective team can create the ideal theme for your company profile. Prior to creating themes that will draw customers to your business, our designers first thoroughly research your industry. Linking your company to the theme is crucial since it enhances and generates the impact on your clients that you want to achieve. ClickBox develops corporate profile design for all sets of industries.</p>
							<p class="p-lg">In addition to choosing a theme and writing competently, it's critical to have a foolproof plan for how and where clients should concentrate their attention. Years of expertise have improved our knowledge of the science of placing material in designs that will undoubtedly draw clients to you and elicit the right response.</p>
							<p class="p-lg">They always go together because, if the design is a body, the content is its spirit. It's always a good idea to write well-written, succinct, and properly structured material for your company profile design. Our satisfied workforce of qualified content writers and editors can produce the most appropriate material for your business.</p>


						</div> <!-- END TEXT BOX -->
					</div>
				</div> <!-- END TEXT BLOCK -->

			</div>
			<!--#2 End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-3 -->


	<!-- SECTION -->
	<section class="bg-snow content-3 mt-3 pt-30 features-section division ">
		<div class="container ">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<h2 class="h3-xs text-center">What Do We Offer For Fesigning Company Profile Layouts?</h2>
						<p class="p-lg">The story of your brand is effectively communicated in company brochures. Creatively designed brochures draw attention and assist in enhancing brand recognition because they are small. ClickBox specializes in producing company profile designs with strong memory and transferability. Along with designing, our printing experience aids in cost optimization.</p>
					</div>
				</div>
			</div>
			<!-- ADD CARD CONTANTS -->
			<!-- FEATURES-8 WRAPPER -->
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-3">
					<!-- FEATURE BOX #1 -->
					<div class="col ">
						<div class="fbox-8 mb-40 wow fadeInUp ">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/img-21.png" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Business Profile Design</h5>

							<!-- Text -->
							<p class="p-lg">Make a formal introduction to draw attention to oneself.</p>


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
							<h5 class="h5-md">Annual Statistics</h5>
							<!-- Text -->
							<p class="p-lg">Inform others about your accomplishments and invite them to get to know you better.</p>
						</div>
					</div>
					<!-- FEATURE BOX #3 -->
					<div class="col ">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/img-22.png" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Product Portfolio</h5>
							<!-- Text -->
							<p class="p-lg">Your sales crew is our catalog, which is cleverly designed. Boost acceptability and generate more leads.</p>
						</div>
					</div><!-- FEATURE BOX #3 -->
				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->
			<!-- FEATURES-8 WRAPPER -->
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-3">
					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/img-seoservice.png" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Product Guidelines</h5>

							<!-- Text -->
							<p class="p-lg">With cleverly produced product manuals, our design specialist will make your trainers come to life for your clients.
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
							<h5 class="h5-md">Advertising Flyers</h5>
							<!-- Text -->
							<p class="p-lg">With our eye-catching leaflets and flyers, you can instantly capture attention, recall information, and keep it.
							</p>
						</div>
					</div>
					<!-- FEATURE BOX #6-->
					<div class="col ">
						<div class="fbox-8 mb-40 wow fadeInUp ">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/img-21.png" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Magazines and Books</h5>
							<!-- Text -->
							<p class="p-lg">With specially curated content, you can highlight your accomplishments and keep clients interested over time.
							</p>
						</div>
					</div><!-- FEATURE BOX #6-->
				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->


		</div>
	</section>
	<!-- SECTION -->
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
											<b>Which file format will the final output be delivered in?</b>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<ul class="simple-list">

												<li class="list-item">
													<p class="p-lg">JPG or PNG for digital distribution.</p>

												</li>

												<li class="list-item">
													<p class="p-lg">Print-ready PDF for media on print.</p>
												</li>

												<li class="list-item">
													<p class="p-lg">For use on banners, posters, hoardings, etc. High-Res JPG.</p>
												</li>


											</ul>
										</div>
									</div>
								</div>
								<!-- QUES 2 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<b>What role does the client have in the design process?</b>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">As a company, we pay close attention to what our clients have to say. Before beginning to work with new clients, we urge the client to bring in any examples, color combinations/swatches, and ideas they may have to assist us to gain a sense of style. Prior to moving further with the design, the client must give their approval for specific colors and fonts. We'll provide the customer a final proof for approval once the design project is prepared for printing before moving forward with manufacturing. Once a job enters production, it cannot be stopped. If money was paid for design services, the client may ask for the design in other forms at the end of a project.</p>
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
											<b>Do you take on little projects?</b>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Yes, we are willing to work on smaller projects as well. Examples include making modest changes to a website or a graphic or logo. The size of the project is irrelevant to us because our primary goal is to satisfy our clients. Hourly rates are typical for smaller projects. To discuss your small project, please contact us.</p>
										</div>
									</div>
								</div>
								<!-- QUES 4 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<b>Can you create my new logo design along with my business cards, letterhead, and envelopes?</b>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Yes, we can create your complete stationery bundle and logo. For packages for logo design, see our website. Business profile designs are designed creatively with us.
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


	<?php include('footer.php') ?>

	</div> <!-- END PAGE CONTENT -->

	<?php include('footer-script.php') ?>

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "https://www.clickboxagency.com/company-profile-design-service/",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/company-profile-design-service/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "The Best Company Profile Design Services | ClickBox",
			"alternateName": "company profile design services, company profile design, business profile design, corporate profile design, company profile layout",
				"url": "https://www.clickboxagency.com/company-profile-design-service/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "The Best Company Profile Design Services | ClickBox",
			"url": "https://www.clickboxagency.com/company-profile-design-service/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "ClickBox is the most Professional Company Profile Designers, and we create all different types of profiles for any type of company. Our list of global clients mentions...",
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