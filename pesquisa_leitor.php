<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/logo_empresa.JPG" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="cadastro.css">
    <title>Pesquisa com leitor de código de barra</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body style=" background-color:#F3F3F3">
    <nav class="navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <span></span>
            </a>
            </a>
            <button type="button" class="btn-close" style="background-color: white; color:black;" aria-label="Close" onclick="sair()"></button>
        </div>
    </nav><br>
    <div class="container">
        <form action="pesquisar_armacao_leitor.php" method="post">
            <label class="textCodigo" for="codigo_barras">Código de Barras</label>
            <input type="text" name="codigo_barras" id="codigo_barras" class="oi" autofocus required placeholder="Digite aqui o código de barras do produto">
            <input class="pesq" type="submit" value="Pesquisar">
            <!-- <button class="pesq" type="submit"><span class="material-symbols-outlined">search</span></button> -->
        </form>
    </div>
    <script>
        document.getElementById('codigo_barras').addEventListener('change', function() {
            document.forms[0].codigo_barras.value = String(document.forms[0].codigo_barras.value);
            document.forms[0].submit();
        });
    </script>
    <script>
        function sair() {
            window.location.href = "inicial.php";
        }
    </script>

</body>

</html>