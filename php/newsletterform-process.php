<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "Nombre y apellido son requeridos ";
} else {
    $email = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG = "Email es requerido ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["phone"])) {
    $errorMSG = "Teléfono es requerido ";
} else {
    $email = $_POST["phone"];
}

$EmailTo = "pabloaroberto@gmail.com";
$Subject = "Nueva compra de Toy-Art Rayos Laser";

// prepare email body text
$Body = "";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "phone: ";
$Body .= $phone;
$Body .= "\n";
$Body .= "adress: ";
$Body .= $adress;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Tus datos fueron enviados";
}else{
    if($errorMSG == ""){
        echo "Algo salió mal :(";
    } else {
        echo $errorMSG;
    }
}
?>