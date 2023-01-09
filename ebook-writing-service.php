<?php

//  
if (isset($_POST['send'])) {

	// getting post values
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = 'Ecommerce SEO Service Form';

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

	<title>Professional ebook writing services India |ClickBox</title>

	<meta name=description content="Order top-notch content for your eBooks using our Indian eBook writing services.ClickBox Agency is the best option if you're looking for engaging SEO content." />

	<meta name=keywords content="ebook writing, ebook writing service,ebook writing company,book and ebook writing,best ebook writing service,cheap ebook writing service" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="www.clickboxagency.com" />

	<meta name="copyright" content="www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="www.clickboxagency.com/ebook-writing-service/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="www.clickboxagency.com/ebook-writing-service/" />

	<meta property="og:site_name" content="www.clickboxagency.com/ebook-writing-service/" />

	<meta property="og:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="Professional ebook writing services India |ClickBox" />

	<meta property="og:description" content="Order top-notch content for your eBooks using our Indian eBook writing services.ClickBox Agency is the best option if you're looking for engaging SEO content." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Professional ebook writing services India |ClickBox" />

	<meta name="twitter:description" content="Order top-notch content for your eBooks using our Indian eBook writing services.ClickBox Agency is the best option if you're looking for engaging SEO content." />

	<meta name="twitter:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />
	<?php include('header-style.php') ?>

</head>


<body>

	<?php include('header.php') ?>


	<!-- HERO-8
			============================================= -->
	<section id="hero-8" class="bg-fixed hero-section division">
		<div class="container">
			<div class="row d-flex align-items-center">


				<!-- HERO IMAGE -->
				<div class="col-lg-5 order-last order-lg-2">
					<div class="hero-8-img pc-20 text-center">
						<img class="img-fluid" src="../images/hero-8-img.png" alt="hero-image">
					</div>
				</div>


				<!-- HERO TEXT -->
				<div class="col-lg-7 order-first order-lg-2">
					<div class="hero-8-txt">

						<!-- Title -->
						<h2 class="h2-md">An expert in providing content writing service.</h2>

						<!-- Text -->
						<!-- <p class="p-lg">Feugiat primis ligula risus auctor egestas and augue viverra mauri tortor
								   in iaculis magna feugiat mauris ipsum and placerat viverra tortor gravida purus
								</p>  -->

						<!-- HERO QUICK FORM -->
						<form name="quickform" class="quick-form shadow-form">

							<!-- Form Inputs -->
							<div class="input-group">
								<!-- <input type="email" name="email" class="form-control email" placeholder="Your email address" autocomplete="off" required> -->
								<span class="input-group-btn form-btn">
									<button type="submit" class="btn btn-md btn-skyblue black-hover submit">Try Out Today</button>
								</span>
							</div>

							<!-- Form Message -->
							<div class="quick-form-msg"><span class="loading"></span></div>

						</form>

					</div>
				</div> <!-- END HERO TEXT -->


			</div> <!-- End row -->
		</div> <!-- End container -->


		<!-- WAVE SHAPE BOTTOM -->
		<div class="wave-shape-bottom">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 140">
				<path fill="#ffffff" fill-opacity="1" d="M0,64L120,74.7C240,85,480,107,720,117.3C960,128,1200,128,1320,128L1440,128L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
			</svg>
		</div>


	</section> <!-- END HERO-8 -->


	<!-- CONTENT-6
			============================================= -->
	<section id="content-6" class="content-6 wide-60 pb-60 content-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">

						<!-- Title -->
						<h2 class="h2-sm"> Affordable And High quality ebook Writing Service</h2>

						<!-- Text -->
						<p class="p-md">E-book writers are skilled writers with years of writing experience, in-depth education, and broad-based domain knowledge. Any topic or subject can be the subject of an authoritative eBook that is supported by thorough research.</p>


					</div>
				</div>
			</div>


			<div class="row d-flex align-items-center">


				<!-- TEXT BLOCK -->
				<div class="col-md-12 col-lg-7">
					<div class="txt-block left-column wow fadeInRight">

						<!-- TEXT BOX -->
						<div class="txt-box mb-30">

							<!-- Title -->
							<!-- <h5 class="h5-md">Advanced Analytics Review</h5> -->

							<!-- Text -->
							<p class="p-lg">A published book that has been converted into an electronic edition and can be read on an ebook reader like the Amazon Kindle. a downloadable piece of long-form marketing content, typically in PDF format and jam-packed with useful information on a particular subject related to your industry.<br>
								A printed book has many pages that are bound together with the front and back covers. When a book is described as having all of its pages in digital format, it has been converted into an electronic format.</p>

							<p class="p-lg">Digital publishing via eBooks is fundamentally altering the publishing industry by simplifying and lowering the cost of distribution. With eBooks, the author has complete control over their content and is not required to split the profits with a third party.By establishing authority, enhancing credibility, and providing fresh content, digital publishing through eBooks advances business objectives.
								<br>Through our eBook writing service, where we regularly collaborate with you to produce original content that is both educational and engaging, the ClickBox agency team has the human resource infrastructure and expertise to deliver high-value content.
							</p>

							<p class="p-lg">The best way to create strong and valuable backlinks to your website is probably through article writing. For high content for your article marketing strategy, use our SEO writing service, and watch the results on content.
								<br>With ClickBox's article writing service, you can acquire affordable, SEO-friendly content that is light on the budget. You've found the ideal spot if you're looking for a business that provides inexpensive article writing services while also producing high-quality work. With our ebook writing service, you can be sure to get excellent material that will benefit your company.
							</p>


						</div>


					</div>
				</div>


				<!-- IMAGE BLOCK -->
				<div class="col-md-12 col-lg-5">
					<div class="img-block right-column wow fadeInLeft">
						<img class="img-fluid" src="../images/seo-06.png" alt="content-image">
					</div>
				</div>


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-6 -->

	<!-- CONTENT-5
			============================================= -->
	<section id="content-5" class="content-5 ws-wrapper content-section division">
		<div class="container">
			<div class="content-5-wrapper bg-whitesmoke">
				<div class="row d-flex align-items-center">


					<!-- IMAGE BLOCK -->
					<div class="col-md-5 col-lg-6">
						<div class="img-block left-column wow fadeInLeft">
							<img class="img-fluid" src="../images/seo-04.png" alt="content-image">
						</div>
					</div>

					<!-- TEXT BLOCK -->
					<div class="col-md-7 col-lg-6">
						<div class="txt-block right-column wow fadeInRight">

							<!-- Section ID -->
							<!-- <span class="section-id txt-upcase">Quick and Secure</span> -->

							<!-- Title -->
							<h3 class="h3-lg">Why Is ebook Writing Important for Branding?</h3>

							<p class="p-lg">Businesses can go into great detail about specific topics by using eBooks. The best way to improve a shallow content marketing strategy is to produce eBooks. Longer content will be consumed by your target audience if it is available as an eBook that they can download and read whenever they have time.Particularly with electronic books, you can visualize the message and level of expertise you want to convey to the intended audience. Because those who download strategy eBooks are proactively seeking out knowledge or instruction, a persuasive message structure and delivery will raise your message's credibility.The purpose of eBooks is to enhance and simplify the overall learning process. Learning becomes more interactive and engaging thanks to digital books. Students can now actively engage in the learning process rather than passively listening to one person talk constantly.</p>

						</div>
					</div> <!-- END TEXT BLOCK -->


				</div>
			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-5 -->




	<!-- FEATURES-5
			============================================= -->
	<section id="features-5" class="wide-60 features-section division">
		<div class="container">

			<!-- SECTION TITLE  -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">

						<!-- Title  -->
						<h2 class="h2-md">Why Choose ClickBox For ebook Writing Service?</h2>

						<!-- Text  -->
						<p class="p-md">We have a dedicated team of workers, who ensure that your project deliverables meet your quality requirements and deadlines.
						</p>

					</div>
				</div>
			</div>

			<!-- FEATURES-5 WRAPPER -->
			<div class="fbox-5-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-3">


					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-5 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-analytics"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">100% Work Satisfaction Guarantee</h5>

							<!-- Text -->
							<p class="p-lg">Gain peace of mind and confidence when presenting a project. Because we will never be satisfied until you are happy with our work!</p>


						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-5 bg-white mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-web-search-engine"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Personalized Orders & Integration</h5>

							<!-- Text -->
							<p class="p-lg">Save your completed content as a Word document, an HTML file, or a unique template.</p>


						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-5 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-line-graph-1"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">SEO Optimization</h5>

							<!-- Text -->
							<p class="p-lg">Complete SEO-optimized content would then increase website traffic.
							</p>

						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- END FEATURES-5 WRAPPER -->

			<!-- FEATURES-5 WRAPPER -->
			<div class="fbox-5-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-3">


					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-5 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-analytics"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Human Excellence</h5>

							<!-- Text -->
							<p class="p-lg">We can provide high-quality texts for half the price of a traditional agency because of our comprehensive multiphasic screening and continuing evaluations.</p>


						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-5 bg-white mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-web-search-engine"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Immediate Ordering</h5>

							<!-- Text -->
							<p class="p-lg">Within a few minutes, place your order by completing our simple form. It is truly hassle-free!</p>


						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-5 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-line-graph-1"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Qualified Writers</h5>

							<!-- Text -->
							<p class="p-lg">With many years of experience in this field, we will always be responsible for producing your content.
							</p>

						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- END FEATURES-5 WRAPPER -->

			<!-- FEATURES-5 WRAPPER -->
			<div class="fbox-5-wrapper text-center">
				<div class="row row-cols-1 row-cols-md-3">


					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-5 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-analytics"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Specialized Project Manager</h5>

							<!-- Text -->
							<p class="p-lg">Expert project managers are vital in ensuring that our writing team continues to perform at a high level.</p>


						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-5 bg-white mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-web-search-engine"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Discount For Loyal Customers</h5>

							<!-- Text -->
							<p class="p-lg">By frequently using our services, you can treat yourself. You'll benefit from the most affordable prices as well as exclusive savings.</p>


						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-5 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="ico-70 skyblue-color">
								<span class="flaticon-line-graph-1"></span>
							</div>

							<!-- Title -->
							<h5 class="h5-sm">Specific Content</h5>

							<!-- Text -->
							<p class="p-lg">We provide unique content. Content written especially for your website will make it stand out.
							</p>

						</div>
					</div>


				</div> <!-- End row -->
			</div> <!-- END FEATURES-5 WRAPPER -->


		</div> <!-- End container -->
	</section> <!-- END FEATURES-5 -->



	<!-- CONTENT-2
			============================================= -->
	<section id="content-2" class="content-2 pb-60 content-section division">
		<div class="container">
			<div class="row d-flex align-items-center">


				<!-- IMAGE BLOCK -->
				<div class="col-md-5 col-lg-6">
					<div class="rel img-block left-column wow fadeInRight">
						<img class="img-fluid" src="../images/seo-01.png" alt="video-preview">
					</div>
				</div>


				<!-- TEXT BLOCK -->
				<div class="col-md-7 col-lg-6">
					<div class="txt-block right-column wow fadeInLeft">

						<!-- TEXT BOX -->
						<div class="txt-box">

							<!-- Title -->
							<h5 class="h5-md">The Benefits of Our ebook Writing Services</h5>

							<!-- List -->
							<ul class="simple-list">

								<li class="list-item">
									<p class="p-lg">Save yourself a trip to the library.
									</p>
								</li>

								<li class="list-item">
									<p class="p-lg">No late charges.</p>
								</li>

								<li class="list-item">
									<p class="p-lg">Read wherever, whenever.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">One gadget, numerous books.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Right at your fingers, a dictionary.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Search in a flash.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Personalize your reading style.</p>
								</li>
								<li class="list-item">
									<p class="p-lg">Our selection is always expanding.</p>
								</li>

							</ul>





						</div> <!-- END TEXT BOX -->

					</div>
				</div> <!-- END TEXT BLOCK -->


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-2 -->




	<!-- CONTENT-1
			============================================= -->
	<section id="content-1" class="content-1 content-section division">
		<div class="container">
			<div class="row d-flex align-items-center">


				<!-- TEXT BLOCK -->
				<div class="col-md-7 col-lg-6 order-last order-md-2">
					<div class="txt-block left-column wow fadeInRight">

						<!-- TEXT BOX -->
						<div class="txt-box">

							<!-- Title -->
							<h5 class="h5-md">How does it Work?</h5>
							<p class="p-lg">Our content writing company guarantees economical, top-notch, SEO-optimized content writing services. Along with qualified content writers, our team also benefits from the experience of seasoned editors and proofreaders to guarantee error-free delivery.In order to increase content quality and rank higher in Google's index, we use data and statistics in an efficient approach. The procedure we use to produce SEO-friendly content for our exclusive set of clients from around the world is illustrated below. Are you looking for a professional article writing service? Check out Clickbox’s seo article writing service to increase the traffic of your website. </p>




						</div> <!-- END TEXT BOX -->

					</div>
				</div> <!-- END TEXT BLOCK -->


				<!-- IMAGE BLOCK -->
				<div class="col-md-5 col-lg-6 order-first order-md-2">
					<div class="rel img-block right-column wow fadeInLeft">
						<img class="img-fluid" src="../images/seo-05.png" alt="content-image">
					</div>
				</div>


			</div> <!-- End row -->
		</div> <!-- End container -->
	</section> <!-- END CONTENT-1 -->

	<!-- OUR CLIENTS ADD -->
	<?php include('our-clients.php') ?>
	<!-- OUR CLIENTS END -->


	<!-- FEATURES-4
			============================================= -->
	<section id="features-4" class="wide-60 features-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-70">

						<!-- Title -->
						<h2 class="h2-sm">Our Work Process</h2>

						<!-- Text -->

					</div>
				</div>
			</div>

			<!-- FEATURES-4 WRAPPER -->
			<div class="fbox-4-wrapper fbox-4-wide">
				<div class="row row-cols-1 row-cols-md-2">


					<!-- FEATURE BOX #1 -->
					<div class="col">
						<div class="fbox-4 pr-25 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico">
								<div class="ico-65 skyblue-color">
									<span class="flaticon-album"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-sm">In-depth Evaluation</h5>

								<!-- Text -->
								<p class="p-lg">Our professional team conducts a complete analysis of the customers’ needs and prepares the content accordingly.</p>


							</div>

						</div>
					</div>


					<!-- FEATURE BOX #2 -->
					<div class="col">
						<div class="fbox-4 pl-25 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico">
								<div class="ico-65 skyblue-color">
									<span class="flaticon-seo"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-sm">Group Assignment</h5>

								<!-- Text -->
								<p class="p-lg">The following step is to plan a specific project and allocate it to the appropriate team to create a specific project and allocate it to the appropriate team for creating unique, customized content. The next stage is to develop a project strategy.
								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #3 -->
					<div class="col">
						<div class="fbox-4 pr-25 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico">
								<div class="ico-65 skyblue-color">
									<span class="flaticon-click-2"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-sm">Editing</h5>

								<!-- Text -->
								<p class="p-lg">This necessary part involves placing the carefully produced text to the test before it reaches the editor's desk. The leading editors then complete the last stage of rectification, using their excellent editing abilities to produce text that is comprehensible, compelling, and clear.
								</p>

							</div>

						</div>
					</div>


					<!-- FEATURE BOX #4 -->
					<div class="col">
						<div class="fbox-4 pl-25 mb-40 wow fadeInUp">

							<!-- Icon -->
							<div class="fbox-ico">
								<div class="ico-65 skyblue-color">
									<span class="flaticon-layers"></span>
								</div>
							</div>

							<!-- Text -->
							<div class="fbox-txt">

								<!-- Title -->
								<h5 class="h5-sm">SEO/Packaging Audit</h5>

								<!-- Text -->
								<p class="p-lg">As a digital marketing company that offers web content writing services, we know the importance of SEO and use tools to make our content more search engine friendly.
								</p>

							</div>

						</div>
					</div>


				</div>
			</div> <!-- END FEATURES-4 WRAPPER -->


		</div> <!-- End container -->
	</section> <!-- END FEATURES-4 -->




	<!-- DIVIDER LINE -->
	<hr class="divider">

	</div>
	</div> <!-- END BOTTOM ROW -->


	</div> <!-- End container -->
	</section> <!-- END CONTENT-3 -->



	<!-- FAQs-2
			============================================= -->
	<section id="faqs-2" class="pb-60 faqs-section division">
		<div class="container">


			<!-- SECTION TITLE -->
			<div class="row justify-content-center">
				<div class="col-md-10 col-lg-8">
					<div class="section-title title-02 mb-75">

						<!-- Section ID -->
						<span class="section-id txt-upcase">Frequently Asked Questions</span>

						<!-- Title -->
						<h3 class="h3-xl">Everything you need to know before getting started</h3>

					</div>
				</div>
			</div>


			<!-- FAQs-2 QUESTIONS -->
			<div class="faqs-2-questions">
				<div class="row row-cols-1 row-cols-lg-2">


					<!-- QUESTIONS HOLDER -->
					<div class="col">
						<div class="questions-holder pr-15">


							<!-- QUESTION #1 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-sm">What is the process of writing an ebook?</h5>

								<!-- List -->
								<ul class="simple-list">

									<li class="list-item">
										<p class="p-lg">Pick a subject that will appeal to your audience.
										</p>
									</li>

									<li class="list-item">
										<p class="p-lg">Create a chapter outline for your ebook.</p>
									</li>

									<li class="list-item">
										<p class="p-lg">As you write, break each chapter down.</p>
									</li>
									<li class="list-item">
										<p class="p-lg">Create an ebook.</p>
									</li>
									<li class="list-item">
										<p class="p-lg">Use the appropriate hues.</p>
									</li>
									<li class="list-item">
										<p class="p-lg">Including images.</p>
									</li>
									<li class="list-item">
										<p class="p-lg">Feature statistics or quotes.</p>
									</li>
									<li class="list-item">
										<p class="p-lg">Include the right calls to action in your ebook.</p>
									</li>


								</ul>

							</div>


							<!-- QUESTION #2 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-sm">What is the purpose of eBooks?</h5>

								<!-- Answer -->
								<p class="p-lg">The purpose of eBooks is to enhance and simplify the whole learning process. Learning becomes more interactive and engaging thanks to digital books. Students can now actively engage in the learning process rather than passively listening to one person talk nonstop.
								</p>

							</div>



						</div>
					</div> <!-- END QUESTIONS HOLDER -->


					<!-- QUESTIONS HOLDER -->
					<div class="col">
						<div class="questions-holder pl-15">


							<!-- QUESTION #3 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-sm">How do I make an interactive ebook?</h5>

								<!-- Answer -->
								<p class="p-lg">Make a Table of Contents that is Clickable. Create an interactive table of contents, record voiceover, create quizzes, embed videos, add links, include animation, create popups, and include interactive charts, graphs, and maps to make it simple for readers to navigate through your ebook. Make a Table of Contents that is Clickable. Create an interactive table of contents, record voiceover, create quizzes, embed videos, add links, include animation, create popups, and include interactive charts, graphs, and maps to make it simple for readers to navigate through your ebook.
								</p>



							</div>

							<!-- QUESTION #4 -->
							<div class="question wow fadeInUp">

								<!-- Question -->
								<h5 class="h5-sm">How Many pages should an ebook have?</h5>

								<!-- Answer -->
								<p class="p-lg"> The Write Practice, a short print book has an average word count of 25,000, or roughly 100 pages. The average length of small ebooks, when broken down by genre, ranges from 123 pages for children's novels to 519 pages for a lengthy and substantial law ebook. According to The Write Practice, a short print book has an average word count of 25,000, or roughly 100 pages. The average length of small ebooks, when broken down by genre, ranges from 123 pages for children's novels to 519 pages for a lengthy and substantial law ebook.
								</p>

							</div>


						</div>
					</div> <!-- END QUESTIONS HOLDER -->


				</div> <!-- End row -->
			</div> <!-- END FAQs-2 QUESTIONS -->


			<!-- MORE QUESTIONS BUTTON -->
			<div class="row">
				<div class="col">
					<div class="more-questions">
						<h5 class="h5-sm">Have more questions? <a href="https://clickboxagency.com/contacts/">Ask your question here</a></h5>
					</div>
				</div>
			</div>


		</div> <!-- End container -->
	</section> <!-- END FAQs-2 -->
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
							<a href="https://clickboxagency.com/contacts/" class="btn btn-skyblue tra-white-hover">Get in touch with us</a>

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
			"url": "https://www.clickboxagency.com/ebook-writing-service/",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/ebook-writing-service/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "Professional ebook writing services India |ClickBox",
			"alternateName": "ebook writing, ebook writing service,ebook writing company,book and ebook writing,best ebook writing service,cheap ebook writing service ",
				"url": "https://www.clickboxagency.com/ebook-writing-service/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "Professional ebook writing services India |ClickBox",
			"url": "https://www.clickboxagency.com/ebook-writing-service/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "Order top-notch content for your eBooks using our Indian eBook writing services.ClickBox Agency is the best option if you're looking for engaging SEO content.",
				"logo": "www.clickboxagency.com/images/logo-01.png",
			"contactPoint": {
				"@type": "ContactPoint",
				"telephone": "+91 7358644710",
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
	<script src="../js/custom.js"></script>
	<?php include('popup1.php') ?>

</body>

</html>