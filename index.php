<?php      
    if (isset($_POST['submit'])) {
        $fname = $_POST['first'];
        $lname = $_POST['last'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        // $mailFrom = $_POST['email'];
        $message = $_POST['message'];
        
           
        $mailTo = $email;
        $headers = "From: ".$mailFrom;
        $txt = "You have received an e-mail from ".$fname.$lname.".\n\n".$message;
           
        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.php?mailsend");
           }

?>