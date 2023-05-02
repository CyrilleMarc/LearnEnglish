<?php

//-----------------------------------------------------
// CREATION DE LA BASE DE DONNEES

// // Informations de connexion à la base de données MySQL
// $servername = "localhost";
// $username = "cyro";
// $password = "cyro";
// $dbname = "learningenglish";

// // Connexion à la base de données MySQL
// $conn = new mysqli($servername, $username, $password);

// // Vérification de la connexion
// if ($conn->connect_error) {
//     die("La connexion a échoué : " . $conn->connect_error);
// }

// // Création de la base de données
// $sql = "CREATE DATABASE $dbname";
// if ($conn->query($sql) === TRUE) {
//     echo "La base de données a été créée avec succès !";
// } else {
//     echo "Erreur lors de la création de la base de données : " . $conn->error;
// }

// // Fermeture de la connexion à la base de données
// $conn->close();

//----------------------------------------------------------------------------------------


// Informations de connexion à la base de données MySQL
$servername = "localhost";
$username = "cyro";
$password = "cyro";
$dbname = "learningenglish";
$message = false;
$errorMessage = false;

// Connexion à la base de données MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

// Récupération des données du formulaire
$email = $_POST['email'];
$password = $_POST['password'];

// Hashage du mot de passe
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";
    if ($conn->query($sql) === TRUE) {
        header('Location:/signup.php');
        $message = true;
        echo $message;
    } else {
        echo "Erreur lors de la création de l'utilisateur : " . $conn->error;
        return $errorMessage = true;
    }
}

// Fermeture de la connexion à la base de données
$conn->close();
