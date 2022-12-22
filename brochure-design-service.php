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

	<title>The Best Brochure Design Service | ClickBox</title>

	<meta name=description content="The top brochure design company in India is ClickBox, which provides the most creative brochure design services for companies of all sizes. Read more…" />

	<meta name=keywords content="brochure design, brochure design service, online brochure design, creative brochure design, brochure cover design, best brochure design" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="www.clickboxagency.com" />

	<meta name="copyright" content="www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="www.clickboxagency.com/brochure-design-service/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="www.clickboxagency.com/brochure-design-service/" />

	<meta property="og:site_name" content="www.clickboxagency.com/brochure-design-service/" />

	<meta property="og:image" content="www.clickboxagency.com/images/logo-01.png" />

	<meta property="og:title" content="The Best Brochure Design Service | ClickBox" />

	<meta property="og:description" content="The top brochure design company in India is ClickBox, which provides the most creative brochure design services for companies of all sizes. Read more…" />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="The Best Brochure Design Service | ClickBox" />

	<meta name="twitter:description" content="The top brochure design company in India is ClickBox, which provides the most creative brochure design services for companies of all sizes. Read more…" />

	<meta name="twitter:image" content="www.clickboxagency.com/images/logo-01.png" />
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
							Best Brochure Design Service- ClickBox
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

							<p class="p-lg">Modern brochure design services are provided by ClickBox. We are a brochure design business in India offering you a full spectrum of design services. Our design expertise extends to creating flyers or brochures for marketing, sales, etc. We believe that developing brochures requires both expertise and invention in addition to creativity and innovation. All of the aforementioned factors and years of industry experience have elevated our standing.</p>

							<p class="p-lg">The company ClickBox, which offers brochure design service in India, fervently supports clever design. Our creations are a complete package. They include the ideal design, effective communication of the corporate message, and consideration of the target audience's needs.</p>


							<p class="p-lg">Our design team works diligently to choose the best theme for your company's requirements. Get all the aforementioned services bundled together by contacting our brochure design firm.</p>
							<p class="p-lg">We want to do everything we can to help you. As a result, the brochure for our design firm features a variety of designs, including embossed brochures, flyers with distinctive folds and cuts, and unusual folds. You can contact us if you're searching for either offline or online flyers.</p>
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
							<h4 class="h4-md">How can ClickBox Companies Assist in Designing Brochures?</h4>

							<!-- Text -->
							<p class="p-lg">Our team is skilled at balancing material and pictures. The professionals here understand that a brochure needs to have a luring effect to attract the required number of eyes. They therefore ensure that their brochures have the necessary illustrations so that they are read rather than just skimmed and thrown away.</p>
							<p class="p-lg">We make sure that the content created is of the finest quality. It is always accurate, pertinent, and informative.</p>
							<p class="p-lg">The professionals at our brochure design company use texts, symbols, and images appropriately. But we never stuff these into our crafts. We constantly keep the white space in mind.</p>
						</div>
					</div> <!-- END TEXT BLOCK -->


				</div>
			</div> <!-- END TOP ROW -->

			<!-- BOTTOM ROW -->
			<div class="bottom-row">
				<div class="row d-flex align-items-center">
					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6 order-last order-md-2">
						<div class="txt-block left-column wow fadeInRight">

							<!-- TEXT BOX -->
							<div class="txt-box mb-20">

								<!-- Title -->
								<h5 class="h5-lg">Why Would Brochures Benefit Your Brand?</h5>

								<!-- Text -->
								<p class="p-lg">Brochures are a great way to draw customers to your business even if you are not physically there. We theme your marketing strategy with the best brochure design that can fully explain your company. Any prospective customer would be persuaded that you are the best fit for their needs. Despite all the thought that has gone into it, we can guarantee you the quickest turnaround time. Our brochure designs are capable of and will result in the desired expansion for your company. With the help of our affiliated printers, we can also help you print your brochures and get them delivered.</p>
								<!-- List -->
								<ul class="simple-list">

									<li class="list-item">
										<p class="p-lg">We create brochures that boost sales for you.</p>

									</li>

									<li class="list-item">
										<p class="p-lg">We provide you with recommendations regarding the brochure's size, design, and printing quality.</p>
									</li>

									<li class="list-item">
										<p class="p-lg">Get it created. Gain attention.</p>
									</li>

								</ul>

							</div>


						</div>
					</div> <!-- END TEXT BLOCK -->
					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6 order-first order-md-2">
						<div class="img-block right-column wow fadeInLeft">
							<img class="img-fluid" src="../images/img-09.png" alt="content-image">
						</div>
					</div>
				</div>
			</div> <!-- END BOTTOM ROW -->


		</div> <!-- End container -->
	</section> <!-- END CONTENT-2 -->

	<!-- CONTENT-3
			============================================= -->
	<section id="content-2" class="content-2 bg-02 wide-60 content-section division">
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
						<h3 class="h2-xs">Design For E-Brochure</h3>

						<p class="p-lg">The only difference between an electronic brochure and a traditional brochure is that an electronic brochure is seen on a computer or mobile device screen rather than being held in the hand. Therefore, it has equal potential to a conventional printed brochure. The former actually has more in store than the latter. E-brochures feature videos and audio in addition to photographs and text, much like traditional brochures do.</p>
						<p class="p-lg">E-brochures can be a terrific option for you if you're seeking for an inventive way to sell your goods and services quickly. Consider reaching out to a client who is located on a distant continent to promote your goods and services. Do you not agree that the entire strategy is excellent? With the help of its e-brochure design services, ClickBox enables you to reach a large audience and gives your clients the freedom to explore your offerings whenever they want and contact you. One of the best firms for brochure design, our goal is to help your company expand to all corners of the globe. Our team of professionals works diligently to ensure your success by applying their vast experience.</p>
						<p class="p-lg">Your brain and visual sphere might be stimulated by the graphics and colors of an electronic brochure or online brochure design. Our affordable, e-mailable e-brochures help increase the retention and conversion of your audience. Through our dynamic and captivating platform, each brochure designer at ClickBox ensures a comprehensive picture of your message. You may confidently appeal to your audiences' emotions and purchasing decisions when you work with us as your marketing partner. Your ability to generate leads and make money will greatly benefit from our efforts.</p>
					</div>
				</div> <!-- END TEXT BLOCK -->


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-3 -->


	<!-- CONTENT-5
			============================================= -->
	<section id="content-6" class="content-6 bg-whitesmoke-gradient wide-60 content-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<!-- Title -->
						<h5 class="h5-lg">Business Brochures</h5>
						<p class="p-lg">Potential clients can learn more about a firm's advantages, goods, and services from company brochures. The majority of brochures feature one, two, or three folds. Brochures are popular with big firms, but small businesses might benefit most from them because they are inexpensive marketing tools.</p>


					</div>
				</div>
			</div>
			<div class="row d-flex align-items-center">


				<!-- TEXT BLOCK -->
				<div class="col-md-6 col-lg-5">
					<div class="txt-block left-column wow fadeInRight">

						<!-- TEXT BOX -->
						<div class="txt-box mb-30">


							<!-- Title -->
							<h5 class="h5-lg">We Provide Services</h5>
							<!-- List -->
							<ul class="simple-list">

								<li class="list-item">
									<p class="p-lg">e-Brochure Design.</p>

								</li>

								<li class="list-item">
									<p class="p-lg">Standee Design.</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Newsletter Design.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Poster Design.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Folders Design.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Flyer Design.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Product Brochure Design.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Voucher Design.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Business Card Design.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Banner or Board Design.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Letter Head Design.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Greeting Card Design.</p>
								</li>

							</ul>

						</div>
					</div>
				</div>


				<!-- IMAGE BLOCK -->
				<div class="col-md-6 col-lg-7">
					<div class="img-block right-column wow fadeInLeft">
						<img class="img-fluid" src="../images/img-20.png" alt="content-image">
					</div>
				</div>


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-5 -->

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
											<b>How are you going to understand our unique brochure requirements?</b>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">As soon as the assignment for the brochure is confirmed, our creative team will get in touch with you. We'll develop requirements and produce a precise working brief. Additionally, we will advise you on the information flow, numerous parts, and pages that will make up the brochure's content.</p>
										</div>
									</div>
								</div>
								<!-- QUES 2 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<b>Why should you choose online brochure design?</b>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">In the existing information-driven environment, using a cost-effective marketing tool to keep your target audience informed and up to date about your company is a blessing.</p>
											<p class="p-lg">The following list includes the numerous justifications for selecting an electronic brochure as your marketing medium:</p>
											<ul class="simple-list">

												<li class="list-item">
													<p class="p-lg">Since this one doesn't need to be printed, the costs are lower.</p>

												</li>

												<li class="list-item">
													<p class="p-lg">It is simple to spread and copy.</p>
												</li>

												<li class="list-item">
													<p class="p-lg">It is simple to update and alter.</p>
												</li>
												<li class="list-item">
													<p class="p-lg">Convenient and simple to distribute, whether through emailing a link.</p>
												</li>
												<li class="list-item">
													<p class="p-lg">You have content protection. Users are unable to copy and paste your text for private use.</p>
												</li>
												<li class="list-item">
													<p class="p-lg">It can be shown as a .html page on your website.</p>
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
											<b>Why would brochures benefit your branding?</b>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">An excellent technique to spread the word about your brand is through brochures. You can use it to introduce yourself and your work. It's a terrific method to show them how your products can enhance their quality of life and arouse their necessary interest in your company. That's what we, your go-to brochure designers, hope to do.</p>
										</div>
									</div>
								</div>
								<!-- QUES 4 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<b>Why should you depend on our assistance?</b>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<ul class="simple-list">

												<li class="list-item">
													<p class="p-lg">We prioritize client satisfaction and hence provide individualized designs.</p>

												</li>

												<li class="list-item">
													<p class="p-lg">We adhere to deadlines for the letter.</p>
												</li>

												<li class="list-item">
													<p class="p-lg">Our brochure designers never cut corners when it comes to quality.</p>
												</li>
												<li class="list-item">
													<p class="p-lg">We provide a wide range of services.</p>
												</li>
												<li class="list-item">
													<p class="p-lg">We don't charge a lot for our services. We offer very competitive pricing.</p>
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
			<div class="row">
				<div class="col ">
					<div class="more-questions">
						<h5 class="h5-sm ">Have more questions? <a href="../contacts">Ask your question here</a></h5>
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
			"url": "https://www.clickboxagency.com/brochure-design-service/"
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/brochure-design-service/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "The Best Brochure Design Service | ClickBox",
			"alternateName": "brochure design, brochure design service, online brochure design, creative brochure design, brochure cover design, best brochure design" / >
				"url": "https://www.clickboxagency.com/brochure-design-service/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "The Best Brochure Design Service | ClickBox",
			"url": "https://www.clickboxagency.com/brochure-design-service/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "The top brochure design company in India is ClickBox, which provides the most creative brochure design services for companies of all sizes. Read more… " / >
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