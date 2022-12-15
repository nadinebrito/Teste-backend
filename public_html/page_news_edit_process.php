<?php
    include "index.php";
    
    $id_noticia = $_POST['id_noticias'];

    echo $id_noticia;
    $url_noticia_insert = $_POST['url_noticia'];
    $titulo_insert = $_POST['titulo'];
    $conteudo_insert = $_POST['conteudo'];
    
    $array_conteudo_update = [$url_noticia_insert, $titulo_insert, $conteudo_insert];
    $condicao_valor = [];
    array_push($condicao_valor, $id_noticia); 
    
    update($database, $table_name, $array_conteudo_update,["id"],$condicao_valor);

    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=page_show_news.php'>
        <script type='text/javascript'>
        alert('Notícia editada com Sucesso.');
        </script>";
?>