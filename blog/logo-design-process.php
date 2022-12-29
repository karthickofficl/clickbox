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

	<title>Logo Design Process From Scratch to End (2023 New Updated)</title>

	<meta name=description content="The logo design process can be a complicated process. We have recently added new features and updates to our logo design process so you can get the best custom logo for your business. more..." />

	<meta name=keywords content="logo design process, how to create logo design process, how to create logo, how to make a logo, how to create a company logo, how to design a logo, tip for logo design process" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="www.clickboxagency.com" />

	<meta name="copyright" content="www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://clickboxagency.com/blog/logo-design-process/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://clickboxagency.com/blog/logo-design-process/" />

	<meta property="og:site_name" content="https://clickboxagency.com/blog/logo-design-process/" />

	<meta property="og:image" content="www.clickboxagency.com/images/logo-01.png" />

	<meta property="og:title" content="Logo Design Process From Scratch to End (2023 New Updated)" />

	<meta property="og:description" content="The logo design process can be a complicated process. We have recently added new features and updates to our logo design process so you can get the best custom logo for your business. more...">
	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Logo Design Process From Scratch to End (2023 New Updated)" />

	<meta name="twitter:description" content=" The logo design process can be a complicated process. We have recently added new features and updates to our logo design process so you can get the best custom logo for your business. more..." />

	<meta name="twitter:image" content="www.clickboxagency.com/images/logo-01.png" />

	<link rel="icon" href="../images/favicon1.png" type="image/x-icon">
	<link rel="shortcut icon" href="../images/favicon1.png" type="image/x-icon">

	<?php include($_SERVER['DOCUMENT_ROOT'] . '/clickboxdemo/header-style.php') ?>

	<!-- STYLE -->

	<style>
		.post-tags-list span {
			margin: 1% 0%;
			display: inline-block;

		}

		.post-share-links {
			padding: 0 0% !important;
		}

		@media (max-width: 425px) {

			.didide {
				flex-wrap: nowrap;
				display: flex;
				flex-direction: column;
			}

			.post-tags-list span a {
				margin: 4px;
				display: block;
			}

		}
	</style>
</head>

<body>
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/clickboxdemo/header.php') ?>

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
							<img class="img-fluid" src="https://clickboxagency.com/images/blog/logo-design-process.jpg" alt="how-to-leads-for-business" />
						</div>


						<!-- SINGLE POST TITLE -->
						<div class="single-post-title">

							<!-- TITLE -->
							<h1 class="h2-md "><u>Logo Design Process From Scratch to End- 2023 (New Update)</u></h1>

						</div> <!-- END SINGLE POST TITLE -->

						<!-- BLOG POST TEXT -->
						<div class="single-post-txt">
							<!-- Title -->
							<!-- <h4 class="h4-lg">What is an SEO Friendly website?</h4> -->

							<!-- Text -->
							<p class="p-lg txt-justify">How to create a logo design process Logo design is the first step in brand creation and a symbol of corporate professionalism. Most business people know that companies can't succeed without logos. Nobody understands what a logo is or how it works.</p>

							<p class="p-lg txt-justify">
								A logo is more than a company's online and in-person identity. Customers benefit from the mark's quality, and business partners benefit from its trustworthiness. According to market logic, a company's high-quality logo extends to its products and services. The logo makes the company unique and memorable. The logo is the brand's visual identity. The company's assets are protected by its logo and business design. Effective logos are well-designed. It's important. A logo that breaks marketing and design rules is worthless.</p>
						</div>


						<!-- BLOG POST TEXT -->
						<div class="single-post-txt">
							<!-- Title -->
							<h4 class="h4-lg">Three Rules for Creating a Logo:</h4>
							<p class="p-lg">1. &ensp; Appropriate</p>
							<p class="p-lg">2. &ensp; Distinctive & Memorable</p>
							<p class="p-lg">3. &ensp; Simple</p>

							<!-- <h5 class="h4-lg">Why is lead generation necessary?</h5> -->
							<!-- Title -->
							<div class="single-post-txt">
								<h5 class="h4-lg">1. &ensp; Appropriate</h5>
							</div>
							<!-- Text -->
							<p class="p-lg txt-justify">
								The feel of a logo should be acceptable. It's like a personality; it's a core idea and way of thinking. If it is for sports, it should be strong and dynamic; if it is for fashion, it should be beautiful.
							</p>
							<p class="p-lg txt-justify">For a logo to be good, it needs to be good for both the customer and the business it represents. If you're creating a logo for a fashion company, for instance, it should be smart. If you're working on a logo for a company, you should make it bold and dynamic.</p>

							<!-- Title -->
							<div class="single-post-txt">
								<h5 class="h4-lg">2. &ensp; Distinctive & Memorable</h5>
							</div>
							<!-- Text -->
							<p class="p-lg txt-justify">It needs to be unique enough for us to remember it. You should be able to explain it to someone or sketch it on a sheet of paper after seeing it once or sometimes.</p>
							<p class="p-lg txt-justify">To be memorable, a design has to be both simple and identifiable. The challenge is to keep it basic while still being unique enough to be remembered, which becomes more difficult as the shape becomes more complicated. So, without further ado, let's get into the discovery portion of my logo design process.</p>


							<!-- Title -->
							<div class="single-post-txt">
								<h5 class="h4-lg">3. &ensp; Simple</h5>
							</div>
							<!-- Text -->
							<p class="p-lg txt-justify">The logo has to be reproduced at any quality. Logos are common online now, appearing everywhere from the top of a page as a little favorites icon to the bottom of an email as an avatar.</p>
							<p class="p-lg txt-justify">A simple logo is one that provides a single message and has a main outcome. A logo's simplicity improves its visibility and flexibility across a wide range of formats and sizes, from tiny print like a company logo to large format like a poster.</p>

							<!-- Title -->

							<h4 class="h4-lg">Steps to a Creative Logo Design:</h4>

							<!-- Text -->
							<p class="p-lg txt-justify">Helpful hints for the logo design process: Most <a href="https://clickboxagency.com/logo-design/coimbatore/" style="color:#0000FF;"><u> professional logo designers </u></a> follow a procedure. Not following the correct method might cause complications. If you don't have a correct design process, you might lose credibility as a logo designer, overlook tiny nuances, have a dissatisfied customer, be called an amateur, and more.</p>
							<p class="p-lg txt-justify">Discover the innovative logo creation process.</p>
							<div class="single-post-txt">
								<ul class="digit-list">
									<li>
										<p class="p-lg">● Check out the brand</p>
									</li>
									<li>
										<p class="p-lg">● Creative Brief</p>
									</li>
									<li>
										<p class="p-lg">● Research Process</p>
									</li>
									<li>
										<p class="p-lg">● New Ideas</p>
									</li>
									<li>
										<p class="p-lg">● Start Sketching</p>
									</li>
									<li>
										<p class="p-lg">● Start Design </p>
									</li>
									<li>
										<p class="p-lg">● Presentation </p>
									</li>
									<li>
										<p class="p-lg">● Final Output</p>
									</li>

								</ul>
							</div>

							<!-- Title -->
							<div class="single-post-txt">
								<h5 class="h4-lg">1. &ensp; Check out the brand</h5>
							</div>
							<p class="p-lg txt-justify">The first step in making a logo is figuring out what the brand stands for and what the business's goals are. This step is called "discovering the client." There is no one-size-fits-all solution for logo design. A logo is only as good as the way it represents a business, so it won't work unless you know what kind of impression the brand wants to make.</p>
							<div class="post-inner-img">
								<img class="img-fluid" src="https://clickboxagency.com/images/blog/logo-design-process01.png" alt="exhibit your buyer" />
							</div>
							<p class="p-lg txt-justify">The design brief should tell you a lot of what you need to know. But some clients can't say what they need or don't know what they want. The designer must determine their needs. Even if the brief is very detailed and written very well, <a href="https://clickboxagency.com/logo-design/coimbatore/" style="color:#0000FF;"><u>creative logo designers</u></a> should dig deeper to find out how the client really feels about their business and the great work they do. They should use words that go beyond the official corporate statement to find out what the client really thinks. Find out as much as you can about the company and the people who collaborate there. This will help your design in the long run.</p>

							<h6 class="h4-lg">Here are some general questions to start your customer research</h6>
							<div class="single-post-txt">
								<ul class="digit-list">
									<li>
										<p class="p-lg txt-justify">● Why do you feel the need to have a logo designed? Which challenge are you hoping to solve?</p>
									</li>
									<li>
										<p class="p-lg txt-justify">● What characteristics would your company have if it were a person, and how would you characterize it?</p>
									</li>
									<li>
										<p class="p-lg txt-justify">● Who speaks for your brand and how?</p>
									</li>
									<li>
										<p class="p-lg txt-justify">● Which of your brand's core ideas and values are most essential to it?</p>
									</li>
									<li>
										<p class="p-lg txt-justify">● What is your unique value proposition? What services or products does your organization provide that your rivals do not?</p>
									</li>
									<li>
										<p class="p-lg txt-justify">● What do you want your clients to say about your company when they talk to their colleagues about it?</p>
									</li>
								</ul>
							</div>

							<div class="single-post-txt">
								<h5 class="h4-lg">2. &ensp; Creative Brief</h5>
							</div>

							<ul class="digit-list">
								<li>
									<p class="p-lg">● Read the brief.</p>
								</li>
								<li>
									<p class="p-lg txt-justify">● Know the client's company, industry, and products/services.</p>
								</li>
								<li>
									<p class="p-lg txt-justify">● Ask the customer about his/her services and branding preferences.</p>
								</li>
							</ul>


							<p class="p-lg txt-justify">The material and time needed to fulfill a design brief depend on the customer. Some customers know precisely what logo they want and offer you all the details without asking. When your customer is a designer or has worked with other designers extensively, this may happen. Some customers merely require a logo and leave the rest to you.</p>
							<div class="post-inner-img">
								<img class="img-fluid" src="https://clickboxagency.com/images/blog/logo-design-process02.png" alt="exhibit your buyer" />
							</div>

							<p class="p-lg txt-justify">When working with non-designers, like young businesses, this is common. As a professional logo designer, you need to know about the project before you can make the right logo. </p>
							<div class="single-post-txt">
								<h5 class="h4-lg">3. &ensp; Research Process</h5>
							</div>

							<ul class="digit-list">
								<li>
									<p class="p-lg txt-justify">● Study industry-specific colors, styles, and design themes.</p>
								</li>
								<li>
									<p class="p-lg txt-justify">● Do research on the client's alternatives. Don't allow lack of research to sink your logo design project.</p>
								</li>
								<li>
									<p class="p-lg txt-justify">● Learn the client's symbol of happiness, images, and design themes for the logo.</p>
								</li>
								<li>
									<p class="p-lg txt-justify">● Research the project and ask questions to prove to the customer you're interested.</p>
								</li>
							</ul>

							<div class="post-inner-img">
								<img class="img-fluid" src="https://clickboxagency.com/images/blog/logo-design-process03.png" alt="exhibit your buyer" />
							</div>
							<p class="p-lg txt-justify">Because we were handed the logo brief, we proceeded to do some investigating. Each facet of the logo I'm currently designing is being properly researched. The process of creating a logo begins with extensive study. Finding information about a logo might be easy or complicated. Once you've mastered logo design, it's up to you to follow research protocols.</p>
							<p class="p-lg txt-justify">This step aims to help you learn more about the client's sector so you can provide effective solutions. Now you must know what works, what's suitable, and how to separate the firm from its competition. This insight may be gained from a customer's standpoint. Creating a logo means putting yourself in the shoes of the customer and knowing the industry and the competition.</p>
							<div class="single-post-txt">
								<h5 class="h4-lg">4. &ensp; New Ideas</h5>
							</div>
							<p class="p-lg txt-justify">During the brainstorming process, I will describe how I will use discovery and research to come up with ideas for logos. Brainstorming is about generating creative design ideas. Try to find a style that shows the brand personality of the client (this is the third part of my strategy framework).</p>

							<div class="post-inner-img">
								<img class="img-fluid" src="https://clickboxagency.com/images/blog/logo-design-process04.png" alt="exhibit your buyer" />
							</div>
							<p class="p-lg txt-justify">Strong branding and tone of extracting exercises help me build a vision. Utilize the mind map to represent the most important keywords from previous steps. Made three mood boards to capture strategic thoughts visually.</p>
							<p class="p-lg txt-justify">Look at the approach to extracting keywords, then search <a href="https://www.behance.net/" style="color:#0000FF;"><u>Behance</u></a>, <a href="https://dribbble.com/" style="color:#0000FF;"><u>Dribble</u></a>, or <a href="https://in.pinterest.com/" style="color:#0000FF;"><u>Pinterest</u></a> for art direction imagery. Consider typeface, color, style, etc. to represent our brand strategy visually.</p>
							<div class="single-post-txt">
								<h5 class="h4-lg">5. &ensp; Start Sketching</h5>
							</div>
							<p class="p-lg txt-justify">Many logo designers overlook this process in developing the concept design. Start by sketching your ideas. This helps with concept execution. It boosts creativity while focusing on details. Do not replicate other industry logos. Copying logos, clip art, stock pictures, or ideas is forbidden. Sketching helps you generate logo ideas.</p>
							<div class="post-inner-img">
								<img class="img-fluid" src="https://clickboxagency.com/images/blog/logo-design-process05.png" alt="exhibit your buyer" />
							</div>
							<p class="p-lg txt-justify">Sketching has many alternatives. You may experiment with initials, develop a mascot, or use typography. It is entirely up to you how you evaluate a scenario and generate ideas. The next step is a critical part of logo creation.</p>

							<!-- Title -->
							<h4 class="h4-lg">Some Logo Design Tools</h4>
							<div class="single-post-txt">
								<ul class="digit-list">
									<li>
										<p class="p-lg">● Photoshop</p>
									</li>
									<li>
										<p class="p-lg">● Illustrator</p>
									</li>
									<li>
										<p class="p-lg">● Sketch</p>
									</li>
								</ul>
							</div>

							<h4 class="h4-lg">Photoshop</h4>
							<div class="post-inner-img">
								<img class="img-fluid" src="https://clickboxagency.com/images/blog/logo-design-process-photoshop.png" alt="exhibit your buyer" style="width: 40%;" />
							</div>
							<p class="p-lg txt-justify">How to make a logo? <a href="https://www.adobe.com/express/feature/image/editor" style="color:#0000FF;"><u>Photoshop</u></a> is perfect for designing layouts and graphics for print projects such as newspapers, magazines, and posters. The program is also capable of creating website designs, logos, and other forms of digital art.</p>

							<!-- Title -->
							<h4 class="h4-lg">Illustrator</h4>
							<div class="post-inner-img">
								<img class="img-fluid" src="https://clickboxagency.com/images/blog/logo-design-process-illustrator.png" alt="exhibit your buyer" style="width: 40%;" />
							</div>
							<!-- Text -->
							<p class="p-lg txt-justify">How to design a logo? <a href="https://www.adobe.com/in/products/illustrator.html?gclid=CjwKCAiAqaWdBhAvEiwAGAQltr6MB4seLRpaBsseKYp2DZjtS_vyoKZoMTETZ0ibmVb-gVjHeJjnIxoCaj8QAvD_BwE&sdid=SBNHMR64&mv=search&ef_id=CjwKCAiAqaWdBhAvEiwAGAQltr6MB4seLRpaBsseKYp2DZjtS_vyoKZoMTETZ0ibmVb-gVjHeJjnIxoCaj8QAvD_BwE:G:s&s_kwcid=AL!3085!3!473191824708!e!!g!!illustrator%20online!221170148!93801897083" style="color:#0000FF;"><u>Illustrator</u></a> is a tool for graphic design. Illustrator is used by graphic artists to produce vector graphics. Vector pictures and graphics are composed of points, lines, forms, and curves based on mathematical formulae rather than a fixed number of pixels and may thus be resized without loss of image quality.</p>

							<!-- Title -->
							<h4 class="h4-lg">Sketch</h4>
							<div class="post-inner-img">
								<img class="" src="https://clickboxagency.com/images/blog/logo-design-process-sketch.png" alt="exhibit your buyer" style="width: 40%;" />
							</div>
							<p class="p-lg txt-justify"><a href="https://www.sketch.com/" style="color:#0000FF;"><u>Sketch</u></a> is mostly used for developing the UI and UX of mobile and online applications. The files created in Sketch are kept in their own directory. Sketch is a file format, while Adobe Illustrator and Adobe Photoshop may also be used to view the files.</p>


							<div class="single-post-txt">
								<h5 class="h4-lg">6. &ensp; Start Design</h5>
							</div>
							<div class="single-post-txt">
								<ul class="digit-list">
									<li>
										<p class="p-lg txt-justify">● Once you have several drawings, you may compare them to the plan and choose the most promising ideas to implement digitally.</p>
									</li>
									<li>
										<p class="p-lg txt-justify">● Now, the design step involves digitizing your drawings and evaluating each concept's practicality.</p>
									</li>
									<li>
										<p class="p-lg txt-justify">● Don't implement every logo idea you have; instead, concentrate on ideas that may work for your customer.</p>
									</li>
								</ul>
							</div>
							<div class="post-inner-img">
								<img class="img-fluid" src="https://clickboxagency.com/images/blog/logo-design-process06.png" alt="exhibit your buyer" />
							</div>
							<p class="p-lg txt-justify">If your drawings are weak, go back and forth between sketching and designing until you have some good logo ideas. Once you have logo concepts, utilize Adobe Illustrator to create vector graphics. I make copies of the designs on the computer and try out many different versions of each idea to find the best one.</p>


							<div class="single-post-txt">
								<h5 class="h4-lg">7. &ensp; Presentation</h5>
							</div>
							<p class="p-lg txt-justify">Once you are delighted with <a href="https://www.youtube.com/watch?v=T08yWyZ6Zns" style="color:#0000FF;"><u>logo ideas,</u></a> offer them to customers. Show the customer your three best brand identity ideas. Don't show your customer something you're not proud of; just discuss excellent solutions.</p>
							<p class="p-lg txt-justify">Display the client's logo on a business card, book cover, and bag and create mockups.</p>

							<div class="post-inner-img">
								<img class="img-fluid" src="https://clickboxagency.com/images/blog/logo-design-process07.png" alt="exhibit your buyer" />
							</div>
							<p class="p-lg txt-justify">If you followed the procedures, your customer should be pleased with your presentation.
								Customers loved the original design, but we changed elements like leaf alignment to make the logo more balanced. All new logos look strange at first, so your customers may not trust the logos you design.
							</p>
							<p class="p-lg txt-justify">Before final approval, you may wish to alter, merge, and polish the designs. Together with the customer, we evaluate the benefits and drawbacks of each <a href="https://clickboxagency.com/logo-design/coimbatore/" style="color:#0000FF;"><u>logo design.</u></a></p>

							<div class="single-post-txt">
								<h5 class="h4-lg ">8. &ensp; Final Output </h5>
							</div>
							<p class="p-lg txt-justify">Once your customer approves the brand identity product, send logo artwork and a style guide. The distribution package should contain logo source files and a style guide. Again, depending on the approach, you'll know what files to give.
							</p>
							<div class="post-inner-img">
								<img class="img-fluid" src="https://clickboxagency.com/images/blog/logo-design-process08.png" alt="exhibit your buyer" />
							</div>
							<p class="p-lg txt-justify"> Create a style guide that shows all logo variants and how to utilize them (like safe spaces, placement on dark vs. bright backgrounds, and so on). Include a color palette, a typographic system, a photographic style, graphics, animations, and other ways to identify your brand in your style guide. Depending on the client's goals and budget, you may create a one-page style sheet or a brand guideline. Remember to always overdeliver and aim high. We did so by giving the client more logo animation.
							</p>


							<h4 class="h4-lg">Final Thoughts</h4>

							<p class="p-lg txt-justify">As you explore the world of logo design, one of the most important elements is creating an effective process that ensures successful results. A great way to ensure your logo design process is a success is to start out with a plan and understand what’s involved from start to finish. Here at <a href="https://clickboxagency.com/about/" style="color:#0000FF;"><u>Clickbox Agency</u></a>, we’ve put together a comprehensive guide that outlines our recommended logo design process from start to finish.</p>
							<p class="p-lg txt-justify">We provide budget-friendly, unique logo designs that meet our customers' demands. Check out our <a href="https://clickboxagency.com/logo-design-packages/" style="color:#0000FF;"><u>logo design packages</u></a> throughout the globe and choose one for your firm. Every sort of business, big, medium, or small, may benefit from <a href="https://clickboxagency.com/logo-design/coimbatore/" style="color:#0000FF;"><u>ClickBox's logo design service in Coimbatore.</u></a> We can assist you with creative logo design.</p>

						</div> <!-- END BLOG POST TEXT -->

						<!--KEY WORDS SECTION-->
						<!-- SINGLE POST SHARE LINKS -->
						<div class="row post-share-links d-flex align-items-center">

							<!-- POST TAGS -->
							<div class="col-md-9 col-xl-9 post-tags-list">
								<div class='didide'>
									<span><a href="#">logo design process</a></span>
									<span><a href="#">how to design a logo</a></span>
									<span><a href="#">tip for logo design process</a></span>
									<span><a href="#">how to create logo design process</a></span>
									<span><a href="#">how to create logo, how to make a logo</a></span>
									<span><a href="#">how to create a company logo</a></span>
									
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
							<a href="../contacts/" class="btn btn-skyblue tra-white-hover">Get in touch with us</a>

						</div>
					</div>
				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CALL TO ACTION-5 -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/clickboxdemo/footer.php') ?>

	</div> <!-- END PAGE CONTENT -->

	<?php include($_SERVER['DOCUMENT_ROOT'] . '/clickboxdemo/footer-script.php') ?>


	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"url": "https://clickboxagency.com/blog/logo-design-process/",

			"potentialAction": {

				"@type": "SearchAction",

				"target": "https://clickboxagency.com/blog/logo-design-process/find?q={search_term_string}",

				"query-input": "required name=search_term_string"

			}

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"name": "Logo Design Process From Scratch to End (2023 New Updated)",

			"alternateName": " logo design process, how to create logo design process, how to create logo, how to make a logo, how to create a company logo, how to design a logo, tip for logo design process",

			"url": "https://clickboxagency.com/blog/logo-design-process/"

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "https://schema.org",

			"@type": "Organization",

			"name": "Logo Design Process From Scratch to End (2023 New Updated)",

			"url": "https://clickboxagency.com/blog/logo-design-process/",

			"email": "info@clickboxagency.com",

			"foundingDate": "2022",

			"description": "The logo design process can be a complicated process. We have recently added new features and updates to our logo design process so you can get the best custom logo for your business. more...",

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
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/popup1.php') ?>

</body>

</html>