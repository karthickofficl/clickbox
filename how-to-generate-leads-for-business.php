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
	<title>How To Generate Leads For Business?</title>

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

	<title>How To Generate Leads For Business?</title>

	<meta name=description content="The process of approaching new customers to your business and improving their interest through training, with the ultimate objective of turning them into customers, is known as lead generation. Check this article to learn more about how to generate leads for your business." />

	<meta name=keywords content="how to generate leads for business, how to generate leads in digital marketing, how to generate b2b leads on linkedin, generate leads for business, how to get leads for business, get leads for your business, b2b leads generation." />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/how-to-generate-leads-for-business/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/how-to-generate-leads-for-business/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/how-to-generate-leads-for-business/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="How To Generate Leads For Business?" />

	<meta property="og:description" content=" The process of approaching new customers to your business and improving their interest through training, with the ultimate objective of turning them into customers, is known as lead generation. Check this article to learn more about how to generate leads for your business.">
	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="How To Generate Leads For Business?" />

	<meta name="twitter:description" content=" The process of approaching new customers to your business and improving their interest through training, with the ultimate objective of turning them into customers, is known as lead generation. Check this article to learn more about how to generate leads for your business." />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<link rel="icon" href="https://clickboxagency.com/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="https://clickboxagency.com/images/favicon.png" type="image/x-icon">

	<?php include('header-style.php') ?>

	<!-- STYLE -->

	



	<!-- STYLE -->
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
							<img class="img-fluid" src="../images/blog/how-to-leads-for-business.jpg" alt="how-to-leads-for-business" />
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
									<h1 class="h2-md">How To Generate Leads For Business?</h1>


								</div> <!-- END SINGLE POST TITLE -->
								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">

									<!-- Text -->
									<p class="p-md blog para ">Creating high-quality leads was identified as one of the biggest challenges by 37% of marketers.
										Lead generation is defined as the activity of connecting customers to your business and also increasing traffic to your website. </p>

									<h5 class="h4-lg blog-title">
										<center>" Lead generation is a fairly core activity to marketing "<br> – Chris Brogan</center>
									</h5>
									<p class="p-md blog para ">
										Any individual who expresses interest in a company's goods or services in any way is considered a lead, whereas lead generation is the process of engaging new customers to your business and improving their interest through training, with the ultimate objective of turning them into customers, is known as
										<a href="https://salespanel.io/blog/marketing/lead-generation-in-digital-marketing/" style="color:#0000FF;"><u> lead generation</u></a>
										Job applications, live events, posters, videos, blog articles, and online material are a few ways to generate leads.
										This blog explains the technique of how to generate leads in digital marketing.

								</div>
								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">

									<h5 class="h4-lg blog-title">Why is lead generation necessary?</h5>

									<p class="p-md blog para ">The change from a stranger to a consumer is far more organic when a stranger approaches you by expressing a genuine interest in your service.
										A business strategy known as inbound marketing draws clients by producing useful information and experiences that are specifically given to their needs.
										All companies focus to generate leads for business in order to get more outcomes.
									</p>

									<!-- Text -->
									<p class="p-md blog para ">Lead generation refers to the second stage of the <a href="https://www.cognism.com/what-is-inbound-lead-generation#:~:text=Inbound%20lead%20generation%20is%20a,eventually%20results%20in%20a%20sale." style="color:#0000FF;"><u>inbound marketing process. </u></a> When you've garnered a following and are prepared to turn those viewers into leads, lead generation happens.


									</p>

									<div class="post-inner-img">
										<img class="img-fluid" src="../images/blog/b2b-lead-generation-tips.png" alt="exhibit your buyer" />
									</div>


									<h5 class="h4-lg blog-title">Types of leads in digital marketing are:</h5>


									<p class="p-md blog para "> There are four types of leads available in digital marketing, which includes:
									</p>



									<!-- Title -->
									<div class="single-post-txt">
										<h6 class="h4-lg blog-title">1. &ensp; Product Qualified Lead (PQL)</h6>
									</div>
									<!-- Text -->
									<p class="p-md blog para ">
										Prospects who have utilized your product and taken actions indicating interest in making a purchase are known as <a href="https://www.techtarget.com/searchcustomerexperience/definition/Product-Qualified-Lead-PQL#:~:text=A%20product%20qualified%20lead%20(PQL,marketing%20qualified%20lead%20(MQL)." style="color:#0000FF;"><u>product qualified leads. </u></a>
										This is where your sales staff comes in, PQLs are frequently used by businesses who provide a free trial of their product or a free, restricted version of their product with the opportunity to upgrade.
									</p>

									<!-- Title -->
									<div class="single-post-txt">
										<h6 class="h4-lg blog-title">2. &ensp; Service Qualified Leads (SQL) </h6>
									</div>
									<!-- Text -->
									<p class="p-md blog para ">
										Prospects who have made it known to your service staff that they are interested in becoming paying customers are referred to as service qualified leads. A customer who tells their customer service team that they want to increase their product subscription; at this point, the customer service person would up-level this consumer to the appropriate sales representative.

									</p>

									<!-- Title -->
									<div class="single-post-txt">
										<h6 class="h4-lg blog-title">3. &ensp; Marketing Qualified Lead (MQL) </h6>
									</div>
									<!-- Text -->
									<p class="p-md blog para ">
										Prospects that have interacted with your marketing team's efforts but aren't yet ready for a sales call are referred to as
										<a href="https://www.tableau.com/learn/articles/marketing-qualified-lead#:~:text=A%20Marketing%20Qualified%20Lead%20(MQL)%20is%20a%20lead%20who%20has,a%20customer%20than%20other%20leads." style="color:#0000FF;"><u>marketing qualified leads.</u></a> A contact who completes a landing page form for an offer is an illustration of an MQL.

									</p>

									<!-- Title -->
									<div class="single-post-txt">
										<h6 class="h4-lg blog-title">4. &ensp; Sales Qualified Lead (SQL) </h6>
									</div>
									<!-- Text -->
									<p class="p-md blog para ">
										Prospects who have expressed a clear interest in becoming paying customers are known as sales qualified leads. A contact who fills out a form to inquire about your goods or service is an example of a SQL.</p>

									<h5 class="h4-lg blog-title">Process for Generating Leads</h5>
									<p class="p-md blog para ">
										We described the lead generation process steps that we are aware of how lead generation comes under the inbound marketing technique.</p>

									<div class="single-post-txt">

										<ul class="digit-list">

											<li>
												<p class="p-md blog para ">- &ensp; The lead generation process includes attracting, converting, close and delighting.</p>
											</li>
											<li>
												<p class="p-md blog para ">- &ensp; A visitor first learns about your company through one of your marketing platforms, including your website, blog, posts, or social media profile.</p>
											</li>
											<li>
												<p class="p-md blog para ">- &ensp; A <a href="https://sproutsocial.com/glossary/call-to-action-cta/" style="color:#0000FF;"><u>call-to-action.</u></a> (CTA) is a message or a picture that reminds website visitors to take some form of action, then the visitor clicks on your CTA and moves to another process.</p>
											</li>
											<li>
												<p class="p-md blog para ">- &ensp; Here CTA directs the user to another landing page, i.e a web page designed with the need of collecting lead information in exchange for a proposal</p>
											</li>


										</ul>
									</div>

									<p class="p-md blog para ">For the lead generation process, CRM is essential.<a href="https://www.salesforce.com/in/crm/what-is-crm/#:~:text=Customer%20relationship%20management%20(CRM)%20is,streamline%20processes%2C%20and%20improve%20profitability." style="color:#0000FF;"><u>Customer relationship management</u></a> (CRM) is a tool, used to handle all interactions and relationships between your business and its clients. The objective of a CRM is to strengthen business ties. CRM systems help businesses in keeping in contact with current procedures, and clients and boost profitability. </p>
									<div class="post-inner-img">
										<img class="img-fluid" src="../images/blog/lead-generation-process.jpg" alt="hard-skills-digital-marketing" />
									</div>

									<!-- Title -->

									<h6 class="h4-lg blog-title">How To Get Leads For business? </h6>


									<!-- Text -->
									<p class="p-md blog para ">Depending on the platform you choose to use to gather leads, there are a variety of approaches, campaigns, and strategies that go under the cover of online lead generation. Here we discussed the best ways to gather leads once a site visitor has arrived.</p>
									<p class="p-md blog para ">Let's explore lead generation tactics for a few well-known sites.</p>

									<!-- Title -->

									<h6 class="h4-lg blog-title">LinkedIn Lead Generation</h6>

									<p class="p-md blog para ">
										In recent days, LinkedIn has grown rapidly in the advertising sector. When it comes to lead generation, LinkedIn developed Lead Gen Forms that make it simple to collect data, and also sales navigator provided by Linkedin is very helpful in generating leads from all over our world.
										How to generate b2b leads on linkedin is a challenging task for all businesses. Yes, LinkedIn is a perfect platform for connecting many professionals. These techniques include building a strong profile, figuring out your customers, connecting them, and making them your leads. A creative approach to <a href="https://clickboxagency.com/b2b-marketing-strategy/" style="color:#0000FF;"><u>b2b lead generation</u></a> is necessary for all business models.

										<!-- Title -->

									<h6 class="h4-lg blog-title">Twitter Lead Generation</h6>


									<!-- Text -->

									<p class="p-md blog para ">With Twitter Lead Gen Cards, you can generate leads within a tweet without ever leaving the platform. Users only need to click "Submit" to enter their lead information, which includes their name, email address, and Twitter username.</p>

									<h6 class="h4-lg blog-title">Facebook Lead Generation</h6>

									<p class="p-md blog para ">Since its beginning, Facebook has been used to generate leads. Initially, businesses could use information from their bio and outbound links in their articles to draw new visitors to their websites. However, there was a significant change in how companies used the network to get leads after
										<a href="https://www.clickboxagency.com/how-much-does-it-cost-for-facebook-ads/" style="color:#0000FF;"><u>Facebook Ads</u></a> was introduced in 2007 and its algorithm started to favor accounts that used sponsored advertising. For this reason, Facebook developed Lead Ads. Additionally, Facebook offers a tool that enables you to add a straightforward call-to-action button at the top of your Facebook Page, which may be used to link Facebook users to your website.
									</p>

									<h6 class="h4-lg blog-title">PPC Lead Generation</h6>
									<p class="p-md blog para "><a href="https://clickboxagency.com/google-ads-agency/" style="color:#0000FF;"><u>Pay-per-click,</u></a> or PPC, is an internet marketing strategy where companies are charged a fee each time one of their advertisements is clicked. With 4 billion searches every day, Google is an excellent location for any advertising campaign, especially lead generation. The success of your PPC campaign primarily depends on your budget, your target keywords, and a few other elements in addition to a smooth user flow. Also, you may share ads on other websites including Facebook, LinkedIn, Youtube, and more.</p>

									<h6 class="h4-lg blog-title">Instagram Lead Generation</h6>
									<p class="p-md blog para "> One of the faster and simpler ideas to generate leads and promote your content is to set up an Instagram advertising campaign. Following these, both small start-ups and big businesses can be beneficial. You may use Instagram advertisements to specifically target the group of people that fit your buyer profile the best.</p>

									<h6 class="h4-lg blog-title">Optimizing Search Engine</h6>
									<p class="p-md blog para "> In addition to being a top technical trend in marketing, <a href="https://clickboxagency.com/seo-company-in-india/" style="color:#0000FF;"><u>Search Engine Optimization (SEO)</u></a> is a successful method of generating leads. By offering material depending on what users are typing into their Google searches, SEO makes your website visible to potential clients.
										Ranking and optimizing content for search engines, particularly Google, are both SEO methods. This is accomplished utilizing a variety of tools, including keywords, tags, meta tags, landing pages, content, headings, and an improved user experience. You can reach consumers with this marketing strategy who are looking for information about your company online. It is a long term process, that requires consistent work.
									</p>
									<h6 class="h4-lg blog-title">Email Marketing</h6>
									<p class="p-md blog para ">These email statistics indicate that emails are the most reliable form of communication in the digital age. You can send a message right to someone's inbox while still respecting their privacy.
										All you require is a legitimate, working email address. With that, there is no upper limit on sending emails, which significantly reduces the need for third-party platforms for connecting. Additionally, a good email marketing program allows you to send emails quickly and easily.
										And also, some lead generating websites are designed to give users value in the form of important data and information. These websites have their own significance and benefits because you can engage visitors by utilizing the information on your website.
									</p>
									<p class="p-md blog para "> Other lead generation techniques include</p>
									<div class="single-post-txt">

										<ul class="digit-list">

											<li>
												<p class="p-md blog para ">- &ensp; Remain consistent in your communication and fulfill your commitment.</p>
											</li>
											<li>
												<p class="p-md blog para ">- &ensp; Utilize effective lead generation software.</p>
											</li>
											<li>
												<p class="p-md blog para ">- &ensp; Make coupons and offers for all phases of the purchase process.</p>
											</li>
											<li>
												<p class="p-md blog para ">- &ensp; Loop your website URL to other directory sites.</p>
											</li>
											<li>
												<p class="p-md blog para ">- &ensp; Make strategic use of social media. </p>
											</li>


										</ul>
									</div>
									<!--TEXT-->
									<p class="p-md blog para ">
										In conclusion, it is recorded that for lead generation, content marketing is used by 80% of B2B businesses, similarly, social networking is used to generate leads for business by 66% of marketers and 75% of companies employ marketing automation software. By analyzing the importance of lead generation, various steps are taken to improve it.
										Do enquire <a href="https://clickboxagency.com/" style="color:#0000FF;"><u>Clickbox agency,</u></a> if you want to learn to get leads for your business and become an expert in digital marketing.

									</p>
								</div> <!-- END BLOG POST TEXT -->

								<!--KEY WORDS SECTION-->
								<!-- SINGLE POST SHARE LINKS -->
								<div class="row post-share-links d-flex align-items-center">

									<!-- POST TAGS -->
									<div class="col-md-12 col-xl-12 post-tags-list">
										<div class='didide'>

											<span><a href="#"> how to generate leads in digital marketing</a></span>
											<span><a href="#">b2b leads generation</a></span>
											<span><a href="#">how to generate b2b leads on linkedin,</a></span>
											<span><a href="#">get leads for your business</a></span>
											<span><a href="#">how to generate leads for business</a></span>
											<span><a href="#">generate leads for business</a></span>
											<span><a href="#">how to get leads for business</a></span>

										</div>

									</div>



								</div>
								<!-- SINGLE POST SHARE LINKS END -->
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

			"url": "https://www.clickboxagency.com/how-to-generate-leads-for-business/",

			"potentialAction": {

				"@type": "SearchAction",

				"target": "https://www.clickboxagency.com/how-to-generate-leads-for-business/find?q={search_term_string}",

				"query-input": "required name=search_term_string"

			}

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"name": "How To Generate Leads For Business?",

			"alternateName": " how to generate leads for business, how to generate leads in digital marketing, how to generate b2b leads on linkedin, generate leads for business, how to get leads for business, get leads for your business, b2b leads generation.",

			"url": "https://www.clickboxagency.com/how-to-generate-leads-for-business/"

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "https://schema.org",

			"@type": "Organization",

			"name": "How To Generate Leads For Business?",

			"url": "https://www.clickboxagency.com/how-to-generate-leads-for-business/",

			"email": "info@clickboxagency.com",

			"foundingDate": "2022",

			"description": "The process of approaching new customers to your business and improving their interest through training, with the ultimate objective of turning them into customers, is known as lead generation. Check this article to learn more about how to generate leads for your business.",

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