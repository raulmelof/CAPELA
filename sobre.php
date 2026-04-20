<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos | Capela</title>
    <link rel="icon" type="image/png" href="img/logo-capela.png">
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
            background: radial-gradient(circle at top left, var(--primary-navy), var(--bg-dark));
            background-attachment: fixed;
            color: var(--text-main);
            line-height: 1.6;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 60px 20px;
        }

        .btn-back {
            display: inline-block;
            color: var(--text-main);
            text-decoration: none;
            font-size: 0.9rem;
            border: 1px solid var(--glass-border);
            padding: 10px 20px;
            border-radius: 50px;
            margin-bottom: 40px;
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
            padding: 50px;
            margin-bottom: 50px;
        }

        h1 {
            font-size: 3rem;
            color: var(--accent-orange);
            margin-bottom: 20px;
            letter-spacing: -1px;
        }

        h2 {
            font-size: 2rem;
            color: var(--accent-orange);
            margin-bottom: 20px;
            border-bottom: 1px solid var(--glass-border);
            padding-bottom: 10px;
        }

        h3 {
            font-size: 1.5rem;
            color: #fff;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 20px;
            text-align: justify;
        }

        /* Estilo para os blocos de serviço */
        .service-block {
            margin-bottom: 40px;
            padding: 30px;
            background: rgba(0, 0, 0, 0.2);
            border-radius: 16px;
            border-left: 4px solid var(--accent-orange);
        }

        .service-block:last-child {
            margin-bottom: 0;
        }

        .service-block p {
            margin-bottom: 0;
            font-size: 1rem;
        }
    </style>
</head>

<body>

    <div class="container">
        <a href="index.php" class="btn-back">← Voltar ao Início</a>

        <div class="glass-panel">
            <h1>Nossa História</h1>
            <p>A Capela nasceu no ambiente acadêmico como parte do projeto de curricularização de extensão do IFSP Campus Guarulhos. Formada por estudantes de Engenharia da Computação, nossa equipe se uniu com o propósito de transformar o conhecimento técnico adquirido em sala de aula em soluções reais e acessíveis para a comunidade.</p>
            <p>Com uma base sólida que abrange desenvolvimento de software, infraestrutura em nuvem, análise de dados e sistemas embarcados, atuamos como uma ponte entre a academia e o mercado. Nosso compromisso é democratizar o acesso à tecnologia e apoiar o crescimento de organizações e indivíduos através da excelência técnica e da colaboração.</p>
        </div>

        <div class="glass-panel">
            <h2>Como Podemos Ajudar</h2>
            <p>Nossas ações de extensão são desenhadas para atender às necessidades reais dos demandantes, aplicando metodologias ágeis e práticas modernas de engenharia.</p>

            <div class="service-block" id="consultoria">
                <h3>🤝 Consultoria</h3>
                <p>Oferecemos orientação estratégica para empresas e indivíduos que precisam modernizar sua infraestrutura tecnológica. Analisamos gargalos operacionais, avaliamos arquiteturas de rede e sistemas, e propomos soluções otimizadas e sustentáveis que garantam eficiência e segurança para o seu negócio.</p>
            </div>

            <div class="service-block" id="capacitacao">
                <h3>📚 Capacitação</h3>
                <p>O pilar educacional da Capela foca na transferência de conhecimento. Desenvolvemos roteiros técnicos e aplicamos treinamentos especializados para nivelar equipes ou indivíduos em novas tecnologias, linguagens de programação e boas práticas do ecossistema corporativo.</p>
            </div>

            <div class="service-block" id="prestacao-servico">
                <h3>⚙️ Prestação de Serviço</h3>
                <p>Atuamos com a execução direta para resolver demandas específicas. Isso inclui desde a configuração de ambientes em nuvem e diagnósticos de processamento de dados, até a manutenção e estruturação de redes de computadores de pequeno e médio porte.</p>
            </div>

            <div class="service-block" id="projetos-engenharia">
                <h3>🏗️ Projetos de Engenharia</h3>
                <p>Desenhamos e desenvolvemos soluções de ponta a ponta. Nossa equipe projeta sistemas complexos que integram software de alta performance com hardware (microcontroladores e eletrônica), entregando produtos funcionais, arquitetados do zero e adaptados à realidade do cliente.</p>
            </div>
        </div>
    </div>

</body>

</html>