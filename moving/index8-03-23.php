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
    </html>'; // Set content-type header for sending HTML email 
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
	<title>ClickBox Advertising & Digital Marketing Agency in Coimbatore</title>
	<meta name="description" content="Clickbox Agency is a global digital marketing agency based in Coimbatore, India. Clickbox agency specializing in SEO, social media, PPC, content writing, responsive website design, and web hosting services. We help companies increase sales, leads, and e-commerce revenue. " />
	<meta name="keywords" content="digital marketing agency coimbatore, digital marketing agency, digital marketing agency india">
	<meta name="language" content="en" />
	<meta name="revisit-after" content="7 days" />
	<meta name="Expires" content="never" />
	<meta name="Distribution" content="Global" />
	<meta name="Rating" content="general" />
	<meta name="search engines" content="ALL" />
	<meta name="copyright" content="https://www.clickboxagency.com" />
	<meta name="email" content="info@clickboxagency.com" />
	<link rel="canonical" href="https://www.clickboxagency.com/" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://www.clickboxagency.com/" />
	<meta property="og:site_name" content="https://www.clickboxagency.com" />
	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />
	<meta property="og:title" content="ClickBox Advertising & Digital Marketing Agency in Coimbatore" />
	<meta property="og:description" content="Clickbox Agency is a global digital marketing agency based in Coimbatore, India. Clickbox agency specializing in SEO, social media, PPC, content writing, responsive website design, and web hosting services. We help companies increase sales, leads, and e-commerce revenue. " />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:title" content="ClickBox Advertising & Digital Marketing Agency in Coimbatore" />
	<meta name="twitter:description" content="Clickbox Agency is a global digital marketing agency based in Coimbatore, India. Clickbox agency specializing in SEO, social media, PPC, content writing, responsive website design, and web hosting services. We help companies increase sales, leads, and e-commerce revenue. " />
	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<!-- FAVICON AND TOUCH ICONS -->
	<link rel="shortcut icon" href="https://clickboxagency.com/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="https://clickboxagency.com/images/favicon.png" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="https://clickboxagency.com/images/favicon.png">
	<link rel="apple-touch-icon" sizes="120x120" href="https://clickboxagency.com/images/favicon.png">
	<link rel="apple-touch-icon" sizes="76x76" href="https://clickboxagency.com/images/favicon.png">
	<link rel="apple-touch-icon" href="https://clickboxagency.com/images/favicon.png">
	<link rel="icon" href="https://clickboxagency.com/images/favicon.png" type="image/x-icon">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link href="https://clickboxagency.com/css/bootstrap.min.css" rel="stylesheet">

	<!-- FONT ICONS -->
	<link href="./css/flaticon.css" rel="stylesheet">

	<!-- PLUGINS STYLESHEET -->
	<link href="https://clickboxagency.com/css/menu.css" rel="stylesheet">
	<link id="effect" href="https://clickboxagency.com/css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
	<link href="https://clickboxagency.com/css/magnific-popup.css" rel="stylesheet">
	<link href="https://clickboxagency.com/css/owl.carousel.min.css" rel="stylesheet">
	<link href="https://clickboxagency.com/css/owl.theme.default.min.css" rel="stylesheet">

	<!-- ON SCROLL ANIMATION -->
	<link href="https://clickboxagency.com/css/animate.css" rel="stylesheet">

	<!-- TEMPLATE CSS -->
	<link href="https://clickboxagency.com/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">
	<!-- RESPONSIVE CSS -->
	<link href="https://clickboxagency.com/css/responsive.css" rel="stylesheet">
	<link rel="stylesheet" href="https://clickboxagency.com/css/header-style2.css">
	<!-- <link rel="stylesheet" type="text/css" href="https://clickboxagency.com/css/cookieconsent.min.css" /> -->

</head>

<body>
	<?php include('header.php') ?>
	<section class="rel">
		<video id="background-video" autoplay loop muted poster="./images/png-icons/banner-video-img.jpg">
			<source src="https://clickboxagency.com/images/video/videoclick.mp4" type="video/mp4">
		</video>
		<!-- <div class="container"> -->
		<div class="videoinsidetext">
			<h1 class=""><span class="txtred">Seriously</span> one stop solution that</h1>
			<h1>delivers <span class="txtyellow">Outstanding Results</span></h1>
			<p class="p-xl">Hassle-Free Creative Marketing Company</p>
			<button type="submit" class="homebtn btn-pink yellow-hover submit mt-10" name="send">
				<a href="https://clickboxagency.com/contacts/">Schedule A 1-1 Call With Our Expert</a></button>
			<!-- </div> -->
		</div>
	</section>

	<div id="brands-1" class="pt-60 pb-50 brands-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="brands-title text-center">
						<!-- Title -->
						<h2 class="h3-xs "><span class="txtred">Tools</span> We Use</h2>
					</div>
				</div>
			</div>
			<!-- Brands Carousel -->
			<div class="row mt-sm-4">
				<div class="col text-center">
					<div class="owl-carousel brands-carousel">
						<!-- Designing -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/17.jpg" alt="tools-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/18.jpg" alt="tools-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/19.jpg" alt="tools-logo" />
						</div>
						<!-- DIGITAL MARKETING -->
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/01.jpeg" alt="tools-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/03.jpg" alt="tools-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/04.jpg" alt="tools-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/05.jpg" alt="tools-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/06.jpg" alt="tools-logo">
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/23.png" alt="tools-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/25.png" alt="tools-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/27.png" alt="tools-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/24.png" alt="tools-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/26.png" alt="tools-logo" />
						</div>
						<!--  -->
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/07.jpg" alt="tools-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/08.jpg" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/10.jpg" alt="brand-logo" />
						</div>
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/11.svg" alt="brand-logo" />
						</div>
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/12.png" alt="brand-logo" />
						</div>
						<!--  -->
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/20.jpg" alt="brand-logo" />
						</div>
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/09.jpg" alt="brand-logo" />
						</div>
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/22.jpg" alt="brand-logo" />
						</div>
						<!--  -->
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/29.png" alt="brand-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/28.png" alt="brand-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/32.png" alt="brand-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/33.png" alt="brand-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/34.png" alt="tools-logo" />
						</div>
						<!--  -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/13.png" alt="tools-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/14.jpg" alt="tools-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/15.png" alt="tools-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/16.svg" alt="tools-logo" />
						</div>
						<!--  -->
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/35.png" alt="tools-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/37.png" alt="tools-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/31.png" alt="tools-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid-tools" src="https://clickboxagency.com/images/png-icons/36.png" alt="tools-logo" />
						</div>
					</div>
				</div>
			</div> <!-- End Brands Carousel -->
		</div> <!-- End container -->
	</div> <!-- END BRANDS-1 -->
	<!-- CONTENT-3=======================================-->
	<section id="content-3" class="bg-snow pt-30 content-3  content-section division">
		<div class="container">
			<!-- TOP ROW -->
			<div class="top-row pb-30">
				<div class="row d-flex align-items-center">
					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6">
						<div class="img-block left-column wow fadeInRight">
							<img class="img-fluid" src="https://clickboxagency.com/images/we-are-generating-digital-marketing.svg" alt="we-are-generating-digital-marketing">
						</div>
					</div>
					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block right-column wow fadeInLeft">
							<h2 class="h3-xs ">ClickBox <span class="txtred">Advertising & Marketing Agency</span></h2>
							<!-- Text -->
							<p class="p-lg txt-justify">Clickbox Agency is a creative digital marketing firm that works all over the world. A full-service digital marketing company that helps brands connect with the right customers. We are known for using the latest online marketing techniques and cutting-edge tools to give &nbsp; your business a digital edge. With "ClickBox Internet Marketing Agency" by your side, you can beat your competitors and stand out from the crowd.
							</p>
							<p class="p-lg txt-justify">The Clickbox agency focuses on SEO, social media, PPC, content marketing, web hosting, responsive website design and ecommerce development. We help businesses get more sales, leads, and money from e-commerce. We care about you, and our only goal is to help you reach your business goals. Contact us today to get started on your project.</p>
						</div>
					</div> <!-- END TEXT BLOCK -->
				</div>
			</div> <!-- END TOP ROW -->
		</div> <!-- End container -->
	</section> <!-- END HERO-14 -->

	<div id="servicecarousel-1" class="pt-20 pb-50 brands-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="brands-title text-center">
						<!-- Title -->
						<h2 class="h3-xs ">Overall <span class="txtred">Services</span></h2>
					</div>
				</div>
			</div>
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mt-30">
				<div class="col serv" style="border-left:none;">
					<div class="fbox-4 p-all-20 wow fadeInUp">
						<!-- Icon -->
						<div class="fbox-ico-home">
							<div class="ico-65-home">
								<span>
									<img src="https://clickboxagency.com/images/png-icons/logo-design.svg" alt="logo design">
								</span>
							</div>
						</div>
						<!-- Text -->
						<div class="fbox-txt-home btn-hover-block" style="padding-left: 10px;">
							<!-- Title -->
							<h6 class="h6-md">Logo Design</h6>
							<p class="p-lg ">We are overjoyed to make available, free of charge, the expert <a href="https://clickboxagency.com/logo-design/coimbatore/" class="dblue">logo design</a> services that we provide to companies and startups who are interested in developing powerful brand identities. <a href="#" class="btn-sm-services">See more...</a></p>
						</div>
					</div>
				</div>
				<div class="col serv">
					<div class="fbox-4 p-all-20 wow fadeInUp">
						<!-- Icon -->
						<div class="fbox-ico-home">
							<div class="ico-65-home">
								<span>
									<img src="https://clickboxagency.com/images/png-icons/ui-ux.svg" alt="ui ux design">
								</span>
							</div>
						</div>
						<!-- Text -->
						<div class="fbox-txt-home btn-hover-block" style="padding-left: 10px;">
							<!-- Title -->
							<h6 class="h6-md">UI UX Design </h6>
							<!-- Text -->
							<p class="p-lg ">We are a top UI/UX design agency based in New Jersey that specializes in making user experiences that are smooth and easy to use, which increase engagement and conversion rates. <a href="#" class="btn-sm-services">See more...</a></p>
						</div>
					</div>
				</div>
				<div class="col serv">
					<div class="fbox-4 p-all-20 wow fadeInUp">
						<!-- Icon -->
						<div class="fbox-ico-home">
							<div class="ico-65-home">
								<span>
									<img src="https://clickboxagency.com/images/png-icons/programmer.svg" alt="website development">
								</span>
							</div>
						</div>
						<!-- Text -->
						<div class="fbox-txt-home btn-hover-block" style="padding-left: 10px;">
							<!-- Title -->
							<h6 class="h6-md">Website Development</h6>
							<!-- Text -->
							<p class="p-lg ">We are a top website development company based in New Jersey that specializes in making high-quality websites that are customized to meet the needs of your business. <a href="#" class="btn-sm-services">See more...</a></p>
						</div>
					</div>
				</div>
				<div class="col serv" style="border-left:none;">
					<div class="fbox-4 p-all-20 wow fadeInUp">
						<!-- Icon -->
						<div class="fbox-ico-home">
							<div class="ico-65-home">
								<span>
									<img src="https://clickboxagency.com/images/png-icons/ecommerce.svg" alt="ecommerce devlopement">
								</span>
							</div>
						</div>
						<!-- Text -->
						<div class="fbox-txt-home btn-hover-block" style="padding-left: 10px;">
							<!-- Title -->
							<h6 class="h6-md">Ecommerce Development</h6>
							<!-- Text -->
							<p class="p-lg ">Looking to develop your own ecommerce website? Our expert team specializes in ecommerce development, providing custom solutions to meet your unique business needs. <a href="#" class="btn-sm-services">See more...</a></p>
						</div>
					</div>
				</div>
				<div class="col serv">
					<div class="fbox-4 p-all-20 wow fadeInUp">
						<!-- Icon -->
						<div class="fbox-ico-home">
							<div class="ico-65-home">
								<span>
									<img src="https://clickboxagency.com/images/png-icons/app-development.svg" alt="mobile app development">
								</span>
							</div>
						</div>
						<!-- Text -->
						<div class="fbox-txt-home btn-hover-block" style="padding-left: 10px;">
							<!-- Title -->
							<h6 class="h6-md">Mobile App Development</h6>
							<!-- Text -->
							<p class="p-lg ">We are a premier mobile app development agency that specializes in creating cutting-edge mobile apps that help businesses reach their target audience, increase engagement, and drive growth. <a href="#" class="btn-sm-services">See more...</a></p>
							</div>
					</div>
				</div>
				<div class="col serv">
					<div class="fbox-4 p-all-20 wow fadeInUp">
						<!-- Icon -->
						<div class="fbox-ico-home">
							<div class="ico-65-home">
								<span>
									<img src="https://clickboxagency.com/images/png-icons/social-media-marketing.svg" alt="digital marketing">
								</span>
							</div>
						</div>
						<!-- Text -->
						<div class="fbox-txt-home btn-hover-block" style="padding-left: 10px;">
							<!-- Title -->
							<h6 class="h6-md">Digital Marketing</h6>
							<!-- Text -->
							<p class="p-lg ">Our full-service digital marketing agency helps businesses of all sizes succeed online. Our extensive digital marketing services are tailored to your specific business needs and goals. <a href="#" class="btn-sm-services">See more...</a></p>
							
						</div>
					</div>
				</div>
				<div class="col serv" style="border-left:none;border-bottom: 0px;">
					<div class="fbox-4 p-all-20 wow fadeInUp">
						<!-- Icon -->
						<div class="fbox-ico-home">
							<div class="ico-65-home">
								<span>
									<img src="https://clickboxagency.com/images/png-icons/content-creator.svg" alt="content marketing">
								</span>
							</div>
						</div>
						<!-- Text -->
						<div class="fbox-txt-home btn-hover-block" style="padding-left: 10px;">
							<!-- Title -->
							<h6 class="h6-md">Content Marketing</h6>
							<!-- Text -->
							<p class="p-lg ">Are you interested in finding high-quality content that can engage your audience and produce results for you? Look no further! Our team of skilled writers is here to help you achieve your content marketing goals. <a href="#" class="btn-sm-services">See more...</a></p>
						</div>
					</div>
				</div>
				<div class="col serv" style="border-bottom: 0px;">
					<div class="fbox-4 p-all-20 wow fadeInUp">
						<!-- Icon -->
						<div class="fbox-ico-home">
							<div class="ico-65-home">
								<span>
									<img src="https://clickboxagency.com/images/png-icons/seo.svg" alt="seo">
								</span>
							</div>
						</div>
						<!-- Text -->
						<div class="fbox-txt-home btn-hover-block" style="padding-left: 10px;">
							<!-- Title -->
							<h6 class="h6-md ">Search Engine Optimization</h6>
							<!-- Text -->
							<p class="p-lg ">Our <a href="https://clickboxagency.com/seo-company-in-india/" class="dblue">SEO</a> experts enhance your website's content, structure, and backlinks to improve its search engine rankings (SERPs). We can raise brand visibility, quality leads, and online income. <a href="#" class="btn-sm-services">See more...</a></p>
						</div>
					</div>
				</div>
				<div class="col serv" style="border-bottom: 0px;">
					<div class="fbox-4 p-all-20 wow fadeInUp">
						<!-- Icon -->
						<div class="fbox-ico-home">
							<div class="ico-65-home">
								<span>
									<img src="https://clickboxagency.com/images/png-icons/teaching.svg" alt="explainer video">
								</span>
							</div>
						</div>
						<!-- Text -->
						<div class="fbox-txt-home btn-hover-block" style="padding-left: 10px;">
							<!-- Title -->
							<h6 class="h6-md ">Explainer Video Creation</h6>
							<!-- Text -->
							<p class="p-lg ">Our team of expert video creators and animators have a wealth of experience in creating a wide range of video content, including promotional videos, product demos, explainer videos, whiteboard animation videos and more. <a href="#" class="btn-sm-services">See more...</a></p>
							</div>
					</div>
				</div>
			</div>
		</div> <!-- End container -->
	</div> <!-- END BRANDS-1 -->

	<!-- ============================================= -->
	<section id="features-4" class="pt-30 pb-40 bg-snow features-section division">
		<div class="container">
			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<!-- Title -->
						<h2 class="h3-xs ">Why Choose ClickBox for <span class="txtred">Your Digital Marketing Agency?</span></h2>
					</div>
				</div>
			</div>
			<!-- FEATURES-4 WRAPPER -->
			<div class="fbox-4-wrapper fbox-4-wide">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-12 order-md-1 order-sm-2 mobile-infograpic-col">
						<!-- Text -->
						<div class="fbox-txt-infograpic text-right-info">
							<!-- Title -->
							<h6 class="h6-md">Wide range of services</h6>
							<!-- Text -->
							<details>
								<summary>ClickBox offers a comprehensive suite of development and digital marketing services <br><span class="readmore">Read more...</span></summary>
								<p class="p-lg ">including logo design, search engine optimization (SEO), pay-per-click (PPC) advertising, social media marketing, email marketing, and website design development and mobile app development. This means that you can work with ClickBox to create a cohesive, multi-channel digital marketing strategy that targets your audience across a variety of platforms.</p>
							</details>
						</div>
						<!-- Text -->
						<div class="fbox-txt-infograpic text-right-info">
							<!-- Title -->
							<h6 class="h6-md">Data-driven approach</h5>
								<!-- Text -->
								<details>
									<summary>ClickBox uses advanced analytics and reporting tools to track the performance of your campaigns, <br><span class="readmore">Read more...</span></summary>
									<p class="p-lg ">which means that you can be confident that your marketing dollars are being spent in the most effective way possible. By analyzing data, ClickBox can make data-backed decisions that improve your ROI and deliver measurable results.</p>
								</details>
						</div>
						<!-- Text -->
						<div class="fbox-txt-infograpic text-right-info">
							<!-- Title -->
							<h6 class="h6-md">Transparent reporting</h5>
								<!-- Text -->
								<details>
									<summary>ClickBox offers transparent reporting, so you can see the results of your campaigns in real-time. <br><span class="readmore">Read more...</span></summary>
									<p class="p-lg ">This level of transparency is important for ensuring that you can make informed decisions about your marketing strategy and budget.</p>
								</details>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 order-md-2 order-sm-1">
						<img src="https://clickboxagency.com/images/png-icons/why-choose-us-home.png" alt="why choose clickboxagency" class="img-fluid">

					</div>
					<div class="col-lg-4 col-md-4 col-sm-12 order-md-3 order-sm-3 mobile-infograpic-col">
						<!-- Text -->
						<div class="fbox-txt-infograpic">
							<!-- Title -->
							<h6 class="h6-md">Personalized service</h6>
							<details>
								<summary>ClickBox takes the time to understand your business objectives, target audience, and industry trends, <br><span class="readmore">Read more...</span></summary>
								<!-- Text -->
								<p class="p-lg ">which allows them to create effective marketing campaigns that deliver results. By working closely with you, ClickBox can tailor your marketing strategy to your unique needs and goals.</p>
							</details>
						</div>
						<!-- Text -->
						<div class="fbox-txt-infograpic">
							<!-- Title -->
							<h6 class="h6-md">Experienced team</h6>
							<details>
								<summary>ClickBox has a team of experienced professionals who have worked with a variety of clients across <br><span class="readmore">Read more...</span></summary>
								<!-- Text -->
								<p class="p-lg "> different industries. This means that they have the knowledge and expertise to create effective digital marketing strategies that work for your business.</p>
							</details>
						</div>
						<div class="fbox-txt-infograpic">
							<!-- Title -->
							<h6 class="h6-md">Quality</h6>
							<!-- Text -->
							<details>
								<summary>ClickBox Company is committed to delivering high-quality branding services that meet or exceed their <br><span class="readmore">Read more...</span></summary>
								<p class="p-lg ">clients' expectations. They use the latest design techniques and tools to promote products with impact and a pleasing appearance.</p>
							</details>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CONTENT-4============================================= -->
	<section id="content-3" class="bg-snow pt-20 pb-20 content-3  content-section division">
		<div class="container">
			<div class="top-row bgblackhover border50">
				<div class="row d-flex align-items-center justify-content-center">
					<div class="col-md-6 col-lg-8  coltoaction-res">
						<h5 class="h5-md text-white mb-0">Boost Your Business Traffic And Conversions With Us</h5>
					</div>
					<div class="col-md-6 col-lg-4 text-end coltoaction-res ">
						<a href="https://clickboxagency.com/contacts/" class="btn btn-sm btn-pink yellow-hover">Schedule A Consultation Today</a>
						<!-- </div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="features-4" class="pt-20 bg-snow features-section division">
		<div class="container">
			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<!-- Title -->
						<h2 class="h3-xs ">Our Working <span class="txtred">Process</span></h2>
					</div>
				</div>
			</div>
			<!-- FEATURES-4 WRAPPER -->
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-4">
				<div class="col squire-cards-col">
					<div class="squire-cards squire-cards-blue h-100">
						<div class="squire-icons">
							<!-- Icon -->
							<div class="ico-65">
								<span>
									<img src="https://clickboxagency.com/images/png-icons/analyst.svg" alt="research and analysis">
								</span>
							</div>
						</div>
						<div class="squire-content mt-15">
							<!-- Text -->
							<h6 class="h6-md text-white">Research and </br>Analysis</h6>
							<p class="p-lg text-squire-muted">We start by conducting research and analyzing your business, industry, target audience, and competitors. This helps us understand your unique challenges and opportunities and develop a development and digital marketing strategy tailored to your business needs.</p>
						</div>
					</div>
				</div>
				<div class="col squire-cards-col">
					<div class="squire-cards squire-cards-black h-100">
						<div class="squire-icons">
							<div class="squire-icons">
								<!-- Icon -->
								<div class="ico-65">
									<span>
										<img src="https://clickboxagency.com/images/png-icons/process.svg" alt="planning and implementation">
									</span>
								</div>
							</div>
						</div>
						<div class="squire-content mt-15">
							<!-- Text -->
							<h6 class="h6-md text-white">Planning and </br>Implementation</h6>
							<p class="p-lg text-squire-muted">We create a comprehensive project plan that outlines the tactics and channels we will use to achieve your goals. This may include design, development, SEO, PPC, social media marketing, email marketing, content marketing, and other strategies.</p>
						</div>
					</div>
				</div>
				<div class="col squire-cards-col">
					<div class="squire-cards squire-cards-red h-100">
						<div class="squire-icons">
							<div class="squire-icons">
								<!-- Icon -->
								<div class="ico-65">
									<span>
										<img src="https://clickboxagency.com/images/png-icons/control.svg" alt="monitoring">
									</span>
								</div>
							</div>
						</div>
						<div class="squire-content mt-15">
							<!-- Text -->
							<h6 class="h6-md text-white">Monitoring and </br>Optimization</h6>
							<p class="p-lg text-squire-muted">We continuously monitor the performance of each campaign and optimize it to ensure that it is achieving the desired results. This includes analyzing metrics such as traffic, engagement, leads, and conversions, and making adjustments as needed.</p>
						</div>
					</div>
				</div>
				<div class="col squire-cards-col">
					<div class="squire-cards squire-cards-yellow h-100">
						<div class="squire-icons">
							<div class="squire-icons">
								<!-- Icon -->
								<div class="ico-65">
									<span>
										<img src="https://clickboxagency.com/images/png-icons/analytics.svg" alt="reporting and analysis">
									</span>
								</div>
							</div>
						</div>
						<div class="squire-content mt-15">
							<!-- Text -->
							<h6 class="h6-md text-white">Reporting and <br>Analysis</h6>
							<p class="p-lg text-squire-muted">We provide regular reports on the performance of your campaigns, along with insights and recommendations for further optimization. This helps you stay informed about the progress of your digital marketing efforts and make data-driven decisions.</p>
						</div>
					</div>
				</div>
			</div>
	</section>
	<!-- BRANDS-1============================================= -->
	<div id="brands-1" class="pt-60 pb-50 brands-section division">
		<div class="container">

			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="brands-title text-center">
						<h2 class="h3-xs ">Our Esteemed <span class="txtred">Clients</span></h2>
					</div>
				</div>
			</div>

			<!-- Brands Carousel -->
			<div class="row mt-sm-4">
				<div class="col text-center">
					<div class="owl-carousel brands-carousel">
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-3.png" alt="brand-logo" />
						</div>
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-18.png" alt="brand-logo" />
						</div>
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-6.png" alt="brand-logo" />
						</div>
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-7.png" alt="brand-logo" />
						</div>
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-12.png" alt="brand-logo" />
						</div>
						<!-- <div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-1.png" alt="brand-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-4.png" alt="brand-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-2.png" alt="brand-logo" />
						</div>
						
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-5.png" alt="brand-logo">
						</div>
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-8.png" alt="brand-logo" />
						</div>

						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-9.png" alt="brand-logo" />
						</div>

						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-10.png" alt="brand-logo" />
						</div> -->
					</div>
				</div>
			</div> <!-- End Brands Carousel -->

			<!-- SECOND ROW -->
			<div class="row mt-sm-4">
				<div class="col text-center">
					<div class="owl-carousel brands-carousel">
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-22.png" alt="brand-logo" />
						</div>
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-23.png" alt="brand-logo" />
						</div>
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-24.png" alt="brand-logo" />
						</div>
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-25.png" alt="brand-logo" />
						</div>
						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-27.png" alt="brand-logo" />
						</div>

						<!-- BRAND LOGO IMAGE -->
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-21.png" alt="brand-logo" />
						</div>
						<!-- <div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-13.png" alt="brand-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-14.png" alt="brand-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-15.png" alt="brand-logo">
						</div>
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-16.png" alt="brand-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-17.png" alt="brand-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-19.png" alt="brand-logo" />
						</div>
						<div class="brand-logo">
							<img class="img-fluid" src="https://clickboxagency.com/images/brand-20.png" alt="brand-logo" />
						</div> -->
					</div>
				</div>
			</div> <!-- End Brands Carousel -->
		</div> <!-- End container -->
	</div> <!-- END BRANDS-1 -->

	<!-- END BRANDS -->
	<section id="blog-page" class="bg-snow pt-30 pb-30 blog-page-section division">
		<!-- inner-page-hero -->
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-12">
					<div class="brands-title ">
						<h2 class="h3-xs ">Our <span class="txtred">Marketing Insights</span></h2>
						<p class="p-lg">We are Best in performing Informative Blogs, Just take a Look to Get Some Ideas for your Business.</p>
					</div>
				</div>
			</div>
			<!-- BLOG POSTS -->
			<div class="row mt-20">
				<div class="col gallery-items-list">
					<div class="grid_two_container " style="transition: all ease 0.5s;">
						<div class="hover-div gallery__item gallery__item--1">
							<figure class='hover-hover'>
								<a href="https://clickboxagency.com/saas-marketing-techniques/">
									<img src="https://clickboxagency.com/images/blog/saas-marketing-techniques.jpg" alt="" class='upcoming_grid borradi-10 hover-home-img' />
								</a>
							</figure>
						</div>
						<div class="hover-div gallery__item gallery__item--2">
							<figure class='hover-hover'> <a href="https://clickboxagency.com/blog/online-free-logo-makers/"><img src="https://clickboxagency.com/images/blog/online-logo-makers-tool.jpg" alt="" class='upcoming_grid' /></a></figure>
						</div>
						<div class="hover-div gallery__item gallery__item--3">
							<figure class='hover-hover'><a href="https://clickboxagency.com/blog/how-to-create-seo-friendly-website/"><img src="https://clickboxagency.com/images/png-icons/home-blog02.jpg" alt="" class='upcoming_grid' /></a></figure>
						</div>
						<div class="hover-div gallery__item gallery__item--3">
							<figure class='hover-hover'><a href="https://clickboxagency.com/blog/logo-design-process/"><img src="https://clickboxagency.com/images/png-icons/home-blog01.jpg" alt="" class='upcoming_grid' /></a></figure>
						</div>
						<div class="hover-div gallery__item gallery__item--3">
							<figure class='hover-hover'><a href="https://clickboxagency.com/blog/logo-design-principles/"><img src="https://clickboxagency.com/images/blog/logo-design-principles-you-need-to-know.jpg" alt="" class='upcoming_grid' /></a></figure>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- FAQ -->
	<section id="faqs-2" class="faqs-section division mt-30">
		<div class="container">
			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-80">
						<!-- Title -->
						<h2 class="h3-xs ">Frequently <span class="txtred">Asked Questions</span></h2>
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
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
											<b>The services provided by your digital marketing agency.?</b>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg txt-justify">Our company offers a wide range of digital marketing services, such as SEO, PPC advertising, social media marketing, email marketing, content marketing, and web design development and mobile app development.</p>
										</div>
									</div>
								</div>
								<!-- QUES 2 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<b>How can digital marketing help my business?</b>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg txt-justify">Digital marketing can help your business by making it more visible online, generating leads, driving traffic to your website, building brand awareness, and ultimately increasing sales and revenue.</p>
										</div>
									</div>
								</div>
								<!-- QUES 3 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingThree">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<b>Can you help my business with local SEO?</b>
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg txt-justify">Yes, we offer local SEO services to help local businesses improve their online presence.</p>
										</div>
									</div>
								</div>
								<!-- QUES 4 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingSeven">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
											<b>While using digital marketing, how long until you start seeing results?</b>
										</button>
									</h2>
									<div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg txt-justify">The time it takes to see results from digital marketing can vary depending on the specific strategies and techniques used. But if a digital marketing campaign is well planned and carried out, most businesses can see results in a few months.</p>
										</div>
									</div>
								</div>
								<!-- QUES 5 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingEight">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
											<b>What sets your agency apart from other digital marketing agencies?</b>
										</button>
									</h2>
									<div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg txt-justify">Our agency sets itself apart by offering a personalized approach to digital marketing. We take the time to understand our clients' unique business needs and goals and tailor our strategies accordingly. We also prioritize transparency and communication with our clients throughout the entire process.</p>
										</div>
									</div>
								</div>
								<!-- QUES 6 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingLeven">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLeven" aria-expanded="false" aria-controls="collapseLeven">
											<b> How can I get started with your services?</b>
										</button>
									</h2>
									<div id="collapseLeven" class="accordion-collapse collapse" aria-labelledby="headingLeven" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg txt-justify">You can contact us through our website or by phone to discuss your business needs and goals. We will provide you with a customized plan and pricing for our services.</p>
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
							<!-- QUES 7 -->
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFour">
										<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											<b>How long does it take to develop a website?</b>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg txt-justify">The time it takes to develop a website can vary depending on the scope of the project, the client's needs, and other factors. But most of the time, we finish building websites in a few weeks or a few months.</p>
										</div>
									</div>
								</div>
								<!-- QUES 8 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<b>How much does digital marketing cost?</b>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Digital marketing costs can vary based on the services that are needed, the size of the business, and the marketing budget as a whole. At our agency, we work with our clients to create custom solutions that fit their needs and budgets and get results.</p>
										</div>
									</div>
								</div>
								<!-- QUES 9 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingSix">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
											<b>How can you judge the efficacy of an online advertising push?</b>
										</button>
									</h2>
									<div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg txt-justify">There are many ways to measure the success of a digital marketing campaign, such as website traffic, conversion rates, engagement rates, and return on investment (ROI). We use advanced analytics tools to track and analyze these metrics, and if we need to, we change our strategies to get the best results.</p>
										</div>
									</div>
								</div>
								<!-- QUES 10 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingNine">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
											<b>How do you approach website and mobile app development projects?</b>
										</button>
									</h2>
									<div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg txt-justify">We take a client-focused approach to website and mobile app development projects. We begin by discussing the client's goals and needs, then work collaboratively with the client to design and develop a website or mobile app that meets their unique needs.</p>
										</div>
									</div>
								</div>
								<!-- QUES 11 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTen">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
											<b>Can you help me with UX/UI design?</b>
										</button>
									</h2>
									<div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg txt-justify">We do offer UX/UI design services to help businesses make websites that look good, are easy to use, and are simple to get around.</p>
										</div>
									</div>
								</div>
								<!-- QUES 12 -->
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwelve">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
											<b> How do you stay up-to-date with the latest digital marketing trends and strategies?</b>
										</button>
									</h2>
									<div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg txt-justify">You can contact us through our website or by phone to discuss your business needs and goals. We will provide you with a customized plan and pricing for our services.</p>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- END QUESTIONS HOLDER -->
					</div>
					<!-- SECOND COLUMN END -->
				</div> <!-- End row -->
			</div> <!-- END FAQs-2 QUESTIONS -->

			<div class="row">
				<div class="col ">
					<div class="more-questions">
						<h5 class="h5-sm ">Have more questions? <a href="https://clickboxagency.com/contacts/">Ask your question here</a></h5>
					</div>
				</div>
			</div>
		</div> <!-- End container -->
	</section> <!-- END FAQs-2 -->
	<section id="content-3" class="bg-snow pt-20 pb-40 content-3  content-section division">
		<div class="container-fluid bortopbot">
			<!-- TOP ROW -->
			<div class="top-row ">
				<div class="row d-flex align-items-center justify-content-center">
					<!-- IMAGE BLOCK -->
					<div class="col-md-12 col-lg-12  bgyellowhover pt-40 ">
						<div class="txt-block left-column wow fadeInLeft ">

							<div class="fbox-4 pr-25 mb-40 wow fadeInUp text-center">
								<!-- Title -->
								<h4 class="h4-md"><span style="color: #fff;">Are you Ready to Take the Next Step in your Career?</span></h4>

								<!-- Text -->
								<p class="p-md text-white">We offer a challenging and rewarding work environment with ample opportunities for growth and advancement.</p>
								<a href="https://clickboxagency.com/career/" class="btn btn-sm btn-skyblue yellow-hover">Join Our Dynamic Team</a>

							</div>
						</div>
					</div>
					<!-- TEXT BLOCK -->
				</div>
			</div> <!-- END TOP ROW -->
			<!-- </div> -->
		</div> <!-- End container -->
	</section> <!-- END HERO-14 -->
	<!-- Award Section -->
	<?php include('awards-section.php') ?>
	<?php include('footer.php') ?>
	</div> <!-- END PAGE CONTENT -->

	<!--  -->
	<script>
		window.addEventListener('mouseover', initLandbot, {
			once: true
		});
		window.addEventListener('touchstart', initLandbot, {
			once: true
		});
		var myLandbot;

		function initLandbot() {
			if (!myLandbot) {
				var s = document.createElement('script');
				s.type = 'text/javascript';
				s.async = true;
				s.addEventListener('load', function() {
					var myLandbot = new Landbot.Livechat({
						configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-1494552-GVO2S3ZH3OUNTD4E/index.json',
					});
				});
				s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
				var x = document.getElementsByTagName('script')[0];
				x.parentNode.insertBefore(s, x);
			}
		}
	</script>
	<!--  -->

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "https://www.clickboxagency.com/",
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
			"name": "ClickBox Advertising & Digital Marketing Agency in Coimbatore",
			"alternateName": "digital marketing agency coimbatore, digital marketing agency, digital marketing agency india",
			"url": "https://www.clickboxagency.com/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "ClickBox Advertising & Digital Marketing Agency in Coimbatore",
			"url": "https://www.clickboxagency.com/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "Clickbox Agency is a global digital marketing agency based in Coimbatore, India. Clickbox agency specializing in SEO, social media, PPC, content writing, responsive website design, and web hosting services. We help companies increase sales, leads, and e-commerce revenue. ",
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
	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "FAQPage",
			"mainEntity": [{
					"@type": "Question",
					"name": "How can I get started with your services?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "<p>You can contact us through our website or by phone to discuss your business needs and goals. We will provide you with a customized plan and pricing for our services.<a href=https://example.com/returns> Click here </a> to initiate a return.</p>"
					}
				}, {
					"@type": "Question",
					"name": "How can you judge the efficacy of an online advertising push?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "There are many ways to measure the success of a digital marketing campaign, such as website traffic, conversion rates, engagement rates, and return on investment (ROI). <br>We use advanced analytics tools to track and analyze these metrics, and if we need to, we change our strategies to get the best results. <a href=https://example.com/returns> Click here </a> to initiate a return.</p>"
					}
				}, {
					"@type": "Question",
					"name": " How do you approach website and mobile app development projects?",
					"acceptedAnswer": {
						"@type": "Answer",
						"text": "<p>We take a client-focused approach to website and mobile app development projects. We begin by discussing the client's goals and needs, then work collaboratively with the client to design and develop a website or mobile app that meets their unique needs.</p><p><a href=https://example.com/orders/>Click here</a> to complete the form with your order-related question(s).</p>"
					}
				},
			}]
		}
	</script>

	<!-- EXTERNAL SCRIPTS
		============================================= -->
	<script src="https://clickboxagency.com/js/jquery-3.6.0.min.js"></script>
	<script src="https://clickboxagency.com/js/bootstrap.min.js"></script>
	<script src="https://clickboxagency.com/js/modernizr.custom.js"></script>
	<script src="https://clickboxagency.com/js/jquery.easing.js"></script>
	<script src="https://clickboxagency.com/js/jquery.appear.js"></script>
	<script src="https://clickboxagency.com/js/jquery.scrollto.js"></script>
	<script src="https://clickboxagency.com/js/menu.js"></script>
	<script src="https://clickboxagency.com/js/imagesloaded.pkgd.min.js"></script>
	<script src="https://clickboxagency.com/js/isotope.pkgd.min.js"></script>
	<script src="https://clickboxagency.com/js/owl.carousel.min.js"></script>
	<script src="https://clickboxagency.com/js/jquery.magnific-popup.min.js"></script>
	<script src="https://clickboxagency.com/js/quick-form.js"></script>
	<script src="https://clickboxagency.com/js/request-form.js"></script>
	<script src="https://clickboxagency.com/js/jquery.validate.min.js"></script>
	<script src="https://clickboxagency.com/js/jquery.ajaxchimp.min.js"></script>
	<script src="https://clickboxagency.com/js/wow.js"></script>

	<!-- Custom Script -->
	<script src="https://clickboxagency.com/js/custom.js"></script>

	<?php include('popup.php') ?>

</body>

</html>