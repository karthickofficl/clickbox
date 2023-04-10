<?php

if (isset($_POST['send'])) {
    // echo "hello"; die;

    // getting post values
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $job = $_POST['services'];
    $message = $_POST['message'];
    $subject = 'Career Job Application';

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
            <th>Location:</th><td>' . $location . '</td> 
        </tr> 
         <tr style="background-color: #e0e0e0;"> 
            <th>Job:</th><td>' . $job . '</td> 
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
        // echo 'Message has been sent';
        // echo 'Our talent acquisition team will get in touch with you shortly.!';
        //     header("Location: https://www.akkenna.com/returnn");
        // $result = 'Our talent acquisition team will get in touch with you shortly.!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="ClickBox Agency" />
    <title>Join Our Team: Clickbox Creative Marketing Agency</title>
    <meta name="description" content="Looking to build a successful career? Explore our career page to find job opportunities." />
    <meta name="keywords" content="clickbox digital marketing jobs coimbatore,content writing jobs coimbatore,digital marketing executive jobs coimbatore,frontend developer jobs coimbatore">
    <meta name="language" content="en" />
    <meta name="revisit-after" content="7 days" />
    <meta name="Expires" content="never" />
    <meta name="Distribution" content="Global" />
    <meta name="Rating" content="general" />
    <meta name="search engines" content="ALL" />
    <meta name="copyright" content="www.clickboxagency.com" />
    <meta name="email" content="info@clickboxagency.com" />
    <link rel="canonical" href="https://www.clickboxagency.com/careers/" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://www.clickboxagency.com/careers/" />
    <meta property="og:site_name" content="https://www.clickboxagency.com/careers/" />
    <meta property="og:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />
    <meta property="og:title" content="Join Our Team: Clickbox Creative Marketing Agency" />
    <meta property="og:description" content="Looking to build a successful career? Explore our career page to find job opportunities." />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Join Our Team: Clickbox Creative Marketing Agency" />
    <meta name="twitter:description" content="Looking to build a successful career? Explore our career page to find job opportunities." />
    <meta name="twitter:image" content="www.clickboxagency.com/images/clickbox-og.jpg" />
    <!--<link href="../css/career.css" rel="stylesheet">-->

    <?php include('header-style.php') ?>

    <style>
        #hero-23 {
            background-image: none !important;
        }

        .card {
            border: 0px !important;
            border-radius: 0px !important;
            padding: 1.6em 1em !important;
            display: flex !important;
            align-items: center !important;
            justify-content: center !important;

        }

        .card h6 {
            color: #070000;
            font-size: 25px;
        }

        .CardDisplay {
            /* background-color: #070000; */
            width: 510px;
            display: flex;
            gap: 10px;
            color: #070000;
        }

        .cardhead {
            margin-top: 5px;
        }

        .cardjob {
            margin-top: 5px;
        }

        @media (max-width:555px) {
            .contain p {
                width: 0px;
            }

            .CardDisplay {

                display: flex;
                flex-wrap: wrap;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 0px;
            }

            .note {
                margin-top: 0em !important;
            }
        }

        .contain p {
            font-size: 25px;
            /* padding: 0.5rem; */
            /* font-weight: bold; */
            letter-spacing: 0.1rem;
            text-align: center;
            overflow: hidden;
            color: #cf0042;
            width: 180px;
        }

        .contain p span.typed-text {
            font-weight: normal;
            color: #cf0042;
        }

        .contain p span.cursor {
            display: inline-block;
            background-color: #cf0042;
            margin-left: 0.1rem;
            width: 3px;
            animation: blink 1s infinite;
        }

        .contain p span.cursor.typing {
            animation: none;
        }

        @keyframes blink {
            0% {
                background-color: #ccc;
            }

            49% {
                background-color: #ccc;
            }

            50% {
                background-color: transparent;
            }

            99% {
                background-color: transparent;
            }

            100% {
                background-color: #ccc;
            }
        }


        .note {
            font-size: 18px !important;
            color: black !important;
            margin-top: 4em !important;
            max-width: 600px;
            min-width: 250px;
        }

        @media (max-width:555px) {
            .note {
                margin-top: 1em !important;
            }
        }

        .scroller {
            height: 1.1em;
            line-height: 1.2em;
            position: relative;
            overflow: hidden;
            width: 10em;
        }

        .scrollJob {
            position: absolute;
            right: -1px;
        }

        .scroller>span {
            position: absolute;
            top: 0;
            right: 75px;
            animation: slide 5s infinite;
            font-weight: bold;
            color: black !important;
        }

        @keyframes slide {
            0% {
                top: 0;
            }

            25% {
                top: -1.4em;
            }

            50% {
                top: -2.4em;
            }

            75% {
                top: -4em;
            }
        }

        .LookingFor {
            text-align: center;
        }

        .LookingFor strong {
            text-transform: uppercase;
            color: #cf1e46;
        }

        .LookingFor>h1>span {
            text-align: center;
            color: black;
        }

        .LookingFor p {
            font-size: 18px;
        }

        .workStandard {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            min-height: 40vh;
            max-height: auto;
            gap: 1rem;

        }

        .workDetails {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 1rem;
            text-align: center;
        }

        .workDetails h5 {
            font: 15px;
            font-weight: 700;
        }

        .workDetails img {
            width: 70px;
            height: 50px;
        }

        .workDetails p {
            font: 12px;
            width: 300px;
            font-weight: 500;
        }

        .joinSection {
            min-height: 80vh;
            max-height: auto;
            text-align: center;
        }

        .joinMain {
            display: flex;
            margin-top: 30px;
            width: 100%;
        }

        .joinList {
            margin: 20px 5px;
            padding: 10px 20px;
            display: flex;
        }

        .joinList>a {
            position: relative;
            font-size: 20px;
            letter-spacing: 2px;
            font-weight: 400;
            padding-left: 160px;
        }

        .joinList>a::after {
            position: absolute;
            bottom: 0;
            left: 150px;
            right: 100px;
            margin: auto;
            width: 0%;
            content: '.';
            color: transparent;
            background: #aaa;
            height: 2px;
            transition: all 0.2s;
        }

        .joinList>a:hover:after {
            width: 80%;
        }

        @media (max-width:1300px) {
            .joinList>a {
                padding-left: 0px;
            }
        }

        @media (max-width:500px) {
            .joinList {
                margin: 10px 5px;
                padding: 10px 0px;
                display: flex;
            }

            .joinContainer {
                padding-right: 0px !important;
            }

            .joinList>a {
                position: relative;
                font-size: 15px;
                letter-spacing: 0px;
                font-weight: 400;
                padding-left: 0px;
            }
        }

        .listHead h1 {
            background: linear-gradient(to right, #070000 0%, #00a4e1 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .listHead {
            display: flex;
            flex-wrap: wrap;
            gap: 5rem;
            text-align: center;
        }

        .workDetails img {
            color: #00a4e1;
        }

        .accordion-button {
            gap: 2rem;
        }


        .jobcontainer {
            display: flex !important;
            flex-direction: column !important;
            justify-content: center !important;
            width: 70% !important;
        }

        @media (max-width:600px) {
            .experince {
                display: none !important;
            }

            .jobcontainer {
                width: 100% !important;
                margin: 0px 10px !important;
            }

        }

        @media (max-width:992px) {
            .jobcontainer {
                width: 100% !important;
            }

        }

        .jobButton {
            border: none;
            outline: none;
            background-color: #cf0042;
            padding: 5px;
            color: #ffffff;
            border-radius: 5px;
        }
    </style>
</head>


<body>

    <?php include('header.php') ?>

    <section id="hero-23" class="bg-scroll hero-section division">
        <div class="container">
            <div class="row d-flex align-items-center">
                <!-- HERO TEXT -->
                <div class="col-lg-12">
                    <div class="hero-23-txt white-color wow fadeInRight wordchange">
                        <div class="row">
                            <div class="card col-lg-6">
                                <div class="CardDisplay">
                                    <div class="cardhead">
                                        <h6>Are you Looking For </h6>
                                    </div>
                                    <div class="contain">
                                        <p><span class="typed-text"></span><span class="cursor">&nbsp;</span></p>
                                    </div>
                                    <div class="cardjob">
                                        <h6>Job?</h6>
                                    </div>
                                </div>
                                <p class="note">We're a dynamic team of experts in the industry, driven by innovation and creativity. Join us to develop cutting-edge strategies, build strong relationships with clients, and make a measurable impact in the digital world. Explore our current openings and take the first step towards an exciting and fulfilling career with us.</p>
                            </div>
                            <div class="card col-lg-6">
                                <img class="img-fluid" src="https://www.clickboxagency.com/images/logo-design-01.png" alt="logo-design-coimbatore">
                            </div>
                        </div>
                    </div>
                </div> <!-- END HERO TEXT -->
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END HERO-23 -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 LookingFor">
                    <h1><span>All that you need to know</span> <strong>about ClickBox !</strong></h1>
                    <p>Find the answers to the questions we get asked the most about our work policies.</p>
                </div>
                <div class="col-lg-12 d-flex flex-wrap workStandard">
                    <!-- <div class=""> -->
                    <div class="workDetails">
                        <img src="../images/png-icons/time-past.svg" alt="icon">
                        <h5>Workdays</h5>
                        <p>Monday - Friday: 10 AM to 7 PM Saturday: Half Day</p>
                    </div>
                    <div class="workDetails">
                        <img src="../images/png-icons/wifi.svg" alt="icon">
                        <h5>Work-Location</h5>
                        <p> Anywhere with High Speed Internet On Site - Hybrid</p>
                    </div>
                    <div class="workDetails">
                        <img src="../images/png-icons/laptop.svg" alt="icon">
                        <h5>Leaves & Probation</h5>
                        <p>Leaves: 12 Days Annual Paid LeavesProbation: 6 Months</p>
                    </div>
                    <!-- </div> -->
                </div>
                <div class="col-lg-12 d-flex flex-wrap workStandard">
                    <div class="workDetails">
                        <img src="../images/png-icons/wallet.svg" alt="icon">
                        <h5>Salary Cycle</h5>
                        <p>5th of every month</p>
                    </div>
                    <div class="workDetails">
                        <img src="../images/png-icons/badge-dollar.svg" alt="icon">
                        <h5>Salary Appraisal</h5>
                        <p>Post 1 Year Completion</p>
                    </div>
                    <div class="workDetails">
                        <img src="../images/png-icons/stats.svg" alt="icon">
                        <h5>Performance Evaluation</h5>
                        <p>Doing a Monthly Self Evaluation</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="mt-30 mb-30">
        <div class="container-fluid jobcontainer">
            <h1 class="text-center mt-50 mb-50 ">Current Opening</h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <div>
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#DigitalMarketing " aria-expanded="true" aria-controls="collapseOne">
                                        <span>1. Digital Marketing Executive</span>
                                        <span class="experince">(Experience:Minimum 1-2 Years)</span>
                                    </button>
                                </h2>
                            </div>
                            <!-- collapse show -->
                            <div id="DigitalMarketing" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>The ideal candidate will oversee the online marketing strategy for the organization by planning and executing digital marketing campaigns. This candidate will launch advertisements and create content to increase brand awareness. This candidate will have previous marketing experience and be able to monitor the company's social media presence.</p>
                                    <br>
                                    <strong>Responsibility</strong>
                                    <div>
                                        <ul>
                                            <li>Plan and monitor the ongoing company presence on social media (LinkedIn, Facebook, etc. ).</li>
                                            <li>Launch optimized online adverts through Google Adwords, Facebook, etc. to increase company and brand awareness.</li>
                                            <li>Be actively involved in SEO efforts (keyword, image optimization, etc. ).</li>
                                            <li>Prepare online newsletters and promotional emails and organize their distribution through various channels.</li>
                                            <li>Provide creative ideas for content marketing and update the website.</li>
                                            <li>Collaborate with designers to improve user experience.</li>
                                            <li>Measure the performance of digital marketing efforts using a variety of Web analytics tools (Google Analytics, WebTrends, etc. ).</li>
                                            <li>Acquire insight into online marketing trends and keep strategies up-to-date.</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <strong>Requirements</strong>
                                    <div>
                                        <ul>
                                            <li>1 + years of Digital Marketing Executive or similar role.</li>
                                            <li>Excellent understanding of digital marketing concepts and best practices.</li>
                                            <li>Experience with B2B social media, Google Adwords and email campaigns, and SEO/SEM.</li>
                                            <li>Perfect knowledge of web analytics tools (e. g. Google Analytics, NetInsight, Web Trends, etc. ).</li>
                                            <li>Skills and experience in creative content writing</li>
                                            <li>Analytical mindset and critical thinking.</li>
                                            <li>Excellent communication and interpersonal skills.</li>
                                        </ul>
                                    </div>
                                    <strong>Job Type :</strong>
                                    <p>Full-time</p>
                                    <strong>Experience:</strong>
                                    <p>Minimum 0-2 Years</p>
                                    <div>
                                        <a href="#jobForm"><button class="jobButton">Apply Now </button></a>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ContentWriter" aria-expanded="true" aria-controls="collapseOne">
                                    <span>2. Content Writer</span>
                                    <span class="experince">(Experience:Minimum 0-2 Years)</span>
                                </button>
                            </h2>
                            <div id="ContentWriter" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>We are seeking a Content Writer to join our editorial team and contribute fresh blog entries, tutorials, and marketing copy to our websites.</p>
                                    <p>Content Writer duties involve performing extensive research on industry-related subjects, producing ideas for new content categories, and proofreading pieces before publishing. If you have experience creating web material and an eye for detail, we would like to meet you. Provide samples of your published work or a portfolio of your published papers with your application.</p>
                                    <p>You will ultimately produce high-quality content that appeals to our audiences, attracts consumers, and increases brand recognition.</p>
                                    <br>
                                    <strong>Duties and Responsibilities</strong>
                                    <div>
                                        <ul>
                                            <li>Investigate industry-related subjects (combining online sources, interviews and studies)</li>
                                            <li>Create marketing text that effectively promotes our products/services.</li>
                                            <li>With Content Management Systems, create well-structured draughts.</li>
                                            <li>Edit and proofread blog entries before publishing.</li>
                                            <li>Submit work for feedback and approval to editors</li>
                                            <li>Collaborate with marketing and design teams to illustrate content. Perform simple keyword analysis and use SEO best practices to enhance website traffic.</li>
                                            <li>Promote information on social media</li>
                                            <li>Assess client demands and content gaps and suggest new subjects.</li>
                                            <li>Verify global consistencies (style, fonts, images and tone)</li>
                                            <li>Refresh website content as necessary</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <strong>Requirements and skills</strong>
                                    <div>
                                        <ul>
                                            <li>Proven track record of success in the field as a Content Writer, Copywriter, or related role.</li>
                                            <li>The ability to do research from several sources</li>
                                            <li>Familiarity with posting on the web</li>
                                            <li>Expertise in writing and editing in English</li>
                                            <li>Technical expertise in content management systems (e.g. WordPress)</li>
                                            <li>Having the ability to consistently meet deadlines</li>
                                            <li>Excellent communication and interpersonal skills.</li>
                                        </ul>
                                    </div>
                                    <strong>Job Type :</strong>
                                    <p>Full-time</p>
                                    <strong>Experience:</strong>
                                    <p>Minimum 1-2 Years</p>
                                    <div>
                                        <a href="#jobForm"><button class="jobButton">Apply Now </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#BusinessDevelopment" aria-expanded="true" aria-controls="collapseOne">
                                    <span> 3. Business Development Executive</span>
                                    <span class="experince">(Experience:Minimum 0-2 Years)</span>
                                </button>
                            </h2>
                            <div id="BusinessDevelopment" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>Job description</strong>
                                    <p>Looking for IT sales to assist in various stages of the sales funnel, including creating awareness of new offerings, and generating leads.</p>
                                    <br>
                                    <strong>Duties and Responsibilities</strong>
                                    <div>
                                        <ul>
                                            <li>Research and generate lists of potential customers</li>
                                            <li>To nurture the database and ensure maximum customer progression</li>
                                            <li>Provide input on customer briefs, presentations, and sales literature</li>
                                            <li>Help develop client relationships.</li>
                                            <li>Learn and apply sales techniques</li>
                                            <li>Handle CRM and maintain sales records</li>
                                            <li>Rotating Shift depending on region requirements</li>
                                        </ul>
                                    </div>
                                    <br>
                                    <strong>Key Skills</strong>
                                    <div>
                                        <ul>
                                            <li>Any Graduate or MBA</li>
                                            <li>Ability to work in a fast-paced team environment</li>
                                            <li>Excellent written and verbal communication skills are required.</li>
                                            <li>Strong interest in the IT industry</li>
                                            <li>Highly organized and able to manage multiple priorities</li>
                                            <li>Self-motivated with a strong work ethic and a passion to make a difference</li>
                                        </ul>
                                    </div>
                                    <strong>Job Type :</strong>
                                    <p>Full-time</p>
                                    <strong>Experience:</strong>
                                    <p>Minimum 0-2 Years</p>
                                    <div>
                                        <a href="#jobForm"><button class="jobButton">Apply Now </button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#UIUX" aria-expanded="true" aria-controls="collapseOne">
                                <span>4. UI UX Designer</span>
                                <span class="experince">(Experience:Minimum 0-2 Years)</span>
                            </button>
                        </h2>
                        <div id="UIUX" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>A strong portfolio of illustrations or graphics will be preferred
                                    Familiarity with design software and technologies (such as Figma, Invision, Sketch, InDesign, Illustrator, Adobe XD, Photoshop)
                                </p>
                                <br>
                                <strong>A keen eye for aesthetics and details</strong>
                                <div>
                                    <ul>
                                        <li>Excellent communication skills</li>
                                        <li>Ability to work me thodically and meet deadlines</li>
                                        <li>Layout skills</li>
                                        <li>Analytical skills</li>
                                        <li>Creativity</li>
                                        <li>Flexibility</li>
                                        <li>Attention to detail</li>
                                        <li>Deadline-oriented</li>
                                    </ul>
                                </div>
                                <br>
                                <strong>Responsibilities</strong>
                                <div>
                                    <ul>
                                        <li>Develop design solutions for various platforms</li>
                                        <li>Establish consistent brand and creative designs</li>
                                        <li>Communicate ideas with project managers using mock-up and look books</li>
                                        <li>Collect feedback from project managers and adjust approach to cater to criteria</li>
                                        <li>Build sitemaps, wireframes and prototypes to outline structure</li>
                                        <li>Passionate with UI UX design and professional digital, sensitive with the latest design trends and understand how to apply on the business</li>
                                        <li>Familiar with Adobe design software, especially in XD, AE, InDesign, Illustrator and Photoshop</li>
                                        <li>Have learning ability, team spirit, and the sense of responsibility</li>
                                    </ul>
                                </div>
                                <strong>Job Type :</strong>
                                <p>Full-time</p>
                                <strong>Experience:</strong>
                                <p>Minimum 1-2 Years</p>
                                <div>
                                    <a href="#jobForm"><button class="jobButton">Apply Now </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#MarketingManager" aria-expanded="true" aria-controls="collapseOne">
                                <span>5 .Digital Marketing Manager</span>
                                <span class="experince">(Experience:Minimum 2-3 Years)</span>

                            </button>
                        </h2>
                        <div id="MarketingManager" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>The ideal candidate will expand the company's brand presence by finding the target audience to distribute marketing content. You will create and implement the marketing strategy using both offline and online methods to gain new customers. The ideal candidate is both a self-motivated individual and a positive team player</p>
                                <br>
                                <strong>Responsibilities</strong>
                                <div>
                                    <ul>
                                        <li>Plan and execute all digital marketing strategies, including campaigns for email, social media, SEO/SEM, and display advertising.</li>
                                        <li>building, constructing, and maintaining our social media presence</li>
                                        <li>Every digital marketing campaign is measured, reported, and assessed based on predetermined goals (ROI and KPIs)</li>
                                        <li>Uncover trends and insights, then modify expenditures and output based on the acquired information.</li>
                                        <li>Develop fresh and creative growth strategies</li>
                                        <li>Plan, execute, and evaluate scientific studies and conversion tests.</li>
                                        <li>Develop landing pages with internal departments that enhance the user experience.</li>
                                        <li>Using your exceptional analytic abilities, evaluate the whole client experience across all channels and touchpoints.</li>
                                        <li>Improve funnels and conversion points for users</li>
                                        <li>collaborate with companies and other vendor partners</li>
                                        <li>Evaluate innovative technologies. If applicable, exhibit thought leadership and an adoption viewpoint.</li>
                                    </ul>
                                </div>
                                <br>
                                <strong>Qualifications</strong>
                                <div>
                                    <ul>
                                        <li>2 - 4 years of marketing experience</li>
                                        <li>Content creation skills</li>
                                        <li>Excellent communication and organizational skills</li>
                                    </ul>
                                </div>
                                <strong>Job Type :</strong>
                                <p>Full-time</p>
                                <strong>Experience:</strong>
                                <p>Minimum 0-2 Years</p>
                                <div>
                                    <a href="#jobForm"><button class="jobButton">Apply Now </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#FrontEnd" aria-expanded="true" aria-controls="collapseOne">
                                <span>6 .Front-end Developer</span>
                                <span class="experince">(Experience:Minimum 0-2 Years)</span>
                            </button>
                        </h2>
                        <div id="FrontEnd" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <!-- <strong>Job description</strong> -->
                                <p>We are looking for a Front-End Web Developer who is motivated to combine the art of design with the art of programming.Read more</p>
                                <p>Responsibilities will include translation of the Ul/UX design wireframes to actual code that will produce visual elements of the application. You will work with the Ul/UX designer and bridge the gap between graphical design and technical implementation, taking an active role on both sides and defining how the application looks as well as how it works.</p>
                                <br>
                                <strong>Key Requirement</strong>
                                <div>
                                    <ul>
                                        <li>Exceptional coding skills in JavaScript (both frontend and backend)</li>
                                        <li>Decent proficiency in HTMLNodeJS, MongoDB/MySQL, ReactJS</li>
                                        <li>Proficiency and hands-on experience with one of more of the following: Backbone / ReactJS / AngularJS</li>
                                        <li>Implementing an elegant, intuitive user experience using latest front-end and back-end technologies</li>
                                        <li>Thorough knowledge of software development best practices, including coding standards, code reviews, source control management, build process, continuous integration and continuous delivery.</li>
                                        <li>Exceptional verbal, written and listening skills.</li>
                                        <li>Excellent programming skills with good understanding of Object oriented programming </li>
                                    </ul>
                                </div>
                                <br>
                                <strong>Concepts</strong>
                                <div>
                                    <ul>
                                        <li> Share project updates in Sprint Reviews.</li>
                                        <li>Ability to learn new technologies quickly.</li>
                                        <li>Build reusable code and libraries for future use.</li>
                                        <li>Ensure the technical feasibility of Ul/UX designs</li>
                                        <li>Optimize application for maximum speed and scalability</li>
                                    </ul>
                                </div>
                                <strong>Job Type :</strong>
                                <p>Full-time</p>
                                <strong> Job Category: </strong>
                                <p> Frontend Developer</p>
                                <strong>Experience:</strong>
                                <p> 0 - 2 years experience in the industry</p>
                                <div>
                                    <a href="#jobForm"><button class="jobButton">Apply Now </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </section>
    <section id="contacts-2" class="bg-snow pt-85 contacts-section division">
        <div class="container">

            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title title-02 mb-80">
                        <!-- Title -->
                        <h2 class="p-lg txtredd">Freedom to innovate, take decisions and be in charge of the achievements. Join us!</h2>
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
                        <form name="contactform" method="post" class="row contact-form" id="jobForm" enctype="multipart/form-data">
                            <div class="col-md-6"> <input type="text" name="name" class="form-control name" placeholder="Your Name*">
                            </div>

                            <div class="col-md-6"><input type="text" name="email" class="form-control email" placeholder="Email Address*">
                            </div>
                            <div class="col-md-6"> <input type="text" name="phone" class="form-control phone" placeholder="Mobile Number*">
                            </div>
                            <div class="col-md-6"> <input type="text" name="location" class="form-control location" placeholder="Your Location*">
                            </div>
                            <div class="col-md-12">
                                <select class="form-select" aria-label="services" name="services" id="services">
                                    <option selected>Applying For Job</option>
                                    <option value="Digital Marketing Executive">Digital Marketing Executive</option>
                                    <option value="Content Writer">Content Writer</option>
                                    <option value="Business Development Executive">Business Development Executive</option>
                                    <option value="UI UX Designer">UI UX Designer</option>
                                    <option value="Digital Marketing Manager">Digital Marketing Manager</option>
                                    <option value="Front-end Developer"> Front-end Developer</option>
                                </select>
                            </div>
                            <div class="col-md-12"><textarea class="form-control message" name="message" rows="6" placeholder="About Yourself..."></textarea>
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
                                        echo '<div class="alert alert-success"><b>Your Job Application is successfully received. </b>' . $result . '</div>';
                                    } ?>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div> <!-- END CONTACT FORM -->
        </div> <!-- End container -->
    </section> <!-- END CONTACTS-2 -->
    <?php include('footer.php') ?>
    </div> <!-- END PAGE CONTENT -->
    <?php include('footer-script.php') ?>
    <script>
        const typedTextSpan = document.querySelector(".typed-text");
        const cursorSpan = document.querySelector(".cursor");

        const textArray = ["Creative", "Collaborative", "Productive", "Challenging"];
        const typingDelay = 200;
        const erasingDelay = 100;
        const newTextDelay = 2000; // Delay between current and next text
        let textArrayIndex = 0;
        let charIndex = 0;

        function type() {
            if (charIndex < textArray[textArrayIndex].length) {
                if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
                charIndex++;
                setTimeout(type, typingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                setTimeout(erase, newTextDelay);
            }
        }

        function erase() {
            if (charIndex > 0) {
                if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
                charIndex--;
                setTimeout(erase, erasingDelay);
            } else {
                cursorSpan.classList.remove("typing");
                textArrayIndex++;
                if (textArrayIndex >= textArray.length) textArrayIndex = 0;
                setTimeout(type, typingDelay + 1100);
            }
        }

        document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
            if (textArray.length) setTimeout(type, newTextDelay + 250);
        });
    </script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "url": "https://www.clickboxagency.com/careers/",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "https://www.clickboxagency.com/careers/find?q={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Join Our Team: Clickbox Creative Marketing Agency",
            "alternateName": "clickbox digital marketing jobs coimbatore,content writing jobs coimbatore,digital marketing executive jobs coimbatore,frontend developer jobs coimbatore",
            "url": "https://www.clickboxagency.com/careers/"
        }
    </script>

    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "Join Our Team: Job Opportunities and Career Development  Clickbox Creative Marketing Agency",
            "url": "https://www.clickboxagency.com/careers/",
            "email": "info@clickboxagency.com",
            "foundingDate": "2022",
            "description": "Looking to build a successful career? Explore our career page to find job opportunities.",
            "logo": "www.clickboxagency.com/images/logo-01.png",
            "contactPoint": {
                "@type": "ContactPoint",
                "telephone": "+91 71485 55209",
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

</body>

</html>