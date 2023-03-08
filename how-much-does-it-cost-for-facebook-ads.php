<?php

//  
if (isset($_POST['send'])) {

	// getting post values
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = 'Blog Details Comments Form';
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
	$headers .= 'Bcc: suvethas2014@gmail.com' . "\r\n";
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

	<title>How Much Does Facebook Advertising Cost in 2022?</title>

	<meta name=description content="Facebook advertisement costs varies with the industry. Check this ultimate guide to know the cost of the Facebook advertisement in 2022." />

	<meta name=keywords content="how much does it cost to advertise on Facebook, how much does it cost for Facebook ads" />

	<meta name="language" content="en" />

	<meta name="revisit-after" content="7 days" />

	<meta name="Expires" content="never" />

	<meta name="Distribution" content="Global" />

	<meta name="Rating" content="general" />

	<meta name="search engines" content="ALL" />

	<meta name="Author" content="www.clickboxagency.com" />

	<meta name="copyright" content="www.clickboxagency.com" />

	<meta name="email" content="info@clickboxagency.com" />

	<link rel="canonical" href="https://www.clickboxagency.com/how-much-does-it-cost-for-facebook-ads/" />

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website" />

	<meta property="og:url" content="https://www.clickboxagency.com/how-much-does-it-cost-for-facebook-ads/" />

	<meta property="og:site_name" content="https://www.clickboxagency.com/how-much-does-it-cost-for-facebook-ads/" />

	<meta property="og:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />

	<meta property="og:title" content="How Much Does Facebook Advertising Cost in 2022?" />

	<meta property="og:description" content="Facebook advertisement costs varies with the industry. Check this ultimate guide to know the cost of the Facebook advertisement in 2022." />

	<meta name="twitter:card" content="summary" />

	<meta name="twitter:title" content="How Much Does Facebook Advertising Cost in 2022?" />


	<meta name="twitter:description" content="Facebook advertisement costs varies with the industry. Check this ultimate guide to know the cost of the Facebook advertisement in 2022." />

	<meta name="twitter:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />

	<!--FAVICON-->

	<link rel="icon" href="https://clickboxagency.com/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="https://clickboxagency.com/images/favicon.png" type="image/x-icon">

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
							<img class="img-fluid" src="https://clickboxagency.com/images/blog/how-much-cost-facebook-advertising.jpg" alt="blog-post-image" />
						</div>


						<!-- SINGLE POST TITLE -->
						<div class="single-post-title">

							<!-- TITLE -->
							<h1 class="h2-md">How Much Does Facebook Advertising Cost in 2022?</h1>


						</div> <!-- END SINGLE POST TITLE -->
						<!-- BLOG POST TEXT -->
						<div class="single-post-txt">

							<!-- Text -->
							<p class="p-lg">Marketers and Entrepreneurs rebrand their marketing process because of the growth of social media. Specifically, Facebook has become a daily routine of people.
								<br>Facebook creates a strong impact on everyone’s life; this is also well-suited to business life.
							<p class="p-lg">According to statistics by Oberlo, Facebook has 2.60 billion MAUs (Monthly Active Users) and 1.73 billion DAUs (Daily Active Users). It is not a surprising part for many as they know the real status of Facebook usage in their lives.
							<p class="p-lg">Here are some other stats by Oberlo that blows your mind:

							<p class="p-lg">In 2018, Facebook is the number one social media platform as it owns 60.6% of total internet users.
							<p class="p-lg">Also, in 2018, the Facebook business page is the best platform for more than 80 million small businesses.
							<p class="p-lg">Time grows and so does Facebook. In 2020, Facebook advertisement revenue is $17.44 billion that too in Q1 of 2020.
							<p class="p-lg">Facebook has also acquired the two most popular platforms Instagram and WhatsApp. These are all possible due to Facebook’s growth.
							<p class="p-lg">Isn’t it the best platform for your marketing activities? Of Course, Yes! Facebook is one of the best partners for many entrepreneurs.
							</p>

						</div> <!-- END BLOG POST TEXT -->


						<!-- BLOG POST TEXT -->
						<div class="single-post-txt">

							<!-- Title -->
							<h4 class="h4-lg">Who can do Facebook Advertisement?
							</h4>

							<!-- Text -->
							<p class="p-lg">Anyone!
							<p class="p-lg">Facebook is an open-source platform that can be accessed by any of the people irrespective of age and business. In this, the Facebook advertisement can be used for business growth and the marketing process.
							<p class="p-lg">*If you are a startup and want to find your clients
							<p class="p-lg">*If you are creating a brand and want to spread your brand between people
							<p class="p-lg">*If you are running a business (whether online/offline), and want to get more traffic and sales to your business
							<p class="p-lg">*If you are an influencer and wants to get target followers
							<p class="p-lg">*If you are a popular brand and want to update your new product releases
							<p class="p-lg">Facebook is the first and best marketing platform choice as you can easily find your target audience in one huge place.
							<p class="p-lg">Now, we jump into the actual topic where we will discuss the complete advertisement cost of Facebook.


								<!-- Title -->
							<h4 class="h4-lg">How Much Does It Cost to Advertise on Facebook?</h4>

							<!-- Text -->
							<p class="p-lg">In short, “It Depends on You”
							<p class="p-lg">Business is filled with various industries. So, Facebook ad cost varies with various industries based on the industry growth and audience.
							<p class="p-lg">On average, the CPC (Cost-Per-Click) of Facebook ads costs around $0.97, and the CPM (Cost Per Thousand Impressions) of Fb ads costs around $7.19
							<p class="p-lg"> <b>CPC:</b> (Cost-Per-Click) is the process where the advertisers pay every time to Facebook whenever their ads are clicked by the audience.
							<p class="p-lg"><b>CPM:</b>: CPM (Cost Per Thousand Impressions) is the process where the advertisers have to pay Facebook when their ads reach a thousand views by the audience.
							<p class="p-lg">Overall, the Facebook ads cost depends on you and your industry. You can decide based on your business needs and budget.
							<p class="p-lg">On whole, you have to build a perfect ad campaign to reach the exact audience and to worth your marketing activity.
							<p class="p-lg"><b>>CPC and CPM </b> are the main parts of the ad campaign and ad campaigns also provide another two models like CPL (Cost-Per-Like) and CPA (Cost-Per-Download)
								CPL (Cost Per Like), as the name implies, the advertisers pay an amount based on the number of likes to their ads or post. On average, CPL costs range around $1.07.CPL (Cost Per Like), as the name implies, the advertisers pay an amount based on the number of likes to their ads or post. On average, CPL costs range around $1.07.
							<p class="p-lg"><b>CPA (Cost-per-Download)</b>, as the name says, the advertisers have to pay based on the number of times their actions are completed by the audience. For example, if you are developing an app, then CPA is one of the best marketing campaigns, where you can pay an amount based on the number of times your app is downloaded by the audience. On average, CPA costs will be $5.47.
							<p class="p-lg">It clearly shows that anyone can run an ad campaign on Facebook as the cost is low and suits any industry vertical.




								<!-- Title -->
							<h4 class="h4-lg">How Do Ad Campaigns Work?</h4>
							<!-- Text -->
							<p class="p-lg"> Here, you can see in detail, how ad campaigns run or how to use Facebook ad campaigns.
							<p class="p-lg">First, the advertisers (you) want to log in to Facebook.
							<p class="p-lg">Having a Facebook business page helps to make the account look more professional.
							<p class="p-lg">Now, the advertisers have to log into the Facebook Ad Manager to start creating the ad campaign
							<p class="p-lg">Advertisers have to choose the budget range of their ad (Either they can choose a daily budget for their ad or they can fix some amount for the whole ad)
							<p class="p-lg">Here is the main step. The advertisers have to choose the type of ad campaigns that need to be performed- CPC, CPM, CPL, or CPA.
							<p class="p-lg">The next step is to select the audience type. It depends on the demographic (location of people), age, gender, or interest in that industry.
							<p class="p-lg">It is the time to upload their ads (Either in form of text, image, or video; normally image ads play better than text ads)
							<p class="p-lg">Once the advertisers created and submitted their ad campaigns, they have to wait until it is approved. It is not a difficult process and the ad will approve within a day or two.
							</p>

							<!-- Title -->
							<h4 class="h4-lg">How Ads Reach People?</h4>
							<!-- Text -->
							<p class="p-lg"> Once the campaign is approved, the ad will be Shown to the filtered audience.
							<p class="p-lg"> The one thing to remember is, this advertiser has more advertising competitors in the same industry. Their ads are equally approved.
							<p class="p-lg"> <b>Now, what happens? How will the ad reach the audience from the crowd of ads?</b>
							<p class="p-lg"> Facebook checks the ad quality, budget, ad bidding rate, industry, and estimated action rate.
							<p class="p-lg"> Finally, Facebook selects the ad with Ad’s total value (depends on ad quality, estimated action rate, and bidding rate)
							<p class="p-lg"> The highest total value of the ad will be the winner which has more priority when compared to other ads.
							<p class="p-lg"> <b>Take the following metrics in your campaign account:</b>
							<p class="p-lg"> Ad bidding rate
							<p class="p-lg"> Estimated action rate
							<p class="p-lg"> Ad relevance (also want to focus on keywords)
							<p class="p-lg"> Ad quality
							<p class="p-lg"> The higher the ad bidding strategy, the lower the Facebook ad costs.

							</p>

							<!-- Title -->
							<h4 class="h4-lg">5) Factors Determining Facebook Advertising Cost:</h4>
							<!-- Text -->
							<p class="p-lg"> The following are the main factors that decide the success of the ad campaigns:
							<p class="p-lg">1. Audience
							<p class="p-lg">2. Objective of Ad
							<p class="p-lg">3. Ad Budget and Bidding
							<p class="p-lg">4. Ad Placement
							<p class="p-lg"> 5. Ad Quality and Industry

							</p>

							<!-- Title -->
							<h4 class="h4-lg">AUDIENCE:</h4>
							<!-- Text -->
							<p class="p-lg"> The audience creates a strong impact on your Facebook ad campaign. Since there are various audience factors you have to consider, the cost expenses differ
							<p class="p-lg">For instance, if your audience is women, the CPC is $0.15 more than the men audience). Also, if you took on an age basis, the ad cost targeted for 55-65 years audience will be higher than the ad cost for 20-35 years audience. This is because the younger Facebook users are more (approx. 58 million people from 25 to34) than elder users (26 million people from 55 to 64).

								<img src="../images/sample-01.jpg">
							<p class="p-lg"><b>You can filter the target audience based on:</b>
							<p class="p-lg">Gender (Men, Women, or Both)
							<p class="p-lg">Age (20-30 or 30-50, etc.,)
							<p class="p-lg">Demography (Location-You can able to select the particular location to place your ad) - which means your local audience
							<p class="p-lg">Interest (This can be found when people mentioned their interest in profile or based on groups they follow)
							<p class="p-lg">The deeper and more specific the target audience, the lower and better the ad campaign result. You can filter specific interest people like an audience who are interested in sports like Football, meditation, travel, software, etc.,
							<p class="p-lg">Even more clear, if you are a travel-based organization and want to drive traffic through FB ads, you have to decide whether you want people who are interested in travel or people who are focusing on international travel.
							<p class="p-lg">I hope you understand the point- the more specific the audience, the more targeted traffic you will receive.
							</p>

							<!-- Title -->
							<h4 class="h4-lg">2. OBJECTIVE OF AD:</h4>
							<!-- Text -->
							<p class="p-lg"> If you are a beginner, you have to create a campaign for the first time.
								The objective of the ad is based on:

							</p>

							<!-- Title -->
							<h4 class="h4-lg">>Awareness</h4>
							<!-- Text -->
							<p class="p-lg">-Brand Awareness
							<p class="p-lg">-Reach
							<p class="p-lg">
							</p>

							<!-- Title -->
							<h4 class="h4-lg">>Consideration</h4>
							<!-- Text -->
							<p class="p-lg">-Traffic
							<p class="p-lg">-Engagement
							<p class="p-lg">-App Installs
							<p class="p-lg"> -Video Views
							<p class="p-lg"> -Lead Generation
							<p class="p-lg"> -Messages

							</p>

							<!-- Title -->
							<h4 class="h4-lg">>Conversion</h4>
							<!-- Text -->
							<p class="p-lg">-Conversions
							<p class="p-lg"> -Catalogue Sales
							<p class="p-lg"> -Store Traffic
								<img src="../images/sample-02.png">

							</p>


							<!-- Text -->
							<p class="p-lg"> <b>Awareness:</b> If the ad wants to reach more people, or if the ad goal is to introduce a new brand among more people, you can lie on this objective
							<p class="p-lg"> <b>Consideration:</b> This is the next step which is more than awareness. If you want the audience to visit your business (I.e..,) drive traffic to your website, app downloads, or lead inquiries, then you have to choose the consideration option.
							<p class="p-lg"> <b>Conversion:</b> The conversion part costs higher than the other two objectives. If you want to get the customer through your ad (audience who buys the product or makes a profit for your business) instead of just visiting your website, you have to choose this option.
							<p class="p-lg"> <b>Note:</b> If you choose the conversion objective, it means that you can get a profit with these ads. So, Facebook ad costs will be higher. Suppose, if you choose the remaining objectives like Awareness and Consideration, then the cost will be lesser than Conversion. But you will receive traffic and you have to take some efforts like solving client inquiries to turn these visitors into your customers.
							<p class="p-lg"> If you are doing marketing for a long time, you may know that Keywords are the soul of marketing strategies as it is the bridge to reach your customers. Many marketing experts advise focusing on long-term keywords that have low competition value.
							<p class="p-lg">Similarly, in the Facebook ad objective, selecting the Awareness or Consideration part is wiser as it has low competition value than the Conversion part as large businesses use this strategy often.

							</p>

							<!-- Title -->
							<h4 class="h4-lg">3. AD BUDGET AND BIDDING:</h4>
							<!-- Text -->
							<p class="p-lg"> This is the place where you have to concentrate more.
							<p class="p-lg"> Money is the first factor that hits your mind when starting paid marketing strategies. The more your budget, the more the ad you can create and run. But it is possible to run a successful campaign with a low budget.
							<p class="p-lg"> <b>Ad Budget:</b> You can have two options to invest your money in Facebook ads. One is the daily budget and the other is the maximum or total amount.
							<p class="p-lg"> With the daily budget option, you can set the amount you want to spend on ads per day, and also you can set the period (from starting to ending date). The fixed amount will be charged daily for a particular time.
							<p class="p-lg"> With the maximum or total amount option, you can fix the whole amount you want to invest in the ad and decide the time... Facebook will divide the per day budget from your whole amount and run the campaigns based on that process.
							<p class="p-lg"> <b>Ad Bidding:</b> After fixing the budget for the ad, it’s time to decide the ad bidding rate. For example, if you set $200 as the total ad budget for a month, and set the bidding rate as $2 per click, you will have low clicks or impressions. This is because the minimum CPC rate is $0.97 (as said above). Since your CPC bidding rate is low, the higher bidding rate ad will win. According to marketing research, it is a good idea to have a bidding rate of $5 per click (for the same $200 monthly ad budget), so you will win the bidding process and you will have the expected output.
							<p class="p-lg"> There are two options in ad bidding:

							</p>

							<!-- Title -->
							<h4 class="h4-lg">Lowest Cost Bid Strategy:</h4>
							<!-- Text -->
							<p class="p-lg"> It is the automatic bidding strategy where the bidding rate will automatically take the minimum amount of your total budget rate. This is well suitable for startups and beginners in Facebook ads.
							</p>

							<!-- Title -->
							<h4 class="h4-lg">Target Cost Bid Strategy:</h4>
							<!-- Text -->
							<p class="p-lg"> It is the manual bidding process, where you can decide the amount for the bidding rate. It is suited for large businesses who want to invest more in ads and also for experienced marketers.
								Remember, this is not enough for the ad winning process. The three metrics will be considered mainly like:
							<p class="p-lg"> <b>Ad Bidding Rate:</b> Choose the bidding option (Lowest or target cost) carefully based on your budget and ad goal.
							<p class="p-lg"> <b>Estimated Action Rates:</b> Estimated actions are the output taken by your audience. Whether it will be visiting your website, downloading your app, or purchasing your product. You have to know the required action chosen by the people.
							<p class="p-lg"> <b>Ad Quality:</b> Again, the ad appearance is also taken into account. Creating a simple and informative ad format will be appreciated.
								These three factors choose the best winning ad and the winning ad deserves more preferences.


							</p>

							<!-- Title -->
							<h4 class="h4-lg">4. AD PLACEMENT:</h4>
							<!-- Text -->
							<p class="p-lg"> Ad placement is the place where your ads are displayed on Facebook. Facebook allows six places to display ads from the advertisers:
							<p class="p-lg">• Facebook Feed
								<br>• Right Column of Facebook
								<br>• FB Messenger
								<br>• Audience Network
								<br>• Instagram
								<br>• Instagram Stories

							</p>

							<!-- Title -->
							<h4 class="h4-lg">Facebook:</h4>
							<!-- Text -->
							<p class="p-lg">Facebook is the parent platform where the CPC rate is $0.30 less than Instagram. On Facebook, you can have places like Facebook Newsfeed, right column and the popular FB chatting app- Facebook Messenger to place your ad.
							</p>


							<!-- Title -->
							<h4 class="h4-lg">Instagram:</h4>
							<!-- Text -->
							<p class="p-lg"> Since Facebook acquired Instagram, you can link your Fb account with an IG account to display ads which saves your time and money.
								<br>The Instagram ad process is a separate task and if you want to do an Instagram campaign separately, it will cost more when compared to Facebook. The minimum CPC rate on Instagram is around $0.78 and on average businesses spend $0.80 to get good results.

							</p>

							<!-- Title -->
							<h4 class="h4-lg">Audience Network:</h4>
							<!-- Text -->
							<p class="p-lg"> With Audience Network, you can display your ad on a website or mobile app; this is the best option to consider as the CPC rate is lower than Facebook and Instagram.
							<p class="p-lg">Ad Quality: Ad quality talks about audience engagement with your ad. The ad will be in any format like Image, Text, or video; but it should be attractive and informative. Facebook will cancel the ads that do not belong to their terms and conditions.
							<p class="p-lg">Every ad deserves relevance and engagement score based on its ad quality. This ranking is between 1 to 10. 10 means a higher and good engagement score. 1 means lower and worst engagement score. Once your ad hits 500 impressions, you will be able to receive the score.
							<p class="p-lg">Maintain a good score to reach a greater number of people and to be easily approved by the Facebook ads manager. In your ad's manager dashboard, select your ad and click “Customize Column”. You will see the relevance and engagement score for your ad.



								<!-- Title -->
							<h4 class="h4-lg">Ad Industry:</h4>
							<!-- Text -->
							<p class="p-lg">Before jumping into the industry, you have to know that you can display ads for particular seasons like:
							<p class="p-lg">• Thanks Giving Day
								<br>• Christmas
								<br>• New Year
								<br>• Black Friday
								<br>• Diwali (In case, you are focusing on India)
								<br>When compared to other days, these functional or seasonal days have higher engagement with the audience. So, it is easy to announce your business updates to your customers.
								<br>This shows the variation of CPC rates for different industries. Check your appropriate field.

							</p>

							<!-- Title -->
							<h4 class="h4-lg">Finally:</h4>
							<!-- Text -->
							<p class="p-lg"> This article shows the complete ad cost for different industries and different ad criteria. Remember this guide while running your ad campaign.
							<p class="p-lg">Are you new to Ad campaigns? It’s important to know this marketing process as you will invest both your valuables- TIME AND MONEY. Be careful while running ad campaigns. If you are a beginner, it is the best decision to hire market experts like us to run your ad campaigns. Contact us now to discuss your marketing plan and we will start a successful Facebook ad campaign for your business/brand.
							</p>


						</div> <!-- END BLOG POST TEXT -->

						<!-- SINGLE POST SHARE LINKS -->
						<div class="row post-share-links d-flex align-items-center">

							<!-- POST TAGS -->
							<div class="col-md-9 col-xl-9 post-tags-list">
								<div class='didide '>
									<span><a href="#">how much does it cost to advertise on Facebook</a></span>
									<span><a href="#"> how much does it cost for Facebook ads</a></span>
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

			<?php include('newblog.php') ?>


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

			"url": "https://www.clickboxagency.com/digital-marketing-checklist/",

			"potentialAction": {

				"@type": "SearchAction",

				"target": "https://www.clickboxagency.com/how-much-does-it-cost-for-facebook-ads/find?q={search_term_string}",

				"query-input": "required name=search_term_string"

			}

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "http://schema.org",

			"@type": "WebSite",

			"name": "How Much Does Facebook Advertising Cost in 2022?",

			"alternateName": "how much does it cost to advertise on Facebook, how much does it cost for Facebook ads",

			"url": "https://www.clickboxagency.com/how-much-does-it-cost-for-facebook-ads/"

		}
	</script>

	<script type="application/ld+json">
		{

			"@context": "https://schema.org",

			"@type": "Organization",

			"name": "How Much Does Facebook Advertising Cost in 2022",

			"url": "https://www.clickboxagency.com/how-much-does-it-cost-for-facebook-ads/",

			"email": "info@clickboxagency.com",

			"foundingDate": "2022",

			"description": "Facebook advertisement costs varies with the industry. Check this ultimate guide to know the cost of the Facebook advertisement in 2022.",

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