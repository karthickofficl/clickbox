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
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <style>
        /* Add your desired styling here */
        body {
            font-family: 'Rubik', 'Helvetica Neue', Helvetica, Arial, sans-serif;
            color: #6c757d;
            line-height: 1.6666;
            font-weight: 400;
        }

        .page-content {
            padding: 20px;
        }

        .form-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .form-container {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 25%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-container h2 {
            text-align: center;
        }

        .d-block {
            display: block;
        }



        .form-container input[type=text],
        .form-container input[type=email] {
            width: 100%;
            padding: 8px;
            margin: 8px 0;
            box-sizing: border-box;
        }

        .form-container .btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 20px;
            font-weight: bold;
            color: #555;
            cursor: pointer;
        }

        .close:hover {
            color: #000;
        }
    </style>
   
</head>

<body>

    <div class="page-content">




        <div class="container">
            <div class="row justify-content-center">

                <div id="popupForm" class="form-popup">
                    <div class="form-container">
                        <span class="close" onclick="closeForm()">&times;</span>
                        <h2>Get Proposal</h2>
                        <form name="contactform" method="post" class="row contact-form">
                            <!-- Contact Form Input -->
                            <div class=" d-block">
                                <input type="text" name="name" class="form-control name" placeholder="Your Name*">
                            </div>
                            <div class=" d-block">
                                <input type="email" name="email" class="form-control email" placeholder="Email Address*">
                            </div>
                            <div>
                                <input type="text" name="phone" class="form-control phone" placeholder="Mobile Number*">
                            </div>

                            <div class="col-md-12 mt-15 form-btn text-right">
                                <button type="submit" class="btn btn-skyblue yellow-hover submit" name="send">Submit Request</button>
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
            </div>
        </div>
        </section>
    </div>
</body>

</html>

<script>
    

    function closeForm() {
        document.getElementById("popupForm").style.display = "none";
    }
</script>
