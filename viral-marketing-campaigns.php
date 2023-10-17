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

	<title>An ultimate Guide to Viral Marketing Campaigns</title>

	<meta name=description content="Viral marketing is a common and popular practice to grow your brand. Research and get information on the various techniques implemented in the viral marketing campaigns." />

	<meta name=keywords content=" viral marketing strategy, viral marketing examples, viral marketing guide, viral marketing advantages, types of viral marketing, viral marketing campaigns, viral marketing company, viral marketing techniques" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/viral-marketing-campaigns/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/viral-marketing-campaigns/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/viral-marketing-campaigns/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="An ultimate Guide to Viral Marketing Campaigns" />

	<meta property="og:description" content="Viral marketing is a common and popular practice to grow your brand. Research and get information on the various techniques implemented in the viral marketing campaigns." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="An ultimate Guide to Viral Marketing Campaigns" />

	<meta name="twitter:description" content="Viral marketing is a common and popular practice to grow your brand. Research and get information on the various techniques implemented in the viral marketing campaigns." />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />
	<!--FAVICON-->

	<link rel="icon" href="https://clickboxagency.com/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="https://clickboxagency.com/images/favicon.png" type="image/x-icon">

	<?php include('header-style.php') ?>
	<style>
		/* .container{
			min-height: 400px;
		}
		.col-lg-1{
			-webkit-box-flex: 0;
			-ms-flex: 0 0 8.33333333%;
			flex: 0 0 8.33333333%;
			max-width: 8.33333333%;
		} */



		/* SHARE ICONS */
		.sticky-sidebar-offset {
			top: 80px;
		}
		.icon-sticky{
			position: sticky;
            top: 80px;
            z-index: 1;
		}


		/* .sticky-top {
			position: -webkit-sticky !important;
			position: sticky !important;
			top: 0 !important;
			left: 0;
			right: 0;
			bottom: 0;
		} */



		.share p {
			margin-bottom: 10px;
			font-size: .95rem;
			opacity: .5;
		}

		.share ul {
			padding-left: 0;
			margin-left: 0;
		}

		.share ul li {
			display: block;
			margin-bottom: 5px;
		}

		.shareitnow li a {
			width: 30px;
			height: 30px;
			border: 1px solid #212529;
			line-height: 30px;
			text-align: center;
			display: inline-block;
			border-radius: 50%;
			color: #212529;
			font-size: 13px;
			opacity: .3;
		}

		/*.clap-btn {
			display: inline-block;
			Cursor: pointer;
			width: 80px;
			height: 80px;
		}

		.clap-btn {
			background: url('https://i.ibb.co/GVsbrFF/claps.png') no-repeat 0% 50%;
			background-size: 900%;
			border: 1px solid #212529;
			border-radius: 50%;
		}

		.clap-active {
			animation-name: animate;
			animation-duration: .8s;
			animation-iteration-count: 1;
			animation-fill-mode: forwards;
		}

		.clap-active {
			animation-timing-function: steps(8);
		}

		/* .p-md {
			line-height: 2.5rem !important;
			font-size: 1.3rem !important;
		} */

		/*.h4-lg,
		.h6-lg {
			line-height: 3rem !important;
			font-size: 2rem !important;
		}

		@keyframes animate {
			0% {
				background-position: left;
			}

			50% {
				background-position: right;
			}

			100% {
				background-position: right;
			}
		}*/
		.clap {
			width: 60px;
			height: 60px;
			border: solid 2px #E26D5A;
			border-radius: 50%;
			text-align: center;
			line-height: 60px;
			background-color: #fff;
			cursor: pointer;
			position: relative;
			margin-left: 12px;
		}

		.clap .clap-icon span {
			font-size: 32px;
		}

		.clap-hover {
			filter: invert(23%) sepia(60%) saturate(4522%) hue-rotate(334deg) brightness(81%) contrast(95%);
		}

		.clap .hover-effect {
			position: absolute;
			width: 100%;
			height: 100%;
			top: 50%;
			left: 50%;
			border-radius: 50%;
			transform-origin: center;
			transform: translate(-50%, -50%);
		}

		.clap .confetti-effect {
			transform-origin: center;
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
		}

		.clap .confetti-wrap {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			opacity: 0;
		}

		.clap .confetti-wrap.expand {
			animation: confetti 0.7s ease infinite;
		}

		.clap .confetti-wrap .group {
			position: absolute;
			width: 20px;
			height: 20px;
		}

		.clap .confetti-wrap .group-1 {
			top: -20px;
			left: 20px;
		}

		.clap .confetti-wrap .group-2 {
			top: 9px;
			left: 60px;
			transform: rotate(70deg);
		}

		.clap .confetti-wrap .group-3 {
			top: 51px;
			left: 43px;
			transform: rotate(142deg);
		}

		.clap .confetti-wrap .group-4 {
			top: 51px;
			left: -4px;
			transform: rotate(-145deg);
		}

		.clap .confetti-wrap .group-5 {
			top: 13px;
			left: -18px;
			transform: rotate(-63deg);
		}

		.clap .confetti-wrap .group span {
			display: inline-block;
		}

		.clap .confetti-wrap .group .circle {
			position: absolute;
			width: 7px;
			height: 7px;
			left: 0;
			border-radius: 50%;
			background-color: #027380;
		}

		.clap .confetti-wrap .group .triangle {
			position: absolute;
			left: 10px;
			top: -5px;
			border-left: 4px solid transparent;
			border-right: 4px solid transparent;
			border-top: 15px solid #faa916;
		}

		.clap:hover .hover-effect {
			animation: border-animate 1.8s ease forwards;
		}

		@keyframes border-animate {
			from {
				border: solid 0px #E26D5A;
			}

			to {
				border: solid 15px #E26D5A;
				opacity: 0;
			}
		}

		@keyframes confetti {
			from {
				transform: scale(0.7);
				opacity: 1;
			}

			to {
				transform: scale(1.1);
				opacity: 0;
			}
		}
			@media only screen and (max-width: 600px) {
        .icon-sticky {
             display: none;
             }
             .single-post-wrapper{
		    padding:30px;
		    }
		   
        }

		.twitter-size-x {
			max-width: 12.5px;
			max-height: 12.5px;
			color: #212529;
		}
	</style>

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
							<img class="img-fluid" src="../images-new/blog/viral-marketing-blog.webp" alt="viral-marketing" />
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
									<h1 class="h2-md">VIRAL MARKETING TECHNIQUES</h1>


								</div> <!-- END SINGLE POST TITLE -->





								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">

									<!-- Text -->
									<p class="p-md blog-para ">

										Social media is a battlefield of competitive businesses. Every business markets their product on these platforms to reach a
										vast audience. We live in an age where digitalization is at its peak. <br><br>
										According to statista, there are about 5 billion internet users globally that is 63 percent of the world's population
										as of the data acquired in April 2022. India, China and the US are ranked top as the top internet users.<br><br>
										As we have maximum internet users, marketing online is a great idea to boost your business profits. Some businesses are lucky
										enough to skyrock as soon as they start marketing campaigns, some businesses struggle harder to come to the top. If the business
										owner has the right marketing plan,quality contents and creativity to reach their potential customers, surely their business is
										likely to succeed. Following the trends of social media is also significant in the marketing campaigns.


									</p>
									<!-- Text -->
									<p class="p-md blog-para ">Some of the popular social media platforms are:</p>

									<ul class="digit-list">
										<li>
											<p class="p-md blog-para ">● Facebook</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Instagram</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Twitter</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Snapchat</p>
										</li>
										<li>
											<p class="p-md blog-para ">● LinkedIn</p>
									</ul>

								</div>
								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">
									<div class="post-inner-img">
										<img class="img-fluid" src="../images/blog/virall.png" alt="viral-marketing" />
									</div>


									<!-- Title -->
									<h4 class="h4-lg blog-title">Viral marketing</h4>

									<!-- Text -->
									<p class="p-md blog-para ">As social media users, sometimes we see a product shared widely and become popular in an instant. We all hear
										the word viral everyday. <br><br>
										To give you an idea, during pandemic covid-19, Google launched a marketing campaign to promote zoom, a video conferencing platform
										in march 2020. People were working remotely and zoom introduced a virtual background contest where people could share videos and
										images using their background features. The lucky winners were given gifts and giveaways. This contest was conducted every month
										and three people were elected as winners. By this time 50,000 users signed up for this and soon this campaign became viral and
										one of the best viral marketing campaigns in the year 2020. Soon more people signed up and got to explore their new features and
										Google made sure that the features enticed the customers.<br><br> </p>

									<div class="post-inner-img">
										<img class="img-fluid" src="../images/blog/zoom.png" width="600" height="700" alt="zoom" />
									</div>
									<p> Viral marketing strategy is an online marketing campaign where people or customers share your products/services to a vast audience
										in leaps and bounds and bring brand awareness. </p>


									<!-- Title -->
									<h4 class="h4-lg blog-title">Advantages of viral marketing</h4>

									<!-- Text -->
									<p class="p-md blog-para ">

										Viral marketing campaign has many advantages, which includes:<br><br>
										<b>Low Cost</b> - a high quality engaging content or a simple idea is enough to campaign your product online.
										People will share your post so the cost of marketing is zero.<br>
										<b>Wide Reach </b> - your brand will be able to reach a vast audience by sharing and resharing.<br>
										<b>Booming Business</b> - viral marketing shoots up your business revenue and thereby expanding your brand.<br>
										<b>Credibility</b> - as more customers get familiarized with your product, other audiences will feel secure to purchase your service.

									</p>

									<!-- Title -->
									<h4 class="h4-lg blog-title">Types of Viral Marketing</h4>
									<h4 class="h4-lg blog-title">Organic Viral Marketing </h4>

									<!-- Text -->
									<p class="p-md blog-para "> At times, without any effort from the marketers side, their product or services go viral. Social media is
										unpredictable. Your product can go viral as a positive or negative campaign. Luck plays a significant role in this type of
										marketing. </p>

									<h4 class="h4-lg blog-title">Incentive</h4>

									<p class="p-md blog-para ">You can offer discounts or gifts to anyone who refers your brand to a friend. You can also ask them to share your
										brand product and then offer money or gifts. This viral marketing campaign works because everyone likes freebies.</p>

									<h4 class="h4-lg blog-title">Engineered Viral Marketing</h4>

									<!-- Text -->
									<p class="p-md blog-para ">Engineered viral marketing type is based on planned and controlled marketing. Business owners or marketers
										will have to come up with a master plan to promote their products in various social marketing platforms. These set of strategies
										when executed will rapidly result in becoming a viral sensation.</p>

									<!-- Title -->
									<h4 class="h4-lg blog-title">Emotion</h4>

									<!-- Text -->
									<p class="p-md blog-para ">Some contents posted in social media bring out a lot of sentiments. Laughter, tears, joy ,humor, anger and
										guilt are some of the emotions stirred by some posts. This will enable the audience to share the posts to a larger audience. </p>

									<h4 class="h4-lg blog-title">Pass Along</h4>
									<p class="p-md blog-para "> Passalongs are the most common type of viral campaign. Any post which is shared and reshared to a large audience.
										More sharing leads to wide brand recognition.</p>

									<h4 class="h4-lg blog-title">Buzz Viral Campaign</h4>


									<p class="p-md blog-para "> This marketing type focuses on creating a rumor, gossip, a story or any controversy of your brand so that it
										grabs maximum attention and becomes viral. </p>

									<h4 class="h4-lg blog-title"> Disadvantages of viral marketing campaigns</h4>


									<p class="p-md blog-para "> ● Viral marketing relies on authentic and original content. It is difficult to get creative unique content
										that is appealing to the audience. Do not imitate the content. Audience rejects repetitive contents. <br>
										● Once your post goes viral, it is difficult to control it or turn it off from the masses.</p>

									<h4 class="h4-lg blog-title">Viral Marketing Strategies </h4>

									<ul class="digit-list">
										<li>
											<p class="p-md blog-para ">● Create content aiming to hit your target audience. </p>
										</li>
										<li>
											<p class="p-md blog-para ">● Brainstorm ideas and use your creative mantra to birth new content.</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Utilize a lot of images and videos. </p>
										</li>
										<li>
											<p class="p-md blog-para ">● Manage to use a simple and casual tone. Emit humility when you're creating your brand's content.</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Click on audience sentiments using emotional content tactic.</p>
									</ul>

									<h4 class="h4-lg blog-title">Techniques to Boost Viral Marketing Campaigns</h4>

									<ul class="digit-list">
										<li>
											<p class="p-md blog-para ">● Devising an excellent marketing plan.</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Create content which is motivational or inspirational. Motivational content is shared widely because people
												living in this fast paced world seek for wise advice.Instagram</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Involve the audience to give testimonials and reviews about your brand.</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Make unique and interesting content infusing humor and all the positive emotions.
												Create outstanding content which is so engaging that it moves the audience's mind.</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Involve a celebrity or an influencer to promote your product. People love their celebrities and get
												easily influenced by them which is helpful for your brand.</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Create a worthwhile cause to spread your post. People admire your brand’s action to support any deserving cause.</p>
										</li>
									</ul>

									<h4 class="h4-lg blog-title"> Types of posts that go viral</h4>

									<ul class="digit-list">
										<li>
											<p class="p-md blog-para ">● Puzzles and quizzes</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Case studies</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Infographics</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Personality quiz</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Motivational content</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Humanized stories </p>
										</li>
										<li>
											<p class="p-md blog-para ">● How to guides lists</p>
										</li>
									</ul>


									<p class="p-md blog-para ">In conclusion, these viral marketing campaigns are a buzz right now. Create outstanding, never have I seen this
										content to be noticed in this crowd of viral brands. Proper plan and the right content helps in enlarging your brand recognition in
										the long term. Follow the current online business trend. Well sometimes you might get lucky to go viral without any effort. <br>
										To know the current business trends, kindly click on this website: https://www.clickboxagency.com/</p>



								</div> <!-- END BLOG POST TEXT -->

								<!-- SINGLE POST SHARE LINKS -->
								<div class="row post-share-links d-flex align-items-center">

									<!-- POST TAGS -->
									<div class="col-md-12 col-xl-12 post-tags-list ">
										<div class='didide'>
											<span><a href="#">viral marketing strategy</a></span>
											<span><a href="#">viral marketing examples</a></span>

											<span><a href="#">viral marketing guide</a></span>


											<span><a href="#">viral marketing advantages</a></span>
											<span><a href="#">types of viral marketing</a></span>
											<span><a href="#">viral marketing campaigns</a></span>
											<span><a href="#">viral marketing techniques</a></span>
										</div>

									</div>



								</div> <!-- SINGLE POST SHARE LINKS END -->
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
	<section id="blog-1" class="bg-whitesmoke-gradient  blog-section division">
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

			"url": "https://www.clickboxagency.com/viral-marketing-campaigns/",

			"potentialAction": {

				"@type": "SearchAction",

				"target": "https://www.clickboxagency.com/viral-marketing-campaigns/find?q={search_term_string}",

				"query-input": "required name=search_term_string"

			}

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"name": "An ultimate Guide to Viral Marketing Campaigns",

			"alternateName": "viral marketing strategy, viral marketing examples, viral marketing guide, viral marketing advantages, types of viral marketing, viral marketing campaigns, viral marketing company, viral marketing techniques",

			"url": "https://www.clickboxagency.com/viral-marketing-campaigns/"

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "https://schema.org",

			"@type": "Organization",

			"name": "An ultimate Guide to Viral Marketing Campaigns",

			"url": "https://www.clickboxagency.com/viral-marketing-campaigns/",

			"email": "info@clickboxagency.com",

			"foundingDate": "2022",

			"description": "Viral marketing is a common and popular practice to grow your brand. Research and get information on the various techniques implemented in the viral marketing campaigns.",

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
	<script src="../js/custom.js"></script>-->
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