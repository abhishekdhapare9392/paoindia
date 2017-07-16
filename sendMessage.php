<?php
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $contact = $_POST['yourPhone'];
    $email = $_POST['yourEmail'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $email_from = 'info@paoindia.com';
    $email_subject = "New Enquiry from Website";
    $email_body = "You have new enquiry from website.\n" . "Name: $firstName $lastName \n" . "Contact No.: $contact \n" . 
                    "Email Id: $email \n" . "Subject: $subject \n" . "Message: \n $message";

    
    $to = "info@paoindia.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email";
    mail($to, $email_subject, $email_body, $headers);

?>
<!DOCTYPE html>
<html lang="en" ng-app="paoindiaApp" ng-controller="paoindiaCtrl">

<head>
    <title>{{myData.title[0].mainTitle}}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
</head>
<body id="home">
    <section>
        <div class="container section_margin">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h2 style="text-align: center;">Thank You!!!</h2>
                    </div>
                    <div class="panel-body">
                        <div class="align">
                            <img src="images/thank_you.jpg" alt="thank_you">
                            <div>
                                <a href="/PAOI/" class="btn btn-primary btn-block">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-6">
                    <p style="float: left;">$copy; 2017. All Rights Reserved</p>
                </div>
                <div class="col-md-6">
                    <p style="float: right;">Progressive Associates of India</p>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js "></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js "></script>
<script src="https://cdn.firebase.com/js/client/2.2.4/firebase.js "></script>
<script src="https://cdn.firebase.com/libs/angularfire/1.2.0/angularfire.min.js "></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js "></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js " integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa " crossorigin="anonymous "></script>
<script src="js/paoindia.js "></script>

</html>