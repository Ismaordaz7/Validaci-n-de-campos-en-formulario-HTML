<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['user'];
    $password = $_POST['password'];
    $edad = $_POST['edad'];

    $errors = [];

    if (empty($user) || empty($password) || empty($edad)) {
        $errors[] = "Todos los campos deben estar llenos.";
    }

    if (!is_numeric($edad) || $edad < 18) {
        $errors[] = "La edad debe ser un número y el usuario debe ser mayor de 18 años";
    }

    if ($user !== "luis" || $password !== "mendoza") {
        $errors[] = "Usuario o contraseña incorrectos.";
    }

    if (empty($errors)) {
        echo "Verificacion exitosa!";
        
    } else {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
        echo '<p><a href="login.html">Vuelve al formulario de verificacion</a></p>';
    }
} else {
    
    http_response_code(405); // Podrías enviar un código de error 405 si es necesario
    echo "Método no permitido";
}

?>


