<? 
$name = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_message = "
Name: ".$name."
Email: ".$email."
Messages: ".$message."
";



mail("bcnfckn@gmal.com", "Test e-mail from los artesanos", $email_message);
/*
Right now you are not taking care of XHR (let's call it AJAX) I know for now you should probably focus on making the same change I made on both this file 
and also on amp/en/contact.html -- check out the form it was missing another ../ (remember each of those takes you up 1 level)

Also on this file you had the strings for both your e-mail address and the subject of the e-mail as non existent variables, watch 
out for missing '' or "" on strings.

*/

header("Location: email_success.php");
?>