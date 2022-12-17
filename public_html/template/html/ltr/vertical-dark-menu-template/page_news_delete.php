<?php
    include "index.php";
    
    $id_noticia = $_GET['id'];
    $condicao_valor = [];
    array_push($condicao_valor, $id_noticia); 
    
    delete($database, $table_name,["id"],$condicao_valor);

    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=page_show_news.php'>
        <script type='text/javascript'>
        alert('Notícia Deletada com Sucesso.');
        </script>";
?>