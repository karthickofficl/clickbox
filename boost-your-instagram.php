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

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>A Beginner's Guide to 7 Organic Instagram Follower Strategies</title>

	<meta name=description content="Instagram is a social media platform where business owners can 
		market their brand to a large audience. To boost your follower base organically, there are few
		strategies and advantages that business owners should be aware of before they market their brand " />

	<meta name=keywords content="instagram organic growth, organically increase instagram followers, growing organic instagram followers,
		instagram organic growth service, instagram organic growth strategy " />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href=" https://www.clickboxagency.com/boost-your-instagram/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content=" https://www.clickboxagency.com/boost-your-instagram/" />

	<meta property="og:site_name" content=" https://www.clickboxagency.com/boost-your-instagram/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="A Beginner's Guide to 7 Organic Instagram Follower Strategies" />

	<meta property="og:description" content="Google Analytics Metrics elaborates on the sources of traffickers and the performance of their website. Google Analytics helps businesses to analyze the growth. Read more…." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="A Beginner's Guide to 7 Organic Instagram Follower Strategies" />

	<meta name="twitter:description" content="Instagram is a social media platform where business owners can 
		market their brand to a large audience. To boost your follower base organically, there are few
		strategies and advantages that business owners should be aware of before they market their brand." />


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
							<img class="img-fluid" src="https://clickboxagency.com/images/blog/boost-your-instagram.jpg" alt="blog-post-image" />
						</div>
						<!-- SINGLE POST CONTENT -->
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
									<h1 class="h2-md">Instagram organic growth strategy </h1>

								</div> <!-- END SINGLE POST TITLE -->

								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">

									<!-- Text -->
									<p class="p-md blog para ">

										Instagram organic growth strategy is to multiply your followers without spending a single penny from your marketing budget.<br><br>
										There are a lot of ways to enlarge your audience group without paying any services. Even though instagram ads are more convenient
										to promote your product, you still have to engage your followers with your content.<br><br> Instagram keeps on adding a lot of features
										like Instagram reels and story which helps the business owners to keep their target audience engaged.<br><br> The multiple third party
										apps aiding in growing your followers, instagram bots or paying for fake accounts is simply a waste of time and money. There are
										numerous shady companies selling fake followers. Watch out for them, it's not going to help you in the long term.<br><br>Growing followers
										organically contributes to long term customer commitment. A large number of followers are only fancy if you don't engage them with
										strong content that is appealing to your target customers.<br><br> Business owners tend to lose followers if you fail to entertain them with
										trending content. Instagram reels and story assists in producing creative and entertaining contents.</p>

								</div>


								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">

									<!-- Title -->
									<h4 class="h4-lg blog-title">Benefits of growing your insta account organically</h4>
									<br>
									<!-- Title -->
									<h4 class="h1-lg">1.Improve followers with your content</h1>

										<p class="p-md blog para ">If you have huge followers with very less engagement rate, it's of no use. Increase a lot of quality contents
											of your business and the potential customers in need of that product will follow your account.
										</p>


										<h4 class="h4-lg blog-title">2. Authenticity of the brand</h4>

										<!-- Text -->
										<p class="p-md blog para ">
											Higher followers but very little content won't create any credibility among your followers. If you want your followers
											to be paying customers, engage them in valuable content.Everyone including followers, potential brand and influencer
											partnership dont want inflated followers. They want authentic and credible content for them to believe in your brand. </p>

										<!-- Title -->
										<h4 class="h4-lg blog-title">3. Safeguard the integrity of instagram analytics</h4>

										<!-- Text -->
										<p class="p-md blog para ">
											Utilizing a strong and unique content can accelerate your follower metric. If you make use of fake accounts,
											your account will be reported and canceled. Create contents that have meaning and give you a desired result
											for your marketing. Going organic is always a safe way.

										</p>
										<!-- Title -->
										<h4 class="h4-lg blog-title">4. Nurture potential demographics </h4>

										<!-- Text -->
										<p class="p-md blog para ">Instagram is one of the best marketing platforms for your branding. It's a place to find your
											perfect demographics for your business. If you know your target audience well, it's easier for you to turn them
											into paying customers.</p>


										<!-- Title -->
										<h4 class="h4-lg blog-title">5. Grow organically, lower the chances of account shutdowns</h4>


										<!-- Text -->
										<p class="p-md blog para ">Building your account organically improves credibility. Utilizing fake followers with less engagement
											rate raises a lot of suspicion. Interact with your followers and make your account legit. Making engaging content takes
											time but sustains a very long time with loyal customers. It's vital for your growing business. Success doesn't come in a
											hort term, you will have to put in a lot of effort and go beyond the curve with your ideas to stand out in this competitive platform..</p>


										<!-- Title -->
										<h4 class="h4-lg blog-title">7 Strategies to organically boost your Instagram followers</h4>
										<br>
										<h4 class="h4-lg blog-title">1.Optimize your content</h4>

										<!-- Text -->
										<p class="p-md blog para ">
											Comprehend your audience first to make quality content relevant to them. Research on their interests and problem Creativity
											is limitless and instagram is a platform where you can present umpty number of creative ideas.<br><br> You can create ample content
											but keep it in mind that it should be appealing to your customer or followers.<br><br> It is challenging to create content that is
											likable to your followers. </p>


										<!-- Title -->
										<h4 class="h4-lg blog-title">2. Power of celebrity giveaways</h4>
										<!-- Text -->
										<p class="p-md blog para ">

											Celebrity or influencers marketing your product improves your brand name and follower base. For example, you may have come across
											various accounts in which a celebrity promotes a product, it brings an awareness about your brand and potential customers will follow
											you if they are interested in your brand.<br><br> Giveaways are a great way to increase your followers. Include a celebrity for giveaways.
											People trust their favorite celebrities, so your brand will have an increase in followers base. Participants are generally required
											to follow both the celebrity and the brand in order to enter - creating a mutually beneficial partnership that boosts followers on both ends.</p>

										<!-- Title -->
										<h4 class="h4-lg blog-title">3. Post more often</h4>
										<!-- Text -->
										<p class="p-md blog para ">
											Post your content relevant to your brand. Normally an average instagram user posts 2-3 times a week.<br>If you want to bring an awareness
											of your brand, you should post at least 2-3 posts a day.<br>Posting too much a day is annoying and maybe it is likely that you will lose followers.
											Instagram has a lot of features, so you can post a story, a photo of your content/products, a reel or a video.<br>Posting and being active in this
											platform boosts your follower rate organically. Use tags when you post your content.<br><br> It makes your post discoverable and reaches a
											lot of audience.<br><br>
											<b>Location tags:</b> Tag your geographic location, this creates trust and credibility. It is more useful if you have a
											shopfront.<br><br>
											<b>Hash tags:</b><br> Use relevant hashtags in all your posts to get more followers. Interested people can discover your brand with
											these tags.<br> <br>
											<b>Tagged accounts:</b> Tag accounts of famous influencers or collaborators or a relevant brand, it can boost your follower
											base with high intent potential customers. Your brand can reach a new audience.
										</p>

										<!-- Title -->
										<h4 class="h4-lg blog-title">4. High quality content</h4>

										<p class="p-md blog para "> Research on your content which you want to post. Look at the content posted by influencers or by big brands.
											Compare these brands, know how they interact with customers and what they post.<br>Your feed should look appealing
											to attract a potential audience. For example, if you are promoting baby food products, make sure that you post
											recipes, some tips and some fun/interesting concepts about babies apart from marketing your regular product.<br>
											This makes your posts more interesting. But post what is relevant to your brand.</p>


										<!-- Title -->
										<h4 class="h4-lg blog-title">5. Best time to post</h4>

										<p class="p-md blog para "> Posting at the right time can garner a lot of attention to your post. It's vital to note that posting
											during day time is effective as you will have a lot of eyes on your content.However you need to do research on what
											time your followers are active. No business owner would want their hard worked content to be lost and unviewed.
											So make sure the right time to post your content.<br> <br><b>What is the right schedule to post your content?</b><br><br>Social Media
											Scheduler conducted a major study to answer this question and came up with the following guidelines.You can balso use
											a third party analytics tool to get this information and post accordingly. </p>

										<!-- Digit List -->
										<ul class="digit-list">
											<!-- style="list-style: " -->
											<li>
												<p class="p-md blog para "><b> Monday: 6 am, 10 am, and 10 pm EST</b></p>
											</li>
											<li>
												<p class="p-md blog para "><b>Tuesday: 2 am, 4 am, and 9 am EST</b></p>
											</li>
											<li>
												<p class="p-md blog para "> <b> Wednesday: 7 am, 8 am and 11 pm EST</b></p>
											</li>
											<li>
												<p class="p-md blog para "><b> Thursday: 9 am, 12 pm, and 7 pm EST</b></p>
											</li>
											<li>
												<p class="p-md blog para "><b>Friday: 5 am, 1 pm, and 3 pm EST</b></p>
											</li>
											<li>
												<p class="p-md blog para "><b> Saturday: 11 am, 7 pm, and 8 pm EST</b></p>
											</li>
											<li>
												<p class="p-md blog para "><b> Sunday: 7am, 8am, and 4pm EST</b></p>

										</ul>


										<!-- Title -->
										<h4 class="h4-lg blog-title">6. Partner with micro influencers:</h4>

										<p class="p-md blog para "> influencer marketing is a popular trend these days. People love to follow their influencer.<br>
											It's one of the best and effective marketing strategies to use influencers to promote brands. Micro influencers
											have followers between 10,000 to 100,000 followers.<br><br> As they have a more niched audience who focuses on particular
											content, business owners can compare if their product is suitable for this particular audience and make the decision
											to promote their brand.<br><br> These followers follow this influencer for their content. So you can market your product partnering
											with a micro influencer to reach and get a better audience.</p>


										<!-- Title -->
										<h4 class="h4-lg blog-title">7. Power of user generated content:</h4>

										<p class="p-md blog para "> People look for the authenticity of your brand. To build this, request your existing customer to post
											reviews by posting either a photo or a video/reel of the brand's product. Here you request customers to endorse your brand.
											This builds trust and other potential customers will immediately opt to buy the product. But assure that they use the right
											tags when they post. For that when you pack the order, you can include the tags in the thank you note card. This is a proven
											marketing strategy. On seeing the authenticity you will surely acquire a lot of customers.<br><br>Boosting your Instagram followers
											organically has a lot of advantages. You just need high quality content to grow your follower base. Identity, research and
											know your demographics to promote your brand. It is budget free. In addition to it you will have committed long term customers.
											Compare and create trendy content and surely you will see amazing growth. Instagram organic growth strategy multiplies you business

											profits in the long run.</p>
								</div>

								<!-- SINGLE POST SHARE LINKS -->
								<div class="row post-share-links d-flex align-items-center">

									<!-- POST TAGS -->
									<div class="col-md-12 col-xl-12 post-tags-list">
										<div class='didide p-3'>
											<span><a href="#">instagram organic growth</a></span>
											<span><a href="#">growing organic instagram followers</a></span>
											<span><a href="#">instagram organic growth service</a></span>
											<span><a href="#">instagram organic growth strategy</a></span>
											<span><a href="#">organically increase instagram followers</a></span>

										</div>

									</div>

								</div>
								<div class="row d-flex align-items-center justify-content-center mt-50 gap-3">
									<div class="col-md-2 d-flex align-items-center justify-content-center flex-column">
										<img src="../images/clickbox-linkedin-profile.png" alt="John click">
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
					</div>

				</div> <!-- End container -->
	</section>


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

		</div> <!-- END BLOG POSTS -->
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

			"url": "https://www.clickboxagency.com/boost-your-instagram/",

			"potentialAction": {

				"@type": "SearchAction",

				"target": "https://www.clickboxagency.com/boost-your-instagram/find?q={search_term_string}",

				"query-input": "required name=search_term_string"

			}

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"name": "A Beginner's Guide to 7 Organic Instagram Follower Strategies",

			"alternateName": "instagram organic growth, organically increase instagram followers, growing organic instagram followers,
			instagram organic growth service,
			instagram organic growth strategy ",


			"url": "https://www.clickboxagency.com/boost-your-instagram/"

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "https://schema.org",

			"@type": "Organization",

			"name": "A Beginner's Guide to 7 Organic Instagram Follower Strategies",

			"url": "https://www.clickboxagency.com/boost-your-instagram/",

			"email": "info@clickboxagency.com",

			"foundingDate": "2022",

			"description": "Instagram is a social media platform where business owners can 
			market their brand to a large audience.To boost your follower base organically,
			there are few strategies and advantages that business owners should be aware of before they market their brand.
			",

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

	<!--<script>-->
	<!--	let parent = document.querySelector('.sticky-top').parentElement;-->

	<!--	while (parent) {-->
	<!--		const hasOverflow = getComputedStyle(parent).overflow;-->
	<!--		if (hasOverflow !== 'visible') {-->
	<!--			console.log(hasOverflow, parent);-->
	<!--		} else {-->
	<!--			console.log("none");-->
	<!--		}-->
	<!--		parent = parent.parentElement;-->
	<!--	}-->
	<!--</script>-->

</body>

</html>

