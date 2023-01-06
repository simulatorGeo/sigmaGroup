<?php 
if(isset($_POST['submit'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['surname'];
    $company_name=$_POST['company_name'];
    $phone=$_POST['phone'];
    $category=$_POST['category'];
    $emps_qtt=$_POST['emps_qtt'];
    $user_mail=$_POST['email'];
    $mailFrom ="webform@sigmagroup.ge";
    $transactionst=$_POST['transactions'];
    $mailTo="webform@sigmagroup.ge";
    $message1=$_POST['message_form'];
    $headers ='From: '.$mailFrom.'' . "\r\n" .
    'Content-Type: text/html; charset=UTF-8' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $txt ="
    <html> 
        <head>
            <title>webform submit</title>
        </head>
        <body>
            <div> სახელი : ".$first_name."</div>
            <div> გვარი : ".$last_name."</div>
            <div> კომპანიის სახელი : ".$company_name."</div>
            <div> Tel : ".$phone."</div>
            <div> Email : ".$user_mail."</div>
            <div> ძირითადი საქმიანობა : ".$category."</div>
            <div> თანამშრომელთა რაოდენბოა: ".$emps_qtt."</div>
            <div> ტრანზაქციების რაოდენობა : ".$transactionst."</div>
            <div style='font-size:18px; font-weight:bold;'> შეტყობინება: ".$message1."</div>
        </body>
    </html>
    ";
    $subject = "webpage form";
    mail($mailTo,$subject,$txt,$headers,$from);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    echo "<br>";
    echo "<a href='https://sigmagroup.ge/'>Home</a>";
    }
?>
