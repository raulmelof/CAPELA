<?php
// Variável para armazenar a mensagem de sucesso ou erro na tela
$mensagem_status = "";

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coleta e limpa os dados para evitar injeção de código malicioso
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $assunto = htmlspecialchars(trim($_POST['assunto']));
    $conteudo = htmlspecialchars(trim($_POST['conteudo']));

    // === CONFIGURAÇÃO DE E-MAIL ===
    $para = "raul.m@aluno.ifsp.edu.br";
    $assunto_email = "[Capela Contato] " . $assunto;

    $corpo_email = "Você recebeu uma nova mensagem pelo portal da Capela.\n\n";
    $corpo_email .= "Nome: {$nome}\n";
    $corpo_email .= "E-mail: {$email}\n";
    $corpo_email .= "Assunto: {$assunto}\n\n";
    $corpo_email .= "Conteúdo da Mensagem:\n{$conteudo}\n";

    $headers = "From: no-reply@extencom.gru.br\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // Tenta enviar o e-mail
    if (@mail($para, $assunto_email, $corpo_email, $headers)) {
        $mensagem_status = "<div class='alert success'>Mensagem enviada com sucesso! Responderemos em breve.</div>";
    } else {
        $mensagem_status = "<div class='alert error'>Houve um erro ao tentar enviar sua mensagem. Tente novamente.</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato | Capela</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-dark: #0f0f14;
            --primary-navy: #0b2e59;
            --accent-orange: #f26b21;
            --glass-bg: rgba(255, 255, 255, 0.05);
            --glass-border: rgba(255, 255, 255, 0.1);
            --text-main: #e9ecef;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at bottom right, var(--primary-navy), var(--bg-dark));
            background-attachment: fixed;
            color: var(--text-main);
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            width: 100%;
        }

        .btn-back {
            display: inline-block;
            color: var(--text-main);
            text-decoration: none;
            font-size: 0.9rem;
            border: 1px solid var(--glass-border);
            padding: 10px 20px;
            border-radius: 50px;
            margin-bottom: 30px;
            transition: 0.3s;
        }

        .btn-back:hover {
            background: var(--glass-bg);
            border-color: var(--accent-orange);
        }

        .glass-panel {
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
        }

        h1 {
            color: var(--accent-orange);
            margin-bottom: 10px;
            font-size: 2.5rem;
        }

        p {
            opacity: 0.8;
            margin-bottom: 30px;
        }

        /* Estilização do Formulário */
        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 0.9rem;
            font-weight: 600;
            opacity: 0.9;
        }

        input,
        textarea {
            width: 100%;
            padding: 15px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid var(--glass-border);
            border-radius: 12px;
            color: white;
            font-family: 'Inter', sans-serif;
            font-size: 1rem;
            outline: none;
            transition: 0.3s;
        }

        input:focus,
        textarea:focus {
            border-color: var(--accent-orange);
            background: rgba(255, 255, 255, 0.1);
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        .btn-submit {
            width: 100%;
            background: var(--accent-orange);
            color: white;
            border: none;
            padding: 15px;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background: #d95a1a;
            transform: translateY(-2px);
        }

        /* Alertas de sucesso/erro */
        .alert {
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-weight: 600;
            text-align: center;
        }

        .alert.success {
            background: rgba(40, 167, 69, 0.2);
            border: 1px solid #28a745;
            color: #2ecc71;
        }

        .alert.error {
            background: rgba(220, 53, 69, 0.2);
            border: 1px solid #dc3545;
            color: #ff6b6b;
        }
    </style>
</head>

<body>

    <div class="container">
        <a href="index.php" class="btn-back">← Voltar ao Início</a>

        <div class="glass-panel">
            <h1>Fale Conosco</h1>
            <p>Precisa de uma consultoria ou quer saber mais sobre nossos treinamentos? Envie uma mensagem para a nossa equipe.</p>

            <?php echo $mensagem_status; ?>

            <form action="contato.php" method="POST">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" required placeholder="Ex: Maria Silva">
                </div>

                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required placeholder="Ex: maria@exemplo.com">
                </div>

                <div class="form-group">
                    <label for="assunto">Assunto</label>
                    <input type="text" id="assunto" name="assunto" required placeholder="Motivo do contato">
                </div>

                <div class="form-group">
                    <label for="conteudo">Conteúdo da Mensagem</label>
                    <textarea id="conteudo" name="conteudo" required placeholder="Como podemos ajudar você?"></textarea>
                </div>

                <button type="submit" class="btn-submit">Enviar Mensagem</button>
            </form>
        </div>
    </div>

</body>

</html>