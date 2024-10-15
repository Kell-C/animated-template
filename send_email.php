<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pegando dados do formulário
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    // Definindo destinatário e assunto
    $to = "kcristhianesilva.dev@gmail.com"; // Substitua pelo seu e-mail
    $subject = "Nova mensagem do formulário de contato";

    // Corpo do e-mail
    $email_body = "Nome: $name\n";
    $email_body .= "Email: $email\n\n";
    $email_body .= "Mensagem:\n$message\n";

    // Cabeçalhos
    $headers = "From: $email";

    // Enviando o e-mail
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem. Tente novamente mais tarde.";
    }
}
?>
