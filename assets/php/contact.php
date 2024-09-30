<?php 
//echo "we are on footer page..";

    $name = $_REQUEST['contact-name'];
    $lastName = $_REQUEST['Last-name']
    $mailForm = $_REQUEST['contact-email'];
    $subject = $_REQUEST['contact-website'];
    $phone = $_REQUEST['contact-Phone'];
    $message = $_REQUEST['contact-message'];

    $mailTo = "admin@akazaintl.com";
    $headers = "From: ".$mailForm;
   
    $txt = "You Have Recive New Mail.\n Name : ".$name.".\n"$lastName".\n Email : ".$email. ".\n Subject : ".$subject. ".\n Message : ".$message. "\n Contact:" .$phone;

    mail($mailTo,"New Entry Seva Kalyan Website : $name", $txt, $headers);
   //header("location:https://akazaintl.com");
   
   //$htmlContent = file_get_contents("mail.html");
   
   $body =  "Thank You Mr/Mrs : ".$name.".\n"$lastName".\n".$subject. "Your mail has been submitted. We will be contacting you as soon as possible.";

   mail($mailForm,"Thanks for reaching out!",$body,"From:noreply@akazaintl.com")

?>

<script language="javascript">
    window.open("../https://akazaintl.com","_self");
</script>