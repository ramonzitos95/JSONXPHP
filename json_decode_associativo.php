<?php
//Cria uma string no formato JSON
$json_str = '{"Jason":38,"Ada":35, "Delphino":26}';

//Transforma a string em uma array associativo
$json_str = json_decode($json_str, true);

//exibe o array associativo
var_dump($json_str);
