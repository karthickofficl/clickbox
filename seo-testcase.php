<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];

	$subject = 'Contact Page Form Details';
	$to = "karthikraja@akkenna.com";
	$htmlContent = ' 
    <html> 
    <head> 
        <title>Get Pricing-Quotation </title> 
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
		   
	 </table> 
    </body> 
    </html>';
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	$m = mail($to, $subject, $htmlContent, $headers);
	echo $m;
	// Set content-type header for sending HTML email

	if (!$m) {
		echo 'Message could not be sent.';
	} else {
		$result = '
		One of our representative will get in touch you.';
		header("Location: https://clickboxagency.com/clickdemo/seo-testcase/");
		die();
	}
	// 	exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Affordable Monthly SEO Packages & Pricing | ClickBox</title>

	<meta name=description content="Looking for top-notch SEO packages to boost your website's ranking & visibility? Learn more about our affordable SEO packages and start seeing results" />

	<meta name=keywords content="affordable seo packages, best seo packages, affordable seo packages for small business, seo package prices, organic seo packages, basic seo packages, seo monthly packages" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="https://www.clickboxagency.com/" />

	<meta name="copyright" content="https://www.clickboxagency.com/" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/seo-packages/" />

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/seo-packages/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/seo-packages/" />

	<meta property="og:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="Affordable Monthly SEO Packages & Pricing | ClickBox" />

	<meta property="og:description" content="Looking for top-notch SEO packages to boost your website's ranking & visibility? Learn more about our affordable SEO packages and start seeing results" />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="Affordable Monthly SEO Packages & Pricing | ClickBox" />

	<meta name="twitter:description" content="Looking for top-notch SEO packages to boost your website's ranking & visibility? Learn more about our affordable SEO packages and start seeing results" />

	<meta name="twitter:image" content="https://www.clickboxagency.com/images/clickbox-og.jpg" />
	<?php include('header-style.php') ?>
	<style>
		.price-table {

			width: 100%;
			border-collapse: collapse;
			border: 0;


		}

		.bgsnow-hover:hover {
			background-color: #fbfbfd;
		}

		td {
			border-bottom: 0.25px solid #a9b7c3 !important;
			border-top: none !important;
			border-left: none !important;
			border-right: none !important;

		}

		.price {
			text-align: center;
		}


		tr.sticky-header {

			position: -webkit-sticky;
			position: sticky;
			align-items: left-column;
			top: 70px;
			background-color: #fff;
			z-index: 1;
			text-align: center;
		}

		.fa-check-circle {
			color: #17e82f;
		}

		.fa-times-circle {
			color: #ea1f1f;
		}

		.content-col {
			margin: 5px;
		}

		.price-1 {
			border-bottom: none !important;
		}

		@media (max-width: 600px) {

			.main-comparisontable {
				overflow-x: scroll;

			}
		}
	</style>
</head>

<body>
	<?php include('header.php') ?>
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="exampleModalLabel">Get Proposal</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form name="contactform" method="post" class="row contact-form">
						<div class="mb-1">
							<label for="recipient-name" class="col-form-label">Name:</label>
							<input type="text" name="name" class="form-control name" placeholder="Your Name*">
						</div>
						<div class="mb-1">
							<label for="recipient-name" class="col-form-label">Email:</label>
							<input type="email" name="email" class="form-control email" placeholder="Email Address*">
						</div>
						<div class="mb-1">
							<label for="recipient-name" class="col-form-label">Mobile:</label>
							<input type="number" name="phone" class="form-control phone" maxlength="10" placeholder="Mobile Number*">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary" name="send">Submit</button>
						</div>
						<div class="col-sm-10 col-sm-offset-2">
							<?php if (!empty($result)) {
								echo '<div class="alert alert-success"><b>Your message sent successfully! </b>' . $result . '</div>';
							} ?>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<section id="content-3" class="bg-snow content-3 inner-page-hero content-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<h1 class="h2-xs text-center"><span class="txtred">SEO Packages</span> for Increasing Traffic, Sales, and Organic Rankings!</h1>
						<p class="p-md text-center">Are you trying to find budget friendly best SEO packages? If so, join ClickBox's affordable SEO packages. We offer cheap and customized SEO packages that support the needs of each client's business rather than fixed-price monthly SEO packages.</p>
					</div>
				</div>
				<div>
					<!-- TOP ROW -->
					<div class="top-row pb-50">
						<div class="row d-flex align-items-center">
							<div class="col-md-5 col-lg-6">
								<div class="img-block left-column wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
									<img class="img-fluid" src="../images/116.png" alt="creative digital marketing company">
								</div>
							</div>
							<!-- TEXT BLOCK -->
							<div class="col-md-7 col-lg-6">
								<div class="txt-block right-column wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
									<p class="p-lg txt-justify">
										Our internal employees enable effective communication and ensure that your company receives the outcomes you deserve. We customize our SEO packages and programs for every customer because we are aware of your particular needs. We offer a variety of SEO services, such as tag optimization, landing page construction, content production, and website code optimization. In place of speculating, we employ techniques that have been proved to work.
										<br> In addition to optimizing your search engine results, ClickBox SEO services can help you with conversion, domain authority, and brand recognition. As a leading SEO company ClickBox Agency offers affordable SEO Packages that are well worth the money. You can rank higher in Google search results with the aid of our SEO solutions.<br>
										We handle every part of SEO, from keyword rankings to website optimization, to quickly improve your organic traffic.
									</p>
									<!-- Text -->
									<p class="p-lg">Our SEO Services Include,</p>
									<ul class="simple-list">
										<li class="list-item">
											<p class="p-lg">On-Page SEO</p>
										</li>
										<li class="list-item">
											<p class="p-lg">Off-Page SEO</p>
										</li>
										<li class="list-item">
											<p class="p-lg">Content Marketing</p>
										</li>
										<li class="list-item">
											<p class="p-lg">Traffic Analysis</p>
										</li>
									</ul>
								</div>
							</div> <!-- END TEXT BLOCK -->
						</div>
					</div>
				</div>
	</section>
	<!-- SECOND SECTION -->
	<section class="bg-snow content-3 features-section division ">
		<div class="container ">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<h2 class="h3-xs text-center">Our <span class="txtred">On-Page SEO</span></h2>
						<p class="p-lg text-center">You may optimize your entire website for improved SEO results with the support of our SEO packages. The most crucial aspect we focused on while performing SEO for any website is on-site optimization. A successful on-page SEO marketing strategy can immediately improve a website's ranking in Google search results. Check our on-site SEO technique below.</p>
					</div>
				</div>
			</div>
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-2">
					<div class="col ">
						<div class="fbox-8 mb-40 wow fadeInUp ">
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/117.png" alt="creative digital marketing company coimbatore" />
							</div>
							<h5 class="h5-md">Website Audit and Error Correction</h5>
							<!-- Text -->
							<p class="p-lg">To identify the website's problem, we conduct a comprehensive site assessment for our clients.
								To improve user experience, we evaluate website architecture, sitemap, URL structure, navigation, robots file optimization, and loading times.
								With the help of the initial website analysis, we'll be able to choose the best strategy for improving SEO and growing your audience.
							</p>
						</div>
					</div>
					<!-- FEATURE BOX #2 -->
					<div class="col ">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/118.png" alt="creative digital marketing comapny india" />
							</div>
							<h5 class="h5-md">Keyword Research</h5>
							<p class="p-lg"><b>ClickBox's</b> search engine optimization specialists conduct keyword research to determine the most appropriate and pertinent search phrase for your goods and services. It is a significant step in our SEO process that helps us further optimize websites' on-page content and keyword density. We pay particular attention to the client's target market when doing keyword research and analysis. </p>
						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->

			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-2">
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/119.png" alt="digital marketing company in coimbatore" />
							</div>
							<h5 class="h5-md">Content Analysis</h5>
							<p class="p-lg">To identify the parts that can be improved during our content optimization, our team of SEO professionals conducts a thorough content audit. For improved SEO results, we study each and every page and develop a plan for content production and content optimization. This also aids in the editing of content and the production of high-quality content. To make the material more relevant to the target audience, we look at page names, prominence, variety, keyword density, heading tags, proximity, and many other characteristics.</p>
						</div>
					</div>
					<div class="col ">
						<div class="fbox-8 mb-40 wow fadeInUp ">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/120.png" alt="creative digital marketing company newjersey" />
							</div>
							<!-- Title -->
							<h5 class="h5-md">Conversion Tracking Layout
							</h5>
							<!-- Text -->
							<p class="p-lg">The most crucial aspect we focus on during our SEO operations is conversion. For this, we first have a conversation with our clients to determine what constitutes an actual conversion for them and how much that conversion is worth. Then, as part of our on-page SEO process, we set up conversion monitoring, goal setup, and value in Google analytics. It assists our client in tracking conversion, evaluating the effectiveness of our efforts, and analyzing user behavior and site traffic.
							</p>
						</div>
					</div>
				</div> <!-- End row -->
			</div>

			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-2">
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/121.png" alt="digital marketing company coimbatore" />
							</div>
							<h5 class="h5-md">Competitor Analysis</h5>
							<p class="p-lg">In order to give our client's website a competitive advantage, SEO specialists also do a detailed investigation of its competitors. In order to develop a more effective SEO plan, we examine the domain authority and back linking tactics of their website.</p>
						</div>
					</div>

					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<!-- Image -->
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/122.png" alt="digital marketing company india" />
							</div>
							<h5 class="h5-md">Backlink Analysis</h5>
							<p class="p-lg">During the on-page search engine optimization approach, we perform a check on the link profile to find spam backlinks that may eventually affect the website and delete those backlinks.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-2">
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/123.png" alt="digital marketing company newjersey" />
							</div>
							<h5 class="h5-md">Tool configuration</h5>
							<p class="p-lg">In order to optimize, track conversions, and increase website traffic, <b>ClickBox</b> always makes use of the advantages of robust automated tools like Google Analytics, Google Search Console, and Google Tag Manager. If they are not already there on the site, we additionally set up a sitemap and robots file to aid in even better outcomes.</p>
						</div>
					</div>
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/124.png" alt="seo company" />
							</div>
							<h5 class="h5-md">Blog Inspect</h5>
							<p class="p-lg">Our Team thoroughly examines the Blog to identify places that can be optimized to strengthen the site design. To improve website usability and yield quicker results, we look for internal linking and optimized anchor text. For quicker social media marketing usage, we set up social sharing.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="bg-snow content-3 pt-30 features-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<h2 class="h3-xs text-center">Our <span class="txtred">Off-Page SEO</span></h2>
						<p class="p-lg text-center">Another essential feature of our SEO marketing plan is off-page SEO. The term "off-page" also refers to link building. Our link-building strategies are risk-free and entirely ethical. Our staff of link builders strictly adheres to Google's backlink generation standards. Additionally, they put a lot of effort into content marketing to create high-quality, natural backlinks that would help our client's website rank highly. Your website's link profile is improved by more high-quality backlinks. Check our off-site SEO technique below:</p>
					</div>
				</div>
			</div>
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-2">
					<div class="col ">
						<div class="fbox-8 mb-40 wow fadeInUp ">
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/125.png" alt="seo company in india" />
							</div>
							<h5 class="h5-md">Blogger Outreach</h5>
							<!-- Text -->
							<p class="p-lg">To develop backlinks from high-quality material, the team seeks out bloggers that are relevant to the market of our customer. We give them the URL to the appropriate page on our website so they can link back.</p>
						</div>
					</div>
					<div class="col ">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/126.png" alt="seo company in coimbatore" />
							</div>
							<h5 class="h5-md">Content Optimization</h5>
							<p class="p-lg">Our experts primarily concentrate on producing high-quality content and marketing it to create backlinks from websites that include press releases, blogs, and articles.</p>
						</div>
					</div>
				</div> <!-- End row -->
			</div>
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-2">
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/127.png" alt="seo company in newjersey" />
							</div>
							<h5 class="h5-md">Local References</h5>
							<p class="p-lg">Local citations support local search engine optimization (SEO) for maps. Local citations can boost the chance of lead creation because local buyers occasionally look for nearby service suppliers. Increasing your web presence is beneficial.</p>
						</div>
					</div>

					<div class="col ">
						<div class="fbox-8 mb-40 wow fadeInUp ">
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/165.png" alt="creative seo company" />
							</div>
							<h5 class="h5-md">Creating and Sharing Infographics</h5>
							<p class="p-lg">In order to obtain quality backlinks from authoritative websites, we produce and distribute high-quality infographics online. We share this because customers are more excited to see infographics. We produce infographics using already-existing content from our website.</p>
						</div>
					</div>
				</div> <!-- End row -->
			</div>
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-2">
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/128.png" alt="creative seo company coimbatore" />
							</div>
							<h5 class="h5-md">Video Editing</h5>
							<p class="p-lg">In order to distribute visual content on the internet and simply obtain organic backlinks, we produce explainer movies and whiteboard animations of the highest quality.</p>
						</div>
					</div>
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/129.png" alt="creative seo company newjersey" />
							</div>
							<h5 class="h5-md">Creations of Social Media Profiles</h5>
							<p class="p-lg">Social media accounts quickly improve customers' online reputations. These social media networks can be quite beneficial for managing the online reputation of corporate clients if the client has some negative reviews or comments in search engine results.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-2">
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/130.png" alt="creative seo company india" />
							</div>
							<h5 class="h5-md">Submissions In Press Releases</h5>
							<p class="p-lg">Press releases assist customers in filling out events like awards and promotions, etc. Our team carefully examines the specifics of the event or programme and then creates a well-curated information piece that promotes it.</p>
						</div>
					</div>
					<div class="col">
						<div class="fbox-8 mb-40 wow fadeInUp">
							<div class="fbox-img bg-whitesmoke-gradient">
								<img class="img-fluid" src="../images/131.png" alt="creative seo posting" />
							</div>
							<h5 class="h5-md">Blog Postings</h5>
							<p class="p-lg">Blogs support SEO optimization efforts and produce beneficial outcomes. These blogs can also be used for social media marketing to reach out to potential customers. In order to support our efforts at online marketing, we optimize the content of our blogs for keywords.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="content-3" class="bg-snow content-3 pb-30 pt-30 content-section division">
		<div class="container">
			<div class="top-row pb-40">
				<div class="row d-flex align-items-center">
					<div class="col-md-5 col-lg-6">
						<div class="img-block left-column wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
							<img class="img-fluid" src="../images/132.png" alt="Invest In SEO Packages">
						</div>
					</div>
					<div class="col-md-7 col-lg-6">
						<div class="txt-block right-column wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
							<h4 class="h2-xs">Why Should You Invest In SEO Packages?</h4>
							<p class="p-lg txt-justify">
								If your business isn't ranked in search engine results for your products and services but your competitors are, and you run a local or Ecommerce business, it may be difficult for you and your company to survive in this competitive industry.<br>
								An experienced SEO agency will help you in this services.
								With the correct affordable SEO package for small business, you can rank on the first page of any search engine for the keywords you want. We all know that people use search engines to find the goods and services they require, therefore if your company is not easily found, potential customers won't get in touch with you. The correct SEO company can perform market research and assist you in gaining customers.
							</p>
						</div>
					</div> <!-- END TEXT BLOCK -->
				</div>
			</div> <!-- END TOP ROW -->
		</div> <!-- End container -->
	</section>

	<section class="bg-white pt-30 content-3 features-section division mb-40">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<h2 class="h3-xs text-center">Purpose of <span class="txtred">Investing In SEO Packages</span></h2>
					</div>
				</div>
			</div>
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-3">
					<div class="col ">
						<div class="fbox-8 shadow mb-40 h-100 wow fadeInUp p-3">
							<div class="fbox-img ">
								<img class="img-fluid" src="../images/133.png" alt="SEO is efficient" />
							</div>
							<h5 class="h5-md">SEO is efficient</h5>
							<p class="p-lg">Though they are unaware of it, many people believe that SEO is ineffective. Although SEO takes time, once you are on the first page of search results, your website begins to receive high-quality organic traffic, as well as phone calls and leads. Several research has demonstrated that leads from organic traffic are effective clients</p>
						</div>
					</div>
					<!-- FEATURE BOX #2 -->
					<div class="col ">
						<div class="fbox-8 mb-40 h-100 shadow wow fadeInUp p-3">
							<div class="fbox-img ">
								<img class="img-fluid" src="../images/134.png" alt="SEO- High traffic" />
							</div>
							<h5 class="h5-md">SEO- High traffic</h5>
							<p class="p-lg">Your website receives high-quality traffic via SEO, and traffic increases leads and domain authority. When customers are looking for your goods or services, SEO makes your company more apparent to them. Additionally, it helps in attracting a more targeted audience to your online business-related content.</p>
						</div>
					</div>
					<div class="col ">
						<div class="fbox-8 mb-40 h-100 shadow wow fadeInUp p-3">
							<div class="fbox-img ">
								<img class="img-fluid" src="../images/135.png" alt="SEO is Affordable" />
							</div>
							<h5 class="h5-md">SEO is Affordable</h5>
							<p class="p-lg">If you are unaware of the cost of SEO, you shouldn't worry because your SEO agency may develop a customized SEO package that matches your demands. Since SEO packages are known to be dependent on the number of keywords you choose, you can customize your SEO packages to the quantity of your most significant keywords.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
	</section>

	<section id="content-6" class="content-6 pt-30  content-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<h2 class="h3-xs text-center">What to Check While <span class="txtred">Purchasing SEO Packages?</span></h2>
						<p class="p-lg text-center">You should be aware of the services you are receiving in your SEO packages because search engine optimization is a long-term process. You don't evaluate the SEO strategies? Then you could not find the ideal SEO strategy for promoting your company.</p>
						<p class="p-lg text-center">Here are the things to look for when purchasing SEO package prices from an SEO company if you are looking for the best SEO packages online:</p>
					</div>
				</div>
				<div>
					<div class="row d-flex align-items-center">
						<div class="col-md-6 col-lg-6">
							<div class="txt-block left-column wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">

								<div class="txt-box mb-30">
									<h5 class="h5-md">Keyword Selection:</h5>
									<p class="p-lg txt-justify">The most crucial step in any SEO strategy is choosing the right keywords. If you don't conduct adequate keyword research, your SEO campaign won't produce the expected outcomes.</p>
									<h5 class="h5-md">Competitor Analysis:</h5>
									<p class="p-lg txt-justify">It is essentially difficult to outrank your competitors without knowing what is assisting them in their improved rankings, thus you should avoid using your SEO company's organic SEO packages if they do not include competitor analysis.</p>
									<h5 class="h5-md">Content Marketing:</h5>
									<p class="p-lg txt-justify">These days, content is important, so your SEO package should include a proper content development plan. Your content should be original and give your viewers the knowledge they require.</p>
									<p class="p-lg txt-justify">It's time to deal with an SEO company that is results-driven and can boost your search traffic and sales. Contact <a href="https://clickboxagency.com/" aria-label="ClickBox's Agency" title="ClickBox's Agency" class="txtbluee">ClickBox's Agency</a></b>!!!</p>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-6">
							<div class="img-block right-column wow fadeInLeft" style="visibility: visible; animation-name: fadeInRight;">
								<img class="img-fluid" src="../images/136.png" alt="Invest In SEO Packages">
							</div>
						</div>
					</div> <!-- End row -->
				</div> <!-- End container -->
	</section>

	<section id="pricing-2" class="bg-white pt-30 pb-30 pricing-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-80">
						<h2 class="h3-xs text-center">Our <span class="txtred">SEO Packages</span></h2>
					</div>
				</div>
			</div>
			<div class="main-comparisontable   ">
				<table class="price-table">
					<tbody>
						<tr class="sticky-header">
							<td class="price-1"></td>
							<td class="price-1"></td>
							<td class="price-1">
								<h5 class="h5-xs  txtblack">Basic</h5>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Get Proposal</button>
							</td>
							<td class="price-1">
								<h5 class="h5-xs  txtblack">Advance </h5>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Get Proposal</button>
							</td>
							<td class="price-1">
								<h5 class="h5-xs txtblack">Premium </h5>
								<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Get Proposal</button>
							</td>
						</tr>

						<tr>
							<td class="header_col">
								<h4 class="content-col">First Month Activities</h4>
							</td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">SEO Keywords</p>
							</td>
							<td class="tooltipelement">

							</td>
							<td>
								<p class="content-col price">10 Keywords</p>
							</td>
							<td>
								<p class=" content-col price">20 Keywords</p>
							</td>
							<td>
								<p class="content-col price">30 Keywords</p>
							</td>

						</tr>

						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Website & Competitor Analysis</p>
							</td>
							<td class="tooltipelement">
								<span class="d-inline-block" tabindex="0" data-bs-toggle="popover" data-bs-trigger="hover focus" data-bs-content="Disabled popover">
									<i class="fa fa-question-circle-o" aria-hidden="true"></i>
								</span>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>

						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Keywords Research</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Initial Ranking Report</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Content Duplicity Check</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">ON PAGE SEO</p>
							</td>
							<td class="tooltipelement">


							</td>
							<td class="price">

							</td>
							<td class="price">

							</td>
							<td class="price">

							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Meta Tags Creation</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">URL Structure</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Content Optimization</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Image Optimization</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Heading Tag Optimization</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Website Speed Optimization</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Sitemap Creation</p>

							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Google Analytics & Search Console Setu</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Blog Optimization</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Website Speed Optimization</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">OFF PAGE SEO</p>
							</td>
							<td class="tooltipelement">

							</td>
							<td class="price">
							</td>
							<td class="price">
							</td>
							<td class="price">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Social Sharing</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Blog submission</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Text Infographic Creation</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Video Creation</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">CONTENT MARKETING</p>
							</td>
							<td class="tooltipelement">

							</td>
							<td class="price">
							</td>
							<td class="price">
							</td>
							<td class="price">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">1 - Blog Posting (500 – 700 words)</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">2 -Blog Posting (500 – 700 words)</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">3 - Blog Posting (500 – 700 words)</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">1 - Article Writing(500 – 700 words)</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">2 - Article Writing(500 – 700 words)</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">3 - Article Writing(500 – 700 words)</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">2 - Onsite Blog (300 – 500 words)</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">3 - Onsite Blog (300 – 500 words)</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">4 - Onsite Blog (300 – 500 words)</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Broken Backlink Building</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Resource Link Building</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Competitor Backlink Research</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Guest Blogging</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-times-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">MONTHLY REPORTING</p>
							</td>
							<td class="tooltipelement">

							</td>
							<td class="price">
							</td>
							<td class="price">
							</td>
							<td class="price">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Keyword Ranking Report</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Google Analytics Report</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Acquired Links Report 2</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">CLIENT SUPPORT</p>
							</td>
							<td class="tooltipelement">

							</td>
							<td class="price">
							</td>
							<td class="price">
							</td>
							<td class="price">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Email</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Call</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Chat</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>
						<tr class="bgsnow-hover">
							<td>
								<p class="content-col">Professional SEO Consulting</p>
							</td>
							<td class="tooltipelement">
								<i class="fa fa-question-circle-o" aria-hidden="true"></i>

							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
							<td class="price">
								<i class="fa fa-check-circle fa-lg p-2">
							</td>
						</tr>

					</tbody>
				</table>
			</div>

		</div>

	</section> <!-- END PRICING-2 -->

	<section class="bg-white content-3 pt-30 features-section division mb-40">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-10">
					<div class="section-title title-01 mb-70">
						<h2 class="h3-xs text-center">Our <span class="txtred">SEO Packages Includes</span></h2>
					</div>
				</div>
			</div>
			<div class="fbox-8-wrapper text-center ">
				<div class="row row-cols-1 row-cols-md-3">
					<div class="col ">
						<div class="fbox-8 mb-40 shadow h-100 wow fadeInUp p-3">
							<div class="fbox-img ">
								<img class="img-fluid" src="../images/137.png" alt="Keyword Rank Tracking" />
							</div>
							<h5 class="h5-md">Keyword Rank Tracking</h5>
							<p class="p-lg">We track the positions of keywords a website ranks for in search engine result pages using keyword rank tracking (SERPs)</p>
						</div>
					</div>
					<div class="col ">
						<div class="fbox-8 mb-40 shadow h-100 wow fadeInUp p-3">
							<div class="fbox-img ">
								<img class="img-fluid" src="../images/138.png" alt="Website Monitoring" />
							</div>
							<h5 class="h5-md">Website Monitoring</h5>
							<p class="p-lg">In order to evaluate the efficiency of our SEO marketing campaign, we also give our clients regular Google Analytics and Google Search Console reports. </p>
						</div>
					</div>
					<div class="col ">
						<div class="fbox-8 mb-40 shadow h-100 wow fadeInUp p-3">
							<div class="fbox-img ">
								<img class="img-fluid" src="../images/139.png" alt="Regular Reporting" />
							</div>
							<h5 class="h5-md">Regular Reporting</h5>
							<p class="p-lg">We frequently report the updates for every client's website, which includes in SEO packages.</p>
						</div>
					</div>
				</div> <!-- End row -->
			</div> <!-- END FEATURES-8 WRAPPER -->
		</div>
		</div>
	</section>

	<?php include('our-clients.php') ?>

	<section id="faqs-2" class="pt-30 pb-30 faqs-section division">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 col-xl-8">
					<div class="section-title title-01 mb-80">
						<h2 class="h3-xs text-center">Frequently <span class="txtred">Asked Questions</span></h2>
					</div>
				</div>
			</div>
			<div class="faqs-2-questions">
				<div class="row row-cols-1 row-cols-lg-2">
					<div class="col">
						<div class="questions-holder pr-15">
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingOne">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
											<b>How does SEO work?</b>
										</button>
									</h2>
									<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">The general public is ignorant of the factors involved in search engine optimization. The overall view is impacted by some things. Plagiarism, poor placement, and the usage of bizarre fonts all significantly slow down page rank growth.<br> However, there are a few well-known techniques that people prefer to use for SEO. Search engine spiders scan the entire internet, returning zeros and ones depending on the parameters. These ones and zeros are then fed into a special algorithm, which determines the order of all the pages in accordance.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingTwo">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
											<b>Is SEO essential for developing our company?</b>
										</button>
									</h2>
									<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">The best way to advertise your business is through search engine optimization. You may invest a lot in online company promotion and see a corresponding increase in profits. However, if you use search engine optimization, you can drive traffic to your website just by improving its appearance.<br> The growing necessity of skilled marketers and SEO specialists is a striking example of why SEO is crucial. The businesses are able to get excellent traffic to their websites with minimal marketing investment. The offerings of the service provider will then affect the conversion rate. In the digital age, search engine optimization is essential for organizations. Your website would be simply one of millions of others without SEO.
											</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingThree">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
											<b>Do You Provide Custom SEO Packages?</b>
										</button>
									</h2>
									<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">Yes, we do; we carefully analyze each and every one of our clients' demands before customizing a package to best meet their needs.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- END QUESTIONS HOLDER -->
					</div>
					<div class="col">
						<div class="questions-holder pr-15">
							<div class="accordion" id="accordionExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFour">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
											<b>Why doesn't my website rank in Google searches?</b>
										</button>
									</h2>
									<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">The reasons why your website is not ranked on Google can vary. Your website might not be optimized for search engines as one possible explanation. By making sure that your website's title tags, meta descriptions, header tags, and image alt text are all properly filled out, you can raise its ranking. <br>Additionally, make sure that the material on your website is both high quality and keyword-rich. Building links to your website from other trustworthy websites is another way to raise your position. Consult with a seasoned SEO company if you're unaware of how to optimize your website or develop links.</p>
										</div>
									</div>
								</div>
								<div class="accordion-item">
									<h2 class="accordion-header" id="headingFive">
										<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
											<b>Do SEO packages justify the price?</b>
										</button>
									</h2>
									<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
										<div class="accordion-body">
											<p class="p-lg">There are many SEO package options available. But are they really worth the expense? That depends on the kind of your company. An SEO package might be a terrific approach to boost your website's ranking in search engines if you're just getting started.<br> Additionally, if you want to raise the rating of your website, an SEO package is unquestionably something you should think about. However, if your company has been around for a while and your website is well-known, an SEO package might not provide enough value to warrant the expense. If so, it could be wiser to concentrate on other components of your marketing plan.</p>
										</div>
									</div>
								</div>
							</div>
						</div> <!-- END QUESTIONS HOLDER -->
					</div>
				</div> <!-- End row -->
			</div> <!-- END FAQs-2 QUESTIONS -->
			<div class="row">
				<div class="col ">
					<div class="more-questions">
						<h5 class="h5-sm ">Have more questions? <a href="https://www.clickboxagency.com/contacts/" aria-label="contact us" title="contact us">Ask your question here</a></h5>
					</div>
				</div>
			</div>
		</div> <!-- End container -->
	</section> <!-- END FAQs-2 -->

	<?php include('footer.php') ?>
	</div> <!-- END PAGE CONTENT -->
	<?php include('footer-script.php') ?>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"url": "https://www.clickboxagency.com/seo-packages/",
			"potentialAction": {
				"@type": "SearchAction",
				"target": "https://www.clickboxagency.com/seo-packages/find?q={search_term_string}",
				"query-input": "required name=search_term_string"
			}
		}
	</script>
	<script type="application/ld+json">
		{
			"@context": "http://schema.org",
			"@type": "WebSite",
			"name": "Affordable Monthly SEO Packages & Pricing | ClickBox",
			"alternateName": "affordable seo packages, best seo packages, affordable seo packages for small business, seo package prices, organic seo packages, basic seo packages, seo monthly packages",
			"url": "https://www.clickboxagency.com/seo-packages/"
		}
	</script>

	<script type="application/ld+json">
		{
			"@context": "https://schema.org",
			"@type": "Organization",
			"name": "Affordable Monthly SEO Packages & Pricing | ClickBox",
			"url": "https://www.clickboxagency.com/seo-packages/",
			"email": "info@clickboxagency.com",
			"foundingDate": "2022",
			"description": "Looking for top-notch SEO packages to boost your website's ranking & visibility? Learn more about our affordable SEO packages and start seeing results",
			"logo": "https://www.clickboxagency.com/images/logo-01.png",
			"contactPoint": {
				"@type": "ContactPoint",
				"telephone": "+91 8870578887",
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
	<!--<script>-->
	<!--	function toggleForm(formId) {-->
	<!--		var form = document.getElementById(formId).querySelector('.form-popup');-->
	<!--		form.style.display = (form.style.display === 'none' || form.style.display === '') ? 'block' : 'none';-->
	<!--	}-->
	<!--</script>-->
	<script src="../js/custom.js"></script>
	</*?php include('popup1.php') ?* />

</body>

</html>