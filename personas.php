<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipe | Capela</title>
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
            background: radial-gradient(circle at bottom left, var(--primary-navy), var(--bg-dark));
            background-attachment: fixed;
            color: var(--text-main);
            padding: 40px 20px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        header {
            text-align: center;
            margin-bottom: 60px;
        }

        header h1 {
            font-size: 3rem;
            color: var(--accent-orange);
            margin-bottom: 10px;
        }

        .btn-back {
            color: var(--text-main);
            text-decoration: none;
            font-size: 0.9rem;
            border: 1px solid var(--glass-border);
            padding: 10px 20px;
            border-radius: 50px;
            transition: 0.3s;
        }

        .btn-back:hover {
            background: var(--glass-bg);
            border-color: var(--accent-orange);
        }

        /* Grid de Personas */
        .persona-grid {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .persona-card {
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 30px;
            background: var(--glass-bg);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid var(--glass-border);
            border-radius: 24px;
            padding: 40px;
        }

        .persona-aside {
            text-align: center;
        }

        .persona-photo {
            width: 180px;
            height: 180px;
            border-radius: 20px;
            object-fit: cover;
            border: 2px solid var(--accent-orange);
            margin-bottom: 20px;
        }

        .persona-info h2 {
            color: var(--accent-orange);
            margin-bottom: 5px;
        }

        .persona-info .role {
            opacity: 0.7;
            font-weight: 600;
            display: block;
            margin-bottom: 20px;
        }

        .section-title {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: var(--accent-orange);
            margin: 20px 0 10px 0;
        }

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
        }

        .tag {
            background: rgba(255, 255, 255, 0.1);
            padding: 4px 12px;
            border-radius: 4px;
            font-size: 0.85rem;
        }

        @media (max-width: 768px) {
            .persona-card {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .persona-aside {
                margin-bottom: 20px;
            }

            .tags {
                justify-content: center;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <header>
            <a href="index.php" class="btn-back">← Voltar ao Início</a>
            <h1 style="margin-top: 30px;">Nossa Equipe</h1>
            <p>Conheça os engenheiros por trás da Capela</p>
        </header>

        <div class="persona-grid">
            <?php
            $personas = [
                [
                    'nome' => 'Raul Melo Farias',
                    'papel' => 'Scrum Master e Consultor de Tecnologia',
                    'foto' => 'img/raul.png',
                    'perfil' => 'Estudante de Engenharia da Computação com experiência no desenvolvimento de sistemas do zero, arquitetura de plataformas ITIL e e-commerces. Atua com infraestrutura, entrega de aplicações e nuvem.',
                    'habilidades' => ['Java', 'Python', 'SQL Server', 'Laravel', 'WebGL', 'Azure', 'Robótica'],
                    'responsabilidades' => ['Gestão ágil (Scrum)', 'Estruturação de roteiros técnicos', 'Consultoria de infraestrutura'],
                    'ferramentas' => ['Azure', 'Git', 'Microcontroladores']
                ],
                [
                    'nome' => 'Arthur Vieira Xavier Pascoal',
                    'papel' => 'Desenvolvedor de Hardware e Eletrônica',
                    'foto' => 'img/arthur.jpg',
                    'perfil' => 'Focado em eletrônica e sistemas embarcados. Atua no desenvolvimento de circuitos e integração entre hardware e software.',
                    'habilidades' => ['C/C++', 'Arduino', 'ESP32', 'Eletrônica Digital'],
                    'responsabilidades' => ['Projetar circuitos eletrônicos', 'Programação de microcontroladores', 'Testes de hardware'],
                    'ferramentas' => ['Tinkercad', 'Proteus', 'Osciloscópio']
                ],
                [
                    'nome' => 'Gabriel Vinícius Santos Rosa',
                    'papel' => 'Analista de Dados e Performance',
                    'foto' => 'img/gabriel.jpg',
                    'perfil' => 'Especialista em diagnosticar e corrigir inconsistências em dados, com foco em eficiência e documentação de fluxos.',
                    'habilidades' => ['SQL', 'Data Analytics', 'Documentação de Fluxos', 'Otimização'],
                    'responsabilidades' => ['Garantir integridade dos dados', 'Análise de performance', 'Suporte técnico analítico'],
                    'ferramentas' => ['Bancos de Dados', 'Ferramentas de ETL', 'Documentação Técnica']
                ],
                [
                    'nome' => 'Bryan Ferreira Barboza',
                    'papel' => 'Especialista DevOps e Cloud',
                    'foto' => 'img/bryan.jpg',
                    'perfil' => 'Responsável pela arquitetura de rede e deploy de aplicações em ambiente de nuvem, garantindo alta disponibilidade.',
                    'habilidades' => ['Redes de Computadores', 'Cloud Computing', 'Azure', 'Infraestrutura'],
                    'responsabilidades' => ['Gerenciar ambiente de hospedagem', 'Segurança de rede', 'Automação de deploy'],
                    'ferramentas' => ['Azure', 'Docker', 'Sistemas Linux']
                ],
                [
                    'nome' => 'Jonathan Zorzim Rodrigues',
                    'papel' => 'Desenvolvedor Fullstack',
                    'foto' => 'img/jonathan.jpg',
                    'perfil' => 'Desenvolvedor versátil focado em criar aplicações funcionais e integradas, unindo frontend e backend.',
                    'habilidades' => ['Desenvolvimento Web', 'PHP', 'JavaScript', 'MySQL'],
                    'responsabilidades' => ['Desenvolver interfaces de usuário', 'Lógica de negócio', 'Integração de sistemas'],
                    'ferramentas' => ['Git/GitHub', 'VS Code', 'Banco de Dados']
                ]
            ];

            foreach ($personas as $p) {
                echo "
                <div class='persona-card'>
                    <div class='persona-aside'>
                        <img src='{$p['foto']}' class='persona-photo' alt='{$p['nome']}'>
                    </div>
                    <div class='persona-info'>
                        <h2>{$p['nome']}</h2>
                        <span class='role'>{$p['papel']}</span>
                        <p>{$p['perfil']}</p>
                        
                        <div class='section-title'>Habilidades</div>
                        <div class='tags'>";
                foreach ($p['habilidades'] as $h) echo "<span class='tag'>$h</span>";
                echo "  </div>

                        <div class='section-title'>Responsabilidades no Projeto</div>
                        <div class='tags'>";
                foreach ($p['responsabilidades'] as $r) echo "<span class='tag'>$r</span>";
                echo "  </div>

                        <div class='section-title'>Ferramentas e Tecnologias</div>
                        <div class='tags'>";
                foreach ($p['ferramentas'] as $f) echo "<span class='tag'>$f</span>";
                echo "  </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>

</body>

</html>