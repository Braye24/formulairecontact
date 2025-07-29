<?php
// Informations de connexion à la base de données
$host = "localhost";
$dbname = "contact";
$username = "root";
$password = "";

// Message d'état (succès ou erreur)
$message = "";


try {
    // Connexion à la base de données avec PDO
    $conn = new PDO("mysql:host=$host;dbname=contact;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    if ( $conn) {
        echo "Connexion Reuissi" ;
    }

    // Vérifie si le formulaire a été soumis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupère les données du formulaire
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];

        // Prépare et exécute la requête d'insertion
        $sql = "INSERT INTO personne (nom, prenom, email) VALUES (:nom, :prenom, :email)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':email' => $email
        ]);

        $message = "Données enregistrées avec succès !";
        echo $message;
    }

} catch (PDOException $e) {
    $message = "Erreur : " . $e->getMessage();
}
?>