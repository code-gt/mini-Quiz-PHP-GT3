<?php

// Démarrer la session

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Quiz PHP</title>
</head>
<body>
  
  <main class="container">
    <h1>Quiz PHP</h1>

    <?php

     if (isset($_COOKIE['prenom'])) {
       // Tu affiches le message de bienvenue
    } else {
      // si la variable $_POST content le prénom est définie :
        // Crée le cookie
        // Redirige avec header("Location: index.php");
        exit; // Utiliser ici exit; empêche la suite du code de s'exécuter
      ?>
    <!-- Crée le formulaiure simple pour récupérerle prénom -->
      <form>
        
      </form>
    
      <?php
        exit; // Utiliser ici exit; empêche la suite du code de s'exécuter
        }
      ?>

    <!-- Création du formulaire HTML contenant le Quiz complet -->


    <!-- Ajoute aussi un bouton pour réinitialiser le quiz/score -->
  </main>
  
</body>
</html>
