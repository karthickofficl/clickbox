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

	<title>Best Packaging Design Services in India| ClickBox</title>

	<meta name=description content="Designing product packaging to safely contain, identify, and deliver a product is known as packaging design. ClickBox Agency is the best option if you're looking for engaging design services." />

	<meta name=keywords content="packaging design,packaging design services,product packaging design,best packaging design,packaging design agency,creative packaging design" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="www.clickboxagency.com" />

	<meta name="copyright" content="www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="www.clickboxagency.com/packagingdesign-writing-service/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="www.clickboxagency.com/packagingdesign-writing-service/" />

	<meta property="og:site_name" content="www.clickboxagency.com/packagingdesign-writing-service/" />

	<meta property="og:image" content="www.clickboxagency.com/images/logo-01.png" />

	<meta property="og:title" content="Best Packaging Design Services in India| ClickBox" />

	<meta property="og:description" content="Designing product packaging to safely contain, identify, and deliver a product is known as packaging design. ClickBox Agency is the best option if you're looking for engaging design services." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Best Packaging Design Services in India| ClickBox" />

	<meta name="twitter:description" content="Designing product packaging to safely contain, identify, and deliver a product is known as packaging design. ClickBox Agency is the best option if you're looking for engaging design services." />

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
							Make Shoppers Look Twice With Creative Label Designs and Packaging - ClickBox
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
							<h3 class="h3-xs">Affordable and Best Packaging Designing Services in India</h3>

							<!-- Text -->
							<p class="p-lg">The art of creating products in a way that appeals to consumers and improves the brand experience is known as packaging design.Form, structure, materials, color, imagery, typography, and regulatory information are all connected with auxiliary design elements in packaging design to create a product that is suitable for marketing. The creation of a vehicle that can contain, protect, transport, dispense, store, identify, and distinguish a product in the marketplace is the main goal of this project. The ultimate objective of packaging design is to achieve marketing objectives by clearly communicating the personality or function of a consumer product and resulting in a sale.</p>


						</div>
					</div>
				</div>
				<div class="row d-flex align-items-center">


					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block left-column wow fadeInRight">

							<!-- Section ID -->
							<!-- <span class="section-id purple-color txt-upcase">Fast Performance</span> -->

							<p class="p-lg">The typical supermarket's shelves are lined with tens of thousands of different items. Retail marketing venues include department stores, mass merchandisers, specialty shops, outlets, and the internet, where products are brought to life and draw customers with their packaging. Because there are so many options for consumers, there is increased product competition, which encourages the need for market differentiation. Products and the aesthetics of their packaging converge in a consumer society to the point where they are no longer seen as distinct items or, ultimately, as necessities. In fact, effective packaging design inspires desire. </p>

							<p class="p-lg">Moving goods from producer to consumer involves a variety of activities, including planning, carrying them out, pricing, placement, advertising, promotion, and sales. One element of this multivariate series is packaging design.There is more to packaging design than meets the eye. Learn about the three main purposes of packaging design and how they benefit both the product and the consumer.</p>
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

	<!-- SECTION -->
	<section class="bg-snow content-3 features-section division ">
		<div class="container ">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<h2 class="h3-xs text-center">Why is Packaging Design Important For Business?</h2>
						<p class="p-lg">Packaging design is very important, functionality is even more crucial. What effective packaging should accomplish for the item it holds is as follows:</p>
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
							<h5 class="h5-md">Protection</h5>

							<!-- Text -->
							<p class="p-lg">The main goal of product packaging is to keep the contents safe from harm while the product is in transit, being stored, or being displayed on store shelves. To prevent tampering with the product, product packaging must be dependable and robust.</p>


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
							<h5 class="h5-md">Attraction</h5>
							<!-- Text -->
							<p class="p-lg">Your products must be eye-catching enough to draw customers' attention when they are displayed on store shelves. Useful and eye-catching custom boxes with specific color schemes and intricate designs can achieve this.</p>
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
							<h5 class="h5-md">Information</h5>

							<!-- Text -->
							<p class="p-lg"> Product information, such as usage instructions, ingredient lists, and expiration dates, must be included on packaging. Customers can use this information to decide whether or not they want to buy your product without having to speak to a store assistant.
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
							<h5 class="h5-md">Differentiation</h5>
							<!-- Text -->
							<p class="p-lg">Packaging can help brands distinguish their goods from competing ones by using distinctive logos, colors, or shapes. Your product will stand out and draw customers with innovative designs.
							</p>
						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->


		</div>
	</section>
	<!-- SECTION -->

	<!-- CONTENT-2
			============================================= -->
	<section id="content-3" class="content-3 pd-30 content-section division">
		<div class="container">
			<!-- TOP ROW -->
			<div class="top-row pb-50">
				<div class="row d-flex align-items-center">




					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block left-column wow fadeInLeft">
							<!-- Title -->
							<h3 class="h2-xs">How to Approach The Customers?</h3>

							<!-- Text -->
							<p class="p-lg">No matter how creatively you design a package, keep in mind that it must also provide information. To persuade customers of the value of the product inside, it must communicate with them and provide all the information they require. The following questions must be addressed by good packaging design:</p>

							<!-- List -->
							<ul class="simple-list">

								<li class="list-item">
									<p class="p-lg">For whom was this product designed?</p>

								</li>

								<li class="list-item">
									<p class="p-lg">What is the purpose of this item?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Where can I find out more information about the maker?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">When does it end? When?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">How can this product make my life better?</p>
								</li>

							</ul>
						</div>
					</div> <!-- END TEXT BLOCK -->

					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6">
						<div class="img-block right-column wow fadeInRight">
							<img class="img-fluid" src="../images/img-06.png" alt="content-image">
						</div>
					</div>


				</div>
			</div> <!-- END TOP ROW -->

		</div> <!-- End container -->
	</section> <!-- END CONTENT-2 -->


	<!-- CONTENT-3
			============================================= -->
	<section id="content-2" class="content-2 bg-04 pt-30 content-section division">
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
						<h3 class="h2-xs">Benefits of Packaging Design?</h3>
						<p class="p-lg">Product packaging is a useful tool, but it also means much more to the product and brand it represents. Through its design, the packaging persuades a customer to buy a product or not.There are many reasons why packaging design is important, but the following are the ones we consider to be most crucial:First impressions are important, as we've already established, especially when your product needs to stand out in a crowded market of competing goods. Your product will stand out from competitors on the market, whether it is on store shelves or the pages of an e-commerce website, thanks to attractive packaging design. Take full advantage of your first opportunity to win over customers and introduce them to your brand.</p>

					</div>
				</div> <!-- END TEXT BLOCK -->


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-3 -->


	<!-- OUR CLIENTS ADD -->
	<?php include('our-clients.php') ?>
	<!-- OUR CLIENTS END -->

	<section id="content-2" class="content-2 bg-snow pb-30 pt-30 content-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<h2 class="h3-xs text-center">How to Create Attractive Product Packaging?</h2>
						<p class="p-lg">The first step in creating effective product packaging is to ascertain a few factors. The following three queries will assist the designer in producing something that speaks to the principles and reputation of your company:</p>
					</div>
				</div>
			</div>


			<div class="row d-flex align-items-center">
				<!-- TEXT BLOCK -->
				<div class="col-md-7 col-lg-6 order-last order-lg-1 order-md-1">
					<div class="txt-block left-column wow fadeInLeft">


						<!-- Title -->
						<h5 class=" "> What Kind of Goods do You Sell?</h5>

						<!-- TEXT BOX -->
						<div class="txt-box">
							<p class="p-lg">This question is meant to assist you in understanding how the packaging works, not to be challenging or tricky. The size and sturdiness of the packaging will depend on the kind, size, and material of the product you are selling.</p>

							<h5 class=" ">Who is Going to Purchase Your Offering?</h5>
							<p class="p-lg">Understanding your audience will help you learn how to engage them as well. You should keep your ideal customer in mind when designing the product packaging.</p>


							<h5 class=" ">What Style Does My Brand Embody?</h5>
							<p class="p-lg">You must instruct the designer on the aesthetics to use because packaging design must reflect your brand. This applies to all elements—colors, fonts, logos, and, if applicable, even imagery. It's time to start actually working on the packaging design after deciding the aforementioned factors.The designer will take into account the actual product, the competition, and your budget to produce a design that appeals to your target market, accurately reflects your brand, and is also practical.</p>

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
							<p class="p-lg">Once the design is complete, you must assess it using the following standards:</p>
							<ul class="simple-list">

								<li class="list-item">
									<p class="p-lg"><b>Simple to understand:</b> Will customers be able to identify your product's features just by looking at it? Confusion among your audience is the last thing you want.</p>

								</li>

								<li class="list-item">
									<p class="p-lg"><b>Honesty:</b> Does your product's packaging accurately depict it? Make sure the graphics or images used on the packaging are as accurate as you can. Naturally, you should use your best photos, but be careful that they don't overstate the value of your offering.</p>
								</li>

								<li class="list-item">
									<p class="p-lg"><b>Versatility:</b> Even though you might only currently offer one product for sale, you might decide to expand in the future. Make certain the packaging is flexible enough to hold additional products.</p>

								</li>

							</ul>

						</div> <!-- END TEXT BOX -->

					</div>
				</div> <!-- END TEXT BLOCK -->

			</div>
			<!--#2 End row -->
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
											<b>What is the process of packaging design?</b>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">A manufacturer or business owner will go through a number of steps in the packaging design process to get their product ready for retail sales. The procedure takes into account the structure and shape for the best store display, the material,and the artwork to attract customers' attention and encourage them to buy the product.
											</p>
										</div>
									</div>
								</div>
								<!-- QUES 2 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<b>How much time is required to create a packaging design?</b>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Depending on the product, packaging design can take anywhere between 10 and 50 percent longer. While there are no set time limits for designing packaging, it can take anywhere from a few weeks to several months.</p>
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
											<b>What are the four guiding principles for good packaging design?</b>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">These four simple guidelines for effective packaging design will ensure that your product stands out and gives customers a memorable experience. Packaging needs to compete, engage, communicate, and provide an unforgettable experience outside of the box.
											</p>
										</div>
									</div>
								</div>
								<!-- QUES 4 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<b>What components make up packaging design?</b>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Colors, images, typography, and format are the four primary components of packaging. These components tend to have a high recall rate and make it easier for consumers to relate to the brand. Colors can draw attention to your product and have a significant psychological impact.
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
			"url": "https://www.clickboxagency.com/packagingdesign-writing-service/"
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/packagingdesign-writing-service/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "Best Packaging Design Services in India| ClickBox",
			"alternateName": "packaging design,packaging design services,product packaging design,best packaging design,packaging design agency,creative packaging design " / >
				"url": "https://www.clickboxagency.com/packagingdesign-writing-service/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "Best Packaging Design Services in India| ClickBox",
			"url": "https://www.clickboxagency.com/packagingdesign-writing-service/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "Designing product packaging to safely contain, identify, and deliver a product is known as packaging design. ClickBox Agency is the best option if you're looking for engaging design services." / >
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