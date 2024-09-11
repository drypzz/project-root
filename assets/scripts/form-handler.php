<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $message = htmlspecialchars($_POST['message']);

        echo "Obrigado(a) $name! Sua mensagem foi recebida.";
    } else {
        echo "Erro interno.";
    }
?>