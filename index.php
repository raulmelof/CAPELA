<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capela | Engenharia da Computação</title>
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
            background: radial-gradient(circle at top right, var(--primary-navy), var(--bg-dark));
            background-attachment: fixed;
            color: var(--text-main);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Efeito Glassmorphism Global */
        .glass-card {
            background: var(--glass-bg);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid var(--glass-border);
            border-radius: 20px;
            padding: 30px;
            transition: transform 0.3s ease;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        section {
            padding: 80px 0;
            min-height: 80vh;
            display: flex;
            align-items: center;
        }

        /* 1ª DOBRA: HERO CORRIGIDA (Layout Grid p/ preservar foto vertical) */
        .hero {
            text-align: left;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .hero-text-block h1 {
            font-size: 5rem;
            font-weight: 800;
            letter-spacing: -2px;
            color: var(--accent-orange);
        }

        .hero-text-block p {
            font-size: 1.5rem;
            opacity: 0.8;
        }

        /* Foto da Equipe Preservada */
        .hero-image-block img {
            max-width: 100%;
            height: auto;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.6);
            border: 1px solid var(--glass-border);
        }

        /* 2ª DOBRA: MVV */
        .mvv-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }

        .mvv-item h3 {
            color: var(--accent-orange);
            margin-bottom: 15px;
        }

        /* 3ª DOBRA: AÇÕES DE EXTENSÃO */
        .actions-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .action-card {
            text-align: center;
            padding: 40px;
        }

        .action-card:hover {
            transform: translateY(-10px);
            border-color: var(--accent-orange);
        }

        .action-icon {
            font-size: 40px;
            margin-bottom: 20px;
            display: block;
        }

        /* 4ª DOBRA: PERSONAS (Usando as fotos quadradas individuais) */
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
        }

        .member-card {
            text-align: center;
            cursor: pointer;
        }

        .member-photo {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            margin-bottom: 15px;
            border: 3px solid var(--accent-orange);
            object-fit: cover;
        }

        .btn-profile {
            display: inline-block;
            margin-top: 15px;
            padding: 8px 20px;
            background: var(--accent-orange);
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.8rem;
        }

        /* 5ª DOBRA: LOCALIZAÇÃO */
        .footer {
            background: rgba(0, 0, 0, 0.3);
            padding: 60px 0;
            text-align: center;
        }

        .map-placeholder {
            width: 100%;
            height: 300px;
            background: #222;
            border-radius: 15px;
            margin-top: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
            text-align: center;
        }

        @media (max-width: 768px) {
            .hero-grid {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .hero-text-block h1 {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>

    <section class="hero" id="inicio">
        <div class="container hero-grid">

            <div class="hero-text-block glass-card">
                <img src="img/logo-capela.png" alt="Logotipo Capela" style="width: 150px; border-radius: 20px; margin-bottom: 20px;">
                <h1>CAPELA</h1>
                <p>Engenharia da Computação | Consultoria & Ensino</p>
            </div>

            <div class="hero-image-block">
                <img src="img/equipe.png" alt="Equipe Capela no IFSP Guarulhos">
            </div>

        </div>
    </section>

    <section id="sobre">
        <div class="container">
            <h2>Nossa Identidade</h2>
            <div class="mvv-grid">
                <div class="glass-card mvv-item">
                    <h3>Missão</h3>
                    <p>Capacitar indivíduos e apoiar organizações por meio de consultoria técnica e educação em Engenharia da Computação, democratizando o acesso ao conhecimento tecnológico.</p>
                </div>
                <div class="glass-card mvv-item">
                    <h3>Visão</h3>
                    <p>Ser a startup acadêmica de referência no IFSP Guarulhos, reconhecida pela excelência na transferência de conhecimento e impacto social sustentável.</p>
                </div>
                <div class="glass-card mvv-item">
                    <h3>Valores</h3>
                    <p>Inovação educacional, Excelência Técnica, Responsabilidade Social, Ética Profissional e Colaboração.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="servicos">
        <div class="container">
            <h2>Ações de Extensão</h2>
            <div class="actions-grid">
                <a href="sobre.php#consultoria" style="text-decoration: none; color: inherit;">
                    <div class="glass-card action-card">
                        <span class="action-icon">🤝</span>
                        <h4>Consultoria</h4>
                        <p>Orientação estratégica para otimização de processos e infraestrutura tecnológica.</p>
                    </div>
                </a>
                <a href="sobre.php#capacitacao" style="text-decoration: none; color: inherit;">
                    <div class="glass-card action-card">
                        <span class="action-icon">📚</span>
                        <h4>Capacitação</h4>
                        <p>Treinamentos técnicos especializados para o desenvolvimento de novas competências.</p>
                    </div>
                </a>
                <a href="sobre.php#prestacao-servico" style="text-decoration: none; color: inherit;">
                    <div class="glass-card action-card">
                        <span class="action-icon">⚙️</span>
                        <h4>Prestação de Serviço</h4>
                        <p>Execução técnica de soluções em software e hardware para demandas reais.</p>
                    </div>
                </a>
                <a href="sobre.php#projetos-engenharia" style="text-decoration: none; color: inherit;">
                    <div class="glass-card action-card">
                        <span class="action-icon">🏗️</span>
                        <h4>Projetos de Engenharia</h4>
                        <p>Arquitetura e desenvolvimento de sistemas complexos sob demanda.</p>
                    </div>
                </a>

            </div>
        </div>
    </section>

    <section id="equipe">
        <div class="container">
            <h2>Nossa Equipe</h2>
            <div class="team-grid">
                <?php
                // Array com os caminhos para as fotos individuais quadradas na pasta img/
                $membros = [
                    ['nome' => 'Raul Melo Farias', 'papel' => 'Scrum Master', 'foto' => 'img/raul.png'],
                    ['nome' => 'Arthur Vieira', 'papel' => 'Desenvolvedor Hardware', 'foto' => 'img/arthur.jpg'],
                    ['nome' => 'Gabriel Santos', 'papel' => 'Analista de Dados', 'foto' => 'img/gabriel.jpg'],
                    ['nome' => 'Bryan Ferreira', 'papel' => 'DevOps/Nuvem', 'foto' => 'img/bryan.jpg'],
                    ['nome' => 'Jonathan Zorzim', 'papel' => 'Desenvolvedor Fullstack', 'foto' => 'img/jonathan.jpg']
                ];
                foreach ($membros as $m) {
                    echo "
                    <div class='glass-card member-card'>
                        <img src='{$m['foto']}' class='member-photo' alt='{$m['nome']}'>
                        <h4>{$m['nome']}</h4>
                        <small>{$m['papel']}</small><br>
                        <a href='personas.php' class='btn-profile'>Ver Detalhes</a>
                    </div>";
                }
                ?>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <h2>Onde Estamos</h2>
            <p>IFSP Câmpus Guarulhos</p>
            <p>Av. Salgado Filho, 3501 - Vila Rio de Janeiro, Guarulhos - SP, 07115-000</p>
            <div class="map-placeholder">
                <p>[Mapa do Google Maps Interativo Aqui]</p>
            </div>
        </div>
    </footer>

</body>

</html>