<?php

//  
if (isset($_POST['send'])) {

	// getting post values
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$services = $_POST['services'];

	$subject = 'Contact Page Form Details';
	$message = $_POST['message'];
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
		<tr style="background-color: #e0e0e0;"> 
		<th>Services:</th><td>' . $services . '</td> 
	</tr> 
		<tr style="background-color: #e0e0e0;"> 
		<th>Message:</th><td>' . $message . '</td> 
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="ClickBox Agency" />
	<title>Contact Us - ClickBox Advertising &amp; Digital Marketing Agency</title>
	<meta name="description" content="Clickbox Agency is a global digital marketing agency based in Coimbatore, India. Clickbox agency specializing in SEO, social media, PPC, content writing, responsive website design, and web hosting services. We help companies increase sales, leads, and e-commerce revenue. " />
	<meta name="keywords" content="digital marketing agency coimbatore, digital marketing agency, digital marketing agency india">
	<meta name="language" content="en" />
	<meta name="revisit-after" content="7 days" />
	<meta name="Expires" content="never" />
	<meta name="Distribution" content="Global" />
	<meta name="Rating" content="general" />
	<meta name="search engines" content="ALL" />
	<meta name="copyright" content="www.clickboxagency.com" />
	<meta name="email" content="info@clickboxagency.com" />
	<link rel="canonical" href="https://www.clickboxagency.com/contacts.php" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.clickboxagency.com/contacts.php" />
	<meta property="og:site_name" content="https://www.clickboxagency.com" />
	<meta property="og:image" content="www.clickboxagency.com/images/banner-img.png" />
	<meta property="og:title" content="Contact Us - ClickBox Advertising &amp; Digital Marketing Agency" />
	<meta property="og:description" content="Clickbox Agency is a global digital marketing agency based in Coimbatore, India. Clickbox agency specializing in SEO, social media, PPC, content writing, responsive website design, and web hosting services. We help companies increase sales, leads, and e-commerce revenue. " />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Contact Us - ClickBox Advertising &amp; Digital Marketing Agency" />
	<meta name="twitter:description" content="Clickbox Agency is a global digital marketing agency based in Coimbatore, India. Clickbox agency specializing in SEO, social media, PPC, content writing, responsive website design, and web hosting services. We help companies increase sales, leads, and e-commerce revenue. " />
	<meta name="twitter:image" content="www.clickboxagency.com/images/banner-img.png" />
	<?php include('header-style.php') ?>

</head>

<body>
	<?php include('header.php') ?>
	<!-- CONTACTS EDIT -->
	<!-- <hr class="divider"> -->
	<!-- CONTACTS-2
			================================wide-50=======inner-page-hero====== -->
	<section id="contacts-2" class="bg-snow pt-85 contacts-section division">
		<div class="container">

			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="section-title title-02 mb-80">

						<!-- Title -->
						<h2 class="p-lg txtredd">Have a Question? Need Help? Don't Hesitate, Drop us a Line</h2>

					</div>
				</div>
			</div>

			<!-- CONTACT FORM -->
			<div class="row justify-content-center">
				<div class="col-lg-6 col-xl-6">
					<div class="post-inner-img">
						<img class="img-fluid" src="https://www.clickboxagency.com/images/contacts.png" width="300" height="300" alt="Branch office" />
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
							<div class="col-md-6">
								<!-- <p class="p-lg">Your Mobile Number: </p> -->
								<input type="text" name="phone" class="form-control phone" placeholder="Mobile Number*">
							</div>

							<div class="col-md-6">
								<!-- <p class="p-lg">Services: </p> -->
								<!-- <input type="text" name="phone" class="form-control phone" placeholder="Mobile Number*"> -->
								<select class="form-select" aria-label="services" name="services" id="services">
									<option selected>services</option>
									<option value="Digital Marketing">Digital Marketing</option>
									<option value="Content Writing">Content Writing</option>
									<option value="Website Development">Website Development</option>
									<option value="Videos Creation">Videos Creation</option>
									<option value="Article Writing">Article Writing</option>
									<option value="Seo Content Writing">Seo Content Writing</option>
									<option value="Pressrelease Writing">Pressrelease Writing</option>
									<option value="Website Content Writing">Website Content Writing</option>
									<option value="Logo Design">Logo Design</option>
									<option value="Brochure Design">Brochure Design</option>
									<option value="Flyer Design">Flyer Design</option>
									<option value="Ecommerce Website Development">Ecommerce Website Development</option>
									<option value="Wordpress Website Development">Wordpress Website Development</option>

									<option value="Blog Writing ">Blog Writing</option>
									<option value="Brochure Content Writing">Brochure Content Writing</option>
									<option value="UI UX Design">UI UX Design</option>
									<option value="Website Redesigning">Website Redesigning</option>
									<option value="Shopify Website Development">Shopify Website Development</option>
									<option value="Product Description Writing">Product Description Writing</option>
									<option value="Packaging Design Writing">Packaging Design Writing</option>
									<option value="Ecommerce Marketing">Ecommerce Marketing</option>
									<option value="Ecommerce Seo">Ecommerce Seo</option>
									<option value="Ebook Writing">Ebook Writing</option>
									<option value="Company Profile Writing">Company Profile Writing</option>
									<option value="Content Writing">Content Writing</option>
									<option value="Company Profile Design">Company Profile Design</option>

								</select>
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

	<section id="cta-8" class="bg-snow pt-30  cta-section division">
		<div class="container">
			<h1 class="p-lg text-center txtbluee">Our Offices</h1>
			<h3 class="p-lg text-center">Visit our offices, we’re easy to reach</h3>
			<div class="cta-8-wrapper pc-25">
				<div class="row row-cols-1 row-cols-md-2 mt-lg-4">
					<!-- row-cols-md-2 -->

					<!-- BOX #1-->
					<div class=" col-lg-4">
						<div class="cta-box cta-top-box bg-white wow fadeInUp">

							<!-- Title -->
							<h5 class="h5-md text-center">Canada</h5>
							<div class="post-inner-img">
								<img class="img-fluid" src="https://www.clickboxagency.com/images/flag-canada.jpg" width="200" height="200" alt="Branch office" />
							</div>
							<!-- Text -->
							<p class="p-md text-center">

								<!-- <b>Address:</b> 178/4, KPN complex,</br> Opposite GRG School, Peelamedu,</br> Hope College, Coimbatore, Tamil Nadu - 641004 -->
								644,Orchards Blvd SW,<br> Edmonton Alberta,<br> T6X 2L4,<br>+1 (780) 678-7657
							</p>

						</div>
					</div> <!-- END BOX #1-->


					<!-- BOX #2 -->
					<div class="col-lg-4">
						<div class="cta-box cta-top-box bg-white wow fadeInUp">
							<!-- Title -->
							<h5 class="h5-md text-center">USA</h5>
							<div class="post-inner-img">
								<img class="img-fluid" src="https://www.clickboxagency.com/images/flag-united-states-america.jpg" width="200" height="200" alt="Branch office" />
							</div>
							<!-- Text -->
							<p class="p-md text-center">

								<!-- <b>Address:</b> 178/4, KPN complex,</br> Opposite GRG School, Peelamedu,</br> Hope College, Coimbatore, Tamil Nadu - 641004 -->
								1040D Orchard Street,<br> North Brunswick,<br> NE 08902,<br> +1 587 545 6195
							</p>

						</div>
					</div> <!-- END BOX #2 -->
					<!-- BOX #3 -->
					<div class="col-lg-4">
						<div class="cta-box cta-top-box bg-white wow fadeInUp">
							<!-- Title -->
							<h5 class="h5-md text-center">India - Coimbatore</h5>
							<div class="post-inner-img">
								<img class="img-fluid" src="https://www.clickboxagency.com/images/flag-india.jpg" width="200" height="200" alt="Branch office" />
							</div>
							<!-- Text -->
							<p class="p-md text-center">

								<!-- <b>Address:</b> 178/4, KPN complex,</br> Opposite GRG School, Peelamedu,</br> Hope College, Coimbatore, Tamil Nadu - 641004 -->
								178/4, KPN complex,<br> Avinashi Road,Coimbatore,<br> Tamil Nadu - 641004,<br> +91 7418 555 205
							</p>

						</div>
					</div> <!-- END BOX #1 -->
				</div> <!-- End cta-8-wrapper -->
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CALL TO ACTION-8 -->

	<section id="cta-8" class="bg-snow pt-40 pb-20 cta-section division">
		<div class="container">
			<div class="cta-8-wrapper pc-25">
				<div class="row row-cols-1 row-cols-md-2">
					<!-- row-cols-md-2 -->

					<!-- BOX #1 -->
					<div class="col">
						<div class="cta-box cta-top-box bg-white wow fadeInUp">

							<!-- Icon -->
							<div class="cta-ico">
								<div class="ico-60"><span class="flaticon-email"></span></div>
							</div>

							<!-- Text -->
							<div class="cta-txt">

								<!-- Title -->
								<h5 class="h5-md"></h5>

								<!-- Text -->
								<h5 class="p-lg">
									<b>Email:</b> info@clickboxagency.com</br>
								</h5>

							</div>

						</div>
					</div> <!-- END BOX #1 -->

					<!-- BOX #2 -->
					<div class="col">
						<a href="faqs.html">
							<div class="cta-box bg-white wow fadeInUp">

								<!-- Icon -->
								<div class="cta-ico">
									<div class="ico-60"><span class="flaticon-help"></span></div>
								</div>

								<!-- Text -->
								<div class="cta-txt">

									<!-- Title -->
									<h5 class="h5-md"></h5>

									<!-- Text -->
									<h5 class="p-lg">
										<b>Mobile:</b> +91 7418 555 205</br>
									</h5>

								</div>

							</div>
						</a>
					</div> <!-- END BOX #2 -->
				</div> <!-- End cta-8-wrapper -->
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CALL TO ACTION-8 -->




	<!-- <div class="map-responsive">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2007242.854708991!2d77.26661462963999!3d10.703892634747973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba85712f7e5dc0f%3A0x70197e57d569cff2!2sClickBox%20-%20Digital%20Marketing%20Agency!5e0!3m2!1sen!2sin!4v1652523216174!5m2!1sen!2sin" width="300" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	</div> -->
	<!-- DIVIDER LINE -->

	<!-- CALL TO ACTION-5
			============================================= -->
	<section id="cta-5" class="cta-section division">
		<div class="container">
			<div class="rel bg-01 cta-5-wrapper">
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
							<a href="../contacts/" class="btn btn-skyblue yellow-hover">Get in touch with us</a>

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
			"url": "https://www.clickboxagency.com/contacts/"
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/contacts/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "Contact Us - ClickBox Advertising &amp; Digital Marketing Agency",
			"alternateName": "digital marketing agency coimbatore, digital marketing agency, digital marketing agency india" / >
				"url": "https://www.clickboxagency.com/contacts/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "Contact Us - ClickBox Advertising &amp; Digital Marketing Agency",
			"url": "https://www.clickboxagency.com/contacts/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "Clickbox Agency is a global digital marketing agency based in Coimbatore, India. Clickbox agency specializing in SEO, social media, PPC, content writing, responsive website design, and web hosting services. We help companies increase sales, leads, and e-commerce revenue. " / >
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