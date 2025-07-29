
<!DOCTYPE html>
<html lang="fr">
 <head>
    <meta charset="UTF-8">
    <title> formulaire contact </title>
 </head>   
 <body>
    <h2> contactez-nous</h2>
    <?php if ($message): ?>
      <p><strong><?=$message ?></strong></p>
    <?php endif; ?>  

    <form action="traitement.php" method="post">
        <label>Nom:</label><br>
        <input type="text" name="nom" required> <br><br>
        
        <label>Prenom:</label><br>
        <input type="text" name="prenom" required> <br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required> <br><br>

        <input type="submit" value="Envoyer">
    </form>
 </body>
</html>