<?php
include 'db_coneccion.php'; // Include database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    // Here you would typically insert the new user into the database
    // For now, we will just simulate a successful registration
    echo "Registration successful for user: $username";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../estilo.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../index.html">Inicio</a></li>
                <li><a href="../galeria.html">Galería</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="registro.php">Registro</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Registro</h1>
        <form method="POST" action="registro.php">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Register">
        </form>
    </main>
</body>
</html>
