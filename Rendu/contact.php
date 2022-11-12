<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Contactez-nous/title>
</head>

<body>
<h1>Contact</h1>
    <form method="post">
        <label>Votre email</label>
        <input type="email" name="email" required><br>
        <label>Message</label>
        <textarea name="message" required></textarea><br>
        <input type="submit">
    </form>
    <?php
    if (isset($_POST['message'])) {
        $retour = mail('nicolasch4@outlook.fr', 'Envoi depuis la page Contact', $_POST['message'], '' . "\r\n" . 'Reply-to: ' . $_POST['email']);
        if($retour)
            echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>


//
//$message = "Ce message vous a été envoyé via la page contact du site index.html
                                    //Nom : " . $_POST["nom"] . "
                                   // Email : " . $_POST ["email"] . "
                                    //Message : " . $_POST["message"];

                                    //$retour = mail('nicolasch4@outlook.fr', $_POST["titre"],
                                    //$message, "From: nicolaschFCB@outlook.fr " . "\r\n" . "Reply-to" . $_POST
                                    //["email"]);
                                    //if($retour)'Votre message a bien été envoyé.</p>
