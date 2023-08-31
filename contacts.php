<?php

if (isset($_POST['send'])) {

	// getting post values
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$services = $_POST['services'];
	$company = $_POST['company'];
	$budget = $_POST['budget'];
	$sendNDA = $_POST['sendNDA'];
	$message = $_POST['message'];
	$subject = 'Contact Page Form Details';
	$to = "sales@akkenna.com,james@akkenna.com,pradeep@akkenna.com,info@clickboxagency.com,sofia@akkenna.com";
	$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Clickbox Agencies</title> 
    </head> 
    <body> 
        <h3>Hi Admin, Please find the below New Member Contact Details!</h3> 
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
              <th>Company:</th><td>' . $company . '</td> 
           </tr> 
		   <tr style="background-color: #e0e0e0;"> 
              <th>Budget:</th><td>' . $budget . '</td> 
           </tr> 
		   <tr style="background-color: #e0e0e0;"> 
		      <th>send NDA:</th><td>' . $sendNDA . '</td> 
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
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="ClickBox Agency" />
	<title>Contact Us - ClickBox Advertising &amp; Digital Marketing Agency</title>
	<meta name="description" content="ClickBox provides various digital marketing services, web designing, and web hosting services in Coimbatore. Call: +91 88705 78887 or email: info@clickboxagency.com" />
	<meta name="keywords" content="digital marketing agency coimbatore, digital marketing agency, digital marketing agency india">
	<meta name="language" content="en" />
	<meta name="revisit-after" content="7 days" />
	<meta name="Expires" content="never" />
	<meta name="Distribution" content="Global" />
	<meta name="Rating" content="general" />
	<meta name="search engines" content="ALL" />
	<meta name="copyright" content="https://www.clickboxagency.com/" />
	<meta name="email" content="info@clickboxagency.com" />
	<link rel="canonical" href="https://www.clickboxagency.com/contacts/" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.clickboxagency.com/contacts/" />
	<meta property="og:site_name" content="https://www.clickboxagency.com/contacts/" />
	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />
	<meta property="og:title" content="Contact Us - ClickBox Advertising &amp; Digital Marketing Agency" />
	<meta property="og:description" content="ClickBox provides various digital marketing services, web designing, and web hosting services in Coimbatore. Call: +91 88705 78887 or email: info@clickboxagency.com" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="Contact Us - ClickBox Advertising &amp; Digital Marketing Agency" />
	<meta name="twitter:description" content="ClickBox provides various digital marketing services, web designing, and web hosting services in Coimbatore. Call: +91 88705 78887 or email: info@clickboxagency.com" />
	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />
	<?php include('header-style.php') ?>

</head>

<body>
	<?php include('header.php') ?>
	<!-- CONTACTS EDIT -->
	<section id="contacts-2" class="bg-snow pt-100 contacts-section division">
		<div class="container">
			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="section-title title-02 mb-80">
						<!-- Title -->
						<h2 class="p-lg txtredd">Have a Question? Need Help? Don't Hesitate, <br/>Drop us a Line</h2>
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
							<!-- Contact Form Input -->
							<div class="col-md-6">
								<input type="text" name="name" class="form-control name" placeholder="Your Name*">
							</div>
							<div class="col-md-6">
								<input type="text" name="email" class="form-control email" placeholder="Email Address*">
							</div>
							<div class="col-md-6">
								<input type="text" name="phone" class="form-control phone" placeholder="Mobile Number*">
							</div>
							<div class="col-md-6">
								<input type="text" name="company" class="form-control company" placeholder="Company Name*">
							</div>

							<div class="col-md-6">
								<select class="form-select" aria-label="services" name="services" id="services" required>
									<option value="">Select your services</option>
										<option value="Mobile App Development">Mobile App Development</option>
										<option value="Web App Development">Web App Development</option>
										<option value="Hire Dedicated Development">Hire Dedicated Development</option>
										<option value="Ecommerce Development">Ecommerce Development</option>
										<option value="Logo Design">Logo Design</option>
										<option value="UI UX Design">UI UX Design</option>
										<option value="Website Design and Development">Website Design and Development</option>
										<option value="Wordpress Development">Wordpress Development</option>
										<option value="Shopify Website Development">Shopify Website Development</option>
										<option value="Website Redesigning">Website Redesigning</option>
									    <option value="Digital Marketing">Digital Marketing</option>
									    <option value="Search Engine Optimization">Search Engine Optimization</option>
									    <option value="Social Media Marketing">Social Media Marketing</option>
								    	<option value="Pay Per Click Advertising">Pay Per Click Advertising</option>
								    	<option value="Explainer Video Creation">Explainer Video Creation</option>
									
								</select>
							</div>
							<div class="col-md-6">
								<select class="form-select" aria-label="budget" name="budget" id="budget" required>
									<option value="">Select your budget</option>
									<option value="Less than 10K USD">Less than 10K USD</option>
									<option value="10K-25K USD">10K-25K USD</option>
									<option value="25K-50K USD">25K-50K USD</option>
									<option value="50K-100K USD">50K-100K USD</option>
									<option value="More than 100K USD">More than 100K USD</option>
								</select>
							</div>
							<div class="col-md-12">
								<textarea class="form-control message" name="message" rows="6" placeholder="Share Your Requirements:"></textarea>
							</div>
							<div class="col-md-6">
								<input type="checkbox" name="sendNDA" class="checkboxone">
								<label for="sendNDA">Send NDA</label>
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
			<h3 class="p-lg text-center">Visit Our Offices, We’re Easy to Reach</h3>
			<div class="cta-8-wrapper pc-25">
				<div class="row row-cols-1 row-cols-md-2 mt-lg-4">
					<!-- BOX #1-->
					<div class=" col-lg-4">
						<div class="cta-box cta-top-box bg-white wow fadeInUp">
							<!-- Title -->
							<h5 class="h5-md text-center">Canada</h5>
							<div class="post-inner-img">
								<img class="img-fluid" src="https://www.clickboxagency.com/images/flag-canada.jpg" width="200" height="200" alt="Branch office" />
							</div>
							<!-- Text -->
							<p class="p-md text-center">644,Orchards Blvd SW,<br> Edmonton Alberta,<br> T6X 2L4,<br>+1 (780) 678-7657</p>
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
							<p class="p-md text-center">1040D Orchard Street,<br> North Brunswick,<br> NJ 08902,<br> +1 587 545 6195</p>

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
							<p class="p-md text-center">178/4, KPN complex,<br> Avinashi Road,Coimbatore,<br> Tamil Nadu - 641004,<br> +91 887 057 8887</p>
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
									<b>Mobile:</b> +91 88705 78887</br>
								</h5>
							</div>
						</div>
						<!-- </a> -->
					</div> <!-- END BOX #2 -->
				</div> <!-- End cta-8-wrapper -->
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CALL TO ACTION-8 -->

	<?php include('footer1.php') ?>
	</div> <!-- END PAGE CONTENT -->
	<?php include('footer-script.php') ?>

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "https://www.clickboxagency.com/contacts/",
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
			"alternateName": "digital marketing agency coimbatore, digital marketing agency, digital marketing agency india",
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
			"description": "ClickBox provides various digital marketing services, web designing, and web hosting services in Coimbatore. Call: +91 88705 78887 or email: info@clickboxagency.com",
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
	<?/*php include('popup1.php') */ ?>
</body>

</html>