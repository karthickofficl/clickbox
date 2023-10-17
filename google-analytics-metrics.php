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
	$to = "sales@akkenna.com,james@akkenna.com,pradeep@akkenna.com,info@clickboxagency.com,muthu@akkenna.com";
	$htmlContent = ' 
    <html> 
    <head> 
	<title>Google Analytics Metrics for E Commerce Business</title>

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

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Google Analytics Metrics for E Commerce Business</title>

	<meta name=description content="Google Analytics Metrics elaborates on the sources of traffickers and the performance of their website. Google Analytics helps businesses to analyze the growth. Read more…." />

	<meta name=keywords content="google analytics metrics, important google analytics metrics" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/google-analytics-metrics/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/google-analytics-metrics/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/google-analytics-metrics/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="Google Analytics Metrics for E Commerce Business" />

	<meta property="og:description" content="Google Analytics Metrics elaborates on the sources of traffickers and the performance of their website. Google Analytics helps businesses to analyze the growth. Read more…." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Google Analytics Metrics for E Commerce Business" />

	<meta name="twitter:description" content="Google Analytics Metrics elaborates on the sources of traffickers and the performance of their website. Google Analytics helps businesses to analyze the growth. Read more…." />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<!--FAVICON-->
	<link rel="icon" href="https://clickboxagency.com/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="https://clickboxagency.com/images/favicon.png" type="image/x-icon">


	<?php include('header-style.php') ?>
</head>

<body>

	<?php include('header.php') ?>
	<!-- SINGLE POST
			============================================= -->
	<section id="single-post" class="wide-30 inner-page-hero single-post-section division">
		<div class="container">


			<!-- SINGLE POST CONTENT -->
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="single-post-wrapper">

						<!-- BLOG POST INNER IMAGE -->
						<div class="post-inner-img">
							<img class="img-fluid" src="https://clickboxagency.com/images-new/blog/google-analytics-blog.webp" alt="blog-post-image" />
						</div>
						<div class="row justify-content-center ">
							<div class=" col-lg-1 mb-4  order-md-first">
								<div class="icon-sticky">
            						<div class="share text-center">
            							<div class="clap">
            								<div class="hover-effect"></div>
            								<div class="confetti-effect">
            									<div class="confetti-wrap">
            										<div class="group group-1">
            											<span class="circle"></span>
            											<span class="triangle"></span>
            										</div>
            										<div class="group group-2">
            											<span class="circle"></span>
            											<span class="triangle"></span>
            										</div>
            										<div class="group group-3">
            											<span class="circle"></span>
            											<span class="triangle"></span>
            										</div>
            										<div class="group group-4">
            											<span class="circle"></span>
            											<span class="triangle"></span>
            										</div>
            										<div class="group group-5">
            											<span class="circle"></span>
            											<span class="triangle"></span>
            										</div>
            									</div>
            								</div>
            								<div class="clap-icon"><span>👏</span></div>
            							</div>
										<p class="sharecolour "> Share</p>
										<ul class="shareitnow">
											<li> <a target="_blank" href="https://twitter.com/clickboxagency" aria-label="Twitter"> <img src="../images\x-logo\logo-black.png" class="twitter-size-x" alt="clickboxagency-twitter"> </a></li>
											<li> <a target="_blank" href="https://www.facebook.com/Clickbox-Agency-106763298597846/" aria-label="Facebook"> <i class="fa fa-facebook"></i> </a></li>
											<li> <a target="_blank" href="https://in.pinterest.com/clickboxagency/_saved/" aria-label="Pinterest"> <i class="fa fa-pinterest"></i> </a></li>
											<li> <a target="_blank" href="https://www.linkedin.com/company/clickbox-agency/" aria-label="Linkedin"> <i class="fa fa-linkedin"></i> </a></li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-lg-9 ">

								<!-- SINGLE POST TITLE -->
								<div class="single-post-title">

									<!-- TITLE -->
									<h1 class="h2-md">Google Analytics Metrics for E Commerce Business</h1>


								</div> <!-- END SINGLE POST TITLE -->





								<!-- BLOG POST TEXT -->
								<div class="single-post-txt">

									<!-- Text -->
									<p class="p-md blog-para txt-justify txt-justify">

										Every marketer or a business owner planning to build a website has to research and add a lot of valued contents to
										draw attention to their site. But how do you know that the service you are offering on your website is appealing to
										your viewers? <br> <br>

										Achievement of your website marketing and campaign depends on the users trafficking your website and contributing to
										your business growth. One such service to track and record this user activity is Google Analytics. It is a popular service
										utilized to track user trafficking of any website. In simple terms, this tool helps in measuring the number of people
										visiting and viewing a website. This service is offered by Google. This tool is absolutely free to use by organizations
										who want to analyze how users find and use their website. <br> <br>
										It helps in comprehending our marketing efforts. In addition to that it tracks the performance of a website by collecting
										visitor information. Each report in the analytics dashboard is made up of metrics and dimensions.<br> <br>
										During pandemic covid-19, many businesses had an abrupt end. But the E-commerce industry had an amazing success and
										digitalisation was at its highest. Many business owners and marketers had a lot of competition to improvise their
										websites for their thriving business. In times like this these analytical tools come in handy to upgrade the site and
										reach our potential.


									</p>

								</div>


								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">

									<!-- Title -->
									<h4 class="h4-lg blog-title">Google analytics dashboard can be categorized into</h4>
									<br>
									<!-- Title -->
									<h4 class="h1-lg">1. Audience</h1>

										<p class="p-md blog-para txt-justify">Audiences are the customers or the users or the traffickers who view your website and avail your service.
											You will find information on their interests(the data they are viewing), demographics, the devices they are using, and
											their behaviors on the website. Based on the data acquired from the audience the marketer can change to improve the website
											to match customers needs. The different types of audience/users are:
										</p>

										<ul class="digit-list">
											<li>
												<p class="p-md blog-para txt-justify">● First time audience</p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● Users who visited a particular page</p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● Audience who completed a goal conversion</p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">●Audience who completed a transaction</p>
											</li>


										</ul>

										<h4 class="h4-lg blog-title">2. Acquisition</h4>

										<!-- Text -->
										<p class="p-md blog-para txt-justify">This level is about how or through what channel the customers are directed to the website .
											Advertisements posted on any social media platform (facebook, instagram etc.), search engines,
											website referrals(your link referred in some other website) and email ad campaigns, paid search
											(traffic from search engine marketing like google ads), display(traffic from display advertising)
											are some of the marketing areas that help business owners to get the customers to view their sites.<br> <br>
											Google Analytics Acquisition helps marketers or business owners to access the traffic sources report and the channel breakdown.<br> <br>
											For example, as we browse facebook home pages we find a lot of ads. If the ads suit our needs, we click on them and then we are
											directed to that particular website. Suppose we find an ad of cute outfits from myntra, we click on it and it will directly open
											to our desired product. <br> <br>
											To sum up, Google Analytics data helps business owners to improve and understand these marketing tactics and ad campaigns
											to make the audience traffic the website and avail its services.

										</p>


										<!-- Title -->
										<h4 class="h4-lg blog-title">3. Behavior</h4>

										<!-- Text -->
										<p class="p-md blog-para txt-justify">
											After the customer/audience visits your website you should know what their actions are on the site.
											Behavior depends on what the audience is viewing, the number of pages they are visiting, the duration
											they stay on the pages, the products they viewed and added in their cart and lots of other things they
											do while staying on the site.

										</p>
										<!-- Title -->
										<h4 class="h4-lg blog-title">4. Conversion </h4>

										<!-- Text -->
										<p class="p-md blog-para txt-justify">Conversion is the action that the customer made while visiting your website.
											If the customers had signed up or made a purchase which contributes to the profit of the business, the marketers or business owners
											can take this information to improve the customers journey.</p>



										<h4 class="h4-lg blog-title">5. Dimensions</h4>


										<!-- Text -->
										<p class="p-md blog-para txt-justify">Dimensions of Google Analytics refer to the user's geographic area/language
											(location of the user viewing the website), social media platforms (the users who view the websites by clicking the ad posted
											on any social media platforms like Facebook, Instagram, etc.), directly coming to the website by typing the URL mostly by
											returning visitors, email-campaign and by clicking on referred URLs from some other website.</p>

										<h4 class="h4-lg blog-title">Important Google Analytics Metrics to Track Business Growth</h4>

										<!-- Text -->
										<p class="p-md blog-para txt-justify">A metric sets guidelines for quantitative measurement. Metrics are numbers. Google Analytics calculates
											the data from a website in multiple ways, the primal ones including user level, session level, and page view level.
											The common metrics include:</p>
										<ul class="digit-list">
											<li>
												<p class="p-md blog-para txt-justify">● <b>Users</b> – Any unique visitor/viewer of the website. If they are the same viewer,
													they won't be counted as a new user.</p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● <b>Sessions</b> - Every time the user visits the site and is actively engaged in any interactions.
													The session is started as soon as the user enters the site. The session after 30 minutes of window activity.</p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● <b>Average Session Duration</b> – The duration of an average visitor staying on the site.
													Any marketer can use this data to analyze user engagement in relation to the content on your website.
													Suppose if the duration of the visitor viewing any content is low then the marketer can improvise the
													content to suit the audience's preference.</p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● <b>Ratio of new to returning visitors sessions</b> - The rate of visits by the same visitors.
													The marketer can track that their campaigns are interesting and attractive to returning visitors. Returning
													visitors indicates a growing business.</p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● <b>Bounce Rate</b> - The number of customers leaving after viewing a single page. It points out if
													there is a technical issue on the site or with the user, or if the content on the page is relevant to the user,
													or if the marketing campaigns are driving the right traffic to the sites. If the site is experiencing a high
													bounce rate, then look into demographics( the age and the gender) which enables you to write the ad campaign
													for the right audience. </p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● <b>Pages viewed per session</b> – Number of page views per session. Track the duration of the users
													staying on any site.</p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● <b>Goal completions</b> – The Frequency of visitors completing their desired action. Any action like
													customers making a purchase or signup or it can be feedback or availing any of your services.</p>
											</li>


										</ul>
										<!-- Title -->
										<h4 class="h4-lg blog-title">Benefits of GA</h4>
										<ul class="digit-list">
											<li>
												<p class="p-md blog-para txt-justify">● Trace online traffic</p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● Comprehending user behavior</p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● Improve SEO and content marketing </p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● Brainstorming ideas for business</p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● E-commerce performance</p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● Google Analytics revamps sites</p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● Targeting the right audience </p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● Data reports and customization</p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● Boost online Advertising with marketing analytics </p>
											</li>
											<li>
												<p class="p-md blog-para txt-justify">● GA conversion tracking</p>
											</li>


										</ul>



										<h4 class="h4-lg blog-title">How would you know that your website is successful?</h4>


										<p class="p-md blog-para txt-justify">Many organizations create websites to display their products or services. In order to determine their success,
											they need a ‘web analytics tool’ to gauge the number of users visiting their website that helps the business to thrive.
											Google Analytics, GA, gives in-depth knowledge into your website and online business performance. The more accurate data
											we obtain, the more opportunities for optimization and acquiring an understanding of how connected everything is in comparison
											to business at large. Suppose you have a large number of returning customers and new customers, then your ad campaigns and all
											the marketing efforts are effective. But as a marketer you should keep up with the trend and upgrade the website to the customer's
											needs. </p>

										<p class="p-md blog-para txt-justify">The multiple uses of the Google Analytics tool are valuable for a business to go to the next level.
											This tool helps marketers to find and realize their performance in reality. This tool is available for free and it is the
											marketer's job to make full use of it to revamp their services for their benefit. Even if you use GA as a passive or active tool,
											anytime you can refer back to it and know the performance of your site.</p>

										<p class="p-md blog-para txt-justify">Business owners can use Google analytic metric as an aid to enhance their business. Every day the owners have to
											track the trend of theirever-changingg and challenging business. It is tough to keep track of growing trends and they have to look
											into all aspects of their business. To avoid that hassle, they can outsource this aspect of work to digital marketing experts like
											Clickbox agency, who helps your business to keep up with the latest technology and trend.</p>


								</div> <!-- END BLOG POST TEXT -->

								<!-- SINGLE POST SHARE LINKS -->
								<div class="row post-share-links d-flex align-items-center">

									<!-- POST TAGS -->
									<div class="col-md-12 col-xl-12 post-tags-list">
										<div class='didide'>
											<span><a href="#">google analytics metrics</a></span>
											<span><a href="#">important google analytics metrics</a></span>
										</div>

									</div>



								</div>
								<div class="row d-flex align-items-center justify-content-center mt-50 gap-3">
									<div class="col-md-2 d-flex align-items-center justify-content-center flex-column">
										<img src="../images/clickbox-linkedin-profile.png" alt="John Click">
										<a target="_blank" href="https://www.linkedin.com/in/john-click-167b94238/" aria-label="Linkedin click john" class="linkedin-link-align"> <i class="fa fa-linkedin p-2"></i> </a>
									</div>
									<div class="col-md-8">
										<h4 class="h4-lg blog-title txtredd">John Click</h4>
										<p class="p-md txt-justify txtbluee">Digital Marketer | SEO Copywriter | Content Strategist</p>
										<p class="p-md txt-justify ">Experienced digital marketer with a proven track record in creating compelling content that not only engages audiences but also drives conversions and enhances SEO visibility. My expertise extends beyond marketing strategy to crafting persuasive narratives that resonate with your target audience. I combine data-driven strategies with captivating writing to deliver measurable results, ensuring your brand shines in the digital landscape.</p>
										<!-- Connect with me on LinkedIn(https://www.linkedin.com/in/john-click-167b94238/) or visit my website "https://clickboxagency.com/" to explore more about my work and stay updated with the latest digital marketing trends. -->
									</div>
								</div>

							</div>
						</div>
					</div> <!-- END SINGLE POST CONTENT -->


				</div> <!-- End container -->
	</section> <!-- END SINGLE POST -->

	<!-- POST COMMENTS
			============================================= -->
	<section id="contacts-2" class="bg-snow pt-10 contacts-section division">
		<div class="container">
			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="section-title title-02 mb-80">
						<!-- Title -->
						<h2 class="p-md txtredd">Questions? We're Here To Help. <br>Send Us A Message!</h2>
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
								<input type="email" name="email" class="form-control email" placeholder="Email Address*">
							</div>
							<div class="col-md-6">
								<input type="number" maxlength="10" name="phone" class="form-control phone" placeholder="Mobile Number*">
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




	<!-- BLOG-1
			============================================= -->
	<section id="blog-1" class="bg-whitesmoke-gradient blog-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mt-20">
						<!--wide-60  -->
						<h2 class="p-md txtredd">Stay Engaged With Our Content</h2>
					</div>
				</div>
			</div>

			<!-- INCLUDE BLOGS -->

			<?php include('newblog2.php') ?>


		</div> <!-- End container -->
	</section> <!-- END BLOG-1 -->

	<a id="back-to-top" class="back-to-top"><img src="../images/up-arrow.svg" class="up-arrow" alt="back-to-top"></a>


	<?php include('footer.php') ?>

	</div> <!-- END PAGE CONTENT -->

	<?php include('footer-script.php') ?>

	<script>
		var backTop = $('#back-to-top');

		$(window).scroll(function() {
			if ($(window).scrollTop() > 400) {
				backTop.addClass('show');
			} else {
				backTop.removeClass('show');
			}
		});

		backTop.on('click', function(e) {
			e.preventDefault();
			$('html, body').animate({
				scrollTop: 0
			}, '300');
		});
	</script>


	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"url": "https://www.clickboxagency.com/google-analytics-metrics/",

			"potentialAction": {

				"@type": "SearchAction",

				"target": "https://www.clickboxagency.com/google-analytics-metrics/find?q={search_term_string}",

				"query-input": "required name=search_term_string"

			}

		}
	</script>

	</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"name": "Google Analytics Metrics for E Commerce Business",

			"alternateName": "google analytics metrics, important google analytics metrics",

			"url": "https://www.clickboxagency.com/google-analytics-metrics/"

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "https://schema.org",

			"@type": "Organization",

			"name": "Google Analytics Metrics for E Commerce Business",

			"url": "https://www.clickboxagency.com/google-analytics-metrics/",

			"email": "info@clickboxagency.com",

			"foundingDate": "2022",

			"description": "Google Analytics Metrics elaborates on the sources of traffickers and the performance of their website. Google Analytics helps businesses to analyze the growth. Read more….",

			"logo": "https://www.clickboxagency.com/images/logo-01.png",

			"contactPoint": {

				"@type": "ContactPoint",

				"telephone": "+91 8870578887",

				"contactType": "sales",

				"contactOption": "Customer Service",

				"areaServed": "India, United States, Australia",

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
		<script>
		var owl = $('.service-carousel');
		owl.owlCarousel({
			items: 3,
			loop: !0,
			autoplay: !0,
			navBy: 1,
			nav: !1,
			autoplayTimeout: 4e3,
			autoplayHoverPause: !1,
			smartSpeed: 2e3,
			responsive: {
				0: {
					items: 2
				},
				550: {
					items: 3
				},
				767: {
					items: 3
				},
				768: {
					items: 3
				},
				991: {
					items: 3
				},
				1e3: {
					items: 3
				}
			}
		});
	</script>
	<script>
		$(function() {
			function randomNum(m, n) {
				m = parseInt(m);
				n = parseInt(n);
				return Math.floor(Math.random() * (n - m + 1)) + m;
			}

			var clap = $('.clap');
			var confetti = $('.confetti-effect');

			clap.on('click', function() {

				confetti.css('transform', 'rotate(' + randomNum(0, 180) + 'deg)')
				clap.children('.clap-icon').stop().toggleClass('clap-hover');
				
			
				confetti.children('.confetti-wrap').stop().addClass('expand');
				setTimeout(function() {
					confetti.children('.confetti-wrap').removeClass('expand');
				}, 700)
			});
		});
	</script>

</body>

</html>