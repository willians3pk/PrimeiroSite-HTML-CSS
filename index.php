<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Jeová Nissi - Home</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/index.css'>
    <script src='php/main.php' type="text/php"></script>

    <style>
        .header-1 {
            margin: 0 auto;
            width: 900px;
            position: relative;
            float: left;
        }

        .logo {
            padding: 0px;
            width: 300px;
        }

        .menu {
            width: 365px;
            float: right;
        }

        .menu ul li {
            display: inline-block;
            float: left;
            list-style: none;
            margin-left: 10px;
        }

        .menu ul li a{
            color: white;
        }

        .modulos {
            margin: 0 auto;
            /* width: 900px; */
            position: relative;
        }
    </style>

</head>

<body>

    <header class="cabecalho">
        <div class="header-1">
            <div class="logo">
                <h1>Jeová Nissi</h1>
                <h2>Congregação Jeová Nissi</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">LOGIN</a></li>
                    <li><a href="#">SOBRE</a></li>
                    <li><a href="#">REDE SOCIAIS</a></li>
                </ul>
            </div>
        </div>
    </header>

    <main class="principal">
        <div class="conteudo">
            <nav class="modulos">
                <div class="modulo verde">
                    <h3>Módulo 01</h3>
                    <ul>
                        <li><a href="exercicio.php">Exercicio A</a></li>
                        <li><a href="#">Exercicio B</a></li>
                        <li><a href="#">Exercicio C</a></li>
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
        CONGREGAÇÃO JEOVÁ NISSI © <?= date('Y'); ?>
    </footer>

</body>

</html>