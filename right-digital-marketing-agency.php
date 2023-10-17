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
	<title>How to Choose the Right Digital Marketing Agency in 2022?</title>
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

	<title>How to Choose the Right Digital Marketing Agency in 2022?</title>

	<meta name=description content="How to find experienced marketers for your business? Here is the guide on how to choose the right digital marketing agency." />

	<meta name=keywords content="how to choose the right digital marketing agency, how to choose a digital marketing agency, how to choose right marketing agency" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/right-digital-marketing-agency/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/right-digital-marketing-agency/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/right-digital-marketing-agency/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="How to Choose the Right Digital Marketing Agency in 2022?" />

	<meta property="og:description" content="How to find experienced marketers for your business? Here is the guide on how to choose the right digital marketing agency." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="How to Choose the Right Digital Marketing Agency in 2022?" />


	<meta name="twitter:description" content="How to find experienced marketers for your business? Here is the guide on how to choose the right digital marketing agency." />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />
	<!--FAVICON ADD-->
	<link rel="icon" href="https://clickboxagency.com/images/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="https://clickboxagency.com/images/favicon.ico" type="image/x-icon">

	<style>
		
	</style>
	<?php include('header-style.php') ?>

</head>



<body>
	<?php include('header.php') ?>
	<!-- SINGLE POST
			============================================= -->
	<section id="single-post" class="wide-30 inner-page-hero single-post-section division">
		<div class="container">


			<!-- SINGLE POST CONTENT -->
			<div class="row d-flex justify-content-center">
				<div class="col-lg-10 offset-lg-1">
					<div class="single-post-wrapper">

						<!-- BLOG POST INNER IMAGE -->
						<div class="post-inner-img">
							<img class="img-fluid" src="https://clickboxagency.com/images-new/blog/right-dightal-marketing-agency-blog.webp" alt="blog-post-image" />
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
								<div class="single-post-wrapper">

									<!-- BLOG POST INNER IMAGE -->


									<!-- SINGLE POST TITLE -->
									<div class="single-post-title">

										<!-- TITLE -->
										<h1 class="h2-md">How to Choose the Right Digital Marketing Agency in 2022?</h1>


									</div> <!-- END SINGLE POST TITLE -->
									<!-- BLOG POST TEXT -->
									<div class="single-post-txt txt-justify">
										<!-- Title -->
										<h4 class="h4-lg blog-title">
										</h4>

										<!-- Text -->
										<p class="p-md txt-justify blog-para">Planning to choose the digital marketing agency for your business? It is easy, but the toughest part is selecting the right agency that takes over your market process in a successful way.
										<p class="p-md txt-justify blog-para">Selecting the best marketing agency from many is tricky. To make your decision-making process easier, we will discuss the things that you should do, things that you shouldn’t do, in detail to find your agency.
										<p class="p-md txt-justify blog-para">Before discussing, you have to know that, why you should go for marketing agencies.
										</p>

										<h4 class="h4-lg blog-title">Why Hire Digital Marketing Agency?
										</h4>

										<!-- Text -->
										<p class="p-md txt-justify blog-para">What do these agencies do to increase your business?
										<p class="p-md txt-justify blog-para">When you hire a digital marketing agency, they help you get more traffic and sales by doing smart marketing strategies in both free and paid ways. (It depends on your business niche, target audience, and budget)

										</p>

										<h4 class="h4-lg blog-title">Digital Marketing Agencies do the Following Services to Your Business:
										</h4>

										<!-- Text -->
										<p class="p-md txt-justify blog-para"><u>(1) SEO- Search Engine Optimization:</u>
										<p class="p-md txt-justify blog-para">SEO is the best way to get traffic on a freeway.
										<p class="p-md txt-justify blog-para">Ranking your website at top of the Google searches is not an easy process as it includes processes like identifying the proper keywords related to your niche, optimizing content based on the keywords, and getting valid backlinks. These are the whole processes of SEO. By doing this SEO activity, you will not only get traffic but an organic customer for your business.
										<p class="p-md txt-justify blog-para"><u>(2) Content Marketing:</u>
										<p class="p-md txt-justify blog-para">Content marketing is a process where marketers create content based on the business field. It is not only about writing articles or blogs. Content plays a major role that making visitors turn into potential customers. The purpose of writing content is to solve your customer’s problems in form of articles. Also, it should be in any format like image, video, or infographics. Image content attracts more than text content.
										<p class="p-md txt-justify blog-para"><u>(3) Video Marketing:</u>
										<p class="p-md txt-justify blog-para">As said, video marketing is a part of content marketing. Videos are more popular among people; you can able to see this by checking the engagement between the audience and YouTube.
										<p class="p-md txt-justify blog-para">Doing video advertisements (paid method) on YouTube, or creating a business video (free method) on YouTube is one of the best ways to drive traffic to your website.
										<p class="p-md txt-justify blog-para"><u>(4) Email Marketing:</u>
										<p class="p-md txt-justify blog-para">Email marketing is one of the best ways to generate ROI, as you can reach the target customer easily via email. The best thing is either you can collect email from your customers to retarget them again or you can use paid email ads to promote your business. Both will help you with driving sales.
											<br>Email marketing provides many features like A/B testing to understand the customer needs, autoresponders to connect with the customers, etc., In short, it is worth your time and money.

										<p class="p-md txt-justify blog-para"><u>(5) Mobile Marketing:</u>
										<p class="p-md txt-justify blog-para">Do you hear this term, mobile marketing?
											<br>If not, it is the process of promoting products on mobile like Mobile YouTube ads, in-app advertisements, etc., According to research by many marketers, half of the mobile marketing process converts visitors into customers. Since the mobile app is used most by everyone than the web app, investing in mobile marketing is also a wise decision.

										<p class="p-md txt-justify blog-para"><u>(6) Google AdWords:</u>
										<p class="p-md txt-justify blog-para">People will have many queries related to your business niche; so, they access Google to solve find their solutions. When you run Google ad campaigns based on those keywords, people might end up visiting your website to get solutions.
										<p class="p-md txt-justify blog-para"><u>(7) Social Media Marketing:</u>
										<p class="p-md txt-justify blog-para">With social media platforms, you can filter the people to reach your target customers. With the factors available on social media like location, age, gender, interests, you can filter the customers.
											<br>Facebook advertisements, Instagram advertisements are technically targeting these features and help you to find the right customer for your business.
											<br>That’s why it is better to hire a digital marketing agency to run your marketing campaigns.
											Now, before merging with the agency, you should know your goals.

										<p class="p-md txt-justify blog-para"><u>Identify Your Business Goals:</u>
										<p class="p-md txt-justify blog-para">When you hire a team of marketers; how do you deliver your results? Hence, identify your goals now.
											<br>The internet has all types of marketers like a specialist in specific tasks and experts managing whole digital marketing activity. You can either hire marketers full-time who will take care of all of your marketing campaign processes from SEO to paid ads. Or if you can hire marketers who are only managing your social media account or SEO process.
											<br>Choose the best type based on what your business needs? Free traffic is slow but steady and paid ad traffic will help in getting immediate sales for short time.

										<p class="p-md txt-justify blog-para"><u>Decide the services maintained by the marketers:</u>
										<p class="p-md txt-justify blog-para"> • The full-time digital marketing process
											<br> • Content marketers who help in writing blogs to your website or writing descriptions to your web and social media platforms
											<br> • Social media marketers who help in managing social media connections
											<br> • Video marketers who create engaging videos for your YouTube or experts in running video ad campaigns
											<br> • Ad campaign marketers in running Google AdWords or social media ads.
										<p class="p-md txt-justify blog-para">Specify your business goal before reaching the marketing agency.
										<p class="p-md txt-justify blog-para">This goal helps in making better outcomes for your sales.


										</p>

										<h4 class="h4-lg blog-title">How to Choose the Right Digital Marketing Agency?
										</h4>

										<!-- Text -->
										<p class="p-md txt-justify blog-para">After finalizing your goals, check/implement the following factors to choose the best digital marketing agency/team. Let’s start.
										<p class="p-md txt-justify blog-para"><u>(1) Experience of Marketing Agency:</u>
										<p class="p-md txt-justify blog-para">First of all, how does an agency manage its business? As a digital marketer, their website should be ranked top and have the best traffic.
											<br>If your agency is going to manage the blog section of your website, then check their blog management? Is it drive traffic? The fact is, if the agency could not able to get clients using their marketing strategy, then how will they help your business?
											<br>Checking the previous client details or previous marketing projects will help you understand better the marketing agency that you choose.
											<br>As a low-budget marketing plan, it is good to select a startup agency but if you looking for the best of the best, then an experienced marketing agency is the right choice; that should have a clear client portfolio. For example, a social media marketer should have a quite better profile with appreciable followers, so that these marketers can increase their followers.

										<p class="p-md txt-justify blog-para">(2) Agency’s KPI:
										<p class="p-md txt-justify blog-para"><u>KPI- Key Performance Indicator</u>
											<br>KPI are certain metrics that show the performance of your website. After hiring marketers for your website, you should know, how (in which way like SEO, social media) they will help you get traffic to the website?
											<br>You can ask about the metrics that are followed by the agency. Some of the metrics that you have to check to drive traffic are:

										<p class="p-md txt-justify blog-para"><b>The number of Unique Visitors:</b>
										<p class="p-md txt-justify blog-para">Given, you have not calculated the number of visitors to your website, instead know the number of unique visitors. Unique visitors are those who are visiting the site for the first time. Not all traffic driven to the site is converted into sales, hence by knowing the unique visitor rate, it’s easier to increase site performance and visibility to more targeted customers.
										<p class="p-md txt-justify blog-para"><b>Traffic Source:</b>
										<p class="p-md txt-justify blog-para">A website is a whole pack of web pages with different purposes like home page, about page, contact page, blog page, services page, etc., depending on the business offers.
											<br>A traffic source is a particular page that drives clients to your business; either it is a blog page (receive traffic on Google searches) or a home page (may receive traffic from social media).
											<br>When you identify the traffic source page that drives more traffic, then you will know, which content is attracted by your visitors. So that you can improve other pages’ performance and can create content similar to the engaging content.
											<br>Also, the way the traffic arrives is important. Whether it is from ad campaigns, social media platforms, or Google searches. By knowing this, you can better implement the marketing process in the least performing platforms.

										<p class="p-md txt-justify blog-para"><b>Total Time on Website:</b>

											<!-- Text -->
										<p class="p-md txt-justify blog-para">The total time, the people spend on your website will show how the particular web page engages the visitors and turns them into customers.
											If the content can solve people’s queries or if it is relevant to the keywords, then the total time will be increased. Google will always be looking for those engaging websites that automatically leads to rank your website on top of search results. Google also helps the fast-loading website to rank better, which you can also consider.
										<p class="p-md txt-justify blog-para"><b>Bounce Rate:</b>
										<p class="p-md txt-justify blog-para">When the visitor lands on your website to get some information related to your business or business niche and leaves after some time, this is calculated as the total time spent on the site. If the total time is very little (say, less than one minute), then it is a bounce rate. If the bounce rate is high, it is clear that your content is not relevant to the visitors who land on your page.
											<br>If the bounce rate is low, then your content is good and you will receive the required traffic.

										<p class="p-md txt-justify blog-para"><b>Cost Per Click (CPC):</b>
										<p class="p-md txt-justify blog-para">CPC is the amount that needs to be paid whenever the ad is clicked by the audience.
											<br>If you are planning to run ad campaigns for the business, then focus on the CPC rate. If your amount is high, then it means that the ad is not relevant to reaching your customers. Because the exact customers who want to merge with your business are going to click your ad. If the ad is not optimized, then it will be clicked by anyone, so you end up paying a high amount for the ad with no sales.
										<p class="p-md txt-justify blog-para"><b>Click-Through Rate:</b>
										<p class="p-md txt-justify blog-para">Click-Through Rate (CTR) is the metric where it shows the rate of ad engagement- the number of times your ad is viewed by the number of times your ad is clicked. If your ad is viewed several times and the click rate is low, then you might focus on designing the ad based on exact keywords and ad platforms.
											<br>By taking these metrics into the account, you have to choose the right digital marketing agency, which will help you get the best results/rates on these metrics.

										<p class="p-md txt-justify blog-para"><u>(3) Best Digital Marketing Team:</u>
										<p class="p-md txt-justify blog-para">If you are working on a budget marketing plan, then it is good to start with a startup agency with one or two marketers.
											<br>But if you are hiring a digital marketing team, then it should possess marketers specialized in every marketing activity. As a digital marketing team, they should have a social media manager, SEO executive, ad campaign specialist, etc.,
											LinkedIn, Company website is the place where you can easily know the team members in detail.

										<p class="p-md txt-justify blog-para"><u>(4) Company’s Value and Brand:</u>
										<p class="p-md txt-justify blog-para">As said before, checking the old clients’ reviews or testimonials helps you to decide whether the agency is fit for you or not. For doing so, use resources like review sites (Clutch, or some other’s blog), social media, or website comments; these will show the performance of the agency with their clients.
											<br>Digital marketing is not a one-day process. It takes time to bring results. It means that you are going to connect with the agency for a long-time or full-time depending on your business requirements. After communicating with the agency and conveying your needs, analyze the company’s environment. The more friendly the team members, the better the expected results for your business.

										<p class="p-md txt-justify blog-para"><u>(5) Interactive Website:</u>
										<p class="p-md txt-justify blog-para">Website is the brand of your business that shows your offers (products/services) to the customers. As digital marketers, they should know the importance of a website. Some agencies offer website design services. So, if you want to upgrade a website, you can add these services to your marketing plan. The user interface is everything to the website which you can design with quality text and images to attract more clients.
											<br>Even though the website design service is not provided with marketing services, your marketing agency should test your website appearance and performance.

										<p class="p-md txt-justify blog-para">These are some of the factors that help in choosing the right digital marketing agency for your business.
										<p class="p-md txt-justify blog-para"><b>Note:</b>
										<p class="p-md txt-justify blog-para">You can find digital marketing agencies on Google, social media, or any other network platform, but selecting the best team is in your hand.
											<br>Also, digital marketing requires some time to receive results like traffic or sales. Patience is important to get potential outcomes.


										</p>

										<h4 class="h4-lg blog-title">Finally:
										</h4>

										<!-- Text -->
										<p class="p-md txt-justify blog-para">I hope, this article helps you in reaching the best digital marketing agency. If you want us to take care of your marketing campaigns, contact us now!
										</p>




										<!-- SINGLE POST SHARE LINKS -->
										<div class="row post-share-links d-flex align-items-center">

											<!-- POST TAGS -->

											<div class="col-md-12 col-xl-12 post-tags-list">
												<div class='didide '>
													<!-- edit p-3 but no content -->
													<span><a href="#">how to choose right marketing agency</a></span>
													<span><a href="#">how to choose a digital marketing agency</a></span>
													<span><a href="#">how to choose the right digital marketing agency</a></span>


												</div>

											</div>



										</div><!-- SINGLE POST SHARE LINKS END-->
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
					<div class="section-title title-02 justify-content-center mb-80">
						<!-- Title -->
						<h2 class="p-md  txtredd">Questions? We're Here To Help. <br>Send Us A Message!</h2>
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
						<h2 class="p-md  txtredd">Stay Engaged With Our Content</h2>
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

			"url": "https://www.clickboxagency.com/right-digital-marketing-agency/",

			"potentialAction": {

				"@type": "SearchAction",

				"target": "https://www.clickboxagency.com/right-digital-marketing-agency/find?q={search_term_string}",

				"query-input": "required name=search_term_string"

			}

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"name": "How to Choose the Right Digital Marketing Agency in 2022?",

			"alternateName": "how to choose the right digital marketing agency, how to choose a digital marketing agency, how to choose right marketing agency",

			"url": "https://www.clickboxagency.com/right-digital-marketing-agency/"

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "https://schema.org",

			"@type": "Organization",

			"name": "How to Choose the Right Digital Marketing Agency in 2022?",

			"url": "https://www.clickboxagency.com/right-digital-marketing-agency/",

			"email": "info@clickboxagency.com",

			"foundingDate": "2022",

			"description": "How to find experienced marketers for your business? Here is the guide on how to choose the right digital marketing agency.",

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