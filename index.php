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
	<link rel="stylesheet" href="./css/header-style2.css">
	<link rel="stylesheet" type="text/css" href="css/cookieconsent.min.css" />
</head>

<body>
	<?php include('header.php') ?>
	<!-- HERO-14
			============================================= -->
	<section id="hero-14" class="bg-fixed hero-section division">
		<div class="container">
			<div class="row d-flex align-items-center">


				<!-- HERO TEXT -->
				<div class="col-sm-9 col-md-12 col-lg-12 d-flex align-items-center justify-content-center">
					<div class="hero-14-txt white-color wow fadeInRight">

						<!-- Section ID -->
						<span class="section-id txt-upcase">
						</span>

						<!-- Title -->
						<h2 class="h2-md text-center txtredd">Seriously <span>one stop solution that</span> delivers
							<br><span class="txtyelloww outlinewt p-0"> outstanding results </span>
						</h2>

						<!-- Text -->
						<p class="p-title-xs text-center txtbluee">Hassle-Free Creative Marketing Company</p>

						<div class="col-md-12 col-lg-12 text-center form-btn mt-10">
							<button type="submit" class="btn btn-md btn-pink yellow-hover submit" name="send">
								<a href="../contacts/">Schedule A 1-1 Call With Our Expert</a></button>
						</div>
					</div>
				</div> <!-- END HERO TEXT -->


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END HERO-14 -->

	<!-- CONTENT-3
			=======================================wide-60====== -->
	<section id="content-3" class="bg-snow pt-30 content-3  content-section division">
		<div class="container">


			<!-- TOP ROW -->
			<div class="top-row pb-30">
				<div class="row d-flex align-items-center">


					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="images/we-are-generating-digital-marketing.svg" alt="content-image">
						</div>
					</div>


					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">


							<!-- Title -->
							<h2 class="h3-xs">ClickBox Advertising &amp; Marketing Agency</h2>

							<!-- Text -->
							<p class="p-lg">
								Clickbox Agency is a creative digital marketing firm that works all over the world. a full-service digital marketing company that helps brands connect with the right customers. We are known for using the latest online marketing techniques and cutting-edge tools to give &nbsp; your business a digital edge. With "ClickBox Internet Marketing Agency" by your side, you can beat your competitors and stand out from the crowd.
							</p>

							<!-- Text -->
							<p class="p-lg">
								The Clickbox agency focuses on SEO, social media, PPC, content marketing, web hosting, responsive website design and ecommerce development. We help businesses get more sales, leads, and money from e-commerce. We care about you, and our only goal is to help you reach your business goals. Contact us today to get started on your project.
							</p>

						</div>
					</div> <!-- END TEXT BLOCK -->


				</div>
			</div> <!-- END TOP ROW -->
		</div> <!-- End container -->
	</section> <!-- END HERO-14 -->


	<!-- BOTTOM ROW -->
	<!-- FEATURES-4
			===============================eide-60============== -->
	<section id="features-4" class="pt-20 bg-snow features-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">

						<!-- Title -->
						<h2 class="h3-xs txtbluee ">Why Choose ClickBox for Your Digital Marketing Agency?</h2>

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
									<span class="flaticon-secure"></span>
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
									<span class="flaticon-seo"></span>
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
									<span class="flaticon-user"></span>
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
									<span class="flaticon-graphs"></span>
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
									<span class="flaticon-price"></span>
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
			================================wide-60============= -->
	<section id="features-8" class=" pt-20 features-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">

						<!-- Title -->
						<h2 class="h3-xs txtyelloww">Our Specialised Digital Marketing Services
						</h2>

						<!-- Text -->
						<p class="p-xl">Whatever your marketing budget or challenge, ClickBox Agency has the creative and strategic skills to offer you the results you desire from your marketing investment.</p>

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
								<img class="homeimgsize" src="images/digital-marketing-service.svg" alt="feature-icon" />
							</div>

							<!-- Title -->
							<!-- <h5 class="h5-md">Digital Marketing Services</h5> -->
							<h5 class="h5-md">Complete Digital Marketing</h5>

							<!-- Text -->
							<p class="p-lg">ClickBox Agency offers world-wide digital marketing services. We tailor internet marketing to your business's requirements. Learn how our services may help your company flourish. We provide professional digital marketing services, from site building to SEO. Our skilled teams manage all areas of digital marketing for clients.
							</p>

						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<!-- <img class="img-fluid" src="images/social-media-marketing.svg" alt="feature-icon" /> -->
								<img class="homeimgsize" src="images/social-media-marketing.svg" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Social Media Marketing
							</h5>

							<!-- Text -->
							<p class="p-lg">ClickBox Agency offers social media marketing for small and large companies. Our social media marketing agency can improve brand exposure. Our social media strategy mirrors our marketing strategy: REPEAT TRACK > EXAM > SQUEEZE. ClickBox's social media management and advertising services eliminate social media's complexity for companies.

							</p>

						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="homeimgsize" src="images/seo-service-india.svg" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md"> SEO Services
							</h5>

							<!-- Text -->
							<p class="p-lg">ClickBox makes it easier for Google to find businesses. The track record shows this is the best SEO service provider. With our tried-and-true SEO strategy and dedicated SEO team, we can also help boost your business's bottom line with SEO that is made just for you. If you want your business to grow in a big way, SEO, or search engine optimization, is the way to go.
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
								<img class="homeimgsize" src="images/google-ads-management-service.svg" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Google Ads Management</h5>
							<!-- Text -->
							<p class="p-lg">
								Want more sponsored search leads? Paid search advertising platforms like Google Ads allow you to target your customers precisely. The PPC team at ClickBox has been making and improving Google Ads campaigns in many different industries for years. The ClickBox Agency offers Google Ads campaign management.</p>

						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="homeimgsize" src="images/ecommerce-seo-service.svg" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Ecommerce SEO Services</h5>

							<!-- Text -->
							<p class="p-lg">You've found the greatest ecommerce SEO services. ClickBox, an ecommerce SEO company, helps you rank on Google's first page. We're ecommerce SEO experts who've worked with big businesses and can help you rank high on Google. You'll receive skilled help to increase site income organically.
							</p>

						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="homeimgsize" src="images/digital-pr-service.svg" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Digital PR Services</h5>

							<!-- Text -->
							<p class="p-lg">Our clients are seen. Our well-connected PR staff promotes your material. Our social media PR agency creates tailored content campaigns to engage specific audiences. With good SEO, we needed digital PR. Organic links and publicity are crucial to SEO. Google endorses ClickBox PR placements as a technique to boost SEO.

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
								<img class="homeimgsize" src="images/website-design-development-service.svg" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Website Designing & Development</h5>

							<!-- Text -->
							<p class="p-lg">
								A pretty website isn't enough. You need a website that differentiates you from the competition and boosts sales. Our growth-focused websites help your company succeed. We syndicate digital marketing-savvy designs. Get a website that converts visitors.
							</p>

						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="homeimgsize" src="images/marketing-strategy-consulting.svg" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Marketing Strategy Consulting</h5>

							<!-- Text -->
							<p class="p-lg">ClickBox offers conventional and digital marketing consulting. We build marketing strategies, plans, and campaigns to increase consumer awareness. We use and control a number of marketing disciplines to help our customers grow their businesses and make money.

							</p>

						</div>
					</div>
					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">

							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="homeimgsize" src="images/reputation-management-service.svg" alt="feature-icon" />
							</div>

							<!-- Title -->
							<h5 class="h5-md">Reputation Management</h5>
							<!-- Text -->
							<p class="p-lg">Reputation matters. 75 percent of customers trust a local company with outstanding ratings, while 60 percent are cautious to employ a service with negative reviews. Clickbox's reputation management services help you get more reviews and handle negative ones.</p>

						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->

		</div> <!-- End container -->
	</section> <!-- END FEATURES-8 -->

	</div> <!-- End container -->
	</section> <!-- END CONTENT-3 -->


	<section id="content-3" class="bg-snow content-3 pt-20 content-section division">
		<div class="container">

			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-10 col-xl-8">
						<div class="section-title title-01 mb-60">

							<!-- Title -->
							<h2 class="h2-md txtredd">Our Clients Get Results</h2>

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
							<img class="img-fluid" src="./images/our-clients-get-result.svg" alt="content-image">
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
	<section id="reviews-4" class="rel pt-20 reviews-section division">
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
							<div class="review-4 h-100">


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
							<div class="review-4 h-100">

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
							<div class="review-4 h-100">

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
							<div class="review-4 h-100">

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
							<!-- <div class="review-4 h-100"> -->

							<!-- Text -->
							<!-- <div class="review-4-txt"> -->

							<!-- Text -->
							<!-- <p class="p-lg">The ClickBox team has been a solid advertising and marketing partner for a variety of needs as my
										business has evolved. From web strategy, to social media management and paid campaigns. We also utilize their marketing
										automation offering and appreciate the assistance provided with the execution of our campaigns for all our services.
									</p> -->

							<!-- Testimonial Author -->
							<!-- <div class="author-data clearfix"> -->


							<!-- Testimonial Author -->
							<!-- <div class="review-author"> -->

							<!-- <h6 class="h6-xl">Murugaesh Raja, CEO</h6>
											<p class="p-md">Saravana ePharmacy</p> -->

							<!-- Rating -->
							<!-- <div class="review-rating ico-15 yellow-color">
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-1"></span>
												<span class="flaticon-star-half-empty"></span>
											</div>

										</div> -->

							<!-- </div> End Testimonial Author -->

							<!-- </div> End Text -->

							<!-- </div> END TESTIMONIAL #5 -->
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
	<div id="brands-1" class="pt-60 pb-50 brands-section division">
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
						<h2 class="h2-md txtbluee">Our Esteemed Clients</h2>
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

	<section id="faqs-2" class=" faqs-section division">
		<div class="container">
			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-80">
						<!-- Title -->
						<h2 class="h2-md txtyelloww">Frequently Asked Questions</h2>
						<!-- Section ID -->
						<!-- <span class="section-id txt-upcase">FAQs on Our Digital Marketing Services</span> -->
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
											<b>Do you have an in-house team for Digital Marketing?</b>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Yes, we have a dedicated in-house team for digital marketing services.
												Our team has end-to-end digital capabilities to address every step of the marketing and sales funnel.</p>
										</div>
									</div>
								</div>
								<!-- QUES 2 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<b>We are looking to start our digital journey. Can your services help us make a small start?</b>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Yes, we have a dedicated in-house team for digital marketing services. Our team has end-to-end digital capabilities to address every step of the marketing and sales funnel.
											</p>
										</div>
									</div>
								</div>
								<!-- QUES 3 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingThree">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<b>Why should I partner with Digital Marketing?</b>
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">You should partner with us for digital marketing for many reasons. One, we increase your sales. Two, we are masters at SEM and Social media marketing. Three, we promote your business on all the search engines.
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
							<!-- QUES 4 -->
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFour">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											<b>How Do I Get Started?</b>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse show" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Before you commit to anything, we have an extensive “Client Requirement Form” that we ask you to fill out so that we can learn more about your needs, audience, and industry. Once it's done, If you trust us with your business’ digital growth, let’s get started!</p>
										</div>
									</div>
								</div>
								<!-- QUES 5 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<b>Is there a minimum starting price/budget to start our digital marketing?</b>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">ClickBox ability to handle all budgets big, small, and medium make us unique. Each client’s campaign is evaluated individually based on their goals, needs, audience, and budget. No matter what your budget is, we will always aim to provide you with the best service. We help our clients achieve their sales targets and drive massive revenue.</p>
										</div>
									</div>
								</div>
								<!-- QUES 6 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingSix">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
											<b>Will Digital Marketing bring leads to our business?</b>
										</button>
									</h2>
									<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">The purpose of our digital marketing services is to lead your business towards success. Successful leads are a direct result of an effective digital marketing strategy. We ensure that you walk-along with your prospective buyers nurturing them with all the information to get to know your brand better before making a purchasing decision.</p>
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

	<!-- FAQs-2>
			=========================wide-60==================== 
	<section id="faqs-2" class="pt-20 faqs-section division">
		<div class="container">


			<!-- SECTION TITLE --
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-80">

						<!-- Title --
						<h2 class="h2-md">Got Questions? Look Here</h2>
						<!-- Section ID --
						<span class="section-id txt-upcase">FAQs on Our Digital Marketing Services</span>

					</div>
				</div>
			</div>
			<!-- FAQs-2 QUESTIONS --
			<div class="faqs-2-questions">
				<div class="row row-cols-1 row-cols-lg-2">


					<!-- QUESTIONS HOLDER --
					<div class="col">
						<div class="questions-holder pr-15">

							<!-- QUESTION #1 --
							<div class="question wowfadeInUp">
								<!-- Question --
								<h5 class="h5-md">Do you have an in-house team for Digital Marketing?</h5>
								<!-- Answer --
								<p class="p-lg">Yes, we have a dedicated in-house team for digital marketing services.
									Our team has end-to-end digital capabilities to address every step of the marketing and sales funnel.
								</p>
							</div>


							<!-- QUESTION #2 --
							<div class="question wow fadeInUp">

								<!-- Question --
								<h5 class="h5-md">Will Digital Marketing bring leads to our business?</h5>

								<!-- Answer --
								<p class="p-lg">The purpose of our digital marketing services is to lead your business towards success.
									Successful leads are a direct result of an effective digital marketing strategy.
									We ensure that you walk-along with your prospective buyers nurturing them with all the information to get to know your
									brand better before making a purchasing decision.
								</p>

							</div>
							<!-- QUESTION #3 -
							<div class="question wow fadeInUp">

								<!-- Question --
								<h5 class="h5-md">Why should I partner with Digital Marketing?</h5>



								<p class="p-lg">You should partner with us for digital marketing for many reasons. One, we increase your sales.
									Two, we are masters at SEM and Social media marketing. Three, we promote your business on all the search engines.
								</p>

							</div>

						</div>
					</div> <!-- END QUESTIONS HOLDER -->


	<!-- QUESTIONS HOLDER --
					<div class="col">
						<div class="questions-holder pr-15">

							<!-- QUESTION #1 --
							<div class="question wow fadeInUp">
								<!-- Question --
								<h5 class="h5-md">We are looking to start our digital journey. Can your services help us make a small start?</h5>
								<!-- Answer --
								<p class="p-lg">Yes, we have a dedicated in-house team for digital marketing services.
									Our team has end-to-end digital capabilities to address every step of the marketing and sales funnel.
								</p>
							</div>


							<!-- QUESTION #2 --
							<div class="question wow fadeInUp">

								<!-- Question --
								<h5 class="h5-md">Is there a minimum starting price/budget to start our digital marketing?</h5>

								<!-- Answer --
								<p class="p-lg"> ClickBox ability to handle all budgets big, small, and medium make us unique.
									Each client’s campaign is evaluated individually based on their goals, needs, audience, and budget.
									No matter what your budget is, we will always aim to provide you with the best service.
									We help our clients achieve their sales targets and drive massive revenue.
								</p>

							</div>
							<!-- QUESTION #3 --
							<div class="question wow fadeInUp">

								<!-- Question --
								<h5 class="h5-md">How Do I Get Started?</h5>
								<!-- Answer --
								<p class="p-lg">Before you commit to anything, we have an extensive “Client Requirement Form”
									that we ask you to fill out so that we can learn more about your needs,
									audience, and industry. Once it's done, If you trust us with your business’ digital growth, let’s get started!
								</p>
							</div>
						</div>
					</div> <!-- END QUESTIONS HOLDER --


				</div> <!-- End row --
			</div> <!-- END FAQs-2 QUESTIONS --


			<!-- MORE QUESTIONS BUTTON --
			<div class="row">
				<div class="col">
					<div class="more-questions">
						<h5 class="h5-sm">Have more questions? <a href="../contacts">Ask your question here</a></h5>
					</div>
				</div>
			</div>



		</div> <!-- End container --
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
							<a href="../contacts/" class="btn btn-skyblue yellow-hover">Get in touch with us</a>

						</div>
					</div>


				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CALL TO ACTION-5 -->


	<?php include('footer1.php') ?>
	</div> <!-- END PAGE CONTENT -->


	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "https://www.clickboxagency.com/"
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "ClickBox Advertising &amp; Digital Marketing Agency in Coimbatore, India",
			"alternateName": "digital marketing agency coimbatore, digital marketing agency, digital marketing agency india" / >
				"url": "https://www.clickboxagency.com/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "ClickBox Advertising &amp; Digital Marketing Agency in Coimbatore, India",
			"url": "https://www.clickboxagency.com/",
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