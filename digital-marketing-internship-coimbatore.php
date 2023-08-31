<?php

if (isset($_POST['send'])) {

	// getting post values
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$courses = $_POST['courses'];
	$message = $_POST['message'];
	
	
	$subject = 'Enquiry From Digital Marketing Course';
	$to = "sales@akkenna.com,james@akkenna.com,pradeep@akkenna.com,info@clickboxagency.com";
	$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Clickbox Agencies</title> 
    </head> 
    <body> 
        <h3>Thanks you for joining with us!</h3> 
               <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
            <tr style="background-color: #e0e0e0;> 
                <th>Name:</th><td>' . $name . '</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
                <th>Email:</th><td>' . $email . '</td> 
            </tr> 
            <tr style="background-color: #e0e0e0;"> 
            <th>Phone:</th><td>' . $phone . '</td> 
        </tr> 
            <tr style="background-color: #e0e0e0;"> 
            <th>Courses:</th><td>' . $courses . '</td> 
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

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Advanced Certified Digital Marketing Internship Coimbatore</title>

	<meta name=description content="Ready to Expert in Digital Marketing? Learn Digital Marketing Course in Coimbatore from Industry Experts with 100% Placement and Internship" />

	<meta name=keywords content=" Digital Marketing Internship, Digital Marketing Internship Coimbatore, Digital Marketing Course Coimbatore, Digital Marketing Training Coimbatore" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/digital-marketing-internship-coimbatore/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/digital-marketing-internship-coimbatore/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/digital-marketing-internship-coimbatore/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="Advanced Certified Digital Marketing Internship Coimbatore" />

	<meta property="og:description" content="Ready to Expert in Digital Marketing? Learn Digital Marketing Course in Coimbatore from Industry Experts with 100% Placement and Internship." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Advanced Certified Digital Marketing Internship Coimbatore" />

	<meta name="twitter:description" content="Ready to Expert in Digital Marketing? Learn Digital Marketing Course in Coimbatore from Industry Experts with 100% Placement and Internship." />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />
	<?php include('header-style.php') ?>


</head>
<body>

	<?php include('header.php') ?>

	<!-- HERO-21
			============================================= -->
	<section id="hero-21" class="bg-snow hero-section division">
		<div class="container">
			<div class="row d-flex align-items-center">
				<!-- HERO TEXT -->
				<div class="col-md-10 offset-md-1">
					<div class="hero-21-txt text-center">
						<!-- Title -->
						<p class="p-xl">Agency Based Live</p>
						<h1 class="h2-lg">Advanced Certified Digital Marketing Internship Program</h1>

						<!-- Text -->
						<p class="p-xl">Be a Full Stack Digital Marketer & Earn Up to 3.2LPA As a Fresher!</p>
						</br>
					<form method="post" class="grey-color ">
                             <div class="row d-flex ">
                                 <div class="col-lg-6 mt-1">
                                     
                                
							<!-- Form Input -->
							<div class="row ">
								<div class="col-sm-6 ">
									<input type="text" name="name" class="form-control grey-color name" placeholder="Enter Your Name*" autocomplete="off" required>
								</div>
								</br>

								<!-- Form Input -->
								<div class="col-sm-6 ">
									<input type="email" name="email" class="form-control grey-color  email" placeholder="Enter Your Email*" autocomplete="off" required>
								</div>
								</br>

								<div class="col-sm-6  mt-25">
									<input type="number" name="phone" class="form-control grey-color  phone" placeholder="Enter Your Phone*" autocomplete="off" required>
								</div>
								</br>
								<div class="col-sm-6 mt-25 ">
							   		<select class="form-select grey-color" aria-label="courses" name="courses" id="courses" required> 
							             <option value="">Select your Courses </option>
									    <option value="Digital Marketing">Digital Marketing Course</option>
								    	<option value="UI/UX Course">UI/UX Course</option>
									
								</select>
							</div>
							<br/>
							 </div>
							 	</div>
                         
						<div class="col-lg-6">
								<div class="col-md-12 mt-1 ">
								<textarea class="form-control grey-color img-fluid-tools message" name="message" minlength="50" maxlength="100" rows="6" placeholder="Share Your Comments:" required></textarea>
							    </div>

								<!-- Form Button -->
							
							</div>
									<div class="col-lg-12 contact-form-msg">
								<span class="loading"></span>
							</div>
							<div class="form-group">
								<div class="col-sm-12 col-sm-offset-2">
									<?php if (!empty($result)) {
										echo '<div class="alert bg-success alert-dark "><b>Your message sent successfully! </b>' . $result . '</div>';
									} ?>
								</div>
							</div>
								<div class="col-sm-12 form-btn mt-20 text-center">
									<button type="submit" class="btn btn-md btn-pink tra-grey-hover submit" name="send" style="padding: 10px 34px !important;">Get Started Now</button>
								</div>
						
    </div>
    </form>

						<!-- HERO QUICK FORM -->


						<!-- Advantages List -->
						<ul class="advantages mt-35">
							<li class="first-li">
								<p> Guaranteed Paid Internship</p>
							</li>
							<li class="first-li">
								<p>100% Placement Assistance</p>
							</li>
							<li class="first-li">
								<p>Industry Exp. Trainers</p>
							</li>
							<li class="last-li">
								<p>Free Demo Sessions</p>
							</li>
						</ul>

					</div>
				</div> <!-- END HERO TEXT -->


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END HERO-21 -->



	<hr class="divider">

	<!-- CONTENT-6
			============================================= -->
	<section id="content-6" class="content-6 pt-30 content-section division">
		<div class="container">
			<div class="row d-flex align-items-center">


				<!-- TEXT BLOCK -->
				<div class="col-md-6 col-lg-5">
					<div class="txt-block left-column wow fadeInRight">

						<!-- TEXT BOX -->
						<div class="txt-box mb-30">

							<!-- Title -->
							<h5 class="h5-lg">Digital Marketing Course Highlights </h5>

							<!-- Text -->
							<p>Ready to Expert in Digital Marketing? Learn Digital Marketing Course in Coimbatore
								from Industry Experts with 100% Placement and Internship
							</p>

						</div>

						<!-- TEXT BOX -->
						<div class="txt-box">

							<!-- List -->
							<ul class="simple-list">

								<li class="list-item">
									<p class="p-lg">12+ Certifications
									</p>
								</li>

								<li class="list-item">
									<p class="p-lg">25+ Projects and Case studies
									</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Career Mentoring
									</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Resume Assistance
									</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Interview Preparation
									</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Job assistance
									</p>
								</li>

							</ul>

						</div> <!-- END TEXT BOX -->

					</div>
				</div>

				<!-- IMAGE BLOCK -->
				<div class="col-md-6 col-lg-7">
					<div class="img-block right-column wow fadeInLeft">
						<img class="img-fluid" src="../images/digital-marketing-course-highlights.png" alt="content-image">
					</div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-6 -->

<!-- FEATURES-4
			============================================= -->
	<section id="features-4" class="features-section division">
		<div class="container">
			<!-- FEATURES-4 WRAPPER -->
			<div class="fbox-4-wrapper fbox-4-wide">

				<div class="row justify-content-center">
					<div class="col-lg-10 col-xl-8">
						<div class="section-title title-01 mb-70">

							<!-- Title -->
							<h2 class="h2-md">Accelerate Your Knowledge</h2>

							<!-- Text -->
							<p class="p-xl">With Certified Digital Marketing Intership Program in Coimbatore</p>

						</div>
					</div>
				</div>
				<div class="top-row pb-50">
					<div class="row d-flex align-items-center">


						<!-- IMAGE BLOCK -->
						<div class="col-md-5 col-lg-6">
							<div class="img-block left-column wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
								<img class="img-fluid" src="../images/accelerate-your-knowledge.png" alt="content-image">
							</div>
						</div>


						<!-- TEXT BLOCK -->
						<div class="col-md-7 col-lg-6">
							<div class="txt-block right-column wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">

								<!-- Text -->
								<p class="p-lg"> Digital marketing is a form of marketing products or services through digital technologies mainly using an electronic device or the internet. Learning digital marketing generally helps in achieving business goals by leveraging digital channels like search engines (Eg: Google), social media (Eg: Facebook) email, and other 3rd party websites to reach the potential and prospective customers.
								</p>

								<!-- Text -->
								<p class="p-lg">Digital marketing training in Coimbatore is creating a benchmark for future marketing trends though it helps grow your business or career. Indeed most of the companies started hiring the best digital marketers who have marketing and advertising skills and can fill the void to expand their brand with regards to the digital trend.
								</p>

								<!-- Text -->
								<p class="p-lg">
									Whether you are a businessman, working professionals, marketer, students or housewife anyone can learn digital marketing class in Coimbatore and grow your future.</p>

								<!-- Text -->
								<p class="p-lg"><b>Are you ready to grow your sales and revenue? Join us now!</b></p>
								<div class="more-btn mt-20">
									<a href="https://api.whatsapp.com/send?phone=918870578887" class="btn btn-violet-red tra-grey-hover">Start Your Career in Digital Marketing Today!</a>
								</div>

							</div>
						</div> <!-- END TEXT BLOCK -->


					</div>
				</div>


			</div>
		</div> <!-- END FEATURES-4 WRAPPER -->


		</div> <!-- End container -->
	</section> <!-- END FEATURES-4 -->



	<!-- BRANDS-2
============================================= -->
	<div id="brands-2" class="pt-30 brands-section division">
		<div class="container">


			<!-- BRANDS TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="brands-title text-center">
						<h2 class="h2-md">Digital Marketing Tools Covered</h2>
					</div>
				</div>
			</div>


			<!-- BRANDS-2 WRAPPER -->
			<div class="brands-2-wrapper">
				<div class="row justify-content-md-center row-cols-2 row-cols-sm-3 row-cols-md-5">


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/activecampaign.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/ahrefs.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/amplitude.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/audiencenetwork.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/buzzsumo.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/canva.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/googleadseditor.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/googlealerts.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/ads-01.png" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/googleanalytics.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>

					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/googlemarketingplatform.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/googlewebdesigner.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/hootsuite.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/inshot.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/instoried.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/invideo.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/rankmath.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/kissmetrics.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/semrush.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/tools/tweetdeck.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


				</div>
			</div> <!-- END BRANDS-2 WRAPPER -->


		</div> <!-- End container -->
	</div> <!-- END BRANDS-2 -->


	<!-- BRANDS-2
============================================= -->
	<div id="brands-2" class="wide-70 brands-section division">
		<div class="container">


			<!-- BRANDS TITLE -->
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="section-title title-02 mb-75">

						<!-- Section ID -->
						<span class="section-id txt-upcase">100+ Hiring Partners</span>

						<!-- Title -->
						<h2 class="h2-xs">Have a Dream Company in My Mind?</h2>

					</div>
				</div>
			</div>



			<!-- BRANDS-2 WRAPPER -->
			<div class="brands-2-wrapper">
				<div class="row justify-content-md-center row-cols-2 row-cols-sm-3 row-cols-md-5">


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/a1.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/a2.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/a3.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/a5.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/b2.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/b3.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/b4.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/b5.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/c2.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/c5.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>

					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/d1.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/d2.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/d3.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/d4.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/e1.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>


					<!-- BRAND LOGO IMAGE -->
					<div class="col">
						<div class="brand-logo">
							<a href="#">
								<img class="img-fluid" src="../images/company/e4.jpg" alt="brand-logo" />
							</a>
						</div>
					</div>



				</div>
			</div> <!-- END BRANDS-2 WRAPPER -->


		</div> <!-- End container -->
	</div> <!-- END BRANDS-2 -->


	<!-- DOWNLOAD-1
			============================================= -->
	<section id="download-1" class="bg-snow  download-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="section-title title-02 mb-75">

						<!-- Section ID -->
						<!-- <span class="section-id txt-upcase">100+ Hiring Partners</span> -->

						<!-- Title -->
						<h2 class="h2-xs">Our Digital Marketing Internship Curriculum</h2>

					</div>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-xl-10">


					<!-- VERSION RELEASE -->
					<div class="version-release">

						<!-- Release Data -->
						<div class="release-data">

							<h4 class="h4-xs">Module 1 - Introduction to Digital Marketing</h4>

							<!-- Version Data -->

						</div>

						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
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
								<li class="list-item">
									<p class="p-lg">Why is digital marketing important?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Types of online presence</p>
								</li>
								<li class="list-item">
									<p class="p-lg">How does digital marketing fulfill the definition of marketing?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Difference between traditional marketing and digital marketing</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Who needs digital marketing services?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">The 4ps of marketing and their implications for digital marketing</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Segmentation strategies for digital marketing</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Pulling together the five forms of segmentation for digital marketing -personas</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Digital marketing platforms</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Different platforms for digital advertising</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">

						<!-- Release Data -->
						<div class="release-data">

							<h4 class="h4-xs">Module 2 - Website Planning and Creation</h4>

							<!-- Version Data -->

						</div>

						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Define your target audience</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Organize your concepts and materials</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Create a directory structure (also called site map)</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Create a sketch of the pages you intend to create</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Design and refine the look and feel of the site</p>
								</li>
							</ul>
						</div>

					</div> <!-- END VERSION RELEASE -->
					<!-- VERSION RELEASE -->
					<div class="version-release">

						<!-- Release Data -->
						<div class="release-data">

							<h4 class="h4-xs">Module 3 - Search Engine Optimisation (SEO)</h4>

							<!-- Version Data -->

						</div>

						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Introduction about Search engine</p>
								</li>
								<li class="list-item">
									<p class="p-lg"> Working Methodology</p>
								</li>
								<li class="list-item">
									<p class="p-lg">SEO Fundamentals and Concepts</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Organic and Inorganic Results</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Website Indexing</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Google Processing</p>
								</li><br>
								<b>On Page Optimization</b><br>
								<li class="list-item">
									<p class="p-lg">404 Not Found</p>
								</li>
								<li class="list-item">
									<p class="p-lg">URL Optimization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Meta Data Optimization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Image Optimization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Internal Linking</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Content Keyword Optimization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Header Tags</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Responsive Design</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Schema.org</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Social Media connect</p>
								</li>
								<li class="list-item">
									<p class="p-lg">URL Canonicalization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Landing Page Optimization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">No-Follow and Do-Follow</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Creating Sitemap XML/HTML</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Robot.Txt file creation</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Anchor Links Optimization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">301 Redirection</p>
								</li><br>

								<b>Off Page Optimization</b><br>

								<li class="list-item">
									<p class="p-lg">Types of Link Building</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Difference between White Hat and Black Hat in SEO</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Directory Submission</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Social Bookmarking in SEO</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Dos and Don’ts in Link Building</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Search Engine Submission</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Article Submission</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Local Business Listing</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Image/Video Sharing</p>
								</li>
								<li class="list-item">
									<p class="p-lg">PPT Submission</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Press Release Submission</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Quora Blog</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Local Business Listing</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Classifieds Submission</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Alexa Rank, Domain</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Blog Commenting</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Social Media Optimization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Guest Blogging</p>
								</li>

							</ul>

						</div>

					</div> <!-- END VERSION RELEASE -->
					<div class="version-release">

						<!-- Release Data -->
						<div class="release-data">

							<h4 class="h4-xs">Module 4 - Social Media Optimization (SMO)</h4>

							<!-- Version Data -->

						</div>

						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Introduction to Social Media Networks</p>
								</li>
								<li class="list-item">
									<p class="p-lg"> Social Media Website Types</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Concepts about SMO</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Facebook Optimization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Twitter Optimization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Instagram Optimization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Right Hashtag for your post</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Facebook, LinkedIn, YouTube, Pinterest</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Blogs for Business</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Image Optimization</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->
					<!-- VERSION RELEASE -->
					<div class="version-release">

						<!-- Release Data -->
						<div class="release-data">

							<h4 class="h4-xs">Module 5 - Social Media Marketing (SMM)</h4>

							<!-- Version Data -->

						</div>

						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Facebook Optimization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Fan Page vs. Profile vs. Group</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Facebook Analytics</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Facebook Advertising and Its Types in Detail</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Creating Advertising Campaigns</p>
								</li>
								<li class="list-item">
									<p class="p-lg">CPC vs. CPM vs. CPA</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Conversion Tracking</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Creating Strong Profiles on Twitter</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Followers, Retweets, Clicks, Conversions, HashTags</p>
								</li>
								<li class="list-item">
									<p class="p-lg">LinkedIn Optimization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Individual Profile vs. Company Profile</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Database Management and Lead Generation</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Branding On LinkedIn</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Marketing on LinkedIn Groups</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Identify Target Audience and Convert Goal</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Report Generation on Post Reach</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Increasing ROI through LinkedIn Ads</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Conversion Tracking and Reporting</p>
								</li>
								<li class="list-item">
									<p class="p-lg">YouTube Optimization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Channel Creation</p>
								</li>
							</ul>
						</div>

					</div> <!-- END VERSION RELEASE -->
					<!-- VERSION RELEASE -->
					<div class="version-release">

						<!-- Release Data -->
						<div class="release-data">

							<h4 class="h4-xs">Module 6 - Pay-Per-Click (PPC) Advertising</h4>

							<!-- Version Data -->

						</div>

						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Introduction to online advertising and Google Ads</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Google Ads account and campaign basics</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Google Ads Targeting and Placement </p>
								</li>
								<li class="list-item">
									<p class="p-lg">Google Ads Bidding and Budgeting</p>
								</li>
								<li class="list-item">
									<p class="p-lg">PPC Basic</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Google Ads Tools</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Opportunities</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Optimizing Performance</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Ads Type</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Bidding Strategies</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Search Network</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Display network</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Shopping Ads</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Video Ads</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Universal App Ads</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Tracking Script</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Remarketing</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Performance Monitoring and Conversion Tracking</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Google Ads Reports</p>
								</li>
							</ul>
						</div>

					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">
						<!-- Release Data -->
						<div class="release-data">
							<h4 class="h4-xs">Module 7 - Content Marketing</h4>
						</div>
						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Introduction to Blogs</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Setting up Blog with Own Content</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Content Duration </p>
								</li>
								<li class="list-item">
									<p class="p-lg">Making a Compelling Personality for Your Content</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Step by step instructions to Monetize Your Blog</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->


					<!-- VERSION RELEASE -->
					<div class="version-release">
						<!-- Release Data -->
						<div class="release-data">
							<h4 class="h4-xs">Module 8 - Keyword research and Website Analytics</h4>
						</div>
						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">What is Keyword Research?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Why is Keyword Research So Important in SEO?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Finding your Focus Keyword </p>
								</li>
								<li class="list-item">
									<p class="p-lg">Competitor Keyword Research and Analysis</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Search for Related Keywords</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Searching Long Tail Keywords</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Searching Question Keywords</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Determine the Primary Goals & Objectives of Your Website</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Focus on Conversions</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Define Key Performance Indicators (KPIs)</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Automate and Integrate Marketing Processes</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Track Progress and Review Strategy Regularly</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">
						<!-- Release Data -->
						<div class="release-data">
							<h4 class="h4-xs">Module 9 - Digital Media Planning and Buying</h4>
						</div>
						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">What Is Media Buying?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">The Media Buying Process</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Choosing the Right DSP</p>
								</li>
								<li class="list-item">
									<p class="p-lg">What Is Media Planning?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">The Media Planning Process</p>
								</li>
								<li class="list-item">
									<p class="p-lg">The Differences between Media Buying and Media Planning</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">
						<!-- Release Data -->
						<div class="release-data">
							<h4 class="h4-xs">Module 10 - Web Remarketing</h4>
						</div>
						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">What Is Remarketing?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">How Remarketing Works</p>
								</li>
								<li class="list-item">
									<p class="p-lg">The Benefits of Remarketing</p>
								</li>
								<li class="list-item">
									<p class="p-lg">The Different Types of Remarketing</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Tips to Leveraging Remarketing and Increasing Your Bottom Line</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Incorporate Remarketing in Your Digital Marketing Strategy</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">
						<!-- Release Data -->
						<div class="release-data">
							<h4 class="h4-xs">Module 11 - Email Marketing</h4>
						</div>
						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Introduction to Email Marketing</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Using Email Marketing Software</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Building Email Lists by Quantity</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Crafting an Email</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Analysing and tracking Your Email Marketing Strategy</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">
						<!-- Release Data -->
						<div class="release-data">
							<h4 class="h4-xs">Module 12 - Mobile Marketing</h4>
						</div>
						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Location-based marketing</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Responsive site design</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Social media advertisements</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Mobile-friendly content</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Voice search optimization</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Text message marketing</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Videos and GIFs</p>
								</li>
								<li class="list-item">
									<p class="p-lg">On-site and in-app support</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Personalize campaigns</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Opt-in forms</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">
						<!-- Release Data -->
						<div class="release-data">
							<h4 class="h4-xs">Module 13 - E-Commerce Management</h4>
						</div>
						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Increase E-commerce Search Usability</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Use High-Quality Photographs and Good Product Descriptions</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Try Personalizing the Home Page</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Focus on Consistent and Unique Content</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Optimize Shopping Cart Functionality</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Build E-mail Lists</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Improve Your Social Media Strategy</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Create Landing Pages</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Build Advertising Strategies</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Implement User-Generated Content</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">
						<!-- Release Data -->
						<div class="release-data">
							<h4 class="h4-xs">Module 14 - Online Reputation Management</h4>
						</div>
						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Corporate reputation in the digital age</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Reputation and participatory culture</p>
								</li>
								<li class="list-item">
									<p class="p-lg">How online has changed the media cycle</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Managing reputation online</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Protecting a Reputation: when it goes wrong, crisis response</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Towards best practice reputation management</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">
						<!-- Release Data -->
						<div class="release-data">
							<h4 class="h4-xs">Module 15 - Google Adsense, Blogging and Affiliate Marketing</h4>
						</div>
						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">What is Google Adsense?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">How to create your Google Adsense account?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Requirements for getting a Google adsense account</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Types of Google Adsense account</p>
								</li>
								<li class="list-item">
									<p class="p-lg">How to navigate the Adsense dashboard?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">How to ad a Google AdSense ad to your site?</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Payment Methods & Updates</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Displaying Adsense ad on your blog</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Ad formats & Dimensions</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Ad Placement techniques</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Adsense Policy and Rules</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">
						<!-- Release Data -->
						<div class="release-data">
							<h4 class="h4-xs">Module 16 - Competitor Analysis</h4>
						</div>
						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Understanding Competitor Analysis and Intelligence</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Analysing Competitors: Segments of Analysis</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Integrating Analysis into Decision Making</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Competitor Analysis tools</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Competitor ads monitoring</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">
						<!-- Release Data -->
						<div class="release-data">
							<h4 class="h4-xs">Module 17 - Bing Advertising</h4>
						</div>
						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Introduction to Campaigns and Ad Groups</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Importing Campaigns, Ad Groups and Keywords</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Bidding and Traffic Estimation</p>
								</li>
								<li class="list-item">
									<p class="p-lg"> Import from Google Google Ads</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Ads creation</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Choosing right Keywords</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Bing Ads Reports</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Conversion Tracking with Campaign Analytics</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Bing Ads Editor Account Management Tips</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Bing Ads Editor Campaign Optimization</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">
						<!-- Release Data -->
						<div class="release-data">
							<h4 class="h4-xs">Module 18 - YouTube Video Marketing & Advertising</h4>
						</div>
						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Create a YouTube channel for business</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Learn about your audience</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Research your competition</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Learn from your favourite channels</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Optimize your videos to get views</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Upload and schedule your videos</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Optimize your channel to attract followers</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Try YouTube advertising</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Try working with an influencer</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Analyse and adapt</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">
						<!-- Release Data -->
						<div class="release-data">
							<h4 class="h4-xs">Module 19 - Blogging</h4>
						</div>
						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Blog for the right audience</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Set clear objectives</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Develop a content strategy</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Follow a blogging schedule</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Have a content promotion strategy</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Your blog needs personality</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Have action-driven content</p>
								</li>
							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->

					<!-- VERSION RELEASE -->
					<div class="version-release">
						<!-- Release Data -->
						<div class="release-data">
							<h4 class="h4-xs">Module 20 - Free and Premium Digital Marketing Tools</h4>
						</div>
						<!-- Release Highlights -->
						<div class="release-highlights">
							<ul class="simple-list">
								<li class="list-item">
									<p class="p-lg">Canva</p>
								</li>
								<li class="list-item">
									<p class="p-lg">SEMrush</p>
								</li>
								<li class="list-item">
									<p class="p-lg"> Google Analytics</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Buffer</p>
								</li>
								<li class="list-item">
									<p class="p-lg">HubSpot</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Mailchimp</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Yoast</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Majestic</p>
								</li>
								<li class="list-item">
									<p class="p-lg">MOZ</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Google Ads</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Google Trends</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Google Search Console</p>
								</li>
								<li class="list-item">
									<p class="p-lg">SpyFu</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Grammarly</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Facebooks Ads Manager</p>
								</li>
								<li class="list-item">
									<p class="p-lg">LinkedIn Ads Manager</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Hotjar</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Ahrefs</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Trello</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Builtwith</p>
								</li>
								<li class="list-item">
									<p class="p-lg">And many more…</p>
								</li>

							</ul>
						</div>
					</div> <!-- END VERSION RELEASE -->
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END DOWNLOAD-1 -->







	<!-- FAQs-2
			============================================= -->
	<section id="faqs-2" class="wide-60 faqs-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="section-title title-02 mb-75">

						<!-- Section ID -->
						<span class="section-id txt-upcase">Frequently Asked Questions</span>

						<!-- Title -->
						<h2 class="h2-xs">Digital Marketing Internship Program</h2>

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
								<h5 class="h5-md">Is there any scope for digital marketing in India?</h5>

								<!-- Answer -->
								<p class="p-lg">Yes Of course the scope of digital marketing is huge not just in India but across the globe and it is growing day by day. Digital Marketing is the fastest growing industry has recently created 8 lakh jobs available in the market and it is estimated to create 20 lakh jobs by 2023. With lots of jobs already existing and loads of jobs which will be created there isn't any chance of a recession in this field.</p>

							</div>

							<!-- QUESTION #2 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">Do you provide both classroom and online digital marketing training?</h5>

								<!-- Answer -->
								<p class="p-lg">Yes, we do provide both offline and online digital marketing training in coimbatore. Only the Digital Marketing Institute in Coimbatore where training on Advanced Digital Marketing Tools will be provided to candidates.</p>

							</div>

							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">How will ClickBox help us in our career growth?</h5>

								<!-- Answer -->
								<p class="p-lg">Don't worry you are in safe hands. ClickBox will support and guide you in such a unique way that your career will grow like a rocket. We assure you with 100% placement assistance.
								</p>

							</div></br>
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">What will be the package for freshers after completing this course?</h5>

								<!-- Answer -->
								<p class="p-lg">After completing this digital marketing course, as soon as you enter the industry being a fresher you might be required to join in as a Digital Marketing Executive or a Search Engine Optimization Executive, and so on. Digital Marketing Executive salary will certainly be around 12k-40k and later without a doubt, it will continue to increase with lots of experience and your capabilities can turn into a dignified position soon.</p>

							</div>


						</div>
					</div> <!-- END QUESTIONS HOLDER -->


					<!-- QUESTIONS HOLDER -->
					<div class="col">
						<div class="questions-holder pl-15">

							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">How much google digital marketing course cost?</h5>

								<!-- Answer -->
								<p class="p-lg">Yes, they are actually free of charge. Google is offering many online certifications course with for free in digital marketing course currently because there is a heavy demand-supply gap, simply speaking, a skills gap. It's choosing to offer free of cost certifications such as Google Analytics, Google AdWords, Google Digital marketing fundamentals courses, and much more.</p>

							</div>





							<!-- QUESTION #3 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">Will I get placed after completing a digital marketing course?</h5>

								<!-- Answer -->
								<p class="p-lg">Definitely with no doubt after completing a digital marketing course. Our experts will train you in the best way to crack the interviews easily and we support you with 100% placement assistance.
								</p>

							</div>

							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">Why ClickBox for digital marketing certification course in Chennai?
								</h5>

								<!-- Answer -->
								<p class="p-lg">We provide students to work on live projects and gain hands-on experience in digital marketing certification course in Coimbatore because when they start working in MNC's they will not find any difficulties
								</p>

							</div>


							<!-- QUESTION #3 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-md">Who can do digital marketing course?</h5>

								<!-- Answer -->
								<p class="p-lg">It doesn't matter if you are a marketer, undergraduate, businessman, students, MBA professional, housewife or even an engineer, whomever you could be, learn this highly innovative trend to go ahead in the career ladder. Any person can do Digital Marketing Course who has dedication in it. There is no particular eligibility to do digital marketing course, even then you need to have a sufficient amount of computer and internet skills.</p>

							</div>


						</div>
					</div> <!-- END QUESTIONS HOLDER -->


				</div> <!-- End row -->
			</div> <!-- END FAQs-2 QUESTIONS -->


			<!-- MORE QUESTIONS BUTTON -->
			<div class="row">
				<div class="col">
					<div class="more-questions">
						<h5 class="h5-sm">Ready to increase your ROI with the perfect Google ads campaign? Let’s talk. <a href="https://www.clickboxagency.com/contacts/">Contact Us</a></h5>
					</div>
				</div>
			</div>


		</div> <!-- End container -->
	</section> <!-- END FAQs-2 -->

	<?php include('footer1.php') ?>



	</div> <!-- END PAGE CONTENT -->
	<?php include('footer-script.php') ?>

	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "https://www.clickboxagency.com/digital-marketing-internship-coimbatore/",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/digital-marketing-internship-coimbatore/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "Advanced Certified Digital Marketing Internship Coimbatore",
			"alternateName": "Digital Marketing Internship, Digital Marketing Internship Coimbatore, Digital Marketing Course Coimbatore, Digital Marketing Training Coimbatore",
				"url": "https://www.clickboxagency.com/digital-marketing-internship-coimbatore/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "Advanced Certified Digital Marketing Internship Coimbatore",
			"url": "https://www.clickboxagency.com/digital-marketing-internship-coimbatore/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "Ready to Expert in Digital Marketing? Learn Digital Marketing Course in Coimbatore from Industry Experts with 100% Placement and Internship",
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
<?/*php include('popup1.php')*/ ?>

</body>

</html>