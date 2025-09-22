<?php 

    include('conexao.php');

    $nome = $_GET['produto'];
    $preco = $_GET['preco'];
    $quantidade = $_GET['quantidade'];

    echo "<h1>Produto</h1>";
    echo $nome;
    echo "<br>";
    echo $preco;
    echo "<br>";
    echo $quantidade;

    $insert = "INSERT INTO cardapio VALUES('', '$nome', $quantidade, $preco)";

    $conexao->query($insert);

?> 