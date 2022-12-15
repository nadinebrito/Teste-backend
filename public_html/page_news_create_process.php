<?php
    include "index.php";
    
    $url_noticia_insert = $_POST['url_noticia'];
    $titulo_insert = $_POST['titulo'];
    $conteudo_insert = $_POST['conteudo'];
    
    $insert_conteudo = [$url_noticia_insert, $titulo_insert, $conteudo_insert];
    
    insert($database,$table_name,$insert_conteudo);

    echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=page_show_news.php'>
        <script type='text/javascript'>
        alert('Notícia criada com Sucesso.');
        </script>";
?>