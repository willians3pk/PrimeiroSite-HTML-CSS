<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Jeová Nissi - Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    <script src='php/main.php' type="text/php"></script>
</head>

<body>

    <header class="cabecalho">
                <h1>Curso PHP</h1>
                <h2>Exercicios</h2>
    </header>

    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li><a href="exercicio.php?dir=basico&file=css">Integração CSS</a></li>
                        <li><a href="exercicio.php?dir=basico&file=html">Integração HTML</a></li>
                        <li><a href="exercicio.php?dir=basico&file=comentarios">Comentario PHP</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho">
                    <h3>Módulo 02</h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
                <div class="modulo azul">
                    <h3>Módulo 03</h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
                <div class="modulo roxo">
                    <h3>Módulo 04</h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
                <div class="modulo laranja">
                    <h3>Módulo 05</h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
                <div class="modulo verde-escuro">
                    <h3>Módulo 06</h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
                <div class="modulo azul-escuro">
                    <h3>Módulo 07</h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
                <div class="modulo vermelho-escuro">
                    <h3>Módulo 08</h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
                <div class="modulo roxo-escuro">
                    <h3>Módulo 09</h3>
                    <ul>
                        <li><a href="#">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </main>
    <footer class="rodape">
        Curso PHP © <?= date('Y'); ?>
    </footer>

</body>

</html>