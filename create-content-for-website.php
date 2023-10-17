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
	<title>How to Create Content for Websites?</title>
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

	<title>How to Create Content for Websites?</title>

	<meta name=description content="Content writing for websites is necessary as it provides the responses to your audience's inquiries and aids in the development of relationships, trust, improved conversions, and lead generation." />

	<meta name=keywords content="create content for website, content writing for website, developing website content, web content writing, best websites for content writing" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/create-content-for-website/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/create-content-for-website/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/create-content-for-website/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="How to Create Content for Websites?" />

	<meta property="og:description" content="Content writing for websites is necessary as it provides the responses to your audience's inquiries and aids in the development of relationships, trust, improved conversions, and lead generation.">
	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="How to Create Content for Websites?" />

	<meta name="twitter:description" content="Content writing for websites is necessary as it provides the responses to your audience's inquiries and aids in the development of relationships, trust, improved conversions, and lead generation." />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<link rel="icon" href="https://clickboxagency.com/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="https://clickboxagency.com/images/favicon.png" type="image/x-icon">

	<?php include('header-style.php') ?>
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
							<img class="img-fluid" src="../images/blog/how-to-create-content-for-websites.jpg" alt="digital-marketing-specialist" />
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
									<h1 class="h2-md">How to Create Content for Websites?</h1>


								</div> <!-- END SINGLE POST TITLE -->
								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">

									<!-- Text -->

									<p class="p-md blog-para"> The success of your business depends on the content of your website. The finest website content is one that educates visitors about the work that your business accomplishes. It informs readers about how to address their issues. Most importantly, it provides the solutions to the queries raised by your audience. Developing a website is not an easy task. Data analysis is very important to create content for websites. </p>
									<p class="p-md blog-para">In addition to helping you in search engine rankings, producing valuable and pertinent content for your website will increase traffic to it. You may produce quality leads and turn website visitors into customers with well-written and well-structured website content. </p>


									<p class="p-md blog-para">
										According to 92% of SEO experts, <a href="https://www.salford.ac.uk/salford-business-school/importance-content-marketing-your-digital-marketing-strategy#:~:text=Conclusion,part%20of%20any%20marketing%20strategy." style="color:#0000FF;"><u> creating content is a successful SEO strategy.</u></a>
										Web pages without a clear value proposition typically see users exiting them after 10 to 20 seconds. A website's ability to stand out from the competition and effectively convey its message to visitors depends on the quality of content.
								</div>



								<!-- BLOG POST TEXT -->
								<div class="single-post-txt txt-justify">

									<h5 class="h4-lg blog-title">What does a website's content consist of?</h5>

									<!-- Text -->
									<p class="p-md blog-para">The text, graphics, audio, video, and animations that website visitors see and hear collectively constitute the content of a website. The most crucial instrument you can employ to carry out your marketing strategy and inform your audience about your business is website content. </p>

									<h5 class="h4-lg blog-title">Types of website content:</h5>


									<!-- <div class="post-inner-img">-->
									<!--<img class="img-fluid" src="../images/blog/exbit-your-buyer.png" alt="exhibit your buyer" />		-->
									<!--  </div>-->


									<div class="single-post-txt">

										<ul class="digit-list">

											<li>
												<p class="p-md blog-para">- &ensp; Included in the category of audio and video material are music, podcasts, and instructional videos.</p>
											</li>
											<li>
												<p class="p-md blog-para">- &ensp; Pictures, fact sheets, infographics, branded pictures, and data visualizations all fall under the category of graphic content. Written and video material is typically complemented with graphic content, which has the potential to help your audience understand what your brand is all about.</p>
											</li>
											<li>
												<p class="p-md blog-para">- &ensp;All other content on your website should be informed by the written content. It can include your landing page's call to action or a succinct product description, as well as case studies, white papers, industry reports, ebooks, customer testimonials, and blogs.</p>
											</li>


										</ul>


										<!--ADD IMADE-->
										<div class="post-inner-img">
											<img class="img-fluid" src="../images/blog/how-to-content-writing-website.png" alt="showing stock levels" />
										</div>



										<h5 class="h4-lg blog-title">Importance of content for a website</h5>
										<p class="p-md blog-para">Your website's foundation and organizational framework should be built on high-quality content. For a website, content fulfills the following functions:</p>
										<div class="single-post-txt">

											<ul class="digit-list">

												<li>
													<p class="p-md blog-para">- &ensp; It aids in making sure that your website is filled with pertinent keywords.</p>
												</li>
												<li>
													<p class="p-md blog-para">- &ensp; When ranking your website, Google takes online content quality into account as well.</p>
												</li>
												<li>
													<p class="p-md blog-para">- &ensp; Additionally important to generating click-through rates is quality content.</p>
												</li>
												<li>
													<p class="p-md blog-para">- &ensp; You may draw in the correct audience to your website by using relatable and organized content.</p>
												</li>
												<li>
													<p class="p-md blog-para">- &ensp; To build brand loyalty, get to know your audience and encourage engagement. </p>
												</li>
												<li>
													<p class="p-md blog-para">- &ensp; It facilitates interaction with your audience and directs them to take the appropriate action. </p>
												</li>


											</ul>

										</div>
										<p class="p-md blog-para">Writing text that is distinctive needs effort, strong writing abilities, and foresight into the queries of readers. Here are some important tips you need to follow while writing your content.</p>


										<!--<h5 class="h4-lg blog-title">Guidelines to become a digital marketing expert:</h5>-->

										<!-- Text -->
										<!--<p class="p-md blog-para">Here are some important steps you should follow consistently in order to get expertise as a digital marketer. </p>-->

										<!--	<div class="post-inner-img">-->
										<!--<img class="img-fluid" src="../images/blog/hard-skills-digital-marketing.jpg" alt="hard-skills-digital-marketing" />		-->
										<!--  </div>-->

										<!-- Title -->
										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">1. &ensp; Identify Your Objectives</h6>
										</div>

										<!-- Text -->
										<p class="p-md blog-para">The best content supports the company's objectives. Understanding the objective of the copy you create is the most crucial thing you can do. Knowing your ultimate objective from the beginning will help you create the ideal piece of content and the optimal call-to-action. While writing any content, first frame the outline of the needs of a customer and describe the objective of your topic. </p>
										<p class="p-md blog-para">Start your content with some engaging data, or a query. After reading the opening, make sure readers are eager for content details.</p>



										<!-- Title -->
										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">2. &ensp; Determine Your Consumer needs and create valuable content</h6>
										</div>


										<p class="p-md blog-para"> Make sure you approach the <a href="https://digitalmarketinginstitute.com/resources/lessons/content-marketing_importance-of-content-marketing-strategy_jlx9" style="color:#0000FF;"><u> design of website content</u></a> from a customer's point of view. Visitors, unlike you, have no knowledge of how your website and company are run. Make sure you give your visitors enough information on pertinent subjects </p>
										<p class="p-md blog-para"> To the extent practical, you should refrain from utilizing vocabulary while doing this, and you should make it easy for them to read. Assist them in finding the answers as quickly as you can by taking into account any questions they may have.</p>


										<!-- Title -->
										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">3. &ensp; Analyze your opponents</h6>
										</div>

										<!-- Text -->
										<p class="p-md blog-para">Before writing content, analyze and research your competitor's website, and create some unique writing strategy. The website design is significant as well. The majority of readers just overview the content, so you should use lists, headings, bullet points, subheadings, and white space between paragraphs to make the material simple to skim.</p>


										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">4. &ensp; Resolve any spelling, grammar, or punctuation mistakes</h6>
										</div>

										<!--TEXT-->
										<p class="p-md blog-para">In 86% of highly effective businesses, content strategy is handled by a specific individual. Consider the fact that there are multiple ways for viewers to access web material. It may be via a social network post shared by someone else, links to other websites, an email marketing campaign, or the search engine results page. </p>
										<p class="p-md blog-para">Develop interesting content, without any grammatical errors and spelling mistakes. Customers are always likely to need perfect content with good punctuation. </p>





										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">5. &ensp; Use Call To Action phrases</h6>
										</div>

										<!--TEXT-->
										<p class="p-md blog-para">Over 90% of site visitors who read your headline also read the <a href="https://www.smashingmagazine.com/2009/10/call-to-action-buttons-examples-and-best-practices/" style="color:#0000FF;"><u> content in your CTA.</u></a> Sales funnels and CTAs go together by hand. The transitions between the phases of the buyer's journey are provided by the calls to action. They direct the user on what to do next and motivate them to act right away. You must compel this action with a strategically positioned CTA in the sales funnel, regardless of whether you want your user to visit your blog, give you their contact information, download an ebook, or subscribe to an email list. </p>

										<div class="post-inner-img">
											<img class="img-fluid" src="../images/blog/call-to-action-content.png" alt="hard-skills-digital-marketing" />
										</div>

										<!--TITLE-->
										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">6. &ensp; Include images</h6>
										</div>


										<!--TEXT-->
										<p class="p-md blog-para">According to research, articles with photos receive 94% more overall views than those without. We are drawn in by captivating images, and we use that concentration to better understand what the message is actually attempting to convey. Visuals help us comprehend the message and what lies behind it more effectively, more quickly, and more clearly than simply reading a string of words. Thus, images and videos are very important while framing thoughtful content. </p>

										<!--TITLE-->
										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">7. &ensp; ISearch engine optimization</h6>
										</div>
										<!--TEXT-->
										<p class="p-md blog-para"><a href="https://blog.hubspot.com/marketing/blogging-for-seo#:~:text=What%20is%20SEO%20writing%3F,headers%20for%20easy%20page%20crawling." style="color:#0000FF;"><u> SEO Content writing</u></a>
											involves developing content so that it starts to appear higher in search results for the relevant keyword phrases. The headline of the webpage or blog post should contain the keywords, which should subsequently be carefully used in other locations.When you write high-quality content and use SEO strategies, your blog entries will appear when users search for particular keywords. To determine which keywords are worthwhile attempting to rank for and which keywords people are searching for that are relevant to your sector, employ content marketing tools. It's said that writing SEO content increases traffic for your website.</p>

										<!--TITLE-->
										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">8. &ensp; Keep your website updated</h6>
										</div>
										<!--TEXT-->
										<p class="p-md blog-para">Regular website content updates are essential for the operation of any online-only business. Visitors will sense more trust in your website and are more likely to make a purchase when the content is kept up to date.</p>
										<p class="p-md blog-para">Additionally, updated data promotes domain authority. Briefly said, domain authority measures how authoritative your website is on a given topic. When attempting to match search queries with helpful and pertinent content, Google places a high value on this.</p>

										<!--TITLE-->
										<h5 class="h4-lg blog-title">Important Tools used for Content Writing</h5>

										<!--TEXT-->
										<p class="p-md blog-para">Here is a list of the best websites for content writing we use regularly. There are numerous paid and unpaid best websites for content writing available online. Few web content writing tools are listed below.</p>


										<!--TITLE-->
										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">1. &ensp; Grammarly </h6>
										</div>
										<!--TEXT-->
										<p class="p-md blog-para">It is the most <a href="https://support.grammarly.com/hc/en-us/articles/115000090792-What-is-Grammarly-#:~:text=Grammarly%20helps%20people%20communicate%20with,and%20delivery%20of%20their%20writing." style="color:#0000FF;"><u>precise grammar checker</u></a> in the world. This free proofreading tool examines the grammar, punctuation, and style of the text. It has tools that will aid users in developing their vocabulary, including a contextual spell checker, a plagiarism detector, and others. </p>

										<!--TITLE-->
										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">2. &ensp; Blog title Generator </h6>
										</div>
										<!--TEXT-->
										<p class="p-md blog-para">This tool gives you unlimited recommendations for titles, catchy topic headings, and original content. The Blog Title Generator will generate excellent headlines for you when you enter your keyword and description.</p>

										<!--TITLE-->
										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">3. &ensp; G Suite </h6>
										</div>
										<!--TEXT-->
										<p class="p-md blog-para">It used to be called Google Apps. All information is stored in Google Cloud, a collection of sophisticated apps that includes Gmail, Docs, Drive, and Calendar for file sharing and connecting with coworkers. To compose our plans and manuscripts, we frequently utilize Google Docs.</p>

										<!--TITLE-->
										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">4. &ensp; Evernote </h6>
										</div>
										<!--TEXT-->
										<p class="p-md blog-para">Research materials can be kept structured and available at all times with the help of note-taking applications like Evernote. Additionally, this application syncs with various devices so that your teams may view their notes whenever they're needed.</p>

										<!--TITLE-->
										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">5. &ensp; Semrush </h6>
										</div>
										<!--TEXT-->
										<p class="p-md blog-para">Finding unique keywords and research questions is made simple with the help of this <a href="https://www.semrush.com/kb/995-what-is-semrush#:~:text=Semrush%20is%20an%20all%2Din,%2C%20Marketing%20Insights%2C%20Campaign%20Management." style="color:#0000FF;"><u>semrush keyword tool.</u></a> Options can even be filtered based on region, search volume, and amount of competition. Although it costs money, there are free trials for individual accounts and a variety of pricing options.</p>

										<div class="post-inner-img">
											<img class="img-fluid" src="../images/blog/content-writing-websites-tools.jpg" alt="hard-skills-digital-marketing" />
										</div>

										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">6. &ensp; Canva</h6>
										</div>
										<!--TEXT-->
										<p class="p-md blog-para">By using <a href="https://www.techlearning.com/how-to/what-is-canva-and-how-does-it-work-for-education#:~:text=Canva%20is%20a%20powerful%20design,easy%2Dto%2Duse%20platform." style="color:#0000FF;"><u>canva,</u></a> users can rapidly create and share straightforward but powerful photos, charts, and animated graphics to accompany written content using both the free and commercial versions of Canva—no design background is necessary. To increase engagement and readability, visual content is essential.</p>

										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">7. &ensp; Google Scholar</h6>
										</div>
										<!--TEXT-->
										<p class="p-md blog-para">Google Scholar is a free research resource for academics and content creators. It offers a simple approach to look up literary works in general. You can search across several fields and sources from a single location, including articles, theory, catalogs, abstracts from academic journals, development societies, and universities, as well as content on countless other websites.</p>

										<div class="single-post-txt">
											<h6 class="h4-lg blog-title">8. &ensp; Duplichecker</h6>
										</div>
										<!--TEXT-->
										<p class="p-md blog-para">This free plagiarism detection tool enables the detection of identical or similar content categories across millions of pieces of text from already published sources. With this particular application, content creators can also get a plagiarism report as proof for whoever might need it.</p>

										<!--TITLE-->
										<h5 class="h4-lg blog-title">Final Words:</h5>

										<!--TEXT-->
										<p class="p-md blog-para">The best content makes the website look better. Hereby, data audit is very important to write the best content for a website. Are you confused about choosing the best content writer for your esteemed website? Then, visit <a href="https://www.clickboxagency.com/" style="color:#0000FF;"><u>CLICKBOX AGENCY</u></a> to assist you with predominant service. Join us <a href="https://www.clickboxagency.com/" style="color:#0000FF;"><u>https://www.clickboxagency.com</u></a></p>



									</div> <!-- END BLOG POST TEXT -->

									<!--KEY WORDS SECTION-->
									<!-- SINGLE POST SHARE LINKS -->
									<div class="row post-share-links d-flex align-items-center">

										<!-- POST TAGS -->
										<div class="col-md-12 col-xl-12 post-tags-list">
											<div class='didide'>

												<span><a href="#">create content for website</a></span>
												<span><a href="#">content writing for website</a></span>
												<span><a href="#">web content writing</a></span>
												<span><a href="#">developing website content</a></span>

												<span><a href="#"> best websites for content writing</a></span>

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

			"url": "https://www.clickboxagency.com/create-content-for-website/",

			"potentialAction": {

				"@type": "SearchAction",

				"target": "https://www.clickboxagency.com/create-content-for-website/find?q={search_term_string}",

				"query-input": "required name=search_term_string"

			}

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"name": "How to Create Content for Websites?",

			"alternateName": "create content for website, content writing for website, developing website content, web content writing, best websites for content writing",

			"url": "https://www.clickboxagency.com/create-content-for-website/"

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "https://schema.org",

			"@type": "Organization",

			"name": "How to Create Content for Websites?",

			"url": "https://www.clickboxagency.com/create-content-for-website/",

			"email": "info@clickboxagency.com",

			"foundingDate": "2022",

			"description": "Content writing for websites is necessary as it provides the responses to your audience's inquiries and aids in the development of relationships, trust, improved conversions, and lead generation.",

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