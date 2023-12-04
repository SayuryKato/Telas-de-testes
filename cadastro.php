<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="./img/logo_empresa.JPG" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="cadastro.css">
    <title>Formulário de Cadastro</title>
</head>
<body  style=" background-color:#F3F3F3">
    <nav class="navbar">
        <div class="container">
          <a class="navbar-brand" href="#">
            <span></span>
          </a>
          </a>
            <button type="button" class="btn-close" style="background-color: white; color:black;" aria-label="Close"onclick="sair()" ></button>
        </div>
      </nav><br>
    <div class="container">
        <div class="logo">
            <h2 style="text-align: center;">Formulário de Cadastro</h2>
        </div>
        <form action="processar_formulario.php" method="post">
            <div class="primeiradiv">
                <fieldset>
                    <p>
                        <label for="numero_nota_fiscal"><strong>Número da Nota Fiscal:</strong></label>
                        <input type="text" id="numero_nota_fiscal"  name="numero_nota_fiscal" required>
                    </p>
                <p>
                    <label for="data_nota_fiscal" > <strong>Data da Nota Fiscal:</strong></label>
                <input type="date" id="data_nota_fiscal" name="data_nota_fiscal" required>
                </p>
                <p>
                <label for="fornecedor"> <strong>Fornecedor:</strong></label>
                <input type="text" id="fornecedor" name="fornecedor" required>
                </p>
                <label for="marca"> <strong>Marca:</strong></label>
                <input type="text" id="marca" name="marca"  >
            </fieldset>
            </div>    
         <div class="segundadiv">
            <fieldset>
                <p>
                <label for="codigo" > <strong>Código:</strong></label>
                <input type="text" id="codigo" name="codigo"> 
                </p>
                <p>
                  <label for="quantidade"> <strong>Quantidade:</strong></label>
                <input type="number" id="quantidade" name="quantidade" >  
                </p>
                
                <p>
                  <label for="nome_produto" > <strong>Nome do Produto:</strong></label>
                <input type="text" id="nome_produto" name="nome_produto">  
                </p>
                <p>
                  <label for="preco_compra"> <strong>Preço do produto da  Compra:</strong></label>
                <input type="number" step="0.01" id="preco_compra" name="preco_compra">
            
                </p>
                
        </fieldset>
        </div>
           <div><br>

           <div class="primeiradiv">
           <fieldset>
          <p>
             <label for="desconto_percentual" > <strong>Desconto Percentual:</strong></label>
            <input type="number" step="0.01" id="desconto_percentual" name="desconto_percentual" >
          </p>
               
         <p>
            <label for="valor_final_compra" > <strong>Valor Final de Compra:</strong></label>
            <input type="number" step="0.01" id="valor_final_compra" name="valor_final_compra" >
         </p>
              
         <p>
            <label for="preco_venda_desejado"> <strong>Preço de Venda Desejado:</strong></label>
            <input type="number" step="0.01" id="preco_venda_desejado" name="preco_venda_desejado">
         </p>
         <p>
           <label for="nome_produto_venda"> <strong>Nome do Produto na Venda:</strong></label>
            <input type="text" id="nome_produto_venda" name="nome_produto_venda"> 
         </p>
         
            </fieldset>
        </div>
        </div>

        <p>
           <div class="input-group">
                <input type="submit" id="btnCadastro" value="Cadastrar" style=" background-color: #0838BC; color: #fff; border: 1px solid #ccc; width:100%">
            </div> 
        </p>      
        </form>
    </div>
    <script>
       function sair() {
        window.location.href = "inicial.php"; 
    } 
    </script>
    
</body>
</html>
