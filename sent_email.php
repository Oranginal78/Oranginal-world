<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecte des données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Adresse de destination
    $to = "oranginal.studio@gmail.com";
    
    // Objet de l'email
    $subject = "New Contact Form Submission from " . $name;

    // Contenu de l'email
    $body = "You have received a new message from your website contact form.\n\n";
    $body .= "Here are the details:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Message:\n$message\n";

    // En-têtes de l'email
    $headers = "From: $email\n";
    $headers .= "Reply-To: $email";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong, and we couldn't send your message.";
    }
} else {
    echo "There was a problem with your submission, please try again.";
}
?>
