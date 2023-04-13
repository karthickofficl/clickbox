<?php

//  
if (isset($_POST['send'])) {

	// getting post values
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = 'Blog Details Feedback Form';
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

	<title>10 Essential Logo Design Principles You Need to Know | ClickBox</title>

	<meta name=description content="Need a logo that will stand out and make an impression? Check out our article, which outlines 10 outstanding logo designing principles." />

	<meta name=keywords content="logo design principles, principles of logo design, logo design rules, logo design elements, logo design company, logo designing principles, basic rules of logo designing, logo design" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com" />

	<meta name="copyright" content="https://www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/blog/logo-design-principles/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/blog/logo-design-principles/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/blog/logo-design-principles/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="10 Essential Logo Design Principles You Need to Know - 2023 Updated" />

	<meta property="og:description" content="Need a logo that will stand out and make an impression? Check out our article, which outlines 10 outstanding logo designing principles." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="10 Essential Logo Design Principles You Need to Know - 2023 Updated" />

	<meta name="twitter:description" content="Need a logo that will stand out and make an impression? Check out our article, which outlines 10 outstanding logo designing principles." />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />
	<!--FAVICON-->
	<link rel="icon" href="https://clickboxagency.com/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="https://clickboxagency.com/images/favicon.png" type="image/x-icon">

	<?php include($_SERVER['DOCUMENT_ROOT'] . '/header-style.php') ?>

</head>

<body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/header.php') ?>

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
							<img class="img-fluid" src="https://clickboxagency.com/images/blog/logo-design-principles-you-need-to-know.jpg" alt="blog-post-image" />
						</div>

					</div> <!-- END SINGLE POST TITLE -->
					<!-- BLOG POST TEXT -->
					<!-- <div class="single-post-txt"> -->

					<!-- Text -->
					<!-- BLOG POST TEXT -->
					<div class="single-post-txt">
						<h1 class="h4-lg txt-justify"> 10 Essential Logo Design Principles You Need to Know</h1>
						<p class="p-lg txt-justify">Creating a good logo design is not an easy task, although it may appear effortless and natural. A good logo should have the impression of being straightforward, effortless, and a choice that came naturally. In the same way that a swan can glide over the water or a dancer can raise their arm with ease, it takes a lot of mental and physical work to design a successful logo. In this piece, we will discuss 10 principles of logo design that should be kept in mind while developing a new brand identity, with some expert advice from a brand designer.</p>

						<h4 class="h4-lg txt-justify">What Characteristics Are There In An Effective Logo?</h4>
						<!-- Text -->
						<p class="p-lg txt-justify">One of the most important aspects of a company's brand identification is its logo,
							which may also play a key role in determining how successful the business is.
							A good logo needs to be one that is not complicated, not cloudy, and not difficult to tell apart.
							In addition to this, it should be unique and differentiate the brand from its competitors.
							A successful logo should not only be appropriate for the sector in which the company operates and the consumers it seeks to attract,
							but it should also convey the core principles of logo design and character of the business.
							It's important for a strong logo to be scalable and flexible,
							which means it should look beautiful at any size and function properly in a variety of contexts.
							It must have an enduring quality and be built to withstand the test of time without appearing outmoded.
							Last but not least, a successful logo should be easy for customers to remember.
							It should help customers remember the brand and leave a lasting impression on them.</p>

						<!-- Title -->
						<h4 class="h4-lg">How To Start Designing A Logo?</h4>

						<!-- Text -->
						<p class="p-lg txt-justify">Starting the process of basic rules of logo designing requires a clear understanding of the brand's identity, values, and target audience. Before starting the logo design,
							it is crucial to research and analyze the market, competition, and current design trends.
							The logo designer should then come up with Once a concept is chosen, it should be perfected by paying attention to every detail,
							from the font to the color palette.ideas and make a list of possible design elements,
							such as typography, colors, symbols, or abstract shapes, that best represent the brand's personality and values.
						</p>
						<p>
							Sketching and writing out different ideas for a logo can help you improve it and choose the best one.
							Testing the logo's scalability, adaptability, and legibility in different mediums is also crucial to ensuring its effectiveness.
							Ultimately, starting a good logo requires careful planning, research,
							and attention to detail to create a logo that reflects the brand's identity and values and resonates with its target audience.
						</p>
						<!-- Text -->

						<!-- Title -->
						<h4 class="h4-lg">The 10 Key Principles Of <a href="https://clickboxagency.com/logo-design/coimbatore/" style="color:#0000FF;">Logo Design</a> To Know About Include:</h4>
						<ol>
							<li>Make it Simple</li>
							<li>Design with the audience in mind </li>
							<li>Create a memorable logo</li>
							<li>Design a timeless logo</li>
							<li>Ensure the logo is versatile and scalable</li>
							<li>Use a high-quality typeface</li>
							<li>Be intentional with color choices</li>
							<li>Ensure the logo looks good in black and white</li>
							<li>Maintain balance in the design</li>
							<li>Keep the logo consistent with the brand identity</li>
						</ol>
						<!-- Text -->

						<!-- <hr>
					</hr> -->

						<h4 class="h4-lg txt-justify">10 Logo Design Principles To Follow: </h4>

						<h4 class="h4-lg">1 . Make it simple</h4>
						<p>When it comes to creating a logo, simplicity should be a top priority. These are basic rules of logo designing. A simple logo design element is easier for customers to remember, recognize, and understand. A simple logo typically involves using minimal colors, clean lines, and straightforward typography. It's important to keep in mind that a logo should communicate the brand's message in a clear and concise manner. By using too many elements, the message can become convoluted and difficult to understand. A simple logo is also easy to put on different things, like business cards, websites, and social media accounts. Customers are more likely to remember and like a simple, easy-to-understand logo. In conclusion, if you want your brand to be clear and easy to remember, you need a simple logo design.</p>

						<h4 class="h4-lg">2. Design With The Audience In Mind </h4>

						<p class="p-lg txt-justify">Designing with the audience in mind is a critical aspect of creating an effective logo. A logo should represent the brand's values and appeal to its target audience. For example, a children's toy company should have a logo that appeals to kids and their parents. The logo should be colorful, playful, and fun, with typography that is easy to read for both adults and children. In the same way, a law firm's logo should show trust, professionalism, and authority, and the font should be more traditional and formal.It is basic rules of logo designing for the principles.</p>
						<!-- Text -->
						<p class="p-lg txt-justify">Understanding the target audience's preferences, interests, and values is essential in creating a logo that resonates with them. A logo that doesn't connect with its intended audience may fail to communicate the brand's message effectively. To make a logo that will appeal to the target audience, it's important to do research and understand their demographics, interests, and preferences. By making a logo with the audience in mind, it will not only connect with them, but also show what the brand stands for and what it stands for.</p>

						<h4 class="h4-lg">3. Create A Memorable Logo </h4>

						<p class="p-lg txt-justify">Creating a memorable logo is crucial for establishing a strong brand identity. One example of a memorable logo is the <a href="https://www.nike.com/in/" style="color:#0000FF;">Nike</a> "swoosh" logo. The Nike logo is instantly recognizable due to its unique and simple design. The "swoosh" design is sleek, elegant, and symbolizes movement, representing the brand's mission to inspire and motivate people to move and push their limits. </p>

						<p class="p-lg txt-justify">The typography is also simple, using a bold font that is easy to read and memorable. The color choice of black and white is classic and timeless, which has allowed the logo to remain relevant and memorable for over 40 years. Nike has used this logo on all of their products and in all of their ads for so long that it has become one of the most well-known logos in the world. By focusing on creating a unique and simple design that represents the brand's values, using memorable typography and color choices, and consistently using it across all platforms, Nike has succeeded in creating a memorable logo that has stood the test of time.</p>



						<h4 class="h4-lg">4. Design A Timeless Logo</h4>

						<p class="p-lg txt-justify">To develop a logo that is timeless is to create a design that, even after years or decades of usage, does not appear to be out of date or irrelevant. A timeless logo, as opposed to being trendy or fashionable, should have the look and feel of something that has stood the test of time. It needs to be able to successfully represent the brand for a good number of years without the need for substantial redesigns or modifications throughout that time. The key to developing the principles of logo design that can stand the test of time is to keep it as simple as possible and to avoid using any logo design features that might rapidly become out of date. </p>
						<p class="p-lg txt-justify">The creation of a timeless logo may be aided by the application of timeless font, clean lines, and basic forms. Building brand awareness, developing a long-lasting brand identity, and avoiding the expenditures of periodic redesigns may all be significantly aided by having a logo that has stood the test of time. Throughout the process of designing a logo, it is necessary as a result to take into consideration how timeless the mark will be.</p>


						<h4 class="h4-lg">5. Ensure The Logo Is Versatile And Scalable </h4>

						<P class="p-lg txt-justify">It is important logo design principles to make sure that the <a href="https://clickboxagency.com/blog/logo-design-process/" style="color:#0000FF;">logo</a> is both versatile and scalable in order to guarantee that it may be utilized across a wide range of mediums and sizes without suffering a reduction in its visual impact or overall quality. A logo is said to be flexible when it is made in such a manner that it may be used on a variety of backgrounds, in a variety of colors, and in a variety of sizes while still keeping its legibility and its aesthetic appeal. Reducing the size of a scalable logo does not cause it to become blurry or pixelated when the image is stretched. When a logo is not scalable, the visual effect it has may be diminished as the logo is extended or shrunk. </P>
						<p class="p-lg txt-justify">While developing a logo, it is essential to take into consideration the many places on which it will appear, such as on a website, on social media platforms, on business cards, and on billboards. It is essential for a company to be able to project the same image across all mediums, from a compact business card to a massive billboard display, which is why it is important to have logo designing principles that are both flexible and scalable. While developing a logo, one of the most important rules to adhere to is to make sure the logo can be used in a variety of contexts and is adaptable to different sizes.</p>


						<h4 class="h4-lg">6. Use A High-Quality Typeface </h4>

						<p class="p-lg txt-justify">A logo is an essential aspect of any business, and it represents the brand's identity. A high-quality typeface can play a crucial role in making a logo stand out and communicate the brand message effectively. The use of a high-quality typeface in a logo design ensures that the logo is legible, memorable, and recognizable.</p>
						<p class="p-lg txt-justify"><strong>The First logo design principles</strong>of using a high-quality <a href="https://en.wikipedia.org/wiki/Typeface#:~:text=A%20typeface%20(or%20font%20family,the%20typeface%20is%20a%20font." style="color:#0000FF;">typeface</a> in a logo is legibility. The typeface used in the logo should be easy to read, even from a distance or when viewed in smaller sizes. It is important to choose a typeface that is legible, clear, and easy to understand. A typeface that is difficult to read can lead to confusion and ultimately affect the brand's image negatively.</p>

						<p class="p-lg txt-justify"><strong>The second logo design principle </strong>is uniqueness. A high-quality typeface should be unique and not readily available in the market. It should not be a commonly used font that is recognizable by everyone. A unique typeface will help the brand stand out from its competitors and make it easily recognizable by its target audience.</p>

						<p class="p-lg txt-justify"><strong>The Third principle of logo design </strong>is simplicity. The typeface used in the logo should be simple, clean, and free from unnecessary embellishments. The simpler the typeface, the more memorable it will be. A cluttered typeface can make the logo confusing and difficult to read, ultimately leading to a negative impact on the brand.</p>

						<p class="p-lg txt-justify"><strong>The Fourth logo designing principle</strong>is scalability. The typeface used in the logo should be scalable, meaning it should be easily adjustable to various sizes without losing its legibility or quality. This is particularly important for logos that will be used on various mediums such as business cards, billboards, or websites.</p>


						<p class="p-lg txt-justify">In conclusion, using a high-quality typeface in a logo design is essential to ensure the logo communicates the brand message effectively. Legibility, uniqueness, simplicity, and scalability are the key principles to consider when selecting a typeface for a logo. By adhering to these principles of logo design, the logo can stand out, be memorable, and create a positive impact on the brand's image.</p>
						<h4 class="h4-lg">7. Be Intentional With Color Choices</h4>

						<p class="p-lg txt-justify">The use of color in branding is a powerful tool that can have a significant impact on how a brand is perceived by consumers. Being intentional with color choices is crucial for creating a successful brand identity and marketing strategy. Choosing the right colors can evoke emotions and feelings, influence purchasing decisions, and help with brand recognition.</p>
						<p class="p-lg txt-justify">One of the key reasons logo design rules to be intentional with color choices in <a href="https://clickboxagency.com/blog/logo-design-process/" style="color:#0000FF;">branding</a> is to achieve brand recognition. Consistent use of colors across all brand materials such as logos, websites, and advertisements can help consumers recognize the brand more easily. It is essential to choose colors that are unique to the brand and stand out from competitors.The emotional appeal of colors is another crucial aspect to consider when choosing colors for branding. </p>
						<p class="p-lg txt-justify">Different colors can evoke different emotions, and it is important to choose colors that align with the brand's personality and values. For example, blue is often associated with trust and professionalism, while yellow is associated with optimism and creativity. The cultural significance of colors is another important factor to consider when choosing colors for branding. Different cultures can interpret colors differently, and it is important to choose colors that do not have any negative connotations in the target market. For example, in Western cultures, white is often associated with purity and cleanliness, while in some Eastern cultures, it is associated with mourning and death.</p>
						<p class="p-lg txt-justify">In conclusion, being intentional with color choices in branding is essential for logo design elements creating a successful brand identity and marketing strategy. Consistency, emotional appeal, and cultural significance are important factors to consider when choosing colors for branding. By selecting the right colors, a brand can evoke the desired emotions and feelings, improve brand recognition, and ultimately drive business success.</p>

						<h4 class="h4-lg">8. Ensure The Logo Looks Good In Black And White </h4>
						<p class="p-lg txt-justify">The effectiveness of a <a href="https://clickboxagency.com/blog/online-free-logo-makers/" style="color:#0000FF;">logo design</a> is not limited to its use in color only. In many cases, a logo must also be displayed in black and white or grayscale for various purposes, such as printing on a black and white document or use in a medium that does not support color. Therefore, it is essential to ensure that a logo looks good in black and white or grayscale. This consideration is critical in the logo design principles process and ensures the versatility of the logo across various mediums.</p>

						<p class="p-lg txt-justify">One of the basic rules of logo designing reasons why it is essential to ensure that a logo looks good in black and white is its legibility. A logo that is designed to look good in black and white or grayscale is typically more legible than a logo that relies solely on color. A logo that is easy to read and recognize in monochrome helps with brand recognition and ensures that the logo can be seen clearly in various media types.Another reason why ensuring that a logo looks good in black and white is crucial is that it allows for more versatile use of the logo. </p>
						<p class="p-lg txt-justify">A logo that can be used in both color and monochrome allows for greater flexibility in its use, whether it is being printed on a black and white document or displayed on a promotional item that does not support color.Additionally, a logo that looks good in black and white or grayscale also ensures that the logo is more accessible. Not all individuals have color vision, and some may struggle to differentiate between different colors. Having a logo that can be recognized and appreciated in monochrome makes it more accessible to all individuals, regardless of color vision.</p>
						<p class="p-lg txt-justify">In conclusion, ensuring that a logo looks good in black and white or grayscale is an essential aspect of logo design. It provides versatility in its use, allows for greater accessibility, and ensures that the logo is easy to read and recognize. A logo that looks good in both color and monochrome ensures that it can be used effectively across various mediums, and that its impact is not limited to color only.</p>


						<h4 class="h4-lg">9. Maintain Balance In The Design</h4>
						<p class="p-lg txt-justify">It is essential to ensure that a design has balance throughout in order to make it seem both aesthetically appealing and professional. A balanced composition may be accomplished by utilizing a variety of components such as color, shape, size, and location. When it comes to design, there are two different kinds of balance: symmetrical and asymmetrical. When items are mirrored on each side of a central axis, it creates a sense of symmetrical balance, which in turn creates a sense of stability and order. </p>
						<p class="p-lg txt-justify">On the other hand, asymmetrical balance is achieved when pieces are not similar on both sides but nevertheless manage to do so through contrast and proportion. This type of balance may be seen in nature. A logo design that is not only cohesive but also well-balanced has the ability to evoke feelings of harmony and successfully communicate the meaning or concept that lies behind the design. In order for designers to produce designs that are both aesthetically pleasing and functional, it is imperative that they adhere to the notion of preserving balance within the design.</p>
						<!-- Title -->
						<h4 class="h4-lg">10.Keep The Logo Consistent With The Brand Identity</h4>
						<p class="p-lg txt-justify">It is crucial logo design rules to keep the logo consistent with the identity of the business in order to guarantee that it correctly represents the brand as well as the values it stands for. Because the logo is a graphical representation of the brand, it is important that it be created such that it conveys the personality, mission, and vision of the business. A consistent brand helps people recognize and remember the brand, which in turn fosters their devotion to the company and generates trust between the business and its clients. </p>
						<p class="p-lg txt-justify">It is essential to take into account the color scheme, font, and general aesthetic of a company while developing a logo for that company. These components must be maintained consistently across all of the branding products, including as commercials, websites, and business cards. Customers might be led astray and the message sent by the brand can suffer when there is inconsistency in the branding. Thus, it is essential to maintain the logo's consistency with the brand identity in order to develop a powerful and easily identifiable brand.</p>
						<!-- Text -->

						<h4 class="h4-lg">Apply These Logo Principles To Get An Outstanding Result</h4>

						<p class="p-lg txt-justify">Your brand's style and personality are reflected in your logo. It places a significant amount of responsibility on your shoulders, and as a result, you have a significant amount of obligation to ensure that it is created with as much consideration as is humanly possible.</p>
						<p class="p-lg txt-justify">Have a look at the site I linked to above if you want to know how you may use these concepts in the creation of your own unique logo. In this article, we will go through how to compose the brief for your logo design and how to analyze your design drafts utilizing the essential concepts that are associated with logo design. You will be able to recognize what works and identify any problems in the design of your logo if you use these ideas as a guide and follow them.</p>
						<p class="p-lg txt-justify">It doesn't matter if this is your first or one hundredth attempt at developing a logo; whether you do it yourself or collaborate with a graphic designer, you should always keep the principles of logo design in mind as you work. But with the help of Clickbox's expert logo design service, you can get the assistance you need to find the best logo design to meet your specific needs and budget. Whether you are an experienced designer or just starting out, Clickbox <a href="https://clickboxagency.com/logo-design/coimbatore/" style="color:#0000FF;">logo design company </a> can help you create a memorable and recognizable logo that effectively represents your brand. So, if you have any doubts or questions <a href="https://clickboxagency.com/logo-design-packages/" style="color:#0000FF;">about logo design</a> , don't hesitate to reach out to Clickbox for the expert guidance you need.</p>
					</div> <!-- END BLOG POST TEXT -->


					<!-- SINGLE POST SHARE LINKS -->
					<div class="row post-share-links d-flex align-items-center">

						<!-- POST TAGS -->
						<div class="col-md-9 col-xl-9 post-tags-list">
							<div class='didide '>

								<span><a href="#">logo design principles</a></span>
								<span><a href="#">principles of logo design</a></span>
								<span><a href="#">logo design rules</a></span>
								<span><a href="#">logo design elements</a></span>
								<span><a href="#">logo design company</a></span>
								<span><a href="#">logo designing principles</a></span>
								<span><a href="#">basic rules of logo designing</a></span>
								<span><a href="#">logo design</a></span>
							</div>

						</div>

						<!-- POST SHARE ICONS -->
						<div class="col-md-3 col-xl-3 post-share-list text-end">
							<ul class="share-social-icons ico-25 text-center clearfix">
								<li><a href="#" class="share-ico"><span class="flaticon-twitter"></span></a></li>
								<li><a href="#" class="share-ico"><span class="flaticon-facebook"></span></a></li>
								<li><a href="#" class="share-ico"><span class="flaticon-bookmark"></span></a></li>
							</ul>
						</div>

					</div> <!-- SINGLE POST SHARE LINKS END -->
				</div>
			</div>
		</div> <!-- END SINGLE POST CONTENT -->


		</div> <!-- End container -->
	</section> <!-- END SINGLE POST -->

	<!-- POST COMMENTS
			============================================= -->
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

							<!-- Text -->
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

	<!-- BLOG-1
			============================================= -->
	<section id="blog-1" class="bg-whitesmoke-gradient  blog-section division">
		<div class="container">
			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mt-20">
						<h2 class="h2-md">Keep Reading...</h2>
					</div>
				</div>
			</div>
			<!-- INCLUDE BLOGS -->

			<?php include($_SERVER['DOCUMENT_ROOT'] . '/newblog.php') ?>

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
							<a href="https://clickboxagency.com/contacts/" class="btn btn-skyblue yellow-hover">Get in touch with us</a>

						</div>
					</div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CALL TO ACTION-5 -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php') ?>
	</div> <!-- END PAGE CONTENT -->

	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer-script.php') ?>


	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"url": "https://www.clickboxagency.com/blog/logo-design-principles/",

			"potentialAction": {

				"@type": "SearchAction",

				"target": "https://www.clickboxagency.com/blog/logo-design-principles/find?q={search_term_string}",

				"query-input": "required name=search_term_string"

			}

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"name": "10 Essential Logo Design Principles You Need to Know | ClickBox",

			"alternateName": "logo design principles, principles of logo design, logo design rules, logo design elements, logo design company, logo designing principles, basic rules of logo designing, logo design",

			"url": "https://www.clickboxagency.com/blog/logo-design-principles/"

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "https://schema.org",

			"@type": "Organization",

			"name": "10 Essential Logo Design Principles You Need to Know | ClickBox",

			"url": "https://www.clickboxagency.com/blog/logo-design-principles/",

			"email": "info@clickboxagency.com",

			"foundingDate": "2022",

			"description": "Need a logo that will stand out and make an impression? Check out our article, which outlines 10 outstanding logo designing principles.",

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

</body>

</html>