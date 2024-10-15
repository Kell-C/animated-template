<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura dos dados do formulário
    $name = htmlspecialchars($_POST['full_name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Definição do email de destino
    $to = "kcristhianesilva.dev@gmail.com"; // Substitua pelo seu endereço de email
    $subject = "Nova mensagem de $name";

    // Corpo do email
    $body = "Nome: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Mensagem:\n$message\n";

    // Cabeçalhos do email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envio do email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Mensagem enviada com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao enviar a mensagem. Tente novamente mais tarde.');</script>";
    }
}
?>
