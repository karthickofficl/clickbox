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

	<title>ClickBox: Creative Logo Design Company Coimbatore</title>

	<meta name=description content="ClickBox is a best logo designing company in Coimbatore, provides brand identity services through logos, brochures, websites, flyers, corporate identity designs, and more." />

	<meta name=keywords content="logo design company in coimbatore, logo design agency in coimbatore, logo designers coimbatore, logo design service in coimbatore, animated logo design services coimbatore, best logo design company in coimbatore, best logo design agency in coimbatore, best logo designers coimbatore" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="www.clickboxagency.com" />

	<meta name="copyright" content="www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="www.clickboxagency.com/logo-design/coimbatore/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="www.clickboxagency.com/logo-design/coimbatore/" />

	<meta property="og:site_name" content="www.clickboxagency.com/logo-design/coimbatore/" />

	<meta property="og:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="ClickBox: Creative Logo Design Company Coimbatore" />

	<meta property="og:description" content="ClickBox is a best logo designing company in Coimbatore, provides brand identity services through logos, brochures, websites, flyers, corporate identity designs, and more. " />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="ClickBox: Creative Logo Design Company Coimbatore" />

	<meta name="twitter:description" content="ClickBox is a best logo designing company in Coimbatore, provides brand identity services through logos, brochures, websites, flyers, corporate identity designs, and more. " />

	<meta name="twitter:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />

	<?php include($_SERVER['DOCUMENT_ROOT'] . '/clickboxdemo/header-style.php') ?>

</head>

<body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/clickboxdemo/header.php') ?>

	<!-- HERO-23
			============================================= -->
	<section id="hero-23" class="bg-scroll hero-section division">
		<div class="container">
			<div class="row d-flex align-items-center">
				<!-- HERO TEXT -->
				<div class="col-lg-6">
					<div class="hero-23-txt white-color wow fadeInRight">

						<!-- Title -->
						<h2 class="h2-sm">Looking for the Best Logo Design Company in Coimbatore?</h2>

						<!-- Text -->
						<p class="p-xl">We design unforgettable logos for your brand. </p>

						<!-- Button -->
						<a href="#" class="btn btn-violet-red yellow-hover">Contact us today</a>

					</div>
				</div> <!-- END HERO TEXT -->

				<!-- HERO IMAGE -->
				<div class="col-lg-6">
					<div class="hero-23-img video-preview wow fadeInLeft">
						<!-- Play Icon -->
						<!--<a class="video-popup1" href="https://www.youtube.com/embed/SZEflIVnhH8">-->
						<!--	<div class="video-btn video-btn-xl bg-violet-red ico-90">-->
						<!--		<div class="video-block-wrapper"><span class="flaticon-play-button"></span></div>-->
						<!--	</div>-->
						<!--</a>-->

						<!-- Preview Image -->
						<img class="img-fluid" src="https://www.clickboxagency.com/images/logo-design-01.png" alt="logo-design-coimbatore">

					</div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END HERO-23 -->


	<!-- CONTENT-2
			============================================= -->
	<section id="content-5" class="pt-50  content-5 ws-wrapper content-section division">
		<div class="container">
			<div class="content-5-wrapper bg-whitesmoke">
				<!-- SECTION TITLE -->
				<div class="row justify-content-center">
					<div class="col-lg-10 col-xl-12">
						<div class="section-title title-01 mb-70">

							<!-- Title -->
							<h3 class="h3-xs">Creative Logo Design & Branding Identity Company in Coimbatore</h3>

							<!-- Text -->
							<p class="p-lg">The greatest logos go beyond art. It helps identify brands. As the top logo design agency in Coimbatore, India, our skilled logo designers know how to build a unique logo that sticks out. Use our logo design service to create a corporate symbol.</p>

						</div>
					</div>
				</div>
				<div class="row d-flex align-items-center">
					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block left-column wow fadeInRight">

							<!-- Section ID -->
							<!-- <span class="section-id purple-color txt-upcase">Fast Performance</span> -->

							<p class="p-lg txt-justify">Think about a few brands whose logos make you think of them right away, including the full name and history of the company. This is where the power of a logo comes from. Our skilled logo designers know how to put together the right number of symbols, calligraphy, design art, and other graphic elements that look good together to make such a powerful logo. The logo stirs up emotions and memories associated with your brand and helps people remember it, so you can reach a wider audience.</p>

							<p class="p-lg txt-justify">As the top logo design agency in Coimbatore, India, our skilled logo designers have made unique logos for small businesses and large corporations all over the world. Our logo designs are used in many different fields, such as real estate, education, finance, hospitality, e-commerce, IT, fashion, and more. For our custom logo design service, we offer different packages to meet the needs of every business. Contact us today to get a full quote for your logo needs and to work with the best logo designers in the business.</p>
						</div>
					</div> <!-- END TEXT BLOCK -->


					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6">
						<div class="img-block right-column wow fadeInLeft">
							<img class="img-fluid" src="https://clickboxagency.com/images/logo-design-02.png" alt="innovative-logo-design-branding-company-coimbatore">
						</div>
					</div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-2 -->

	<!-- BLOG-1
			============================================= -->
	<section id="blog-1" class="pt-30 blog-section division">
		<div class="container">
			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">

						<!-- Title -->
						<h3 class="h3-md" style="color:#ffc11d;">A Glimpse of Our Recent Professional Logos</h3>
						<!-- Text -->
						<p class="p-md">We are the leading company in Coimbatore, India, for making animated logos. Check out some of our projects for branding, logos, company profiles, packaging, and websites.</p>

					</div>
				</div>
			</div>
			<!-- BLOG POSTS -->
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">


				<!-- BLOG POST #1 -->
				<div class="col">
					<div id="bp-1-1" class="blog-1-post mb-40 wow fadeInUp">

						<!-- BLOG POST IMAGE -->
						<div class="blog-post-img">
							<div class="hover-overlay">
								<img class="img-fluid" src="https://www.clickboxagency.com/images/mockup-01.jpg" alt="tiaraa-mockup-image" />
								<div class="item-overlay"></div>
							</div>
						</div>
					</div>
				</div> <!-- END  BLOG POST #1 -->


				<!-- BLOG POST #2 -->
				<div class="col">
					<div id="bp-1-2" class="blog-1-post mb-40 wow fadeInUp">

						<!-- BLOG POST IMAGE -->
						<div class="blog-post-img">
							<div class="hover-overlay">
								<img class="img-fluid" src="https://www.clickboxagency.com/images/mockup-04.jpg" alt="precut-engineering-mockup-image" />
								<div class="item-overlay"></div>
							</div>
						</div>
					</div>
				</div> <!-- END  BLOG POST #2 -->


				<!-- BLOG POST #3 -->
				<div class="col">
					<div id="bp-1-3" class="blog-1-post mb-40 wow fadeInUp">

						<!-- BLOG POST IMAGE -->
						<div class="blog-post-img">
							<div class="hover-overlay">
								<img class="img-fluid" src="https://www.clickboxagency.com/images/mockup-05.jpg" alt="poshd-mockup-image" />
								<div class="item-overlay"></div>
							</div>
						</div>
					</div>
				</div> <!-- END  BLOG POST #3 -->
			</div> <!-- END BLOG POSTS -->

			<!-- BLOG POSTS -->
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
				<!-- BLOG POST #1 -->
				<div class="col">
					<div id="bp-1-1" class="blog-1-post mb-40 wow fadeInUp">

						<!-- BLOG POST IMAGE -->
						<div class="blog-post-img">
							<div class="hover-overlay">
								<img class="img-fluid" src="https://www.clickboxagency.com/images/mockup-07.jpg" alt="boomer-gaming-mockup-image" />
								<div class="item-overlay"></div>
							</div>
						</div>
					</div>
				</div> <!-- END  BLOG POST #1 -->


				<!-- BLOG POST #2 -->
				<div class="col">
					<div id="bp-1-2" class="blog-1-post mb-40 wow fadeInUp">

						<!-- BLOG POST IMAGE -->
						<div class="blog-post-img">
							<div class="hover-overlay">
								<img class="img-fluid" src="https://www.clickboxagency.com/images/mockup-08.jpg" alt="akkenna-academy-mockup-image" />
								<div class="item-overlay"></div>
							</div>
						</div>
					</div>
				</div> <!-- END  BLOG POST #2 -->


				<!-- BLOG POST #3 -->
				<div class="col">
					<div id="bp-1-3" class="blog-1-post mb-40 wow fadeInUp">

						<!-- BLOG POST IMAGE -->
						<div class="blog-post-img">
							<div class="hover-overlay">
								<img class="img-fluid" src="https://www.clickboxagency.com/images/mockup-09.jpg" alt="eeltor-mockup-image" />
								<div class="item-overlay"></div>
							</div>
						</div>
					</div>
				</div> <!-- END  BLOG POST #3 -->
			</div> <!-- END BLOG POSTS -->

			<!-- BLOG POSTS -->
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
				<!-- BLOG POST #1 -->
				<div class="col">
					<div id="bp-1-1" class="blog-1-post mb-40 wow fadeInUp">

						<!-- BLOG POST IMAGE -->
						<div class="blog-post-img">
							<div class="hover-overlay">
								<img class="img-fluid" src="https://www.clickboxagency.com/images/mockup-02.jpg" alt="gocabxi-mockup-image" />
								<div class="item-overlay"></div>
							</div>
						</div>
					</div>
				</div> <!-- END  BLOG POST #1 -->


				<!-- BLOG POST #2 -->
				<div class="col">
					<div id="bp-1-2" class="blog-1-post mb-40 wow fadeInUp">

						<!-- BLOG POST IMAGE -->
						<div class="blog-post-img">
							<div class="hover-overlay">
								<img class="img-fluid" src="https://www.clickboxagency.com/images/mockup-03.jpg" alt="unique-self-drive-mockup-image" />
								<div class="item-overlay"></div>
							</div>
						</div>
					</div>
				</div> <!-- END  BLOG POST #2 -->


				<!-- BLOG POST #3 -->
				<div class="col">
					<div id="bp-1-3" class="blog-1-post mb-40 wow fadeInUp">

						<!-- BLOG POST IMAGE -->
						<div class="blog-post-img">
							<div class="hover-overlay">
								<img class="img-fluid" src="https://www.clickboxagency.com/images/mockup-06.jpg" alt="choza-mockup-image" />
								<div class="item-overlay"></div>
							</div>
						</div>
					</div>
				</div> <!-- END  BLOG POST #3 -->
			</div> <!-- END BLOG POSTS -->

		</div> <!-- End container -->
	</section> <!-- END BLOG-1 -->


	<!-- FEATURES-2
			============================================= -->
	<section id="features-2" class="wide-20 bg-02 features-section division">
		<div class="container">

			<!-- BRANDS TITLE -->
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="section-title title-02 mb-75">
						<!-- Title -->
						<h4 class="h4-xs text-white">Our Creative Logo Design Service Process</h4>

					</div>
				</div>
			</div>
			<!-- FEATURES-2 WRAPPER -->
			<div class="fbox-2-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-4">
					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-2 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-65 shape-ico txtyelloww">
								<!-- <img class="ico-bkg" src="images/ico-bkg.png" alt="ico-bkg"> -->
								<span class="" style="font-size: 3rem;font-weight:bolder;">1</span>
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md text-white">Brand Strategy</h5>

								<!-- Text -->
								<p class="p-lg text-white">We develop effective brand strategies that are based on the principles of behavioral science and consumer research. It is essential for maximizing return on investment (ROI) and developing targeted material that engages your audience on a deeper level.</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-2 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-65 shape-ico txtyelloww">
								<!-- <img class="ico-bkg" src="images/ico-bkg.png" alt="ico-bkg"> -->
								<span class="" style="font-size: 3rem;font-weight:bolder;">2</span>
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md text-white">Brand Architecture</h5>

								<!-- Text -->
								<p class="p-lg text-white">The process of developing a brand starts from the inside out. We start at the very beginning with a tale that your consumers will fall in love with, and then we bring that story to life by developing a brand positioning, proposition, personality, and tone of voice that are all spot on.</p>

							</div>
						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-2 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-65 shape-ico txtyelloww">
								<!-- <img class="ico-bkg" src="images/ico-bkg.png" alt="ico-bkg"> -->
								<span class="" style="font-size: 3rem;font-weight:bolder;">3</span>
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md text-white">Brand Names</h5>

								<!-- Text -->
								<p class="p-lg text-white">We explore names from every angle, conducting exhaustive research against competitors and trademarks until we find the one that's just right, whether you're expanding your product range or launching a new brand. This service is available to you whether you're expanding your product line or launching a new brand.</p>

							</div>

						</div>
					</div>
					<!-- FEATURE BOX #4 -->
					<div class="col">
						<div class="fbox-2 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico-center ico-65 shape-ico txtyelloww">
								<!-- <img class="ico-bkg" src="images/ico-bkg.png" alt="ico-bkg"> -->
								<span class="" style="font-size: 3rem;font-weight:bolder;">4</span>
							</div>

							<!-- Text -->
							<div class="fbox-txt-center">

								<!-- Title -->
								<h5 class="h5-md text-white">Brand Identity</h5>

								<!-- Text -->
								<p class="p-lg text-white">We will design a brand that is unique and clearly you, right down to the smallest details, like your logo, colors, and typefaces, as well as your tone of voice, art direction, and photographic style.</p>

							</div>

						</div>
					</div>
				</div>
			</div> <!-- END FEATURES-2 WRAPPER -->
		</div> <!-- End container -->
	</section> <!-- END FEATURES-2 -->

	<!-- CONTACTS-2
			================================wide-50=======inner-page-hero====== -->
	<section id="contacts-2" class="bg-snow pt-40  contacts-section division">
		<div class="container">

			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-10">
					<div class="section-title title-02 mb-80">

						<!-- Title -->
						<h2 class="p-lg txtredd">Looking for the Creative Logo Design Company? Enquire Now</h2>

					</div>
				</div>
			</div>

			<!-- CONTACT FORM -->
			<div class="row justify-content-center">
				<div class="col-lg-6 col-xl-6">
					<div class="post-inner-img">
						<img class="img-fluid" src="https://clickboxagency.com/images/contacts.png" width="300" height="300" alt="Branch office" />
					</div>
				</div>
				<div class="col-lg-6 col-xl-6">
					<div class="form-holder">
						<form name="contactform" method="post" class="row contact-form">

							<!-- Form Select -->
							<!-- Contact Form Input -->
							<div class="col-md-6">
								<!-- <p class="p-lg">Your Name: </p> -->
								<input type="text" name="name" class="form-control name" placeholder="Your Name*">
							</div>

							<div class="col-md-6">
								<!-- <p class="p-lg">Your Email Address: </p> -->
								<input type="text" name="email" class="form-control email" placeholder="Email Address*">
							</div>
							<div class="col-md-12">
								<!-- <p class="p-lg">Your Mobile Number: </p> -->
								<input type="text" name="phone" class="form-control phone" placeholder="Mobile Number*">
							</div>


							<div class="col-md-12">
								<!-- <p class="p-lg">Share Your Requirements: </p> -->
								<!-- <textarea class="form-control message" name="message" rows="6" placeholder="I have a problem with..."></textarea> -->
								<textarea class="form-control message" name="message" rows="6" placeholder="Share Your Requirements:"></textarea>
							</div>

							<!-- Contact Form Button -->
							<div class="col-md-12 mt-15 form-btn text-right">
								<button type="submit" class="btn btn-skyblue yellow-hover submit" name="send">Submit Request</button>
							</div>

							<!-- Contact Form Message -->
							<div class="col-lg-12 contact-form-msg">
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
				</div>
			</div> <!-- END CONTACT FORM -->
		</div> <!-- End container -->
	</section> <!-- END CONTACTS-2 -->
	<!-- NEWSLETTER-1
			============================================= -->
	<!-- <section id="newsletter-1" class="wide-20 newsletter-section division">
		<div class="container">
			<div class="newsletter-wrapper bg-tra-yellow">
				<div class="row d-flex align-items-center "> -->

	<!-- NEWSLETTER TEXT -->
	<!-- <div class="col-lg-8 col-sm-12">
						<div class="newsletter-txt pr-20"> -->

	<!-- Title -->
	<!-- <h4 class="h4-lg">Stay Up to Date With Our News, Ideas and Updates</h4>
						</div>
					</div> -->


	<!-- NEWSLETTER FORM -->
	<!-- <div class="col-lg-4 col-sm-12">
						<form class="newsletter-form">

							<div class="input-group">

								<span class="input-group-btn">
									<a href="#contacts-2" type="submit" class="btn btn-md btn-pink tra-grey-hover">Subscribe Now</a>
								</span>
							</div> -->

	<!-- Newsletter Form Notification -->
	<!-- <label for="s-email" class="form-notification"></label>

						</form> -->
	<!-- </div>  -->
	<!-- END NEWSLETTER FORM -->


	<!-- </div> <!-- End row --
			</div> <!-- End newsletter-wrapper --
		</div> <!-- End container --
	</section> END NEWSLETTER-1 -->

	<!-- SECTION -->
	<section class="bg-snow pt-20 content-3 features-section division ">
		<div class="container ">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<h2 class="h3-xs text-center" style="color:#00a4e1;">Why Should You Use Clickbox for Logo Design? </h2>
						<p class="p-lg">A great logo may boost brand recognition and user engagement. At ClickBox, a logo design company in Coimbatore, we make logos that are both interesting and improve the value of your brand. Our logo designers employ pleasant graphic elements, a nice color palette, elegant calligraphy, and great design art to make your company stand out.</p>
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
								<img class="img-fluid" src="https://clickboxagency.com/images/logodesign-img01.jpg" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Creative in Our Way</h5>

							<!-- Text -->
							<p class="p-lg">Logo designers are born creative. Clickbox logo designers are real and imaginative. Our designers have a vivid imagination. Our designers prioritize simplicity. Our designs are all eye-catching.</p>

						</div>
					</div>
					<!-- FEATURE BOX #2 -->
					<div class="col ">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="https://clickboxagency.com/images/logodesign-img02.jpg" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Better Portfolio</h5>
							<!-- Text -->
							<p class="p-lg">Working with a reputable logo design agency in Coimbatore lets you see how they interpret basic ideas. Our logo designers have time to show their work. Our designers' portfolios showcase their hobbies and show our work style and preferences.</p>
						</div>
					</div>
					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="https://clickboxagency.com/images/logodesign-img03.jpg" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Timeline-Based Project</h5>

							<!-- Text -->
							<p class="p-lg">The deadline fluctuates because project demand changes. Before accepting a project, we are certain. Our staff will inform you of the logo's completion date. You may focus on other business matters while we develop your logo.
							</p>
						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->
			<!-- FEATURES-8 WRAPPER -->
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-3">

					<!-- FEATURE BOX #4 -->
					<div class="col ">
						<div class="fbox-8 mb-40 wow fadeInUp ">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="https://clickboxagency.com/images/logodesign-img04.jpg" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Attractive Packages </h5>
							<!-- Text -->
							<p class="p-lg">If you're ready to start your own business, ClickBox is a one-stop solution for all your design needs. We're just a click away from meeting your needs and providing you with quality branding at a convenient price and on time. Client-friendly packages are available.</p>
						</div>
					</div>
					<!-- FEATURE BOX #5 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="https://clickboxagency.com/images/logodesign-img05.jpg" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Skilled Designer </h5>
							<!-- Text -->
							<p class="p-lg">Our imaginative designers use a comprehensive strategy to promote your brand. We consider every piece of information you provide while building your brand and build unique strategies to boost your company. </p>
						</div>
					</div>
					<!-- FEATURE BOX #6 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="https://clickboxagency.com/images/logodesign-img06.jpg" alt="feature-icon" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Different Design Concepts
							</h5>
							<!-- Text -->
							<p class="p-lg">Our imaginative designers, strategists, and developers help you create a distinctive brand. Our adaptable method meets your needs. Before branding, we investigate the customer's market and needs. This helps us produce meaningful, client-approved designs.
							</p>
						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->
		</div>
	</section>
	<!-- SECTION -->

	<!-- DOWNLOAD-1
			============================================= -->
	<section id="download-1" class="bg-snow pt-20 download-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-11 col-lg-11">
					<div class="section-title title-02 mb-75">

						<!-- Section ID -->
						<!-- <span class="section-id txt-upcase">100+ Hiring Partners</span> -->

						<!-- Title -->
						<h2 class="h3-xs text-center" style="color:#cc0444;">Clickbox Features Several Icons and Drawings. Enter a Term in the Search Field, then Drag and Drop a Picture Into Your Design.</h2>

					</div>
				</div>
			</div>

			<div class="row justify-content-center ">
				<div class="col-xl-10">
					<!-- VERSION RELEASE -->
					<div class="version-release ">

						<!-- Release Data -->
						<div class="release-data">

							<h4 class="h4-xs">Branding Design</h4>
							<!-- Version Data -->
						</div>
						<div class="row dflex-row">
							<div class="col-lg-6">
								<div class="release-highlights">
									<p class="p-lg txt-justify">A company's worth grows with recognizable, strong branding. We'll make a great first impression. ClickBox provides custom logo design, corporate logo design, e-business logo design, banner logo design, collateral design, etc. at Clickbox Branding, a leading logo design firm in Coimbatore, India. Get the ideal logo from our expert designers. We combine innovation, honesty, simplicity, trustworthiness, and the way it looks to make a logo that builds trust and strengthens relationships with customers.</p>
									<!-- <ul class="simple-list">
										<li class="list-item">
											<p class="p-lg">What is digital marketing?</p>
										</li>
										<li class="list-item">
											<p class="p-lg"> How Has Digital Marketing Evolved?</p>
										</li>
										<li class="list-item">
											<p class="p-lg">Definition of digital marketing</p>
										</li>
										<li class="list-item">
											<p class="p-lg">History and evolution of digital marketing</p>
										</li>
										<li class="list-item">
											<p class="p-lg">Types of digital marketing approaches – pull and push digital marketing</p>
										</li>


									</ul> -->
								</div>
							</div>
							<div class="col-lg-6">
								<!-- Release Highlights -->
								<div class="release-highlights">
									<!-- Image -->
									<div class="fbox-img bg-whitesmoke-gradient">
										<img class="img-fluid" src="https://www.clickboxagency.com/images/ecommerce-seo-09.png" alt="marketing-automation-via-email" />
									</div>
								</div>

							</div>
						</div>


					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">

						<!-- Release Data -->
						<div class="release-data">

							<h4 class="h4-xs">Brochure Design </h4>

							<!-- Version Data -->

						</div>

						<!-- Release Highlights -->

						<div class="row dflex-row">
							<div class="col-lg-6">
								<!-- Release Highlights -->
								<div class="release-highlights">
									<!-- Image -->
									<div class="fbox-img bg-whitesmoke-gradient">
										<img class="img-fluid" src="https://www.clickboxagency.com/images/ecommerce-seo-09.png" alt="marketing-automation-via-email" />
									</div>
								</div>

							</div>
							<div class="col-lg-6">
								<div class="release-highlights">
									<p class="p-lg txt-justify">ClicBox Agency can help you get brochures and flyers that are made just for your business. With an attractive brochure, a company can tell people about new products, give them information, promote sales, and get people interested. We help you get the attention of your target audience by making brochures that are both informative and interesting. With the brochures and flyers we make for you, you can tell people how you can help them solve their problems.</p>
								</div>
							</div>

						</div>


					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">

						<!-- Release Data -->
						<div class="release-data">

							<h4 class="h4-xs">Social Media Poster Design</h4>
						</div>
						<div class="row dflex-row">
							<div class="col-lg-6">
								<div class="release-highlights">
									<p class="p-lg txt-justify">Clickbox's unique social media poster designs will grab your clients' attention. We help you develop your brand's identity by designing social media posters. ClickBox blends imagery, the brand logo, and typography to tell your business's narrative. We help you make a good first impression with your customers. ClickBox's designers follow market trends.</p>
								</div>
							</div>
							<div class="col-lg-6">
								<!-- Release Highlights -->
								<div class="release-highlights">
									<!-- Image -->
									<div class="fbox-img bg-whitesmoke-gradient">
										<img class="img-fluid" src="https://www.clickboxagency.com/images/ecommerce-seo-09.png" alt="marketing-automation-via-email" />
									</div>
								</div>

							</div>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">

						<!-- Release Data -->
						<div class="release-data">

							<h4 class="h4-xs">Different Concepts</h4>
						</div>
						<div class="row dflex-row">
							<div class="col-lg-6">
								<!-- Release Highlights -->
								<div class="release-highlights">
									<!-- Image -->
									<div class="fbox-img bg-whitesmoke-gradient">
										<img class="img-fluid" src="https://www.clickboxagency.com/images/ecommerce-seo-09.png" alt="marketing-automation-via-email" />
									</div>
								</div>

							</div>
							<div class="col-lg-6">
								<div class="release-highlights">
									<p class="p-lg txt-justify">With more and more companies and products competing for market recognition online and offline, a well-designed logo is a business advantage that grabs customers' attention and shows at a glance what a brand stands for. A good logo is more than just an icon; it shows what a company stands for and acts as a visual representation for the brand.</p>
								</div>
							</div>

						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">

						<!-- Release Data -->
						<div class="release-data">

							<h4 class="h4-xs">Website Development</h4>

							<!-- Version Data -->

						</div>
						<div class="row dflex-row">
							<div class="col-lg-6">
								<div class="release-highlights">
									<p class="p-lg txt-justify">Clickbox is a company that offers the best website development company in Coimbatore. We make money-making websites that not only bring in their target audiences but also persuade them to buy something. Having a website is no longer seen as important or expensive in this digital age. Instead, having a website is now just the way most businesses do things.</p>
								</div>
							</div>
							<div class="col-lg-6">
								<!-- Release Highlights -->
								<div class="release-highlights">
									<!-- Image -->
									<div class="fbox-img bg-whitesmoke-gradient">
										<img class="img-fluid" src="https://www.clickboxagency.com/images/ecommerce-seo-09.png" alt="marketing-automation-via-email" />
									</div>
								</div>

							</div>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">

						<!-- Release Data -->
						<div class="release-data">

							<h4 class="h4-xs">Omni Channel Video Creation</h4>
						</div>
						<div class="row dflex-row">
							<div class="col-lg-6">
								<div class="release-highlights">
									<p class="p-lg txt-justify">Omni-channel marketing is the way of the future when it comes to engaging with customers. It lets your company's brand talk to customers and clients across all platforms and media. This helps build strong, long-lasting relationships with customers. You may use it to improve the experience that customers have with your company and to establish a large, devoted client base.</p>
								</div>
							</div>
							<div class="col-lg-6">
								<!-- Release Highlights -->
								<div class="release-highlights">
									<!-- Image -->
									<div class="fbox-img bg-whitesmoke-gradient">
										<img class="img-fluid" src="https://www.clickboxagency.com/images/ecommerce-seo-09.png" alt="marketing-automation-via-email" />
									</div>
								</div>

							</div>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">

						<!-- Release Data -->
						<div class="release-data">

							<h4 class="h4-xs">Video Production </h4>
						</div>
						<div class="row dflex-row">
							<div class="col-lg-6">
								<!-- Release Highlights -->
								<div class="release-highlights">
									<!-- Image -->
									<div class="fbox-img bg-whitesmoke-gradient">
										<img class="img-fluid" src="https://www.clickboxagency.com/images/ecommerce-seo-09.png" alt="marketing-automation-via-email" />
									</div>
								</div>

							</div>
							<div class="col-lg-6">
								<div class="release-highlights">
									<p class="p-lg txt-justify">No matter if you're representing a big brand or a startup, we know that as an expert, you can't show off your brand everywhere by yourself. That's why every brand needs professional videos.
										As the best video editing service in Coimbatore, India, we believe in giving our clients one of the most powerful tools for marketing.
									</p>
								</div>
							</div>

						</div>
					</div> <!-- END VERSION RELEASE -->

				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END DOWNLOAD-1 -->


	<!--4 SECTION -->
	<!-- <section class="bg-snow content-3 features-section division mb-40">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<!-- style="color:#cc0444;" --
						<h2 class="h3-xs text-center" style="color:#ffc11d;">Other Services</h2>

					</div>
				</div>
			</div>

			<!-- ADD CARD CONTANTS -->
	<!-- FEATURES-8 WRAPPER --
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-3">
					<!-- FEATURE BOX #1 --
					<div class="col  ">
						<div class="fbox-8 shadow mb-40 h-100 wow fadeInUp ">

							<!-- Image --
							<div class="fbox-img ">
								<img class="img-fluid" src="https://clickboxagency.com/images/img-21.png" alt="feature-icon" />
							</div>

							<!-- Title --
							<h5 class="h5-md">Delivering a URL
							</h5>

							<!-- Text --
							<p class="p-lg"> Delivering a URL refers to how a URL actually appears in the location bar. A crucial component of any effective portable SEO strategy is URL delivery. To succeed with this area of flexible SEO, organizations must create and maintain their URL delivery rules using elements like sitemaps, approved labels, and internal connections.
							</p>

						</div>
					</div>


					<!-- FEATURE BOX #2 --
					<div class="col  ">
						<div class="fbox-8 mb-40 h-100 shadow wow fadeInUp">

							<!-- Image --
							<div class="fbox-img ">
								<!-- bg-whitesmoke-gradient --

								<img class="img-fluid" src="https://clickboxagency.com/images/img-22.png" alt="feature-icon" />
							</div>

							<!-- Title --
							<h5 class="h5-md">Page Delivery </h5>


							<!-- Text --
							<p class="p-lg">JavaScript is typically used to manage and control page delivery, but it is difficult to predict how this will affect creeping and ordering. Even though Google claims that JavaScript can be slower and isn't a bad factor for rankings, the programming language can actually increase complexity and reduce a piece of content's ability to rank.
							</p>

						</div>
					</div>

					<!-- FEATURE BOX #3 --
					<div class="col  ">
						<div class="fbox-8 mb-40 h-100 shadow wow fadeInUp">

							<!-- Image --
							<div class="fbox-img ">
								<img class="img-fluid" src="https://clickboxagency.com/images/img-22.png" alt="feature-icon" />
							</div>

							<!-- Title --
							<h5 class="h5-md">Mobile Focused Pricing</h5>


							<!-- Text --
							<p class="p-lg">Monitoring to the map, which suggests the code or microdata, that aids a flexible web search tool in locating a page. Any item evaluations, surveys, locations, plans, and item complexities are included in the outline. These elements increase a page's suitability for various endeavors and increase the likelihood that the page will appear in search engine results.</p>
						</div>
					</div>
				</div> <!-- End row --
			</div> <!-- END FEATURES-8 WRAPPER --
		</div>
		</div>
	</section> -->


	<!-- FEATURES-3
			============================================= -->
	<!-- <section id="features-3" class="pb-60 features-section division" style="background-color: #dff5ff;">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-80">

						<h2 class="h2-md ">Our Services</h2>
					</div>
				</div>
			</div>
	<div class="fbox-3-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
				
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

						<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-yellow yellow-color">
								<span class="flaticon-idea"></span>
							</div>

					<div class="fbox-txt-center">

								<h5 class="h5-md ">Branding</h5>

								<p class="p-lg ">Porta semper lacus cursus feugiat primis ultrice ligula risus an
									auctor
									tempus feugiat at impedit felis
								</p>

							</div>

						</div>
					</div>

					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-red red-color">
								<span class="flaticon-smartphone"></span>
							</div>

							<div class="fbox-txt-center">

								<h5 class="h5-md ">Logo Design</h5>
								<p class="p-lg ">Porta semper lacus cursus feugiat primis ultrice ligula risus an
									auctor
									tempus feugiat at impedit felis
								</p>

							</div>
						</div>
					</div>

					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-skyblue skyblue-color">
								<span class="flaticon-algorithm"></span>
							</div>
							<div class="fbox-txt-center">
								<h5 class="h5-md ">Graphic Design</h5>
								<p class="p-lg ">Porta semper lacus cursus feugiat primis ultrice ligula risus an
									auctor
									tempus feugiat at impedit felis
								</p>

							</div>

						</div>
					</div>
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-skyblue skyblue-color">

								<span class="flaticon-web-design"></span>
							</div>
							<div class="fbox-txt-center">
								<h5 class="h5-md ">Package Design</h5>
								<p class="p-lg ">Porta semper lacus cursus feugiat primis ultrice ligula risus an
									auctor
									tempus feugiat at impedit felis
								</p>

							</div>
						</div>
					</div>
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">
							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-yellow yellow-color">
								<span class="flaticon-layers"></span>
							</div>
							<div class="fbox-txt-center">
								<h5 class="h5-md ">Website Design</h5>
								<p class="p-lg ">Porta semper lacus cursus feugiat primis ultrice ligula risus an
									auctor
									tempus feugiat at impedit felis
								</p>
							</div>

						</div>
					</div>
					<div class="col">
						<div class="fbox-3 pc-15 mb-40 wow fadeInUp">

							<div class="fbox-ico-center ico-rounded-lg ico-45 bg-tra-red red-color">
								<span class="flaticon-email"></span>
							</div>
							<div class="fbox-txt-center">
								<h5 class="h5-md ">Digital Marketing</h5>
								<p class="p-lg ">Porta semper lacus cursus feugiat primis ultrice ligula risus an
									auctor
									tempus feugiat at impedit felis
								</p>

							</div>

						</div>
					</div>
				</div>
			</div>
		</div> 
	</section>  -->

	<!-- OUR CLIENTS ADD -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/clickboxdemo/our-clients.php') ?>
	<!-- OUR CLIENTS END -->

	<!-- DIVIDER LINE -->
	<!-- <hr class="divider"> -->

	<!-- FAQs-2 ============================================= -->
	<section id="faqs-2" class="wide-10 faqs-section division">
		<div class="container">
			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-80">
						<!-- Title -->
						<h2 class="h2-md" style="color:#00a4e1">Frequently Asked Questions</h2>

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
											<p class="p-lg text-justify">Start a project on ClickBox, choose how much you want to spend, and describe what you need from all sectors.<br>
												Working with the global community of professional designers at ClickBox and giving feedback can help you find ideas and logos that you and your clients will lik
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
											<p class="p-lg text-justify">Yes, it is necessary to be ready for suggestions. You likely already know what your company's logo should look like, as well as the color and icon that should be employed. The better results you are likely to get will depend on how well you describe your needs for a logo. If you're short on time, use this page as inspiration and for some logo possibilities.</p>
										</div>
									</div>
								</div>
								<!-- QUES 3 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingThree">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<b>What must I do to obtain the best logo for my company?</b>
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg text-justify">To make sure you get the perfect logo design for you, write a clear and detailed brief for the design of your logo, set a budget, and give designers direct, constructive feedback as they work.</p>
										</div>
									</div>
								</div>
								<!-- QUES 4 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFour">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											<b>How long does it take to develop a logo?</b>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg text-justify">As soon as we get all of the necessary information from you, our logo designers will begin to generate ideas for an original and inventive logo design that meets your specifications. The final logo is finished within two to three weeks after all of your suggested changes have been made.</p>
										</div>
									</div>
								</div>
								<!-- QUES 5 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<b>How long will it take for me to see my samples?</b>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg text-justify">Our logo design services center on a series of brainstorming sessions. Once we get your updated list of requirements, our logo designers will start working on possible logos and give you examples in two to three days.</p>
										</div>
									</div>
								</div>
								<!-- QUES 6 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingSix">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
											<b>How does your method for logo design work?</b>
										</button>
									</h2>
									<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg text-justify">In our very first meeting, we discussed your logo-related thoughts and vision. As part of our logo design services, we also pay close attention to your preferences, dislikes, and target demographic. Thus, we arrive at a design idea that meets your requirements. We then create examples and provide them to you. And once we've made all the necessary changes, we'll give you the finished logo.</p>
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
							<!-- QUES 7-->
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingSeven">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
											<b>Can I interact with the designers directly?</b>
										</button>
									</h2>
									<div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg text-justify">Sure, in reality, a logo's success depends a lot on what the client wants, how they see things, and what ideas they have.<br> We are the best logo design company because we follow a clear process that lets you talk directly to the designer and tell them what you think.</p>
										</div>
									</div>
								</div>
								<!-- QUES 8 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingEight">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
											<b>How much will it cost to have a logo created by Clickbox?</b>
										</button>
									</h2>
									<div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg text-justify">We provide three distinct options to companies, regardless of their size or sector. These plans are Basic, Plus, and Premium. Each plan has its own features, which you may choose depending on your needs and finances.</p>
										</div>
									</div>
								</div>
								<!-- QUES 9 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingNine">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
											<b>What if I want to make modifications to my logo?</b>
										</button>
									</h2>
									<div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg text-justify">Our dedicated logo designers try to create a logo that not only represents your business but also improves the overall image of your brand. We will happily make modifications till you reach the desired logo.</p>
										</div>
									</div>
								</div>
								<!-- QUES 10 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTen">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
											<b>Do you provide help after the completion of the logo design process?</b>
										</button>
									</h2>
									<div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg text-justify">As a premier logo design firm, we see our clients as our most valuable asset. So, we will continue to help even after the process of making the logo is done. Instead, we value our lengthy friendship.</p>
										</div>
									</div>
								</div>
								<!-- QUES 11 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingLeven">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeven" aria-expanded="false" aria-controls="collapseLeven">
											<b>How does registration of copyright work?</b>
										</button>
									</h2>
									<div id="collapseLeven" class="accordion-collapse collapse" aria-labelledby="headingLeven" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg text-justify">As soon as the logo is completed and all payments are received, we begin working on the copyright. Copyright protection grants you exclusive rights to the logo's print, exhibition, and distribution, allowing you to do whatever you want with it.</p>
										</div>
									</div>
								</div>

								<!-- QUES 12 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwelve">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
											<b>Can you create a logo from my concept or search?</b>
										</button>
									</h2>
									<div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg text-justify">Your ideas, goals, and vision will definitely be the main sources of inspiration for your company's logo. If you don't know how to design your logo, don't worry. Our logo designers will help you figure it out. so that we can give your brand a distinctive personality in the most inventive way.</p>
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
	<!-- CONTACTS-2
			================================wide-50=======inner-page-hero====== -->


	<!-- CALL TO ACTION-5
			============================================= -->
	<section id="cta-5" class="cta-section division ">
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
							<a href="https://clickboxagency.com/contacts/" class="btn btn-skyblue yellow-hover">Get in touch with us</a>

						</div>
					</div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CALL TO ACTION-5 -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/clickboxdemo/footer.php') ?>
	</div> <!-- END PAGE CONTENT -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/clickboxdemo/footer-script.php') ?>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "www.clickboxagency.com/logo-design/coimbatore/",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "www.clickboxagency.com/logo-design/coimbatore/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "ClickBox: Creative Logo Design Company Coimbatore",
			"alternateName": "logo design company in coimbatore, logo design agency in coimbatore, logo designers coimbatore, logo design service in coimbatore, animated logo design services coimbatore, best logo design company in coimbatore, best logo design agency in coimbatore, best logo designers coimbatore",
				"url": "https://www.clickboxagency.com/logo-design/coimbatore/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "ClickBox: Creative Logo Design Company Coimbatore",
			"url": "https://www.clickboxagency.com/logo-design/coimbatore/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "ClickBox is a best logo designing company in Coimbatore, provides brand identity services through logos, brochures, websites, flyers, corporate identity designs, and more. ",
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
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/clickboxdemo/popup1.php') ?>

</body>

</html>