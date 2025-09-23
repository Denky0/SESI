<?php 

    include('conexao.php');
    $select = 'SELECT * FROM cardapio';
    $produtos = $conexao->query($select);
    
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Listar</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <table class="table table-striped" border="1">
        <thead>
            <th>Código</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
        </thead>
        <tbody>
            <?php 

                while($produto = $produtos->fetch_object()) {
                    echo "<tr>
                        <td>$produto->id</td>
                        <td>$produto->produto</td>
                        <td>$produto->quantidade</td>
                        <td>$produto->preco</td>
                    </tr>";
                }
            
            ?>
        </tbody>
    </table>
        <a href="index.html">
            <button type="submit" class="btn btn-danger">Voltar</button>
        </a>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</html>