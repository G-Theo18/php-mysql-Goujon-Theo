<?php
// Soumission du formulaire
if (isset($_POST['email']) && isset($_POST['password'])) {

    foreach ($user as $user) {
        // Utilisateur/trice trouvée !
        if (
            $user['email'] === $_POST['email'] &&
            $user['password'] === $_POST['password']
        ) {
            // Enregistrement de l'email de l'utilisateur en session 
            $_SESSION['LOGGED_USER'] = $user['email'];
        }
    }
}

?>