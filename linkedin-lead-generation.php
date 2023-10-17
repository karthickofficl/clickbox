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
	$to = "sales@akkenna.com,james@akkenna.com,pradeep@akkenna.com,info@clickboxagency.com";
	$htmlContent = ' 
<html> 
<head> 
<title>Trending LinkedIn Lead Generation Techniques in 2022</title>
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

	<title>Trending LinkedIn Lead Generation Techniques in 2022</title>

	<meta name=description content=" According to LinkedIn statistics of 2021, the number of sessions on the LinkedIn rise by 45% and 450 billion feed updates were viewed. Read more..." />

	<meta name=keywords content="linkedin lead generation, linkedin b2b lead generation, b2b marketing on linkedin, linkedin lead generation service, linkedin statistics" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/linkedin-lead-generation/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/linkedin-lead-generation/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/linkedin-lead-generation/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="Trending LinkedIn Lead Generation Techniques in 2022" />

	<meta property="og:description" content=" According to LinkedIn statistics of 2021, the number of sessions on the LinkedIn rise by 45% and 450 billion feed updates were viewed. Read more..." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Trending LinkedIn Lead Generation Techniques in 2022" />

	<meta name="twitter:description" content=" According to LinkedIn statistics of 2021, the number of sessions on the LinkedIn rise by 45% and 450 billion feed updates were viewed. Read more..." />


	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<!--FAVICON-->

	<link rel="icon" href="https://clickboxagency.com/images/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="https://clickboxagency.com/images/favicon.ico" type="image/x-icon">
	
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
							<img class="img-fluid" src="https://clickboxagency.com/images-new/blog/linkedin-lead-generation.webp" alt="blog-post-image" />
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
									<h1 class="h2-md">Trending LinkedIn Lead Generation Techniques in 2022</h1>


								</div> <!-- END SINGLE POST TITLE -->

								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">

									<!-- Text -->
									<p class="p-md blog-para txt-justify txt-justify">

										Social media has a wide range of users. Facebook and Twitter are used by people for sports, memes, and entertainment. To obtain
										beautiful visuals and inspiration, they use Instagram and Pinterest. <a href="https://www.linkedin.com/help/linkedin/answer/a548441/what-is-linkedin-and-how-can-i-use-it-?lang=en" style="color:#0000FF;"><u>LinkedIn,</u></a> however, is the place to be for business and
										professional networking opportunities. <b>What motivates you to pay more attention to LinkedIn statistics? </b> LinkedIn is the
										biggest and most effective platform of its kind and is known as the "professional social networking site", which connects
										professionals all over the world. Also, linkedin lead generation became an important approach to reaching customers online.<br><br>
										In point of fact, during the past 12 years, the search rate for "LinkedIn" has surged by more than 212 percent. Additionally,
										over 40% of users are active on their sites. <br><br>
										It's critical to have an industry-level perspective and an awareness of what drives the most recent LinkedIn marketing data.
										Some interesting LinkedIn statistics are reviewed in this blog, concentrating on the topics of on-site features, demographics,
										recruitment, lead generation, and marketing trends. Let's get started… <br><br>
									</p>

								</div>


								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">

									<!-- Title -->
									<h4 class="h4-lg blog-title">LINKEDIN MARKETING STRATEGY </h4>


									<!-- Text -->
									<p class="p-md blog-para txt-justify txt-justify">Making significant professional and business relationships have been made much easier for people in response to
										LinkedIn. Also, the possibility of filtering out non-business statistics, which are not given priority by other social networks.
										Updating features like seniority level, job description, years of experience, and company are adding advantages to connect people
										across. Your <a href="https://iide.co/blog/top-linkedin-marketing-strategies/" style="color:#0000FF;"><u>LinkedIn marketing strategy</u></a> should contain an optimized profile if you want to expand your connections.
										Simple actions like including a profile picture and background image, writing an engaging summary, and utilizing your work
										title as your headline can make a big difference.
									</p> <br>

									<h4 class="h4-lg blog-title">LINKEDIN LEAD GENERATION TECHNIQUES</h4>

									<!-- Title -->
									<h4 class="h4-lg blog-title">LinkedIn is a significant tool because it has three key features:</h4>

									<!-- Digit List -->
									<ul class="digit-list" style="list-style: upper-alpha; padding-left:21px;">

										<li>
											<p class="p-md blog-para txt-justify"> Share information</p>
										</li>
										<li>
											<p class="p-md blog-para txt-justify"> Educate people</p>
										</li>
										<li>
											<p class="p-md blog-para txt-justify"> Strengthen authority</p>
										</li>

									</ul>

									<!-- Text -->
									<p class="p-md blog-para txt-justify txt-justify">
										All activities involved in acquiring and promoting new consumers are included in lead generation. Despite the fact that
										businesses use a variety of sales and marketing techniques to generate leads, it is imperative to have well-defined procedures
										in place. <br><br>
										<a href="https://www.i-scoop.eu/top-six-reasons-use-linkedin-b2b-marketer/" style="color:#0000FF;"><u>B2B Linkedin lead generation</u></a> tends to be more precisely focused than B2C lead generation. Anyone could be a potential lead
										if you sell tennis shoes. The market is noticeably more specialised if you provide content management software.<br><br>
										B2B lead generation has become a significant challenge for today's businesses due to intense competition and congested markets.
										Those who reliably produce high-quality leads get a definite competitive edge. <br><br>
									</p>

									<!-- Title -->
									<h4 class="h4-lg blog-title">HOW TO MANAGE MARKETING ON LINKEDIN </h4>

									<!-- Text -->
									<p class="p-md blog-para txt-justify txt-justify">LinkedIn provides highly personalized ways to find potential leads, engage with them, and convert them into
										clients. The techniques to achieve marketing plans on LinkedIn are described below:</p>

									<h4 class="h4-lg blog-title">1. Strengthen your company's LinkedIn page</h4>

									<!-- Text -->
									<p class="p-md blog-para  txt-justify">It is essential to set up a business presence on LinkedIn in a professional manner. Basically, you can mention
										your education and professional experiences in your profile. However, LinkedIn now gives you the option to improve your profile by
										including additional interactive features. <br><br>
										Posting status updates is one of the finest methods to engage with your networks and keep that connection strong. Update
										relevant content on your page or other pages, which may include images or pertinent links. <br><br>
									</p>

									<p class="p-md blog-para "><b>Articles:</b> It's simple to add a new article to your profile, which elevates your status as a thought leader.</p>
									<p class="p-md blog-para "><b>Recommendations:</b> LinkedIn gives you the option to ask for recommendations from your connections,
										highlighting your experience and highlighting your profile.</p>
									<p class="p-md blog-para "><b>Expertise:</b> Listing your company's expertise on your profile is a terrific approach to make it easier for
										visitors to understand your business right away.</p>
									<p class="p-md blog-para "><b>Videos:</b> Add videos to your profile to make it more complete if you already have content like videos on
										YouTube or presentation slides on Slideshare.</p>
									<p class="p-md blog-para "><b>Projects:</b> To demonstrate what your company does and how well your team does it, you may have completed some successful projects that you should share with your connections. You may accomplish that with ease thanks to LinkedIn.</p>

									<img class="img-fluid" src="../images/blog/linkedin-home.png" , width="700" height="600" alt="blog-post-image" /><br><br>
									<!-- Title -->
									<h4 class="h4-lg blog-title">2. Enhance the performance of the page</h4>

									<!-- Text -->
									<p class="p-md blog-para  txt-justify">To emphasize your brand's presence, you need a comprehensive profile. Your connections or consumers will learn
										more about you and what you do thanks to a compelling profile. <a href="https://everyonesocial.com/blog/linkedin-profile-optimization/" style="color:#0000FF;"><u>Optimizing your profile</u></a> or page is essential. A business website or
										LinkedIn profile that has been optimized for search engines has a better chance of ranking up significantly. As a result, it
										increases your brand's presence online.<br><br>
										There are common methods for optimizing your profile. Include images, information about key employees, logos and headers, and
										other pertinent stuff to give your company a professional and human appearance to the audience. If you want to make the page
										completely optimized, you should think about employing search engine optimization (SEO). Therefore, it is preferable to include
										pertinent keywords throughout the page's text and description. It raises the page rating of your website and aids the search
										engine in rapidly comprehending what you're about.</p>

									<h4 class="h4-lg blog-title">3. Establish a comprehensive business page</h4>


									<p class="p-md blog-para  txt-justify">A LinkedIn page could be the best place to share the history of your business. It is crucial to provide clear
										details about your goods and services, as this may be the first thing visitors want to know when they land on your page. Create a
										page that will be beneficial to you and your relationships. <br><br>
										A header image, products and services, status updates, and employment possibilities are just a few examples of such crucial
										material for your company page. LinkedIn can be transformed from a networking site that focuses on careers into a location where you build brand awareness.</p>

									<h4 class="h4-lg blog-title">4. Develop relevant content</h4>

									<p class="p-md blog-para  txt-justify">Your marketing can flourish if you have amazing content. When you start your LinkedIn company page, make sure the
										content you upload there is worthwhile. Once they uncover values on your page, viewers just click the follow button and maintain
										you in their connections. Your content may help some individuals learn more while helping others find solutions to their
										difficulties.</p>

									<h4 class="h4-lg blog-title">5. Choose your audience</h4>


									<p class="p-md blog-para  txt-justify">One of the most important components of any marketing strategy, including LinkedIn marketing, is understanding the
										audience. LinkedIn makes it simpler for you to gain insight into the audience and identify their characteristics by giving Website
										Demographics. <br><br>
										This tool reveals the different visitor types to your page as well as the material that they are most interested in. In order to
										target your content to the right audience, and gauge its impact, and your return on investment (ROI), you can use this data.<br><br>
										Additionally, you may experiment with various LinkedIn automation tools to target audiences based on different demographics and
										produce more leads for your company. The most important tool used in LinkedIn marketing is the sales navigator.</p>


									<h4 class="h4-lg blog-title">SALES NAVIGATOR</h4>


									<p class="p-md blog-para  txt-justify">LinkedIn's Sales Navigator is a collection of subscription-based services. Offerings are made to aid sales
										professionals in prospect identification, alerting them to prospects' LinkedIn activity, and requesting introductions to prospects
										via shared connections. Monthly and yearly subscriptions are available for purchase. LinkedIn b2b lead generation can be easily
										handled by accessing the <a href="https://www.techtarget.com/whatis/definition/LinkedIn-Sales-Navigator#:~:text=LinkedIn%20Sales%20Navigator%20is%20a,to%20prospects%20through%20shared%20connections." style="color:#0000FF;"><u>sales navigator.</u></a></p>

									<img class="img-fluid" src="https://clickboxagency.com/images/blog/linkedin-saless.png" , width="700" height="600" alt="blog-post-image" /><br><br>

									<h4 class="h4-lg blog-title">6. Check out LinkedIn Ads</h4>

									<p class="p-md blog-para  txt-justify">Different campaign kinds are available to efficiently increase LinkedIn lead generation and brand visibility. For
										marketers, it offers a wide variety of chances. Sponsored Content, Sponsored InMail, and Text Ads are the most popular ad formats.
										The most recent and perhaps most effective one is LinkedIn Video Ads.</p>

									<h4 class="h4-lg blog-title">7. Update Regularly</h4>

									<p class="p-md blog-para  txt-justify">Create posts regularly and follow the schedule. Keep your audience engaged with different content and posts.
										Add perfect keywords along with catchy headlines. Choose the relevant hashtags to post the data. Sponsored content is one of the
										best ways to provide a regular update of high-quality connections and leads if you want to increase your exposure and audience.</p>

									<h4 class="h4-lg blog-title">8. Join LinkedIn Groups</h4>


									<p class="p-md blog-para  txt-justify">In LinkedIn spend time interacting in a genuine, beneficial, and beneficial way. In its framework, LinkedIn is a
										social platform just like any other. Users can form groups based on interests related to their field, just like on Facebook, and
										you should join these groups to interact with other professionals. You can share updates and articles to promote debates on
										pertinent subjects or just promote the services you provide. Your future clients can notice what you say and start to perceive you
										as a source of insightful information if you've joined groups appropriately. <br><br>
										Groups are another tool you may use to understand your audience better. Identify prevalent industry pain points and how leads want
										these issues solved by listening to your active members.</p>


									<h4 class="h4-lg blog-title">9. Online recruitment on LinkedIn</h4>

									<p class="p-md blog-para  txt-justify">LinkedIn is primarily a networking site where users can look for improved employment prospects. Additionally,
										businesses can showcase their best qualities to draw in the most compelling prospects. People can post and recruit other students, who are looking for jobs.</p>

									<h4 class="h4-lg blog-title">
										<center>“LinkedIn is no longer an online resume. It’s your digital reputation.”</center>
									</h4>
									<p class="p-md blog-para ">
										<center>– <a href="https://www.linkedin.com/in/jillrowley/" style="color:#0000FF;"><u>Jill Rowley</u></a></center>
									</p> <br>
									<p class="p-md blog-para  txt-justify">In conclusion, If you want to up your digital marketing strategies, LinkedIn is a great platform to start with.
										Here are some statistics you should know about the platform:</p>


									<!-- List -->
									<ul class="simple-list txt-justify">

										<li class="list-item">
											<p class="p-md blog-para ">LinkedIn has over 610 million users.</p>
										</li>

										<li class="list-item">
											<p class="p-md blog-para ">Over <a href="https://linkedselling.com/linkedin-stats-for-lead-gen/#:~:text=A%20study%20from%20Hubspot%20shows,is%20an%20effective%20marketing%20channel." style="color:#0000FF;"><u>50% of LinkedIn</u></a> users are active on the platform daily.</p>
										</li>

										<li class="list-item">
											<p class="p-md blog-para ">LinkedIn is available in 24 languages.</p>
										</li>

										<li class="list-item">
											<p class="p-md blog-para ">Linkedin connects people worldwide.</p>
										</li>
										<li class="list-item">
											<p class="p-md blog-para ">LinkedIn accounts for 80% of all online business-to-business (B2B) lead generating.</p>
										</li>

										<li class="list-item">
											<p class="p-md blog-para ">43 % of social network marketers claim to have found at least one client through the system.</p>
										</li>
										<li class="list-item">
											<p class="p-md blog-para ">79% of marketers think this platform is an excellent tool for generating leads.</p>
										</li>

									</ul>


									<p class="p-md blog-para  txt-justify">With such a large and engaged user base, LinkedIn is a great platform for B2B marketing. B2b marketing on
										Linkedin allows business people to exchange services, products, and information between businesses. If you are not already
										using LinkedIn for your business, now could be the time to start! <br><br>
										If you want to associate with the best LinkedIn lead generation services available in the industry, then we highly suggest you
										Contact <a href="https://www.clickboxagency.com/" style="color:#0000FF;"><u>ClickBox Agency Today!</u></a></p> <br>
								</div> <!-- END BLOG POST TEXT -->

								<!-- SINGLE POST SHARE LINKS -->
								<div class="row post-share-links d-flex align-items-center">

									<!-- POST TAGS -->
									<div class="col-md-12 col-xl-12 post-tags-list">
										<div class='didide '>
											<span><a href="#">linkedin lead generation</a></span>

											<span><a href="#"> linkedin statistics</a></span>
											<span><a href="#">b2b marketing on linkedin</a></span>

											<span><a href="#">linkedin b2b lead generation</a></span>
											<span><a href="#">linkedin lead generation service</a></span>
										</div>

									</div>

									<!-- POST SHARE ICONS -->


								</div>
								<div class="row d-flex align-items-center justify-content-center mt-50 gap-3">
									<div class="col-md-2 d-flex align-items-center justify-content-center flex-column">
										<img src="../images/clickbox-linkedin-profile.png" alt="John Click">
										<a target="_blank" href="https://www.linkedin.com/in/john-click-167b94238/" aria-label="Linkedin click john" class="linkedin-link-align"> <i class="fa fa-linkedin p-2"></i> </a>
									</div>
									<div class="col-md-8">
										<h4 class="h4-lg txtredd">John Click</h4>
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

			"url": "https://www.clickboxagency.com/linkedin-lead-generation/",

			"potentialAction": {

				"@type": "SearchAction",

				"target": "https://www.clickboxagency.com/linkedin-lead-generation/find?q={search_term_string}",

				"query-input": "required name=search_term_string"

			}

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"name": "Trending LinkedIn Lead Generation Techniques in 2022",

			"alternateName": "linkedin lead generation, linkedin b2b lead generation, b2b marketing on linkedin, linkedin lead generation service, linkedin statistics",

			"url": "https://www.clickboxagency.com/linkedin-lead-generation/"

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "https://schema.org",

			"@type": "Organization",

			"name": "Trending LinkedIn Lead Generation Techniques in 2022",

			"url": "https://www.clickboxagency.com/linkedin-lead-generation/",

			"email": "info@clickboxagency.com",

			"foundingDate": "2022",

			"description": " According to LinkedIn statistics of 2021, the number of sessions on the LinkedIn rise by 45% and 450 billion feed updates were viewed. Read more...",

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