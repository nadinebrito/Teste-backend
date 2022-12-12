<?php
require_once __DIR__ . "/Nerdweb/Database.php";
$configDB = [
    "host" => "localhost",
    "database" => "teste_backend",
    "user" => "root",
    "pass" => "s0lz1nh0"
];
$database = new \Nerdweb\Database($configDB);

$table_name = 'noticias';

#funciona
#INSERT OK
#$array_colunas = ['titulo', 'conteudo'];
#$array_conteudo = ['Lucas Inutilismo em Manaus!', 'Nesse final de semana em Manaus vai rolar um show bem legal.'];
#$database->insertPrepared($table_name, $array_colunas , $array_conteudo);

#SELECT OK (depois mais falta padronizar o condName e o condValue)
/*
$sel = [];
$sel = $database->selectPrepared($table_name,['id'],[4],"titulo, conteudo");

echo 'Notícia:';
print_r($sel[0]['titulo']);
echo '<br><br>Matéria:';
print_r($sel[0]['conteudo']);
*/

#UPDATE OK (Pensar se devo fazer o update dinamico ou deixo assim msm)
/*
$condicao_campo=['id'];
$condicao_valor=[6];
$campos_update = ['titulo','conteudo'];
$array_conteudo_update = ['Lucas ', 'unico dado desse tipo.'];
$database->updatePrepared($table_name,$campos_update,$array_conteudo_update,$condicao_campo,$condicao_valor);
*/
/*
#DELETE fazendo
$condicao_delete=['id'];
$delete_value=[2];
$database->deletePrepared($table_name,$condicao_delete,$delete_value);
*/

?>
