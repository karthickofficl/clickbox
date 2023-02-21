<?php
/* 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require ($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/Exception.php');
require ($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/PHPMailer.php');
require ($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/SMTP.php');

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {

    $name = "kannan";
	$email = "kannan@gmail.com";
	$phone = "8903158381";
	$subject = 'Popup Form Details';
	$message ="Demo"; 
    
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'clickboxagency.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'noreply@clickboxagency.com';                     // SMTP username
    $mail->Password   = '@A9(n@kXW!$+';                               // SMTP password
    $mail->SMTPSecure = 'SSL';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('noreply@clickboxagency.com', 'Click Box Agency');
    // $mail->addAddress('sales@clickboxagency.com', 'Click Box Agency');
    $mail->addAddress('kannan2187@gmail.com', 'Kannan Perumal');  // Add a recipient
    
   // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo($email, $name);
    $mail->addCC('iamjamesstephan@gmail.com');
    $mail->addBCC('kannan2187@gmail.com');

    // Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    
    $body =' 
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
		<th>Message:</th><td>' . $message . '</td> 
	</tr> 


        </table> 
    </body> 
    </html>';
    
    // Content
    $mail->isHTML(true); // Set email format to HTML
    $mail->Subject = 'New Enquiry from Clickboxagency';
    $mail->Body    = 'Hi admin, from <b>' . $name . '!</b> <br /> <p>' . $body . '</p>';
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $m = $mail->send();
    print_r($m);
    if (!$m) {
	echo 'Message could not be sent.';
	} else {
		// echo 'Message has been sent';
		$result = '
    One of our representative will get in touch you.';
	}
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} */

//  
if (isset($_POST['send'])) {

	// getting post values
	$email = $_POST['email'];
	$subject = 'News Letter Subscription';


	$to = 'iamjamesstephan@gmail.com';
	$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to ClickBox Marketing Agency</title> 
    </head> 
    <body> 
        <h1>Thanks you for joining with us!</h1> 
        <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
        <th>Email:</th><td>' . $email . '</td> 
    </tr> 

        </table> 
    </body> 
    </html>';

	// Set content-type header for sending HTML email 
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

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
	<title>ClickBox Advertising &amp; Digital Marketing Agency in Coimbatore, India</title>
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
	<link rel="canonical" href="https://www.clickboxagency.com/" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.clickboxagency.com/" />
	<meta property="og:site_name" content="https://www.clickboxagency.com" />
	<meta property="og:image" content="www.clickboxagency.com/images/banner-img.png" />
	<meta property="og:title" content="ClickBox Advertising &amp; Digital Marketing Agency in Coimbatore, India" />
	<meta property="og:description" content="Clickbox Agency is a global digital marketing agency based in Coimbatore, India. Clickbox agency specializing in SEO, social media, PPC, content writing, responsive website design, and web hosting services. We help companies increase sales, leads, and e-commerce revenue. " />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="ClickBox Advertising &amp; Digital Marketing Agency in Coimbatore, India" />
	<meta name="twitter:description" content="Clickbox Agency is a global digital marketing agency based in Coimbatore, India. Clickbox agency specializing in SEO, social media, PPC, content writing, responsive website design, and web hosting services. We help companies increase sales, leads, and e-commerce revenue. " />
	<meta name="twitter:image" content="www.clickboxagency.com/images/banner-img.png" />

	<!-- FAVICON AND TOUCH ICONS -->
	<link rel="shortcut icon" href="images/favicon1.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- FONT ICONS -->
	<link href="css/flaticon.css" rel="stylesheet">

	<!-- PLUGINS STYLESHEET -->
	<link href="css/menu.css" rel="stylesheet">
	<link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">

	<!-- ON SCROLL ANIMATION -->
	<link href="css/animate.css" rel="stylesheet">

	<!-- TEMPLATE CSS -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">
	<!-- RESPONSIVE CSS -->
	<link href="css/responsive.css" rel="stylesheet">
	<!-- <link rel="stylesheet" type="text/css" href="css/cookieconsent.min.css" />  -->
	<style>
		@media (min-width: 32em) {
			.cc-window.cc-banner {
				padding: 1.5em 1.8em;
			}

			.cc-message {
				font-size: 0.9em;
				line-height: 1.4;
			}

			.cc-compliance {
				padding-left: 4em;
			}
		}
	</style>

	<style type="text/css">
		.box {
			width: 40%;
			margin: 0 auto;
			background: rgba(255, 255, 255, 0.2);
			padding: 35px;
			border: 2px solid #fff;
			border-radius: 20px/50px;
			background-clip: padding-box;
			text-align: center;
		}

		.button {
			font-size: 1em;
			padding: 10px;
			color: #fff;
			border: 2px solid #06D85F;
			border-radius: 20px/50px;
			text-decoration: none;
			cursor: pointer;
			transition: all 0.3s ease-out;
		}

		.button:hover {
			background: #06D85F;
		}

		.overlay {
			position: fixed;
			top: 0;
			bottom: 0;
			left: 0;
			right: 0;
			background: rgba(0, 0, 0, 0.7);
			transition: opacity 500ms;
			visibility: hidden;
			opacity: 0;
		}

		.overlay:target {
			visibility: visible;
			opacity: 1;
			z-index: 1000;
		}

		.popup {
			margin: 70px auto;
			padding: 20px;
			background: #fff;
			border-radius: 5px;
			width: 30%;
			position: relative;
			transition: all 5s ease-in-out;
		}

		.popup h2 {
			margin-top: 0;
			color: #333;
			font-family: Tahoma, Arial, sans-serif;
		}

		.popup .close {
			position: absolute;
			top: 20px;
			right: 30px;
			transition: all 200ms;
			font-size: 30px;
			font-weight: bold;
			text-decoration: none;
			color: #333;
		}

		.popup .close:hover {
			color: #06D85F;
		}

		.popup .content {
			max-height: 30%;
			overflow: auto;
		}

		@media screen and (max-width: 700px) {
			.box {
				width: 70%;
			}

			.popup {
				width: 70%;
			}
		}
	</style>

</head>



<body>


	<?php include('header1.php') ?>



	<!-- HERO-14
			============================================= -->
	<section id="hero-14" class="bg-fixed hero-section division">
		<div class="container">
			<div class="row d-flex align-items-center">


				<!-- HERO TEXT -->
				<div class="col-sm-9 col-md-7 col-lg-5">
					<div class="hero-14-txt white-color wow fadeInRight">

						<!-- Section ID -->
						<span class="section-id txt-upcase">We Deliver Revenue Generating
						</span>

						<!-- Title -->
						<h2 class="h2-xl">Digital Marketing Solutions</h2>

						<!-- Text -->
						<p class="p-xl">Increase your Brand Reach, Website Traffic, Conversions, Sales with Us.
						</p>

						<div class="col-md-12 form-btn mt-10">
							<button type="submit" class="btn btn-md btn-pink tra-grey-hover submit" name="send">
								<a href="https://clickboxagency.com/">Schedule A 1:1 Call With Our Expert</a></button>
						</div>


					</div>
				</div> <!-- END HERO TEXT -->


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END HERO-14 -->




	<!-- CONTENT-3
			============================================= -->
	<section id="content-3" class="bg-snow content-3 wide-60 content-section division">
		<div class="container">


			<!-- TOP ROW -->
			<div class="top-row pb-50">
				<div class="row d-flex align-items-center">


					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="images/index-02.png" alt="content-image">
						</div>
					</div>


					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">


							<!-- Title -->
							<h2 class="h2-xs">About : ClickBox Advertising &amp; Marketing Agency</h2>

							<!-- Text -->
							<p class="p-lg">
								Clickbox Agency is a global digital marketing agency based in India. A full-service interactive digital marketing company helping brands reach the right customers. We are one of the leading Web Development and Digital Marketing Agency In India, famous for using the latest online marketing techniques and cutting-edge tools that help your business get a digital edge. Beat your competitors and stand out from the crowd with ‘ClickBox Internet Marketing Agency’ by your side for all your Digital Marketing needs.
							</p>

							<!-- Text -->
							<p class="p-lg">
								Clickbox agency specializing in SEO, social media, PPC, content writing, responsive website design, and web hosting services. We help companies increase sales, leads, and e-commerce revenue. We are committed to you; our only priority is to make your business goals a reality. Contact us to get started on your project today.
							</p>

						</div>
					</div> <!-- END TEXT BLOCK -->


				</div>
			</div> <!-- END TOP ROW -->
		</div> <!-- End container -->
	</section> <!-- END HERO-14 -->


	<!-- BOTTOM ROW -->
	<!-- FEATURES-4
			============================================= -->
	<section id="features-4" class="wide-60 bg-snow features-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-70">

						<!-- Title -->
						<h2 class="h2-md">Why Choose ClickBox For Your Digital Marketing Agency?</h2>

						<!-- Text -->
						<!-- <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero
								   tempus, blandit and cursus varius and magnis sapien
								</p> -->

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
								<div class="ico-65">
									<span class="flaticon-line-graph-1"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-md">We Have Proven Results</h5>

								<!-- Text -->
								<p class="p-lg">Why would you work with a digital marketing agency that doesn’t provide you with the results you are looking for? Stop throwing away your hard-earned money on a strategy that isn’t converting.
								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-4 pl-25 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico">
								<div class="ico-65">
									<span class="flaticon-idea"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-md">We Are Honest & Ethical</h5>

								<!-- Text -->
								<p class="p-lg">At ClickBox, we believe in integrity, honesty and respecting our clients. We don’t believe in “selling” a service that you don’t need or applying a one-size-fits-all approach to each client.

								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-4 pr-25 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico">
								<div class="ico-65">
									<span class="flaticon-algorithm"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-md">We Know Digital Marketing
								</h5>

								<!-- Text -->
								<p class="p-lg">Working with a digital marketing company that actually knows digital marketing seems obvious, but unfortunately, many agencies fail to deliver positive results. Our strategies are proven to work.
								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #4 -->
					<div class="col">
						<div class="fbox-4 pl-25 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico">
								<div class="ico-65">
									<span class="flaticon-increase-1"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-md">We Put Customers First
								</h5>

								<!-- Text -->
								<p class="p-lg">Maintaining a customer-centric focus is a priority for many marketing firms, however, few actually follow through. As a digital marketing agency, ClickBox is different.

								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #5 -->
					<div class="col">
						<div class="fbox-4 pr-25 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico">
								<div class="ico-65">
									<span class="flaticon-reward"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-md">Result-Driven
								</h5>

								<!-- Text -->
								<p class="p-lg">Our digital marketing strategies are designed to succeed. We ensure that our marketing strategies bring you the preferred result.
								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #6 -->
					<div class="col">
						<div class="fbox-4 pl-25 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico">
								<div class="ico-65">
									<span class="flaticon-seo"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-md">Affordable</h5>

								<!-- Text -->
								<p class="p-lg">Charging a skyrocketing amount and fooling clients have never been our forte. Our digital marketing packages and plans are pocket- friendly.

								</p>

							</div>

						</div>
					</div>


				</div>
			</div> <!-- END FEATURES-4 WRAPPER -->


		</div> <!-- End container -->
	</section> <!-- END FEATURES-4 -->




	<!-- END BOTTOM ROW -->


	<!-- FEATURES-8
			============================================= -->
	<section id="features-8" class="wide-60 features-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-70">

						<!-- Title -->
						<h2 class="h2-md">Our Specialised Digital Marketing Services
						</h2>

						<!-- Text -->
						<p class="p-xl">While every business has its own unique needs in terms of scale, we start small or big, as
							per your needs and the stage of your digital growth.
						</p>

					</div>
				</div>
			</div>


			<!-- FEATURES-8 WRAPPER -->
			<div class="fbox-8-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-3">


					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="images/img-21.png" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Digital Marketing Services
							</h5>

							<!-- Text -->
							<p class="p-lg">ClickBox Agency provides 360-degree digital marketing services to companies across India. We customized internet marketing services and a plan that aligns with your unique business needs. Contact us today to learn more about what services can help your business grow. From web development to online brand reputation management and SEO, we always offer quality digital marketing services. We have dedicated and professional teams to handle practically all aspects of the client's digital marketing needs.
							</p>

						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="images/img-22.png" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Social Media Marketing
							</h5>

							<!-- Text -->
							<p class="p-lg">ClickBox Agency provides social media marketing for small businesses, enterprises, and multiple-location firms. Partner with us and let our social media marketing agency boost your brand visibility! Our process for social media is similar to our approach to marketing in general: TRACK > EXAM > SQUEEZE > REPEAT. ClickBox’s social media management and advertising services remove the complexity of social media for businesses and let you stick to what you know best running your business!

							</p>

						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="images/img-seoservice.png" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">SEO Services India
							</h5>

							<!-- Text -->
							<p class="p-lg">WClickBox Helps Businesses to Get Found on Google. ClickBox Agency is the best SEO services agency in India and we have the track record to prove it. With our proven SEO strategy and exclusive SEO team, ClickBox can help upsurge your bottom line with an SEO that is exactly designed for your business. If you’re looking for serious business growth, SEO or search engine optimization is the strategy for you.
							</p>

						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->
			<!-- FEATURES-8 WRAPPER -->
			<div class="fbox-8-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-3">


					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="images/img-24.png" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Google Ads Management Services

							</h5>

							<!-- Text -->
							<p class="p-lg">
								Looking to grow more leads with paid search advertising? like Google Ads, is the leading platform for paid search advertising permitting you to target your patrons in the most appropriate and exact way. ClickBox has a team of enthusiastic PPC specialists with years of experience making and optimizing campaigns in a wide range of industries for Google Ads. Sign up today for Google Ads campaign management services from a ClickBox Agency.

							</p>

						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="images/img-27.png" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Ecommerce SEO Services

							</h5>

							<!-- Text -->
							<p class="p-lg">If you are looking for the best ecommerce SEO services, you are definitely in the right place. ClickBox, an ecommerce SEO agency, supports you get your ecommerce website ranked on the first page on Google. We are a team of ecommerce SEO specialists with extensive experience in working with the best brands and can help you achieve top rankings on Google search results. You will get accurate professional expertise and assistance to improve revenues for your site naturally.
							</p>

						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="images/img-pr.png" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Digital PR Services

							</h5>

							<!-- Text -->
							<p class="p-lg">We make sure our clients get seen, become visible. Our well- connected PR team ensures your content has the eyeballs it deserves. The goal of our social media PR service is to create multiple touchpoints with target audiences with bespoke content campaigns. With strong SEO links, our venture into digital PR came from necessity. Organically earned links and online coverage have become a vital component in the SEO machine. ClickBox PR placements are even endorsed by Google as a leading way to improve your search engine visibility.

							</p>

						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->

			<div class="fbox-8-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-3">


					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="images/img-28.png" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Website Designing & Development


							</h5>

							<!-- Text -->
							<p class="p-lg">
								A good-looking website isn’t enough to compete. You need a website that splits you from the competition and becomes your marketing machine. We create growth-focused websites designed to help you get the results that your business needs. We syndicate beautiful designs with a decade of digital marketing expertise. Get a website that turns your visitors into customers.
							</p>

						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="images/img-30.png" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Marketing Strategy Consulting


							</h5>

							<!-- Text -->
							<p class="p-lg">At ClickBox, we provide traditional and digital marketing strategy consulting services. We specialize in marketing strategy development, creating and executing cohesive plans and campaigns that determination customer awareness. To do so, we apply various marketing disciplines and control each to achieve business growth and profitability for our clients through our strategic marketing consulting services.

							</p>

						</div>
					</div>
					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="images/img-29.png" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Reputation Management



							</h5>

							<!-- Text -->
							<p class="p-lg">
								It's all about your reputation. According to studies, 75% of consumers trust a local business more if it has great evaluations, whereas 60% of consumers think poor reviews make them hesitant to use a service. On behalf of your business, Clickbox's reputation management services enable you to generate more reviews and manage/respond to bad reviews.

							</p>

						</div>
					</div>


					<!-- FEATURE BOX #3 -->



				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->

		</div> <!-- End container -->
	</section> <!-- END FEATURES-8 -->

	</div> <!-- End container -->
	</section> <!-- END CONTENT-3 -->


	<section id="content-3" class="bg-snow content-3 wide-60 content-section division">
		<div class="container">

			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10 col-xl-8">
						<div class="section-title title-01 mb-60">

							<!-- Title -->
							<h2 class="h2-md">Our Clients Get Results</h2>

							<!-- Text -->

						</div>
					</div>
				</div>
			</div>


			<!-- BOTTOM ROW -->
			<div class="bottom-row">
				<div class="row d-flex align-items-center">

					<div class="col-md-6 order-first order-md-2">

						<div class="content-7-img wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
							<img class="img-fluid" src="../images/img-03.png" alt="content-image">
						</div>
					</div>

					<!-- CB WRAPPER -->
					<div class="col-lg-6 order-first order-lg-2">
						<div class="cb-wrapper">

							<!-- CB HOLDER -->
							<div class="cb-holder wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">

								<!-- CB BOX #1 -->
								<div class="cb-single-box">
									<p class="p-lg cb-header">increase in organic traffic</p>
									<h2 class="h2-title-xs statistic-number"><sup>+</sup><span class="count-element">434</span> %</h2>
									<p class="p-md mt-5 ico-10">
										<span class="green-color"><span class="flaticon-"></span> +250 % </span>increase in online leads
									</p>
								</div>

								<hr class="divider">

								<!-- CB BOX #2 -->
								<div class="cb-single-box">
									<ul class="simple-list">
										<li class="list-item">
											<p class="p-md">ClickBox used SEO &amp; PPC to increase the overall traffic to the new Abhasa website by +434% and along with the new CRO-focused Website were able to increase online leads by over +250%.</p>
										</li>
									</ul>
								</div>





							</div> <!-- END CB HOLDER -->


							<!-- CB SHAPE -->
							<div class="cb-shape-1">
								<img class="img-fluid" src="../images/bg-shape-1.png" alt="content-image">
							</div>

							<!-- CB SHAPE -->
							<div class="cb-shape-2">
								<img class="img-fluid" src="../images/bg-shape-2.png" alt="content-image">
							</div>


						</div>
					</div> <!-- END CB WRAPPER -->


				</div>
			</div> <!-- END BOTTOM ROW -->


		</div> <!-- End container -->
	</section>





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
			============================================= 
	<div id="brands-2" class="wide-70 brands-section division">
		<div class="container">


			<!-- BRANDS TITLE 
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="brands-title text-center">
						<h2 class="h2-md">Our Esteemed Clients</h2>
					</div>
				</div>
			</div>


			<!-- BRANDS-2 WRAPPER 
			<div class="brands-2-wrapper">
				<div class="row justify-content-md-center row-cols-2 row-cols-sm-3 row-cols-md-5">


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-1.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-2.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-3.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-4.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-5.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-6.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-7.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-8.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-9.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-10.png" alt="brand-logo" />
							</a>
						</div>
					</div>

					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-11.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-12.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-13.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-14.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-15.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-16.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-17.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-18.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-19.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE 
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="images/brand-20.png" alt="brand-logo" />
							</a>
						</div>
					</div>


				</div>
			</div> <!-- END BRANDS-2 WRAPPER 


		</div> <!-- End container 
	</div> <!-- END BRANDS-2 -->

	<!-- BRANDS-1
			============================================= -->
	<div id="brands-1" class="pt-60 pb-100 brands-section division">
		<div class="container">


			<!-- BRANDS TITLE -->
			<!-- <div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="brands-title text-center">
								<p class="p-xl">Over 2000+ companies are already using OLMO every day.</p>
							</div>
						</div>
					</div> -->

			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="brands-title text-center">
						<h2 class="h2-md">Our Esteemed Clients</h2>
					</div>
				</div>
			</div>

			<!-- Brands Carousel -->
			<div class="row mt-sm-4">
				<div class="col text-center">
					<div class="owl-carousel brands-carousel">


						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-1.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-2.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-3.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-4.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-5.png" alt="brand-logo">
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-6.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-7.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-8.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-9.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-10.png" alt="brand-logo" />
						</div>


					</div>
				</div>
			</div> <!-- End Brands Carousel -->

			<!-- SECOND ROW START -->
			<!-- Brands Carousel -->
			<div class="row mt-sm-4">
				<div class="col text-center">
					<div class="owl-carousel brands-carousel">


						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-11.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-12.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-13.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-14.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-15.png" alt="brand-logo">
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-16.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-17.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-18.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-19.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="images/brand-20.png" alt="brand-logo" />
						</div>


					</div>
				</div>
			</div> <!-- End Brands Carousel -->

			<!-- SECOND ROW END -->

		</div> <!-- End container -->
	</div> <!-- END BRANDS-1 -->

	<!-- END BRANDS -->

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
						<h2 class="h2-md">Got Questions? Look Here</h2>
						<!-- Section ID -->
						<span class="section-id txt-upcase">FAQs on Our Digital Marketing Services</span>

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
								<h5 class="h5-md">Do you have an in-house team for Digital Marketing?</h5>
								<!-- Answer -->
								<p class="p-lg">Yes, we have a dedicated in-house team for digital marketing services.
									Our team has end-to-end digital capabilities to address every step of the marketing and sales funnel.
								</p>
							</div>


							<!-- QUESTION #2 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">Will Digital Marketing bring leads to our business?</h5>

								<!-- Answer -->
								<p class="p-lg">The purpose of our digital marketing services is to lead your business towards success.
									Successful leads are a direct result of an effective digital marketing strategy.
									We ensure that you walk-along with your prospective buyers nurturing them with all the information to get to know your
									brand better before making a purchasing decision.
								</p>

							</div>


							<!-- QUESTION #3 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">Why should I partner with Digital Marketing?</h5>

								<!-- Answer -->


								<p class="p-lg">You should partner with us for digital marketing for many reasons. One, we increase your sales.
									Two, we are masters at SEM and Social media marketing. Three, we promote your business on all the search engines.
								</p>

							</div>


						</div>
					</div> <!-- END QUESTIONS HOLDER -->


					<!-- QUESTIONS HOLDER -->
					<div class="col">
						<div class="questions-holder pr-15">

							<!-- QUESTION #1 -->
							<div class="question wow fadeInUp">
								<!-- Question -->
								<h5 class="h5-md">We are looking to start our digital journey. Can your services help us make a small start?</h5>
								<!-- Answer -->
								<p class="p-lg">Yes, we have a dedicated in-house team for digital marketing services.
									Our team has end-to-end digital capabilities to address every step of the marketing and sales funnel.
								</p>
							</div>


							<!-- QUESTION #2 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">Is there a minimum starting price/budget to start our digital marketing?</h5>

								<!-- Answer -->
								<p class="p-lg"> ClickBox ability to handle all budgets big, small, and medium make us unique.
									Each client’s campaign is evaluated individually based on their goals, needs, audience, and budget.
									No matter what your budget is, we will always aim to provide you with the best service.
									We help our clients achieve their sales targets and drive massive revenue.
								</p>

							</div>


							<!-- QUESTION #3 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">How Do I Get Started?</h5>
								<!-- Answer -->
								<p class="p-lg">Before you commit to anything, we have an extensive “Client Requirement Form”
									that we ask you to fill out so that we can learn more about your needs,
									audience, and industry. Once it's done, If you trust us with your business’ digital growth, let’s get started!
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
						<h5 class="h5-sm">Have more questions? <a href="https://clickboxagency.com/">Ask your question here</a></h5>
					</div>
				</div>
			</div>


		</div> <!-- End container -->
	</section> <!-- END FAQs-2 -->

	<!-- Award Section -->
	<?php include('awards-section.php') ?>

	<!-- CALL TO ACTION-5
			============================================= -->
	<section id="cta-5" class="cta-section division">
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
							<a href="../contacts/" class="btn btn-skyblue tra-white-hover">Get in touch with us</a>

						</div>
					</div>


				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CALL TO ACTION-5 -->

	<?php include('footer1.php') ?>
	</div> <!-- END PAGE CONTENT -->

	<!-- EXTERNAL SCRIPTS
		============================================= -->
	<script src="js/jquery-3.6.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/jquery.scrollto.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/quick-form.js"></script>
	<script src="js/request-form.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/wow.js"></script>

	<!-- Custom Script -->
	<script src="js/custom.js"></script>

	<?php include('popup.php') ?>

</body>

</html>