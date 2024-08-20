<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Site de Inglês</title>
    <style>
        /* Estilos básicos */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .section {
            margin-bottom: 20px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <h1>Seu Site de Inglês</h1>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#cursos">Cursos</a></li>
                <li><a href="#sobre">Sobre</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        <section id="home" class="section">
            <h2>Home</h2>
            <p>Bem-vindo ao Seu Site de Inglês! Aprenda inglês de forma eficaz e divertida.</p>
            <p>Aqui você encontrará recursos como exercícios interativos, vídeo-aulas e quizzes de gramática.</p>
        </section>

        <section id="cursos" class="section">
            <h2>Cursos</h2>
            <ul>
                <li>
                    <h3>Inglês Básico</h3>
                    <p>Curso introdutório de inglês.</p>
                </li>
                <li>
                    <h3>Inglês Intermediário</h3>
                    <p>Nível intermediário para prática de conversação.</p>
                </li>
                <li>
                    <h3>Inglês Avançado</h3>
                    <p>Curso avançado para fluência.</p>
                </li>
            </ul>
        </section>

        <section id="sobre" class="section">
            <h2>Sobre</h2>
            <section>
                <h3>Nossa Missão</h3>
                <p>Oferecer a melhor plataforma para aprendizado de inglês, com conteúdo de qualidade e acessível a todos.</p>
            </section>
            <section>
                <h3>Nossa Equipe</h3>
                <p>Conheça nossa equipe dedicada à educação e ao ensino de idiomas.</p>
            </section>
        </section>
    </div>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Seu Site de Inglês. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
