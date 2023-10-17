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

	<title>Get More Results Implementing This 7 Best FOMO Marketing Strategies</title>

	<meta name=description content="FOMO marketing is a set of strategies pulling the customer's emotional strings. Societal pressure pushes the customer to get influenced by FOMO and purchase the product. Read below the 10 successful FOMO marketing strategies." />

	<meta name=keywords content="fomo marketing techniques, fomo marketing examples, fomo marketing strategy, fomo marketing campaigns, fomo marketing guides" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/fomo-marketing-techniques/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/fomo-marketing-techniques/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/fomo-marketing-techniques/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="Get More Results Implementing This 7 Best FOMO Marketing Strategies" />

	<meta property="og:description" content="FOMO marketing is a set of strategies pulling the customer's emotional strings. Societal pressure pushes the customer to get influenced by FOMO and purchase the product. Read below the 10 successful FOMO marketing strategies.">
	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Get More Results Implementing This 7 Best FOMO Marketing Strategies" />

	<meta name="twitter:description" content="FOMO marketing is a set of strategies pulling the customer's emotional strings. Societal pressure pushes the customer to get influenced by FOMO and purchase the product. Read below the 10 successful FOMO marketing strategies." />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<link rel="icon" href="https://www.clickboxagency.com/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="https://www.clickboxagency.com/images/favicon.png" type="image/x-icon">

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
							<img class="img-fluid" src="https://www.clickboxagency.com/images-new/blog/fomo-marketing-blog.webp" alt="fomo marketing techniques" />
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
									<h1 class="h2-md">What is FOMO Marketing? </h1>

								</div> <!-- END SINGLE POST TITLE -->
								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">

									<!-- Text -->
									<p class="p-md blog-para ">

										FOMO or Fear Of Missing Out is a marketing strategy used by at least 56% of marketers. It works out conveniently.
										Customers don't want to miss out on something special available for a limited time. FOMO tactics create urgency and push a
										customer to make quick decisions to purchase a product.
									</p>

									<div class="post-inner-img">
										<img class="img-fluid" src="../images/blog/fomo-market.png" alt="fomo-marketing" />
									</div>
									<p class="p-md blog-para ">
										We humans follow a herd mentality(following the crowd), so the business owners implement a few FOMO techniques that
										enable them to pull the customers' heart strings. The FOMO centers its marketing strategies based on the following aspects:</p>


								</div>


								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">

									<ul class="digit-list">
										<li>
											<p class="p-md blog-para ">● Urgency</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Specific time limit</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Social Proof</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Highlights the feeling of missed opportunity</p>
										</li>

									</ul>


									<h4 class="h4-lg blog-title">Strategies to boost FOMO marketing strategies</h4>
									<h4 class="h4-lg blog-title">Exhibit your buyer</h4>
									<!-- Text -->
									<p class="p-md blog-para ">In this FOMO marketing technique, Websites are designed to display live purchases of your product from
										various people from different locations. This is becoming a popular FOMO marketing strategy. When your customers see
										that more people are buying products from your website, it can build trust and force them to buy your products.
									</p>

									<div class="post-inner-img">
										<img class="img-fluid" src="../images/blog/exbit-your-buyer.png" alt="exhibit your buyer" />
									</div>

									<p class="p-md blog-para ">In another case there are room booking websites where the marketers display how many people have booked the
										rooms in the past 24-48 hours or how many rooms are left and then they give the customer limited, hurry-up deals.
									</p>

									<h4 class="h4-lg blog-title">Showing stock levels</h4>

									<!-- Text -->
									<p class="p-md blog-para ">
										This is another tactic to convince a customer by creating a sense of urgency. When the customer views your product,
										display the total number of stocks left. Many business owners make use of this tactic. Scarcity creates a fear of
										missing in the customers minds enabling them to complete the purchase.
									</p>
									<div class="post-inner-img">
										<img class="img-fluid" src="../images/blog/showing-stock-levels.png" alt="showing stock levels" />
									</div>



									<!-- Title -->
									<h4 class="h4-lg blog-title">Provide one shot deal with exit intent </h4>

									<!-- Text -->
									<p class="p-md blog-para ">Right when the customer is about to exit the website, offer a discount and inform them that it's available
										for only a limited time like they should check out by 10 minutes and pay to avail of this offer. It's a proven tactic and works
										for all online stores. </p>
									<div class="post-inner-img">
										<img class="img-fluid" src="../images/blog/provide-one-shot.png" alt="provide-one-shot" />
									</div>
									<div class="post-inner-img">
										<img class="img-fluid" src="../images/blog/deal- with exit -intent.png" alt="deal- with exit -intent" />
									</div>



									<h4 class="h4-lg blog-title">Creating FOMO arousing Images</h4>

									<p class="p-md blog-para ">Images influence customers a lot. Create trigger alert images for a sale with limited offers on a limited time.
										Use captions like <b>Don't miss out! Limited offer!</b> Only for today. These catchy texts capture a lot of attention to buy your product. This is one of the best proven Fomo marketing strategies.</p>

									<div class="post-inner-img">
										<img class="img-fluid" src="../images/blog/creating-fomo- arousing.png" alt="creating-fomo- arousing" />
									</div>

									<h4 class="h4-lg blog-title">Testimonials and Reviews</h4>

									<!-- Text -->
									<p class="p-md blog-para ">To sell your product, you need to build trust with your potential customer. Show the reviews of other customers'
										experiences. This is a common marketing strategy to enable potential buyers to purchase your product. There is another popular tactic
										to market your product. Suppose you are marketing baby swaddles, make the customer purchase the swaddle and encourage them to wrap
										their baby in the swaddle and click a cute photo, then ask them to upload the picture to your website. And the result is
										amazing, other customers will confidently go for the product and upload the photo. Promoting experience is a great way to
										boost your business performance. </p>

									<div class="post-inner-img">
										<img class="img-fluid" src="../images/blog/testimonials-and reviews.png" alt="testimonials-and reviews" />
									</div>

									<!-- Title -->
									<h4 class="h4-lg blog-title">Stir the Competitive Spirit</h4>

									<!-- Text -->
									<p class="p-md blog-para ">Some shopping websites display how many people are viewing the product or the number of people stocked that
										particular product in their bags or check-out cart. This is a great way to boost your sales. Customers will have the fear of
										losing out on this product and buy it soon.</p>

									<h4 class="h4-lg blog-title">Watch the Clock</h4>


									<p class="p-md blog-para ">This FOMO marketing strategy gives the customers time-sensitive deals. You can provide a discount on all your
										products but set a time limit. Every year some giant shopping sites announce the end-of-season sale by setting a date and time.
										Customers hog the products like the black Friday sale.nother page of the same website. It analyses the relevance, relationship and
										the value of the pages. This SEO technique improves your overall ranking. </p>

									<div class="post-inner-img">
										<img class="img-fluid" src="../images/blog/Watch-the-clock.png" alt="Watch-the-clock" />
									</div>


									<h4 class="h4-lg blog-title">Give Rewards</h4>


									<p class="p-md blog-para ">On some websites, the business owners set a time on a particular day. Then they can announce prior that the first
										50 customers will be getting a reward or a discount. It's a proven FOMO technique to improve sales. Business owners can send
										emails and announce them on social media and on their homepage about their upcoming sales. </p>


									<h4 class="h4-lg blog-title">One time offers</h4>


									<p class="p-md blog-para ">Give one time offers to customers. A lot of shopping sites offer first time customers a welcome discount of
										10% or 30%. And provide shipping free of cost for first-time customers. Business owners can use this strategy for good sales.
										If the customers like your product then they will definitely come back for another purchase. </p>

									<h4 class="h4-lg blog-title">Use Influencer Marketing</h4>
									<p class="p-md blog-para ">Influencer marketing is a trend to accelerate your company's sales.
										Influencers are internet celebrities, they are brand ambassadors for your brand. Social media accounts like Instagram are a popular
										hub for influencer marketing. Other channels of influencer marketing include:</p>

									<ul class="digit-list">
										<li>
											<p class="p-md blog-para ">● Youtube</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Tiktok</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Twitter</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Facebook</p>
										</li>
										<li>
											<p class="p-md blog-para ">● Snapchat</p>
										</li>
									</ul>


									<p class="p-md blog-para ">A recent study by MediaKix revealed that 80% of marketers find influencer marketing effective. Which explains why
										75% of businesses surveyed by Influencer Marketing Hub have a dedicated influencer marketing budget in 2021. People who follow
										these influencers wishes to be like them.</p>

									<h4 class="h4-lg blog-title">There are 3 types of influencers</h4>
									<p class="p-md blog-para ">The <b>influencer with a massive</b> 100,000 followers. They are the most expensive type. If you market your
										product with this influencer it is unpredictable that your product is likely to succeed because the audience are of different
										attitudes.<br><br>
										The <b>influencer with a micro audience</b> has about 10,000-100,000 followers. They are affordable and they have a better target audience.
										So the business owner can market their product.<br><br>
										The <b>nano influencer</b> with 1000 - 10,000 followers has the best audience. The audience of this particular influencer focuses on
										particular content, so it's likely that this group can be the potential customers. For example, if the influencer is a mom who
										reviews baby products, the followers must be moms who are potential buyers.<br><br>
										This video elaborates FOMO marketing strategy in a simpler way- https://www.youtube.com/watch?v=gLqRqSVv2v0 <br><br>
										FOMO marketing campaigns are proven to accelerate sales of business products. Most of the customers get influenced by this tactic.
										It is the best tactic to pull the emotional strings of the customer to buy the product. Some of these tactics were used before the
										age of complete digitalization. In the 90s, when the video home system was popular, Disney vault was selling fairy tale movies like
										Jungle Book and Cinderella. They would open their vault to sell these video home systems in a 60 days period. Customers would flock
										to order this vhs thinking that it would be over soon. Fomo is popular because we all live under societal pressure.</p>

								</div> <!-- END BLOG POST TEXT -->

								<!-- SINGLE POST SHARE LINKS -->
								<div class="row post-share-links d-flex align-items-center">

									<!-- POST TAGS -->
									<div class="col-md-12 col-xl-12 post-tags-list">
										<div class='didide'>

											<span><a href="#">fomo marketing guides</a></span>
											<span><a href="#">fomo marketing examples</a></span>
											<span><a href="#">fomo marketing strategy</a></span>
											<span><a href="#">fomo marketing campaigns</a></span>
											<span><a href="#">fomo marketing techniques</a></span>

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
										<p class="p-md   txt-justify txtbluee">Digital Marketer | SEO Copywriter | Content Strategist</p>
										<p class="p-md txt-justify ">Experienced digital marketer with a proven track record in creating compelling content that not only engages audiences but also drives conversions and enhances SEO visibility. My expertise extends beyond marketing strategy to crafting persuasive narratives that resonate with your target audience. I combine data-driven strategies with captivating writing to deliver measurable results, ensuring your brand shines in the digital landscape.</p>
										<!-- Connect with me on LinkedIn(https://www.linkedin.com/in/john-click-167b94238/) or visit my website "https://clickboxagency.com/" to explore more about my work and stay updated with the latest digital marketing trends. -->
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

			"url": "https://www.clickboxagency.com/fomo-marketing-techniques/",

			"potentialAction": {

				"@type": "SearchAction",

				"target": "https://www.clickboxagency.com/fomo-marketing-techniques/find?q={search_term_string}",

				"query-input": "required name=search_term_string"

			}

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"name": "Get More Results Implementing This 7 Best FOMO Marketing Strategies",

			"alternateName": "fomo marketing techniques, fomo marketing examples, fomo marketing strategy, fomo marketing campaigns, fomo marketing guides",

			"url": "https://www.clickboxagency.com/fomo-marketing-techniques/"

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "https://schema.org",

			"@type": "Organization",

			"name": "Get More Results Implementing This 7 Best FOMO Marketing Strategies",

			"url": "https://www.clickboxagency.com/fomo-marketing-techniques/",

			"email": "info@clickboxagency.com",

			"foundingDate": "2022",

			"description": "FOMO marketing is a set of strategies pulling the customer's emotional strings. Societal pressure pushes the customer to get influenced by FOMO and purchase the product. Read below the 10 successful FOMO marketing strategies.",

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
