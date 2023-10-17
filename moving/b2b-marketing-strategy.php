<?php

if (isset($_POST['send'])) {

	// getting post values
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$subject = 'Enquiry From B2B';
	$to = "sales@akkenna.com,james@akkenna.com,pradeep@akkenna.com,info@clickboxagency.com";
	$htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Clickbox Agencies</title> 
    </head> 
    <body> 
        <h3>Thanks you for joining with us!</h3> 
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

	<title>Best B2B Marketing Strategies - Follow These 10 Strategies</title>

	<meta name=description content="Are you a B2B entrepreneur? Then, check this updated guide to implementing the innovative B2B marketing strategies in your business." />

	<meta name=keywords content="b2b marketing strategy, b2b content marketing, b2b influencer marketing, b2b marketing plan, b2b lead generation strategies, b2b digital marketing strategies, marketing strategy for b2b business, innovative b2b marketing strategies" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/b2b-marketing-strategy/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/b2b-marketing-strategy/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/b2b-marketing-strategy/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/logo-01.png" />

	<meta property="og:title" content="Best B2B Marketing Strategies - Follow These 10 Strategies" />

	<meta property="og:description" content="Are you a B2B entrepreneur? Then, check this updated guide to implementing the innovative B2B marketing strategies in your business." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Best B2B Marketing Strategies - Follow These 10 Strategies" />

	<meta name="twitter:description" content="Are you a B2B entrepreneur? Then, check this updated guide to implementing the innovative B2B marketing strategies in your business." />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/logo-01.png" />

	<!--FAVICON-->

	<link rel="icon" href="https://www.clickboxagency.com/images/favicon.png" type="image/x-icon">
	<link rel="shortcut icon" href="https://www.clickboxagency.com/images/favicon.png" type="image/x-icon">

	<?php include('header-style.php') ?>
	<style>
		.owl-carousel .owl-item img {
			height: 100% !important;
		}

		#blog-page .masonry-image {
			width: 90% !important;
		}

		/* SHARE ICONS */
		.sticky-sidebar-offset {
			top: 80px;
		}

		/* .sticky-top {
			position: -webkit-sticky !important;
			position: sticky !important;
			top: 100px !important;
			z-index: 1020 !important;
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

		.clap-btn {
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
		}
	</style>
	<link href="../css/style.css" rel="stylesheet">
</head>

<body>

	<?php include('header.php') ?>



	<!-- SINGLE POST -->
	<!-- ===========================wide-100==================  -->
	<section id="single-post" class=" wide-30 single-post-section division">
		<div class="container">
			<div class="row d-flex justify-content-center ">
				<div class="col-lg-10 col-md-10">
					<div class="post-inner-img ">
						<img class="img-fluid" src="../images/blog/best-b2b-marketing.png" alt="blog-post-image" />
					</div>
				</div>
			</div>
			<div class="row ">
				<div class=" col-lg-1 mb-4  order-md-first">
					<div class="sticky-top sticky-sidebar-offset">
						<div class="share text-center">
							<div class="sidebarapplause">
								<span class="clap-btn"></span>
							</div>
							<p class="sharecolour"> Share</p>
							<ul class="shareitnow">
								<li> <a target="_blank" href="" aria-label="Twitter"> <i class="fa fa-twitter"></i> </a></li>
								<li> <a target="_blank" href="" aria-label="Facebook"> <i class="fa fa-facebook"></i> </a></li>
								<li> <a target="_blank" href="" aria-label="Pinterest"> <i class="fa fa-pinterest"></i> </a></li>
								<li> <a target="_blank" href="" aria-label="Linkedin"> <i class="fa fa-linkedin"></i> </a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-9 ">
					<div class="single-post-wrapper">
						<!-- SINGLE POST TITLE -->
						<div class="single-post-title">

							<!-- TITLE -->
							<h1 class="h2-md">Best Guide to B2B Marketing Strategies - Follow These 10 Strategies </h1>
						</div> <!-- END SINGLE POST TITLE -->

						<!-- BLOG POST TEXT -->
						<div class="single-post-txt">

							<!-- Text -->
							<p class="p-lg txt-justify blog-para">Every entrepreneur is struggling to find their marketing strategy and the right path of marketing is not identified until it is implemented and tested with the audience.

								<br>The audience is the major key to your marketing strategy. If you are not able to reach your target audience, then there is no need for taking marketing efforts and doing the promotion process. Hence, identify your customers.
							</p>

						</div> <!-- END BLOG POST TEXT -->


						<!-- BLOG POST TEXT -->
						<div class="single-post-txt">

							<!-- Title -->
							<h4 class="h4-lg blog-title">What is B2B Marketing?
							</h4>

							<!-- Text -->
							<p class="p-lg txt-justify blog-para">B2B (Business-to-Business) is the process of online business transactions that happen between two businesses or two companies.

								<br>You have to be clear, that the marketing process for individual customers is different from the marketing process for companies. You should follow some special strategies to make B2B marketing successful. Therefore, this guide is prepared to discuss some of the useful marketing methods to increase your business outcomes.
							</p>
							<!-- Title -->
							<h4 class="h4-lg blog-title">B2B Examples</h4>

							<!-- Text -->
							<p class="p-lg txt-justify blog-para">General Electric is the best example of a B2B product, as it supplies goods not only to its customers (audience) but also to some enterprises. This connection between organizations is all about B2B.

								<br><br>Amazon is another great example for both B2B and B2C (Business-to-Consumer)- Many goods in the Amazon marketplace are only for business purposes and not for individual customer sales.

								<br><br>Now, I hope that you know the B2B process. Let’s jump onto the guide to get some b2b lead generation strategies.
							</p>
							<!-- Title -->
							<h4 class="h4-lg blog-title">10 B2B Digital Marketing Strategies</h4>

							<!-- Text -->
							<p class="p-lg txt-justify blog-para">Before starting any projects, planning is a priority. A process without a proper plan will be a mess. So, plan your process. Digital marketing is a tree and its marketing methods are its branches. You have to water this tree to get fruits (customers). Here I am going to provide the b2b marketing plans in detail so that you can reach your customers easily.</p>


							<h4 class="h4-lg blog-title">We divide the 10 strategies into 3 steps</h4>

							<!-- Digit List -->
							<ul class="digit-list" style="list-style: upper-alpha; padding-left:21px;">

								<li>
									<p class="p-lg blog-para">Reaching Right Customers</p>
								</li>
								<li>
									<p class="p-lg blog-para">Selling Products to Customers</p>
								</li>
								<li>
									<p class="p-lg blog-para">Retargeting and Repeating Process</p>
								</li>

							</ul>

							<!-- Text -->
							<p class="p-lg blog-para">We will see the 3 steps in detail.</p>

							<h4 class="h4-lg blog-title">(A) Reaching Right Customers</h4>

							<!-- Text -->
							<p class="p-lg txt-justify blog-para">This is the first step of starting your B2B marketing strategy which requires more effort.

								<br>In a B2B business, you have two types of customers:
							</p>


							<p class="p-lg txt-justify blog-para"><b>Type I:</b> Individual sellers who are buying your supplies and selling them (as a complete product) to their customers </p>
							<p class="p-lg txt-justify blog-para"><b>Type II:</b> A large company that relies on your supplies to create the product for their customers. <br><br>Did you decide the type of B2B customers you want? You can sell your supplies to individual sellers or companies or both places; it depends on your products and business goals. </p>
							<!-- Title -->
							<h4 class="h4-lg blog-title">How to reach these customers?</h4>

							<!-- Text -->
							<p class="p-lg blog-para">You can use the following marketing process to get expected outcomes. If your marketing process reaches your customers, then you crossed half of the sea to make a sale.</p>

							<h4 class="h4-lg blog-title">1. Display Advertising </h4>


							<p class="p-lg txt-justify blog-para">Advertisements are the traditional marketing way of promoting your products. These ads can be of any format like text, audio, videos, or images that are displayed on websites, blogs, social media sites, and other online platforms. </p>

							<h4 class="h4-lg blog-title">Identify the Niche Site</h4>

							<p class="p-lg txt-justify blog-para">You can create an attractive ad and display it on popular online sites to draw the attention of the audience. To do that correctly, filter the right platform like niche-based websites, blogs, or social sites.</p>
							<p class="p-lg txt-justify blog-para">For instance, if you are selling automobile parts and create ads based on your products, then you have to put these ads only on platforms that talk about the automobile. Instead, if you placed your ad on a gaming or irrelevant niche site, those audiences cannot see your ad and you have to lose your time and money.</p>
							<p class="p-lg txt-justify blog-para">So, picking a suitable niche site is very important!</p>
							<p class="p-lg txt-justify blog-para"><b>Note:</b> You can write funny, memorable, and attractive slogans in-text ads, use colorful pictures for your image ads, or use interactive videos for your video ads. Marketing is all about conveying your products to the right customers in a friendly way. </p>

							<h4 class="h4-lg blog-title">2. PPC Advertisements</h4>


							<p class="p-lg txt-justify blog-para">PPC (Pay Per Click) advertisements are similar to display ads, but the pricing will vary. When you search for something on Google, the search results will display some ads related to your search followed by popular and free blogs or websites. These ads are PPC ads. </p>
							<p class="p-lg txt-justify blog-para">Stats say that audience will be able to reach their searched information quickly with the help of these ads. When these people click your ads, you have to pay the amount for the search engines. These ads will have high competition and you can get the ads to display place by bidding with your competitors so that you can place your ad relevant to the keywords of your customers. </p>
							<p class="p-lg txt-justify blog-para">The price of PPC ads will vary based on keywords and the number of clicks for your ads. But display ads need a constant price for the total time allocations for your ad.</p>
							<p class="p-lg txt-justify blog-para">So, implementing any one of these ads or both ways can able to get target customers. It depends on your budget range. If you are a beginner, then you can use the following free b2b digital marketing strategies instead of creating ads.</p>

							<h4 class="h4-lg blog-title">3. Search Engine Optimization (SEO)</h4>


							<p class="p-lg txt-justify blog-para">In digital marketing, SEO, and SEM (Search Engine Marketing) are the major parts. SEM is all about paid advertisements and PPC is included in this SEM category. SEO is the process of driving organic traffic to your business in a free method. </p>
							<p class="p-lg txt-justify blog-para">As per stats by Ahrefs, 53.3% of website traffic comes from organic searches in search engines like Google. Hence nearly half of the leads are attained from Google, SEO is the top marketing strategy for B2B businesses. </p>
							<p class="p-lg txt-justify blog-para">Also, per BrightEdge, SEO is 1000+ times better than social media in driving traffic to your website. </p>
							<p class="p-lg txt-justify blog-para">It is shown how SEO plays a major role in the marketing process. SEO is simply defined as the process of ranking your website in the top positions of the search results. People will generally click the top-most results and so, you can get the traffic. </p>
							<p class="p-lg txt-justify blog-para">The process of SEO is classified as On-Page SEO and Off-Page SEO. </p>

							<h4 class="h4-lg blog-title">On-Page SEO</h4>

							<p class="p-lg txt-justify blog-para">Since keywords are the key to SEO, your website or blog content should contain keywords. Usually, low competitive keywords can be preferred to rank easily in search results. Optimize all the website content based on specific keywords. </p>

							<h4 class="h4-lg blog-title">Off-Page SEO</h4>

							<p class="p-lg txt-justify blog-para">In the Off-page SEO process, you have to create backlinks to your website. The more the backlinks, the higher the domain authority (DA). Even though (DA) is not important, it is important to create more backlinks which increases the website position in the search results. For these activities, you have to do link submissions for your target keywords. </p>

							<h4 class="h4-lg blog-title">4. B2B Content Marketing</h4>


							<p class="p-lg txt-justify blog-para">There is a popular slogan in the marketing field- “Content is the King” - It is not a myth and it is one of the proven facts in marketing.

								<br>By the stats from Demand Metric and Neil Patel, Content marketing’s cost is 62% lesser than traditional marketing but drives 3X more leads.

								<br>Content can be created in many formats (similar to ads) like images, videos, or text. Some of the best content creation methods are:
							</p>
							<p class="p-lg txt-justify blog-para"><b>Write Blogs:</b> When people landed on your website through search results, their main purpose is to read some useful information. The best way to pull traffic to your website is by writing blogs.

								<br>As said already, B2B content is different from B2C content. Since you are writing content for other business entrepreneurs instead of individuals, you have to optimize the articles based on their searches.

								<br>Many of your customers need a solution to their business-like tips to improve their business traffic and growth, different product ideas and solutions, etc.,

								<br>Understanding your customer and their requirements help to create friendly and interactive content. Try to solve your customer queries on your articles, so that you can get the chance of customers as they will land on your blogs to get their solutions.

								<br><b>Image:</b> You can simply convert your important text content into images and can share it on your social sites to get traffic. Also, you can do video content which we will discuss next.
							</p>



							<h4 class="h4-lg blog-title">5. Video Marketing</h4>


							<p class="p-lg txt-justify blog-para">As seen above, SEO is the best and organic b2b lead generation strategy, Google is the first search engine used by most people.

								<br>Next to Google, YouTube is the second-best choice of search engines to research their information. As we know, YouTube is a video form of a search result provider.

								<br>As per stats by YouTube, 1.9 billion people use YouTube as their search engine. And as per Google stats, 65% of people use YouTube to get solutions to their queries.

								<br>In addition to writing articles, you can also create videos to be uploaded on YouTube. Create a video that explains your business process, product features, etc., so that your customer can able to understand your business in a much easier way, hence automatically they will land on your website.
							</p>



							<h4 class="h4-lg blog-title">Some Video Marketing Ideas Are </h4>

							<!-- List -->
							<ul class="simple-list">

								<li class="list-item">
									<p class="p-lg blog-para">Explainer or animated video that explains your business and product.</p>
								</li>

								<li class="list-item">
									<p class="p-lg blog-para">’How-to’, ‘Why’, and ‘What’ type of videos.</p>
								</li>

								<li class="list-item">
									<p class="p-lg blog-para">Top 10 content videos.</p>
								</li>

								<li class="list-item">
									<p class="p-lg blog-para">Create videos based on your blog post.</p>
								</li>

							</ul>

							<!-- Text -->
							<p class="p-lg txt-justify blog-para">As said before, ads are also in video format. So, create videos for your paid ads, that can be displayed on YouTube or any other social media sites.
								<br>The main thing is, to develop interactive, funny, and informative video content.
							</p>



							<h4 class="h4-lg blog-title">6. Social Media Marketing (SMM)</h4>


							<p class="p-lg txt-justify blog-para">Social media is a free and friendly platform for B2B businesses, especially for beginners who don’t want to spend money on ads.

								<br>The following social media sites are considered the first to publish their business posts.

								<br><b>LinkedIn:</b> Among all social media platforms, LinkedIn is a business and work-based social media platform where you can find many B2B buyers easily.

								<br>Check these LinkedIn User stats:

								<!-- List -->
							<ul class="simple-list">

								<li class="list-item">
									<p class="p-lg blog-para">675 million users are found monthly.</p>
								</li>

								<li class="list-item">
									<p class="p-lg blog-para">Your LinkedIn paid ads will reach 12% of the world's population.</p>
								</li>

								<li class="list-item">
									<p class="p-lg blog-para">30 million companies are registered on LinkedIn.</p>
								</li>

							</ul>
							</p>
							<p class="p-lg txt-justify blog-para">
								<br>LinkedIn is the first and prior platform to create an account. In LinkedIn, you can post images, videos, and can submit articles. All types of content are supported, so you can reach many B2B buyers with your powerful content.

								<br><b>Facebook and Twitter:</b> Next to LinkedIn, Facebook and Twitter are the best. You can post the image or video about your business updates, new product details.

								<br><b>Instagram:</b> Instagram is the best place for image content. You can use these platforms to connect with your B2B buyers, as you know how much these platforms are used by the people.

								<br><b>Paid Ads:</b> As above, PPC and display ads are a part of the marketing strategy, you can place display ads on these social media sites.

								<br><b>TikTok:</b> Even TikTok is banned in some places, it is used in most of the countries and if you are a part of those active regions, then use TikTok as one of your marketing platforms. Because it is the new platform when compared to these above platforms, it gains an audience in a short period. So, audience engagement is more in this application.

								<br><b>Other Popular Platforms:</b> Pinterest, Reddit, WhatsApp are also some of the most used applications where you can implement your B2B marketing methods.

								<br>These 6 ways will help you to connect with your target audience easily. Follow all these methods to get quick traffic.
							</p>
							<h4 class="h4-lg blog-title">(B) Selling Products to Customers </h4>
							<p class="p-lg txt-justify blog-para">

								<br>Now, we will jump into the second step. When you follow these above-mentioned marketing methods, traffic will increase, and leads will start entering your business.

								<br>After having enough amount of traffic to your website, it’s time to convert the traffic into your customers. For that, use the following ways.
							</p>



							<h4 class="h4-lg blog-title">7. Email Marketing</h4>


							<p class="p-lg blog-para">Emails are a personal way to connect with your customers. With the help of email, you can make more sales. But getting your customers’ mail is not an easy process. So, try these methods.

								<br><b>Provide Free Resources:</b> Free resources are always the appreciated method between the customers. You can create a landing page to get the customers’ email and you can send the free content to your customer’s mail. In this way, you can get mail-ids and customers can get valuable content.

								<br>Some Free content Ideas:

								<br>*Free eBook or Pdf

								<br>*Free access to some software features

								<br>*Free seminars about your business niche, etc.,

								<br>Feedbacks: You can also ask your customers about the review/feedback of your business approach or your product quality. In this way (by filling out feedback or contact form), you may be able to get emails and at the same time, you can have a chance to improve the business process as per your user feedback.

								<br>With these mails, you can send content-filled emails to your customers about your business updates.
							</p>


							<h4 class="h4-lg blog-title">Email Marketing Tools</h4>


							<p class="p-lg txt-justify blog-para">How do you send one mail to all your email subscribers at the same time? By using any of the email marketing tools (available online) like Mailchimp, it is possible to send one mail to many subscribers at the same time. This will save your time and Mailchimp is free to start and you can manage up to 2000 subscribers in its free plan. For more, you have to upgrade to the next rice plan. </p>

							<h4 class="h4-lg blog-title">Customer Behavior</h4>


							<p class="p-lg txt-justify blog-para">Understanding your customers is the right path to cross the other half of the sea. You can make gradual improvements in posting articles, images, and sending emails when you know your customer requirements completely.

								<br>Also, by posting consistently on social media platforms and writing articles, you can make a sale.

								<br>Hurrah! You finally made a sale.
							</p>

							<h4 class="h4-lg blog-title">(C) Retargeting and Repeating Process</h4>

							<p class="p-lg txt-justify blog-para">Want to make more sales?

								<br>Don’t worry. Check the other marketing methods. Retargeting is the process of reaching your old customers and connecting with them for future projects.

								<br>Repeating the same process, again and again, will help you to get new traffic and customers. Some other b2b lead generation marketing strategies to implement are:
							</p>

							<h4 class="h4-lg blog-title">8. B2B Influencer Marketing </h4>

							<p class="p-lg txt-justify blog-para">Influencers are mostly present on every online platform. Influencers are the person who is believed by people and can help their followers by providing solutions. You can connect with these influencers in your niche, and ask them to promote your products in return for a commission.

								<br>If any of your target B2B buyers follow the influencers (that you are connected with), then you have a chance of getting these buyers as your customers.
							</p>

							<h4 class="h4-lg blog-title">9. Affiliate Marketing</h4>

							<p class="p-lg txt-justify blog-para">Do you know, you can connect with affiliate marketers to promote your products? Affiliate marketing is the process where people will promote your products to their B2B buyer friends/connections. If you make any profit or sell through them, you can give a commission fee for recommending clients to your business. So, it is easier to reach more B2B buyers. You can decide your commission fee range and terms & conditions for your affiliate marketers. </p>

							<h4 class="h4-lg blog-title">10. Event Marketing</h4>

							<p class="p-lg txt-justify blog-para">The type is similar to sample marketing provided by offline stores to convey their product presence to their customers.

								<br>You can conduct free events or seminars (webinars online) so that you can get traffic to your events. From that, you can able to find customers to make a sale.

								<br>These are the ten proven b2b marketing strategies that will help you to drive leads to your B2B business.
							</p>

							<h4 class="h4-lg blog-title">Final Words</h4>

							<p class="p-lg txt-justify blog-para">I hope, you can find many best ideas to improve your business growth. You can implement all these 10 strategies to get results quickly. Or you can do the one-by-one method to get passive outputs.

								<br>Are you a beginner or running out of time? Leave this marketing process with us!

								<br>Let’s join together to promote your business!
							</p>
						</div> <!-- END BLOG POST TEXT -->


						<!-- SINGLE POST SHARE LINKS -->
						<div class="row post-share-links d-flex align-items-center">

							<!-- POST TAGS -->
							<div class="col-md-12 col-xl-12 post-tags-list">
								<div class='didide p-3 blog-para'>
									<!-- p-3 its edited for 22.9 -->
									<span><a href="#">b2b marketing strategy</a></span>
									<span><a href="#">b2b lead generation strategies</a></span>
									<span><a href="#">b2b content marketing</a></span>

									<span><a href="#">b2b influencer marketing</a></span>


									<span><a href="#">b2b marketing plan</a></span>

									<span><a href="#">b2b digital marketing strategies</a></span>
									<span><a href="#">marketing strategy for b2b business</a></span>
									<span><a href="#">innovative b2b marketing strategies</a></span>
								</div>

							</div>

							<!-- POST SHARE ICONS -->


						</div>

						<div class="row d-flex align-items-center justify-content-center mt-50 gap-3">
							<div class="col-md-2 d-flex align-items-center justify-content-center">
								<img src="../images/person-icon.svg">
							</div>
							<div class="col-md-8">
								<h4 class="h4-lg">Written by Beantsingh Duggal</h4>
								<p class="p-lg txt-justify ">AVP Sales working at MindInventory, with overall experience of 13+ years, Beant Singh Duggal is evaluating business opportunities and potential markets by analyzing financial feasibility studies and conducting market research.He oversees the efforts to support and assist the organization in identifying and securing new Business opportunities, facilitating efforts to develop, implement and refine standard procedures for researching, collecting, and tracking information about clients including client’s coordinates, pipelines, and previous outsourcing experiences. </p>
							</div>
						</div>
						<!--END POST SHARE-->
					</div>
				</div>
			</div> <!-- END SINGLE POST CONTENT -->


		</div> <!-- End container -->
	</section> <!-- END SINGLE POST -->
	<!-- POST COMMENTS-->
	<!-- 	=========================wide-80==================== -->
	<section id="post-comments" class=" post-comments division">
		<div class="container">
			<div class="row">


				<!-- COMMENTS WRAPPER -->
				<div class="col-lg-10 offset-lg-1">
					<div class="comments-wrapper">


						<!-- COMMENT FORM -->
						<div id="leave-comment">

							<!-- Title -->
							<h5 class="h5-lg">Leave a Comment</h5>

							<!-- Text-->
							<p class="p-md">Your email address will not be published. Required fields are marked *</p>

							<form name="commentForm" method="post" class="row comment-form">

								<div class="col-md-12">
									<p>Name*</p>
									<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required>
								</div>

								<div class="col-md-6">
									<p>Email*</p>
									<input type="email" name="email" class="form-control email" placeholder="Enter Your Email*" required>
								</div>

								<div class="col-md-6">
									<p>Phone*</p>
									<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone No*" required>
								</div>

								<div class="col-md-12 input-message">
									<p>Subject *</p>
									<textarea class="form-control message" name="message" rows="6" placeholder="Enter Your Comment Here* ..." required></textarea>
								</div>

								<!-- Contact Form Button -->
								<div class="col-lg-12 form-btn">
									<button type="submit" class="btn btn-skyblue tra-skyblue-hover submit" name="send">Submit</button>
								</div>

								<!-- Contact Form Message -->
								<div class="col-md-12 comment-form-msg text-center">
									<div class="sending-msg"><span class="loading"></span></div>
								</div>
								<div class="form-group">
									<div class="col-sm-10 col-sm-offset-2">
										<?php if (!empty($result)) {
											echo '<div class="alert alert-success"><b>Your message sent successfully! </b>' . $result . '</div>';
										} ?>
									</div>
								</div>

							</form>

						</div> <!-- END COMMENT FORM -->

					</div>
				</div> <!-- END COMMENTS WRAPPER -->


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END POST COMMENTS -->



	<!-- BLOG-1-->
	<!--======================================wide-60======= -->
	<section id="blog-1" class="bg-whitesmoke-gradient  blog-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mt-20">
						<!--wide-60  -->
						<h2 class="h2-md">Keep Reading...</h2>
					</div>
				</div>
			</div>


			<!-- INCLUDE BLOGS -->

			<?php include('newblog2.php') ?>

		</div> <!-- END BLOG POSTS -->
		</div> <!-- End container -->
	</section> <!-- END BLOG-1 -->
	<a id="back-to-top" class="back-to-top"><img src="../images/up-arrow.svg" class="up-arrow"></a>

	<?php include('footer.php') ?>
	</div> <!-- END PAGE CONTENT -->

	<?php include('footer-script.php') ?>


	<script>
		var backTop = $('#back-to-top');

		$(window).scroll(function() {
			console.log("hello1");
			if ($(window).scrollTop() > 400) {
				backTop.addClass('show');
				console.log("hello2");
			} else {
				backTop.removeClass('show');
				console.log("hello3");
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

			"url": "https://www.clickboxagency.com/b2b-marketing-strategy/",

			"potentialAction": {

				"@type": "SearchAction",

				"target": "https://www.clickboxagency.com/b2b-marketing-strategy/find?q={search_term_string}",

				"query-input": "required name=search_term_string"

			}

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"name": "Best B2B Marketing Strategies - Follow These 10 Strategies",

			"alternateName": "b2b marketing strategy, b2b content marketing, b2b influencer marketing, b2b marketing plan, b2b lead generation strategies, b2b digital marketing strategies, marketing strategy for b2b business, innovative b2b marketing strategies",

			"url": "https://www.clickboxagency.com/b2b-marketing-strategy/"

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "https://schema.org",

			"@type": "Organization",

			"name": "Best B2B Marketing Strategies - Follow These 10 Strategies",

			"url": "https://www.clickboxagency.com/b2b-marketing-strategy/",

			"email": "info@clickboxagency.com",

			"foundingDate": "2022",

			"description": "Are you a B2B entrepreneur? Then, check this updated guide to implementing the innovative B2B marketing strategies in your business.",

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
	<!-- <script src="../js/custom.js"></script> -->

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
		$('.clap-btn').on('click', function() {
			$(this).toggleClass('clap-active');
		});
	</script>

</body>

</html>