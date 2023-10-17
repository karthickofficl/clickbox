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
	<title>Role of ORM in Digital Marketing-How It Impacts Your Business?</title>
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

	<title>Role of ORM in Digital Marketing-How It Impacts Your Business?</title>

	<meta name=description content="What is ORM? Learn here the role and importance of Online Reputation Management in digital marketing and know how it impacts your business growth." />

	<meta name=keywords content="online reputation marketing, reputation management in digital marketing, online brand reputation management, reputation management in SEO, online reputation management agency, best reputation marketing companies" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/digital-marketing-checklist/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/reputation-management-in-digital-marketing/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/reputation-management-in-digital-marketing/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/logo-01.png" />

	<meta property="og:title" content="Role of ORM in Digital Marketing-How It Impacts Your Business?" />

	<meta property="og:description" content="What is ORM? Learn here the role and importance of Online Reputation Management in digital marketing and know how it impacts your business growth." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Role of ORM in Digital Marketing-How It Impacts Your Business?" />


	<meta name="twitter:description" content="What is ORM? Learn here the role and importance of Online Reputation Management in digital marketing and know how it impacts your business growth." />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/logo-01.png" />
	
	<?php include('header-style.php') ?>

</head>



<body>
	<?php include('header.php') ?>

	<!-- SINGLE POST
			============================================= -->
	<section id="single-post" class="wide-100 inner-page-hero single-post-section division">
		<div class="container">


			<!-- SINGLE POST CONTENT -->
			<div class="row ">
				<div class="col-lg-10 offset-lg-1">
					<div class="single-post-wrapper">

						<!-- BLOG POST INNER IMAGE -->
						<div class="post-inner-img">
							<img class="img-fluid" src="https://clickboxagency.com/images/blog/role-of-orm-in-digital-marketing.jpg" alt="blog-post-image" />
						</div>
					</div>
					<div class="row d-flex justify-content-center">
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
									<p class="sharecolour"> Share</p>
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
							<div class="single-post-title ">

								<!-- TITLE -->
								<h1 class="h2-md">Role of ORM in Digital Marketing-How It Impacts Your Business?</h1>

							</div> <!-- END SINGLE POST TITLE -->


							<!-- BLOG POST TEXT -->
							<div class="single-post-txt txt-justify ">
								<!-- Title -->
								<h4 class="h4-lg">ORM:
								</h4>

								<!-- Text -->
								<p class="p-md blog-para ">ORM is abbreviated as Online Reputation Management.
									<br>Online Reputation Management is the process of analyzing and increasing the online presence of your business.


									<!-- Title -->
								<h4 class="h4-lg">Role of ORM in Digital Marketing:
								</h4>

								<!-- Text -->
								<p class="p-md blog-para ">In simple, reputation management in digital marketing plays an important role in your business as this activity monitors the SERPs (Search Engine Result Pages) and shows how a customer will see your brand presence or how an organic customer will find your business products/ services/ offers while doing their search on Google.
									<br>Reputation is the term attached to the quality of your business brand. If the business quality is rich, your reputation will be high and customers will connect with you at any moment.
									<br>With the help of online brand reputation management services, all negative reviews about your business will be controlled and help your brand to be active on search engine results. As a founder or marketer of your business, you should know every information or review of your brand from the people.


								</p>
								<h4 class="h4-lg">Online Reputation Management in SEO:
								</h4>

								<!-- Text -->
								<p class="p-md blog-para ">SEO (Search Engine Optimization) is the activity of improving website rank on search results. A lot of marketers are in confusion between ORM and the SEO process. ORM is not included under SEO. SEO is all about doing on-page and off-page activities to improve the ranking of a website; while in ORM, it is all about getting rid of negative reviews of your business.

									<!-- Title -->
								<h4 class="h4-lg">Importance of Online Reputation Management:
								</h4>

								<!-- Text -->
								<p class="p-md blog-para "><b>Following are some of the factors that show the importance of the reputation management process on your brand:</b>
									<br>> Even though ORM is not a part of SEO, you have to implement smart SEO strategies as it affects the ranking of your website in search results. Positive reviews of your products or services are not taken into account unless it is ranking on top of the SERPs. So, focusing on on-page and off-page SEO activities leads to increasing ORM results.
									<br> > With the help of customer feedback, ORM rises your business presence online.
									<br> >When ORM activity is implemented clearly, you will get positive reviews from your potential customers which may result in getting more sales.
									<br> >Nowadays, most people are checking the reviews before buying any products or hiring any services. When any negative feedback appears, they try to navigate to another website. Here ORM plays a major role in ignoring these negative reviews.
									<br> >Online reputation management also aids in monitoring and enriching the content quality of your site.


								</p>
								<h4 class="h4-lg ">How does ORM Impacts Your Business Growth?
								</h4>

								<!-- Text -->
								<p class="p-md blog-para ">According to facts, 80% to 90% of people are seeing reviews of old customers before engaging with your products or services. All these reviews appear on Google and social media platforms.
									<br>Customers will be able to search your company details (like business history, projects, old customers feedbacks, negative reviews, etc.,)
									<br>Whether you are selling products or offering services, whether you are planning to make business deals or partnerships, ORM makes a higher impact on your business revenue.


									<!-- Title -->
								<h4 class="h4-lg">Be Better than Your Competitors: (Competitor Analysis)
								</h4>

								<!-- Text -->
								<p class="p-md blog-para ">There are many competitors present in every business niche. You want to be unique and prove quality to become better than your competitors.
									<br>Anyone can able to give negative reviews for your website, so does your competitor! If your competitor is better than you, then they are doing the following two activities:
									<br> >They create new contents to build their strong presence online with the help of social media.
									<br> >Also, they engage with their customers well to get positive feedbacks that automatically leads to more sales.
									<br>Hence, make a competitor analysis (which is also necessary for every business) and become better than your competitor by doing the above two activities.


								</p>
								<h4 class="h4-lg">Who Needs ORM Services?
								</h4>

								<!-- Text -->
								<p class="p-md blog-para ">Before going deeper into the ORM discussion, you have to understand that every business niche has a competitor and needs customers to move forward. In this case, ORM wants to be a part of their business strategy. If you are included in any one of the below-mentioned lists, then start doing the ORM process now.
									<br><b>*Business:</b> If you are a startup or planning to start an online business, online reputation management helps you to create a rich brand between your customers.
									<br><b>*Brand: </b> Even business is not your goal but want to create your brand, ORM is important.
									<br><b>*Celebrities: </b> Are you a celebrity or influencer on a specific platform? Then you may have a follower community. A wrong reputation may lead to having low followers or spoiling your name. So, give importance to ORM activity.


									<!-- Title -->
								<h4 class="h4-lg">Reputation Management Checklist:
								</h4>

								<!-- Text -->
								<p class="p-md blog-para "><u>What is your business reputation? How will you check it?</u>
								<p class="p-md blog-para ">To answer these questions, we will discuss the components of reputation, so that it is easy for you to implement the ORM process. Here is the checklist:
								<p class="p-md blog-para "><b>(1) Search:</b>
								<p class="p-md blog-para ">All online presence starts with a search. When people plan to buy new things or hire services, they start searching on Google or any other search engine like Bing, etc., As you know, Google and YouTube are the most popular search engines used by most people.
									<br>Search your business name, keyword related to your business products/services on Google, YouTube, or any other search engines to know the following:
									<br> > Whether you are ranking in the top 5 or top 10 search results? If not, then concentrate on the SEO process.
									<br> >Whether you are getting more star ratings? (if any ratings appear on search results). If not, then increase your content quality.
									<br> >Are you getting more positive reviews? If not, then engage more with your customers.

								<p class="p-md blog-para "><b>(2) Google My Business:</b>
								<p class="p-md blog-para ">Do you have a listing on Google My Business? It is the page that shows your business details to your customers as it is associated with Google search and Maps. With Google My Business, customers can easily find the locations of businesses or shops and also find reviews of the brand.
									<br>Make sure to create a good listing (with accurate details) on Google My Business as it leads to increase traffic to your business.

								<p class="p-md blog-para "><b>(3) Social Media Platforms:</b>
								<p class="p-md blog-para ">Next to Google and YouTube, people spend more time on social media networks to know about some brand details. In every social network, analyze details such as:
									<br> > number of followers to your account
									<br> >Engagement with your followers (messaging or commenting activities)
									<br> >Last time of your post
									<br> >Average time that you spend on each social network.
									<br> >Positive and negative feedback
									<br> >Rumors about your brand
									<br> >Also check hashtags and different search terms of your niche to know whether your business is placed under these to reach people.
									<br> ->All these details will reflect the presence or reach of your business on your customers.

								<p class="p-md blog-para "><b>(4) Feedback/Review Sites:</b>
								<p class="p-md blog-para ">Do you have a feedback form on your website? Or Getting any personal feedback? Value each of these feedbacks and improve your website based on your customer feedback.
									<br>Also, there are more review sites on Google and social media which provide reviews of the business. Check these review sites to know, what they talk about your brand and how people react to these review sites.
									<br>Also, check Google reviews and star ratings, Facebook reviews to know more about your customer needs and correct them to increase the loyalty of your business.

								<p class="p-md blog-para "><b>Implement ORM Strategy:</b>
								<p class="p-md blog-para ">After finishing the checklist, you will know what to do next. It’s time to increase your online presence. Do the following:
								<p class="p-md blog-para "><b>(1) Use Every Platform:</b>
								<p class="p-md blog-para ">Since you are creating an online presence, start creating an account on every popular online platform that you know.
									<br>Other than Google, concentrate on search engines like Yahoo or Bing. Not only on Google My Business, create a presence on a Facebook business page that is separate from your Facebook account.

								<p class="p-md blog-para "><b>(2) Form Social Media Management Team:</b>
								<p class="p-md blog-para ">When talking about social media, LinkedIn is the prior network for business. Create a separate LinkedIn business page in addition to your personal LinkedIn account. There are many social networks you have seen like Facebook, Instagram, Twitter, Reddit, etc., which contain many customers that you need.
									<br>
									<br>Arrange a social media management team or hire a social media manager to take care of your social media accounts. This manager will post consistently, talk to your customers, engage with your followers, check your brand reach on social networks, and works on improving your business presence.

								<p class="p-md blog-para "><b>(3) Do Monitor Your Reputation:</b>
								<p class="p-md blog-para ">As said before, anyone can able to spoil your brand name. Hence form a reputation monitoring team or use any online reputation software like Trustpilot, Podium to monitor your brand reputation from your people.
								<p class="p-md blog-para "><b>(4) Be a Good Team:</b>
								<p class="p-md blog-para ">If you are working as a team, make sure that all the team members are having the same goal of maintaining the reputation of your business. If you are having strong and same-minded team members, then it is easy to increase the loyalty of the brand.
								<p class="p-md blog-para "><b>(5) Do SEO:</b>
								<p class="p-md blog-para ">As we discussed, SEO is having a high impact on ORM, you have to hire an SEO team to carry over your on-page and off-page SEO activities. Create unique content during this online reputation marketing process to push down your weak listings on Google. Also, create blog pages to solve your customer queries. These are some practical steps that help to increase the visibility of your website in SERPs.
								<p class="p-md blog-para "><b>(6) Hire Marketers to Manage Your ORM Activity:</b>
								<p class="p-md blog-para ">Do you have a small or no customer service team?
									<br>When you do complete research on Google or social media, you will find the best reputation marketing companies.
									<br>Hire someone from these companies who can manage the ORM process of your business. You can hire them based on your budget and needs.
								</p>

								<h4 class="h4-lg">Final Words:
								</h4>

								<!-- Text -->
								<p class="p-md blog-para ">ORM is an essential process for your business. Every negative review will damage your reputation. To ignore these things, do the ORM process to improve your business presence and sales growth.
									<br>If you are busy with your customers and do not have time for ORM activities, then hire us!
									<br>We are the experienced online reputation management agency that helps you to create a successful online presence of your brand and assure you to receive more traffic and sales to your business. Let’s work together!
								</p>
							</div> <!-- END BLOG POST TEXT -->


							<!-- SINGLE POST SHARE LINKS -->
							<div class="row post-share-links d-flex ">

								<!-- POST TAGS -->
								<div class="col-md-12 col-xl-12 post-tags-list align-items-center">
									<span><a href="#">online reputation marketing</a></span>
									<span><a href="#">reputation management in digital marketing</a></span>
									<span><a href="#">online brand reputation management</a></span>
									<span><a href="#">reputation management in SEO</a></span>
									<span><a href="#">online reputation management agency</a></span>
									<span><a href="#">best reputation marketing companies</a></span>
									<!-- online reputation marketing, reputation management in digital marketing, online brand reputation management, reputation management in SEO, online reputation management agency, best reputation marketing companies -->
								</div>



							</div> <!-- END SINGLE POST SHARE -->
							<div class="row d-flex align-items-center justify-content-center mt-50 gap-3">
								<div class="col-md-2 d-flex align-items-center justify-content-center flex-column">
									<img src="../images/clickbox-linkedin-profile.png" alt="John Click">
									<a target="_blank" href="https://www.linkedin.com/in/john-click-167b94238/" aria-label="Linkedin click john" class="linkedin-link-align"> <i class="fa fa-linkedin p-2"></i> </a>
								</div>
								<div class="col-md-8">
									<h4 class="h4-lg txtredd">John Click</h4>
									<p class="p-md  blog-para txt-justify txtbluee">Digital Marketer | SEO Copywriter | Content Strategist</p>
									<p class="p-md  blog-para txt-justify ">Experienced digital marketer with a proven track record in creating compelling content that not only engages audiences but also drives conversions and enhances SEO visibility. My expertise extends beyond marketing strategy to crafting persuasive narratives that resonate with your target audience. I combine data-driven strategies with captivating writing to deliver measurable results, ensuring your brand shines in the digital landscape.</p>
									<!-- Connect with me on LinkedIn(https://www.linkedin.com/in/john-click-167b94238/) or visit my website "https://clickboxagency.com/" to explore more about my work and stay updated with the latest digital marketing trends. -->
								</div>
							</div>

						</div>
					</div>
				</div> <!-- END SINGLE POST CONTENT -->
			</div>


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

			"url": "https://www.clickboxagency.com/reputation-management-in-digital-marketing/",

			"potentialAction": {

				"@type": "SearchAction",

				"target": "https://www.clickboxagency.com/reputation-management-in-digital-marketing/find?q={search_term_string}",

				"query-input": "required name=search_term_string"

			}

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"name": "How to Choose the Right Digital Marketing Agency in 2022?",

			"alternateName": "online reputation marketing, reputation management in digital marketing, online brand reputation management, reputation management in SEO, online reputation management agency, best reputation marketing companies",

			"url": "https://www.clickboxagency.com/reputation-management-in-digital-marketing/"

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "https://schema.org",

			"@type": "Organization",

			"name": "Role of ORM in Digital Marketing-How It Impacts Your Business?",

			"url": "https://www.clickboxagency.com/reputation-management-in-digital-marketing/",

			"email": "info@clickboxagency.com",

			"foundingDate": "2022",

			"description": "What is ORM? Learn here the role and importance of Online Reputation Management in digital marketing and know how it impacts your business growth.",

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
	<?php include('popup1.php') ?>'
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