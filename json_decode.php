<?php
/*
 * No exemplo os dados de um funcionarios (nome, idade, sexo)
    armazenados em uma string JSON são importado para um objeto PHP
*/

$json_str = '{"nome":"Ramon Silva", "idade":38, "sexo": "M"}';

//faz o parsing na string, gerando um objeto PHP
$obj = json_decode($json_str);

//imprime o conteúdo do objeto
echo "nome:  $obj->nome<br>";
echo "idade: $obj->idade<br>";
echo "sexo: $obj->sexo<br>";