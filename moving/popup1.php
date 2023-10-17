<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require ($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/Exception.php');
require ($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/PHPMailer.php');
require ($_SERVER['DOCUMENT_ROOT'].'/PHPMailer/src/SMTP.php');

//  
if (isset($_POST['send'])) {
    
    // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
    
        $name = $_POST['name'];
    	$email = $_POST['email'];
    	$phone = $_POST['phone'];
    	$subject = 'Popup Form Details';
    	$message =$_POST['message']; 
        
        //Server settings
        $mail->SMTPDebug = 0;                      // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'clickboxagency.com';                    // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'noreply@clickboxagency.com';                     // SMTP username
        $mail->Password   = '@A9(n@kXW!$+';                               // SMTP password
        $mail->SMTPSecure = 'SSL';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
    
        //Recipients
        $mail->setFrom('sales@clickboxagency.com', 'Click Box Agency');
        $mail->addAddress('iamjamesstephan@gmail.com', 'James');
        // $mail->addAddress('sales@clickboxagency.com', 'Click Box Agency');
        // $mail->addAddress('kannan2187@gmail.com', 'Kannan Perumal');  // Add a recipient
        
       // $mail->addAddress('ellen@example.com');               // Name is optional
        // $mail->addReplyTo($email, $name);
        // $mail->addCC('iamjamesstephan@gmail.com');
        // $mail->addBCC('kannan2187@gmail.com');
    
        // Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
        
        $body =' 
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
        
        // Content
        $mail->isHTML(true); // Set email format to HTML
        $mail->Subject = 'New Enquiry from Clickboxagency';
        $mail->Body    = 'Hi admin, from <b>' . $name . '!</b> <br /> <p>' . $body . '</p>';
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $m = $mail->send();
        print_r($m);
        if (!$m) {
		echo 'Message could not be sent.';
    	} else {
    		// echo 'Message has been sent';
    		$result = '
        One of our representative will get in touch you.';
    	}
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

	// getting post values
	/* $name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$subject = 'Popup Form Details';
	$message = isset($_POST['message']) ? $_POST['message'] : ''; 
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
	$headers .= 'Bcc: techjam1993@gmail.com' . "\r\n";
	// Additional headers 


	$m = mail($to, $subject, $htmlContent, $headers);

	// Set content-type header for sending HTML email

	if (!$m) {
		echo 'Message could not be sent.';
	} else {
		// echo 'Message has been sent';
		$result = '
    One of our representative will get in touch you.';
	} */
} 
// else{
//     print_r("ssdfs");die;
// }
?>



    <!-- Template Main CSS File -->
    <link href="https://clickboxagency.com/css/style-new.css" rel="stylesheet">
    <style>

        /*==========================================================
=               Hero Section Consultant Form               =
============================================================*/
        [data-form_id="hero_section"] .consult-form .has-search .form-control-feedback,
        [data-form_id="hero_section"] .consult-form .form-control,
        [data-form_id="hero_section"] .form-control::placeholder {
            color: #474564cc;
        }

        [data-form_id="hero_section"] .consult-form .form-control:not(textarea) {
            height: 45px;
        }

        [data-form_id="hero_section"] .consult-form .has-search .form-control-feedback {
            line-height: 3rem;
        }

        /*=====  End of Hero Section Consultant Form  ======*/


        /*==========================================================
=                   PopUp Consultant Form                  =
============================================================*/
        [data-form_id="popup"] .close-icon-wrap {
            position: absolute;
            z-index: 1;
            right: 8px;
            top: 8px;
        }

        [data-form_id="popup"] .close-icon-wrap .icon {
            color: #e3e3e3;
        }

        @media (min-width: 576px) {
            [data-form_id="popup"] .close-icon-wrap .icon {
                padding: 5px;
                border-radius: 4px;
                background: rgb(69 69 69 / 88%);
            }

            [data-form_id="popup"] .close-icon-wrap {
                right: -6px;
                top: 0px;
            }
        }

        /*=====  End of PopUp Consultant Form  ======*/

   

        /*=====  End of Live Projects & Case Studies Section  ======*/
    </style>
    <!-- START Override styles -->




    <div class="modal fade" id="consultantFormModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-2" data-form_id="popup">
                    <div class="row justify-content-end close-icon-wrap">
                        <div class="col-sm-1">
                            <span class="material-icons-round icon" data-bs-dismiss="modal" aria-label="Close"
                                role="button" style="width:10px!important;">&times;</span>
                        </div>
                    </div>

                    <div class="card-new mb-4 consultant-form-card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <div class="center-headings title">
                                        <h3 class="text-center text-white">Schedule A 1:1 Call With Our Expert</h3>
                                    </div>
                                </div>
                            </div>
                            <form class="consult-form row"  method="post" name="FeedBack"
                                id="FeedBack" class="" onSubmit="return FrmVal(this);">

                                <div class="form-group has-search mb-3">
                                    <span class="fa fa-user form-control-feedback"></span>
                                    <input type="text" required class="form-control" name="name"
                                        placeholder="Your Name">
                                </div>

                                <div class="form-group has-search col-sm-12 mb-3">
                                    <span class="fa fa-envelope form-control-feedback"></span>
                                    <input type="email" required class="form-control" name="email" placeholder="Email">
                                </div>

                                <div class="form-group has-search col-sm-12 mb-3">
                                    <span class="fa fa-phone form-control-feedback"></span>
                                    <input type="number" required class="form-control" name="phone"
                                        placeholder="Mobile">
                                </div>

                                <div class="form-group has-search col-sm-12 mb-3">
                                    <span class="fa fa-comments form-control-feedback"></span>
                                    <textarea class="form-control" name="message" rows="12"style="height: 150px!important;"
                                        placeholder="Share your requirement"></textarea>
                                </div>

                                <!--    <input type="hidden" name="form_id">-->

                                <div class="col-12">
                                    <button name="consultantForm" type="submit" name="send"
                                        class="btn btn-warning w-100 fw-bold">Send Request</button>
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
                <style>
                    #consultantFormModal h3 {
                        font-size: 22px;
                    }
                </style>
            </div>
        </div>
    </div>
   

    <!-- Template Main JS File -->



    <script>
        /**
         * Timer based consultant form popup
         * 
         */
        // (() => {
        //     let $consultantFormModal = $("#consultantFormModal"),
        //         disableForCurrentPage = window.DisableConsultantFormModalTimerBasedPopUp || false;

        //     if ($consultantFormModal) {
        //         setTimeout(() => {
        //             if (disableForCurrentPage === false && !$consultantFormModal.hasClass('show')) {
        //                 $consultantFormModal.modal("show");
        //             }
        //         }, 240000);
        //     }

        //     // show popup when cursor moves of viewport once per session
        //     const exitIntentConsultantFormModal = e => {
        //         if (disableForCurrentPage === false && !e.toElement ) {
        //             document.removeEventListener('mouseout', exitIntentConsultantFormModal);
        //             $consultantFormModal.modal("show");
        //         }
        //     };  
        //     document.addEventListener('mouseout', exitIntentConsultantFormModal);
        // })();
       /* setInterval(function () {
   $('#consultantFormModal').modal('show');
}, 35000); */
    </script>
    

