<?php
      $Nom = filter_input(INPUT_POST, 'Nom', FILTER_SANITIZE_STRING);
      $Prenom = filter_input(INPUT_POST, 'Prenom', FILTER_SANITIZE_STRING);
      $Pays_ou_tu_vis = filter_input(INPUT_POST, 'Pays_ou_tu_vis', FILTER_SANITIZE_STRING);
      $Ville_ou_Etat = filter_input(INPUT_POST, 'Ville_ou_Etat', FILTER_SANITIZE_STRING);
      $Votre_Email = filter_input(INPUT_POST, 'Votre_Email', FILTER_SANITIZE_STRING);
      $Votre_Message= filter_input(INPUT_POST, 'Votre_Message', FILTER_SANITIZE_STRING);
	   $Votre_Commentaire= filter_input(INPUT_POST, 'Votre_Commentaire', FILTER_SANITIZE_STRING);


     $host = "localhost";
     $dbNom = "root";
	  $dbPrenom = "root";
	  $dbPays_ou_tu_vis = "root";
	  $dbVille_ou_Etat = "root";
	  $dbVotre_Email = "root";
	  $dbVotre_Message = "root";
	  $dbVotre_Commentaire = "root";
     // $dbpassword = "";
     $dbname = "forum_1804";

      $conn = new mysqli($host, $dbNom, $dbPrenom, $dbPays_ou_tu_vis, $dbVille_ou_Etat, $dbVotre_Email, $dbVotre_Message, $dbVotre_Commentaire, $dbname);

      if($conn->connect_error) {
      die('Connect Error(' . $conn->connect_error .') '.$conn->connect_error); 

   }else{
      $stmt = $conn->prepare(" INSERT INTO Visitors (Nom, Prenom, Pays_ou_tu_vis, Ville_ou_Etat, Votre_Email, Votre_Message, Votre_Commentaire) VALUES (?, ?, ?, ?, ?, ?, ?)");

      if($stmt === false){
      die('Prepare failed: ' . $conn->error);

      }  
        $stmt->bind_param("sss", $Nom, $Prenom, $Pays_ou_tu_vis, $Ville_ou_Etat, $Votre_Email, $Votre_Message, $Votre_Commentaire);

       if ($stmt->execute()){
       echo "You have succefully Registered";
    } else{
       echo "Error;" . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>