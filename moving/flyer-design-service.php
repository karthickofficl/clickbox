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

	<title>The Best Flyer Design Service | ClickBox</title>

	<meta name=description content="ClickBox Agency is a leading redistributing company offering a variety of creative design services including flyer design services, to global clients for over many years." />

	<meta name=keywords content="flyer design service, flyer design, company flyer, creative flyer design, professional flyer design, corporate flyer design" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/flyer-design-service/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/flyer-design-service/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/flyer-design-service/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="The Best Flyer Design Service | ClickBox" />

	<meta property="og:description" content="ClickBox Agency is a leading redistributing company offering a variety of creative design services including flyer design services, to global clients for over many years." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="The Best Flyer Design Service | ClickBox" />

	<meta name="twitter:description" content="ClickBox Agency is a leading redistributing company offering a variety of creative design services including flyer design services, to global clients for over many years." />

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
							Custom Flyer Design Services- ClickBox
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
				<!-- <div class="row justify-content-center">
					<div class="col-lg-10 col-xl-10">
						<div class="section-title title-01 mb-70"> -->

				<!-- Title -->
				<!-- <h3 class="h2-xs">Creative And Advanced UI UX Design Service</h3> -->

				<!-- Text -->
				<!-- <p class="p-md">A product UI/UX design firm combines technology, innovation, and strategy to create SaaS products. We improve their significance, memorability, intuitiveness, and usefulness. </p> -->


				<!-- </div>
					</div>
				</div> -->
				<div class="row d-flex align-items-center">


					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block left-column wow fadeInRight">

							<!-- Section ID -->
							<!-- <span class="section-id purple-color txt-upcase">Fast Performance</span> -->

							<p class="p-lg">Flyers have been used for marketing purposes for many years. In the interval, several more kinds of marketing tools have come and gone. The flyer, on the other hand, is one of the few marketing tools that has never gone out of vogue. Because of its alluring aesthetic appeal and brief message representation, this advertising strategy has persisted for such a long time. A flyer design company named ClickBox provides eye-catching flyers that guarantee the effective and efficient marketing of your offers, goods, and services. We can help you market your company and make event announcements precisely how you want with our professional flyer design services.</p>

							<p class="p-lg">To assist you gain customers, we promote a fast purchasing decision. We guarantee that your target consumers can rapidly read the flyer and determine whether to make a purchase by using clear text, stunning graphics, and exciting images in a little marketing tool. We might be of assistance if you want to announce a management change in your company, invite guests to the inauguration of your firm, or make new offers. The designers at our flyer design firm use their understanding of the needs of the clients to produce an appealing flyer. We can compete with anyone in the industry when it comes to utilizing the newest equipment, keeping up with the most recent trends, or knowing the client's needs.</p>


							<p class="p-lg">We use cutting-edge methods and resources to create unique flyers that captivate your senses. For businesses, clubs, real estate, and more, we specialize in creating the most creative and effective flyer designs. Our flyers come in a variety of paper finishes, such as glossy, uncoated, etc., and are intended to be used as letterbox drops, handouts, pamphlets, counter displays, or magazine inserts. Our flyer design company adds additional finishing touches, like lamination, perforations, and more, to the flyers it produces. If you want to effectively advertise your business on a tight budget, talk to our customer service representatives.</p>
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
	<section id="content-3" class="content-3 pt-30 content-section division">
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
							<h4 class="h4-md">Why ClickBox for flyer design service?</h4>
							<!-- List -->
							<ul class="simple-list">

								<li class="list-item">
									<p class="p-lg">We provide reasonably priced, expertly crafted flyer design templates.</p>

								</li>

								<li class="list-item">
									<p class="p-lg">We provide unpaid modification.</p>
								</li>

								<li class="list-item">
									<p class="p-lg">We complete jobs by the due date.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">We provide custom design.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">We prioritize customer pleasure, thus we provide you with the best flyer layout.</p>
								</li>
							</ul>

							<!-- Text -->
							<p class="p-lg">Our designers take delight in coming up with the greatest flyer layouts that engage the intended audience. No of the size of the job, our flyer design firm offers services that are totally customized. To create outstanding and unique designs for you, we employ the greatest methods and technologies.</p>

						</div>
					</div> <!-- END TEXT BLOCK -->


				</div>
			</div> <!-- END TOP ROW -->

		</div> <!-- End container -->
	</section> <!-- END CONTENT-2 -->

	<!-- CONTENT-3
			============================================= -->
	<section id="content-6" class="content-6 bg-whitesmoke-gradient pt-30 content-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<!-- Title -->
						<h5 class="h5-lg">Custom Flyer Design Services</h5>
						<p class="p-lg">Your branding efforts will be properly handled by the corporate flyer design services we offer to our clients. As a flyer design company, we are aware of how crucial these components are to your organization's marketing efforts. In these goods, we aim to convey your company's theme.</p>


					</div>
				</div>
			</div>
			<div class="row d-flex align-items-center">


				<!-- TEXT BLOCK -->
				<div class="col-md-6 col-lg-6">
					<div class="txt-block left-column wow fadeInRight">

						<!-- TEXT BOX -->
						<div class="txt-box mb-30">
							<!-- Title -->
							<h5 class="h5-lg">Outstanding Flyer Design</h5>
							<p class="p-lg">In addition to the design, we give the printing work our full attention. The flyers and posters need to be printed after the design is finished. If the designing is flawless but the printing is subpar, the finished product won't be effective. To ensure that the products we print for you are of the finest quality, we employ only the latest technology. The materials we use for printing are of the finest quality and are branded. As a result, the finished product is of higher quality. A higher caliber of content will draw greater interest. Products that are unattractive or poorly made often go unnoticed by consumers.</p>

						</div>

						<!-- TEXT BOX -->
						<div class="txt-box mb-30">
							<!-- Title -->
							<h5 class="h5-lg">Affordable Flyer Designing Service Company</h5>
							<p class="p-lg">In today's market, the prices we charge for designing and printing services are pretty reasonable. You should pay whatever it takes to get the best value from the services. You will be using items made by designers that adhere to international standards.</p>

						</div>
					</div>
				</div>


				<!-- IMAGE BLOCK -->
				<div class="col-md-6 col-lg-6">
					<div class="img-block right-column wow fadeInLeft">
						<img class="img-fluid" src="../images/img-20.png" alt="content-image">
					</div>
				</div>


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-3 -->

	<!-- CONTENT-4
			============================================= -->
	<section id="content-2" class="content-2 bg-02 wide-60 content-section division">
		<div class="container">
			<div class="row justify-content-center white-color">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<!-- Title -->
						<h5 class="h5-lg">The Following are Some Ways that Flyer Design Might Benefit Your Company</h5>
					</div>
				</div>
			</div>
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
						<!-- List -->
						<ul class="simple-list">

							<li class="list-item">
								<p class="p-lg">It excels at luring clients. They are inspired by your brand and develop some level of interest in it.</p>

							</li>

							<li class="list-item">
								<p class="p-lg">If perfectly created, it can effectively convey your company's message to the appropriate audience.</p>
							</li>

							<li class="list-item">
								<p class="p-lg">Flyers can significantly improve the reputation of your brand.</p>
							</li>
							<li class="list-item">
								<p class="p-lg">Flyers might be a big benefit for you if you're on a tight budget.</p>
							</li>

						</ul>
						<p class="p-lg">A flyer's appearance can be deceiving because it might seem straightforward. But in reality, creating one that is truly captivating requires a lot of effort and talent. Only skilled specialists who can provide effective flyer design services are able to develop a good balance of text and visuals.</p>
						<p class="p-lg">A reputable company, Brochure Guru, is offering you efficient flyer design services. We have a team of experts on staff, including graphic designers with years of expertise creating ads of this nature. Additionally, we have writers who can create engaging, concise, and clear content to captivate audiences.</p>

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
											<b>What does custom flyer design include and what will I receive?</b>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">A customized flyer is a physical representation of your brand that buyers can take with them, consult again, and use to get more out of their purchase.
												<br>You'll get all the files you need to print your flyer once your project is finished. This includes web preview files such as a JPG on PNG and vector files. Naturally, you also receive complete legal ownership of the design.
											</p>
										</div>
									</div>
								</div>
								<!-- QUES 2 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<b>Does my company require a unique flyer design?</b>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Absolutely! In a world filled with digital clutter, a brilliant flyer design may stand out. A printed flyer design can foster relationships and give people a sense of importance in today's technologically advanced world.
												<br>A lasting connection between your brand and your readers is made possible by high-quality flyer design and compelling content that encourages readers to read a little farther and hang onto each flyer a little longer.
											</p>

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
											<b>How can I acquire a ClickBox flyer design?</b>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">That's simple. Simply start a flyer design project on ClickBox, choose a price that meets your budget, and specify a few details for our designers.
												<br>Whether it's for informational or promotional purposes, or just to add a true personal touch, ClickBox's creative community may collaborate with you to produce an eye-catching personalized flyer.
											</p>
										</div>
									</div>
								</div>
								<!-- QUES 4 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<b>What must I do to obtain my own amazing flyer design?</b>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">It's critical to stimulate interest and excitement in your brand, whether you're sending it out or presenting it personally to prospective new clients.
												<br>Be specific and detailed in your design brief, mentioning any necessary assets (such as a logo, content, colours, etc.), and offer helpful criticism to make sure you get what you want.
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
	</div> <!-- END PAGE CONTENT -->
	<?php include('footer-script.php') ?>

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "https://www.clickboxagency.com/flyer-design-service/",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/flyer-design-service/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "The Best Flyer Design Service | ClickBox",
			"alternateName": "flyer design service, flyer design, company flyer, creative flyer design, professional flyer design, corporate flyer design",
				"url": "https://www.clickboxagency.com/flyer-design-service/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "The Best Flyer Design Service | ClickBox",
			"url": "https://www.clickboxagency.com/flyer-design-service/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "ClickBox Agency is a leading redistributing company offering a variety of creative design services including flyer design services, to global clients for over many years.",
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