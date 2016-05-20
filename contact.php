<?php 
if(isset($_POST['submit'])){
    $url = "md-33.webhostbox.net";

    $to = "info@emagen.tv"; // this is your Email address
    $from = "info@emagen.tv"; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $subject = "Form submission by :".$first_name" ".$last_name";
    
    $message ="NAME:"$first_name . " " . $last_name . " \n \n wrote the following:" . "\n" . $_POST['message']."\n\nDISPLAY:". $_POST['display']."\n\nCONTACT NO:". $_POST['phone'] ;
    

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
   $sentmail= mail($to,$subject,$message,$headers);
    if($sentmail==1)

    {

        echo "<span style='color: #ff0000;'> Mail Sent. Thank you " . $first_name . ", we will contact you shortly.</span>";
        echo "<script>window.open('contact.html','_self')</script>";

    }

   
    
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>