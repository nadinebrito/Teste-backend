<?php
require_once __DIR__ . "/Nerdweb/Database.php";
$configDB = [
    "host" => "localhost",
    "database" => "teste_backend",
    "user" => "root",
    "pass" => ""
];
$database = new \Nerdweb\Database($configDB);

$table_name = 'noticias';

function insert($database, $table_name, $insert_conteudo){
    $colunas_insert = ['url_noticia','titulo', 'conteudo'];

    $return = $database->insertPrepared($table_name, $colunas_insert , $insert_conteudo);
    return $return;

}

function select($database, $table_name,$select_cond,$select_cond_value,$select_fields){

    $return = $database->selectPrepared($table_name,$select_cond,$select_cond_value,$select_fields);
    return $return;
}
 
function update($database, $table_name,$array_conteudo_update,$condicao_campo,$condicao_valor){
    $campos_update = ['url_noticia','titulo', 'conteudo'];

    $return = $database->updatePrepared($table_name,$campos_update,$array_conteudo_update,$condicao_campo,$condicao_valor);
    return $return; 

}

function delete($database, $table_name, $condicao_delete,$delete_value){
    
    $return = $database->deletePrepared($table_name,$condicao_delete,$delete_value);
    return $return;
}

?>
