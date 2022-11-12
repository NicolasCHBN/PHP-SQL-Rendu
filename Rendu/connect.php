<?php

$text = $_POST["text"];
$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];

$conn = new mysqli('localhost', 'root', '','test1');
if($conn->connect_error){
    die('Connection failed: '.$cconn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT into form(name, email, subject, text) values (?, ?, ?, ?)");
    $stmt ->bind_param("ssss",$name, $email, $subject, $text);
    $stmt ->execute();
    $stmt ->close();
    $conn -> close();
}
if (isset($text, $name, $email, $subject)){
    include "<phpMail.php>";
}



/*
$text = $_POST["text"];
$name = $_POST["name"];
$email = $_POST["mail"];
$subject = $_POST["subject"];

$conn = new mysqli('localhost', 'root', '','test1');
if($conn->connect_error){
    die('Connection failed: '.$cconn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT into form(name, email, subject, text) values (?, ?, ?, ?)");
    $stmt ->bind_param("ssss",$name, $email, $subject, $text);
    $stmt ->execute();
    $stmt ->close();
    $conn -> close();
}
if (isset($text, $name, $email, $subject)){
    $texte = $text."\n Contactez moi à l'adresse suivante : ". $email;
    $retour = mail("receveurmailtest@gmail.com",  $subject , $texte , "" );
    if ($retour){
        echo "<script>alert('Email envoyé'); window.location='index.php'</script>";
    }
}
*/
?>