<?php 

    include('conexao.php');
    $id = $_GET['id'];
    $delete = 'DELETE FROM cardapio WHERE id = $id';
    $conexao->query($delete);

?>
