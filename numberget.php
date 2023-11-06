<?php

if (isset($_POST['sendnumber'])) {

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
    $to = "sales@akkenna.com,james@akkenna.com,pradeep@akkenna.com,info@clickboxagency.com";
    $htmlContent = ' 
    <html> 
    <head> 
        <title>Welcome to Clickbox Agencies</title> 
    </head> 
    <body> 
        <h3>Hi Admin, Please find the below New Member Contact Details!</h3> 
               <table cellspacing="0" style="border: 2px dashed #FB4314; width: 100%;"> 
           
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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>number get</title>
</head>

<body>
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
                            <label for="recipient-name" class="col-form-label">Mobile:</label>
                            <input type="number" name="phone" class="form-control phone" maxlength="10" placeholder="Mobile Number*">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" name="sendnumber">Submit</button>
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
</body>

</html>