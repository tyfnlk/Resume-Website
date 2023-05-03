<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="javascript.js"></script>
</head>
<body>
    
<?php

$sender;
$senderEmail;
$subject;
$message;



if(isset($_GET["name"]) && $_GET["name"] !=""){
    $sender=  "Website contact request: " .$_GET["name"];
}

if(isset($_GET["email"]) && $_GET["email"] !=""){
    $senderEmail = $_GET["email"];
}

if(isset($_GET["message"]) && $_GET["message"] !=""){
    $message = $_GET["message"];
}
// initialize smtp server
ini_set('SMTP','myserver');
ini_set('smtp_port',25);
ini_set('sendmail_from',$senderEmail);

//mail("tleeshanok@algomau.ca",$sender,$message );


echo" From: ".$senderEmail;
echo"<br>";
echo" to: tleeshanok@algomau.ca";
echo"<br>";
echo" Subject: ".$sender;
echo"<br>";
echo" message: ".$message;
echo"<br>";

header( "refresh:10;url=index.php" );
  echo 'You will be redirected home in 10 seconds. or click <a href="index.php">here</a>.';



?>

<?php

?>
</body>
</html>