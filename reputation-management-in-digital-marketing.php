<?php

//  
if (isset($_POST['send'])) {

	// getting post values
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = 'Comments Form';
	$message = $_POST['message'];
	$to = 'sales@clickboxagency.com';
	$htmlContent = ' 
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

	// Set content-type header for sending HTML email 
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers .= 'Cc: iamjamesstephan@gmail.com' . "\r\n";
	$headers .= 'Cc: pradeepavm@gmail.com' . "\r\n";
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

	<meta name="Author" content="www.clickboxagency.com" />

	<meta name="copyright" content="www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/digital-marketing-checklist" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/reputation-management-in-digital-marketing/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/reputation-management-in-digital-marketing/" />

	<meta property="og:image" content="www.clickboxagency.com/images/logo-01.png" />

	<meta property="og:title" content="Role of ORM in Digital Marketing-How It Impacts Your Business?" />

	<meta property="og:description" content="What is ORM? Learn here the role and importance of Online Reputation Management in digital marketing and know how it impacts your business growth." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Role of ORM in Digital Marketing-How It Impacts Your Business?" />


	<meta name="twitter:description" content="What is ORM? Learn here the role and importance of Online Reputation Management in digital marketing and know how it impacts your business growth." />

	<meta name="twitter:image" content="www.clickboxagency.com/images/logo-01.png" />
	<?php include('header-style.php') ?>

</head>



<body>




	<?php include('header.php') ?>




	<!-- SINGLE POST
			============================================= -->
	<section id="single-post" class="wide-100 inner-page-hero single-post-section division">
		<div class="container">


			<!-- SINGLE POST CONTENT -->
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="single-post-wrapper">

						<!-- BLOG POST INNER IMAGE -->
						<div class="post-inner-img">
							<img class="img-fluid" src="https://clickboxagency.com/images/blog/role-of-orm-in-digital-marketing.jpg" alt="blog-post-image" />
						</div>


						<!-- SINGLE POST TITLE -->
						<div class="single-post-title">

							<!-- TITLE -->
							<h1 class="h2-md">Role of ORM in Digital Marketing-How It Impacts Your Business?</h1>


						</div> <!-- END SINGLE POST TITLE -->





						<!-- BLOG POST TEXT -->
						<div class="single-post-txt">
							<!-- Title -->
							<h4 class="h4-lg">ORM:
							</h4>

							<!-- Text -->
							<p class="p-lg">ORM is abbreviated as Online Reputation Management.
								<br>Online Reputation Management is the process of analyzing and increasing the online presence of your business.


								<!-- Title -->
							<h4 class="h4-lg">Role of ORM in Digital Marketing:
							</h4>

							<!-- Text -->
							<p class="p-lg">In simple, reputation management in digital marketing plays an important role in your business as this activity monitors the SERPs (Search Engine Result Pages) and shows how a customer will see your brand presence or how an organic customer will find your business products/ services/ offers while doing their search on Google.
								<br>Reputation is the term attached to the quality of your business brand. If the business quality is rich, your reputation will be high and customers will connect with you at any moment.
								<br>With the help of online brand reputation management services, all negative reviews about your business will be controlled and help your brand to be active on search engine results. As a founder or marketer of your business, you should know every information or review of your brand from the people.


							</p>
							<h4 class="h4-lg">Online Reputation Management in SEO:
							</h4>

							<!-- Text -->
							<p class="p-lg">SEO (Search Engine Optimization) is the activity of improving website rank on search results. A lot of marketers are in confusion between ORM and the SEO process. ORM is not included under SEO. SEO is all about doing on-page and off-page activities to improve the ranking of a website; while in ORM, it is all about getting rid of negative reviews of your business.

								<!-- Title -->
							<h4 class="h4-lg">Importance of Online Reputation Management:
							</h4>

							<!-- Text -->
							<p class="p-lg"><b>Following are some of the factors that show the importance of the reputation management process on your brand:</b>
								<br>> Even though ORM is not a part of SEO, you have to implement smart SEO strategies as it affects the ranking of your website in search results. Positive reviews of your products or services are not taken into account unless it is ranking on top of the SERPs. So, focusing on on-page and off-page SEO activities leads to increasing ORM results.
								<br> > With the help of customer feedback, ORM rises your business presence online.
								<br> >When ORM activity is implemented clearly, you will get positive reviews from your potential customers which may result in getting more sales.
								<br> >Nowadays, most people are checking the reviews before buying any products or hiring any services. When any negative feedback appears, they try to navigate to another website. Here ORM plays a major role in ignoring these negative reviews.
								<br> >Online reputation management also aids in monitoring and enriching the content quality of your site.


							</p>
							<h4 class="h4-lg">How does ORM Impacts Your Business Growth?
							</h4>

							<!-- Text -->
							<p class="p-lg">According to facts, 80% to 90% of people are seeing reviews of old customers before engaging with your products or services. All these reviews appear on Google and social media platforms.
								<br>Customers will be able to search your company details (like business history, projects, old customers feedbacks, negative reviews, etc.,)
								<br>Whether you are selling products or offering services, whether you are planning to make business deals or partnerships, ORM makes a higher impact on your business revenue.


								<!-- Title -->
							<h4 class="h4-lg">Be Better than Your Competitors: (Competitor Analysis)
							</h4>

							<!-- Text -->
							<p class="p-lg">There are many competitors present in every business niche. You want to be unique and prove quality to become better than your competitors.
								<br>Anyone can able to give negative reviews for your website, so does your competitor! If your competitor is better than you, then they are doing the following two activities:
								<br> >They create new contents to build their strong presence online with the help of social media.
								<br> >Also, they engage with their customers well to get positive feedbacks that automatically leads to more sales.
								<br>Hence, make a competitor analysis (which is also necessary for every business) and become better than your competitor by doing the above two activities.


							</p>


							<h4 class="h4-lg">Who Needs ORM Services?
							</h4>

							<!-- Text -->
							<p class="p-lg">Before going deeper into the ORM discussion, you have to understand that every business niche has a competitor and needs customers to move forward. In this case, ORM wants to be a part of their business strategy. If you are included in any one of the below-mentioned lists, then start doing the ORM process now.
								<br><b>*Business:</b> If you are a startup or planning to start an online business, online reputation management helps you to create a rich brand between your customers.
								<br><b>*Brand: </b> Even business is not your goal but want to create your brand, ORM is important.
								<br><b>*Celebrities: </b> Are you a celebrity or influencer on a specific platform? Then you may have a follower community. A wrong reputation may lead to having low followers or spoiling your name. So, give importance to ORM activity.


								<!-- Title -->
							<h4 class="h4-lg">Reputation Management Checklist:
							</h4>

							<!-- Text -->
							<p class="p-lg"><u>What is your business reputation? How will you check it?</u>
							<p class="p-lg">To answer these questions, we will discuss the components of reputation, so that it is easy for you to implement the ORM process. Here is the checklist:
							<p class="p-lg"><b>(1) Search:</b>
							<p class="p-lg">All online presence starts with a search. When people plan to buy new things or hire services, they start searching on Google or any other search engine like Bing, etc., As you know, Google and YouTube are the most popular search engines used by most people.
								<br>Search your business name, keyword related to your business products/services on Google, YouTube, or any other search engines to know the following:
								<br> > Whether you are ranking in the top 5 or top 10 search results? If not, then concentrate on the SEO process.
								<br> >Whether you are getting more star ratings? (if any ratings appear on search results). If not, then increase your content quality.
								<br> >Are you getting more positive reviews? If not, then engage more with your customers.

							<p class="p-lg"><b>(2) Google My Business:</b>
							<p class="p-lg">Do you have a listing on Google My Business? It is the page that shows your business details to your customers as it is associated with Google search and Maps. With Google My Business, customers can easily find the locations of businesses or shops and also find reviews of the brand.
								<br>Make sure to create a good listing (with accurate details) on Google My Business as it leads to increase traffic to your business.

							<p class="p-lg"><b>(3) Social Media Platforms:</b>
							<p class="p-lg">Next to Google and YouTube, people spend more time on social media networks to know about some brand details. In every social network, analyze details such as:
								<br> > number of followers to your account
								<br> >Engagement with your followers (messaging or commenting activities)
								<br> >Last time of your post
								<br> >Average time that you spend on each social network.
								<br> >Positive and negative feedback
								<br> >Rumors about your brand
								<br> >Also check hashtags and different search terms of your niche to know whether your business is placed under these to reach people.
								<br> ->All these details will reflect the presence or reach of your business on your customers.

							<p class="p-lg"><b>(4) Feedback/Review Sites:</b>
							<p class="p-lg">Do you have a feedback form on your website? Or Getting any personal feedback? Value each of these feedbacks and improve your website based on your customer feedback.
								<br>Also, there are more review sites on Google and social media which provide reviews of the business. Check these review sites to know, what they talk about your brand and how people react to these review sites.
								<br>Also, check Google reviews and star ratings, Facebook reviews to know more about your customer needs and correct them to increase the loyalty of your business.

							<p class="p-lg"><b>Implement ORM Strategy:</b>
							<p class="p-lg">After finishing the checklist, you will know what to do next. It’s time to increase your online presence. Do the following:
							<p class="p-lg"><b>(1) Use Every Platform:</b>
							<p class="p-lg">Since you are creating an online presence, start creating an account on every popular online platform that you know.
								<br>Other than Google, concentrate on search engines like Yahoo or Bing. Not only on Google My Business, create a presence on a Facebook business page that is separate from your Facebook account.

							<p class="p-lg"><b>(2) Form Social Media Management Team:</b>
							<p class="p-lg">When talking about social media, LinkedIn is the prior network for business. Create a separate LinkedIn business page in addition to your personal LinkedIn account. There are many social networks you have seen like Facebook, Instagram, Twitter, Reddit, etc., which contain many customers that you need.
								<br>
								<br>Arrange a social media management team or hire a social media manager to take care of your social media accounts. This manager will post consistently, talk to your customers, engage with your followers, check your brand reach on social networks, and works on improving your business presence.

							<p class="p-lg"><b>(3) Do Monitor Your Reputation:</b>
							<p class="p-lg">As said before, anyone can able to spoil your brand name. Hence form a reputation monitoring team or use any online reputation software like Trustpilot, Podium to monitor your brand reputation from your people.
							<p class="p-lg"><b>(4) Be a Good Team:</b>
							<p class="p-lg">If you are working as a team, make sure that all the team members are having the same goal of maintaining the reputation of your business. If you are having strong and same-minded team members, then it is easy to increase the loyalty of the brand.
							<p class="p-lg"><b>(5) Do SEO:</b>
							<p class="p-lg">As we discussed, SEO is having a high impact on ORM, you have to hire an SEO team to carry over your on-page and off-page SEO activities. Create unique content during this online reputation marketing process to push down your weak listings on Google. Also, create blog pages to solve your customer queries. These are some practical steps that help to increase the visibility of your website in SERPs.
							<p class="p-lg"><b>(6) Hire Marketers to Manage Your ORM Activity:</b>
							<p class="p-lg">Do you have a small or no customer service team?
								<br>When you do complete research on Google or social media, you will find the best reputation marketing companies.
								<br>Hire someone from these companies who can manage the ORM process of your business. You can hire them based on your budget and needs.




							</p>

							<h4 class="h4-lg">Final Words:
							</h4>

							<!-- Text -->
							<p class="p-lg">ORM is an essential process for your business. Every negative review will damage your reputation. To ignore these things, do the ORM process to improve your business presence and sales growth.
								<br>If you are busy with your customers and do not have time for ORM activities, then hire us!
								<br>We are the experienced online reputation management agency that helps you to create a successful online presence of your brand and assure you to receive more traffic and sales to your business. Let’s work together!
							</p>





						</div> <!-- END BLOG POST TEXT -->


						<!-- SINGLE POST SHARE LINKS -->
						<div class="row post-share-links d-flex align-items-center">

							<!-- POST TAGS -->
							<div class="col-md-9 col-xl-8 post-tags-list">
								<span><a href="#">Life</a></span>
								<span><a href="#">Ideas</a></span>
								<span><a href="#">Story</a></span>
								<span><a href="#">Web Design</a></span>
							</div>

							<!-- POST SHARE ICONS -->
							<div class="col-md-3 col-xl-4 post-share-list text-end">
								<ul class="share-social-icons ico-25 text-center clearfix">
									<li><a href="#" class="share-ico"><span class="flaticon-twitter"></span></a></li>
									<li><a href="#" class="share-ico"><span class="flaticon-facebook"></span></a></li>
									<li><a href="#" class="share-ico"><span class="flaticon-bookmark"></span></a></li>
								</ul>
							</div>

						</div> <!-- END SINGLE POST SHARE -->

					</div>
				</div>
			</div> <!-- END SINGLE POST CONTENT -->


		</div> <!-- End container -->
	</section> <!-- END SINGLE POST -->







	<!-- POST COMMENTS
			============================================= -->
	<section id="post-comments" class="wide-80 post-comments division">
		<div class="container">
			<div class="row">


				<!-- COMMENTS WRAPPER -->
				<div class="col-lg-10 offset-lg-1">
					<div class="comments-wrapper">


						<!-- COMMENT FORM -->
						<div id="leave-comment">

							<!-- Title -->
							<h5 class="h5-lg">Leave a Comment</h5>

							<!-- Text -->
							<p class="p-md">Your email address will not be published. Required fields are marked *</p>

							<form name="commentForm" class="row comment-form">

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
									<input type="number" name="phone" class="form-control phone" placeholder="Enter Your Phone No*" required>
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




	<!-- BLOG-1
			============================================= -->
	<section id="blog-1" class="bg-whitesmoke-gradient wide-60 blog-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-70">
						<h2 class="h2-md">Keep Reading...</h2>
					</div>
				</div>
			</div>


			<!-- BLOG POSTS -->
			<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">


				<!-- BLOG POST #1 -->
				<div class="col">
					<div id="bp-1-1" class="blog-1-post mb-40 wow fadeInUp">

						<!-- BLOG POST IMAGE -->
						<div class="blog-post-img">
							<div class="hover-overlay">
								<img class="img-fluid" src="../images/blog/post-1-img.jpg" alt="blog-post-image" />
								<div class="item-overlay"></div>
							</div>
						</div>

						<!-- BLOG POST TEXT -->
						<div class="blog-post-txt">

							<!-- Post Tag -->
							<p class="p-md post-tag">OLMO News &ensp;|&ensp; June 12, 2021</p>

							<!-- Post Link -->
							<h5 class="h5-md">
								<a href="single-post.html">Integer urna turpis donec ipsum a porta justo auctor</a>
							</h5>

							<!-- Text -->
							<p class="p-lg">Donec sapien augue integer turpis urna cursus porta, mauris augue...</p>

							<!-- Post Meta -->
							<div class="post-meta">
								<p class="p-md">9 Comments</p>
							</div>

						</div> <!-- END BLOG POST TEXT -->

					</div>
				</div> <!-- END  BLOG POST #1 -->


				<!-- BLOG POST #2 -->
				<div class="col">
					<div id="bp-1-2" class="blog-1-post mb-40 wow fadeInUp">

						<!-- BLOG POST IMAGE -->
						<div class="blog-post-img">
							<div class="hover-overlay">
								<img class="img-fluid" src="../images/blog/post-5-img.jpg" alt="blog-post-image" />
								<div class="item-overlay"></div>
							</div>
						</div>

						<!-- BLOG POST TEXT -->
						<div class="blog-post-txt">

							<!-- Post Tag -->
							<p class="p-md post-tag">Tutorials &ensp;|&ensp; June 3, 2021</p>

							<!-- Post Link -->
							<h5 class="h5-md">
								<a href="single-post.html">A ligula risus auctor tempus</a>
							</h5>

							<!-- Text -->
							<p class="p-lg">Donec sapien augue integer turpis urna cursus porta a mauris dolor...</p>

							<!-- Post Meta -->
							<div class="post-meta">
								<p class="p-md">12 Comments</p>
							</div>

						</div> <!-- END BLOG POST TEXT -->

					</div>
				</div> <!-- END  BLOG POST #2 -->


				<!-- BLOG POST #3 -->
				<div class="col">
					<div id="bp-1-3" class="blog-1-post mb-40 wow fadeInUp">

						<!-- BLOG POST IMAGE -->
						<div class="blog-post-img">
							<div class="hover-overlay">
								<img class="img-fluid" src="../images/blog/post-2-img.jpg" alt="blog-post-image" />
								<div class="item-overlay"></div>
							</div>
						</div>

						<!-- BLOG POST TEXT -->
						<div class="blog-post-txt">

							<!-- Post Tag -->
							<p class="p-md post-tag">Inspiration &ensp;|&ensp; May 18, 2021</p>

							<!-- Post Link -->
							<h5 class="h5-md">
								<a href="single-post.html">Donec sapien augue integer turpis at cursus porta mauris</a>
							</h5>

							<!-- Text -->
							<p class="p-lg">Donec sapien augue integer turpis urna cursus porta, mauris augue...</p>

							<!-- Post Meta -->
							<div class="post-meta">
								<p class="p-md">3 Comments</p>
							</div>

						</div> <!-- END BLOG POST TEXT -->

					</div>
				</div> <!-- END  BLOG POST #3 -->


			</div> <!-- END BLOG POSTS -->


		</div> <!-- End container -->
	</section> <!-- END BLOG-1 -->

 <!-- CALL TO ACTION-5
			============================================= -->
			<section id="cta-5" class="cta-section division ">
  	<div class="container">
  		<div class="rel bg-10 cta-5-wrapper">
  			<div class="row justify-content-center">


  				<!-- CALL TO ACTION TEXT -->
  				<div class="col-lg-8">
  					<div class="cta-5-txt white-color text-center">

  						<!-- Title -->
  						<h2 class="h2-xs">Build Your Business Online Without Borders</h2>

  						<!-- Text -->
  						<p class="p-md">We will help you bring your brand to life. Our digital marketing team is always ready to help.

  						</p>

  						<!-- Button -->
  						<a href="../contacts/" class="btn btn-skyblue tra-white-hover">Get in touch with us</a>

  					</div>
  				</div>
  			</div>
  		</div> <!-- End row -->
  	</div> <!-- End container -->
  </section> <!-- END CALL TO ACTION-5 -->


	<?php include('footer.php') ?>
</div> <!-- END PAGE CONTENT -->


	<?php include('footer-script.php') ?>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"url": "https://www.clickboxagency.com/reputation-management-in-digital-marketing/"  ,

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

			"name": "How to Choose the Rig ht Digital Marketing Agency in 2022?",

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

			"logo": "www.clickboxagency.com/images/logo-01.png",

			"contactPoint": {

				"@type": "ContactPoint",

				"telephone": "+91 7358644710",

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

</body>

</html>