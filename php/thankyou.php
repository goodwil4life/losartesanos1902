<? 
$name = $_POST['fullname'];
$email = $_POST['email'];
$message = $_POST['message'];

$email_message = "
Name: ".$name."
Email: ".$email."
Messages: ".$message."
";

mail(bcnfckn@gmal.com, Test email, $email_message);
header("Location: email_success.php");
?>