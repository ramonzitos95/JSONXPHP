<?php
/*
0 = JSON_ERROR_NONE: nenhum erro ocorreu;
1 = JSON_ERROR_DEPTH: a profundidade máxima de aninhamento de uma string JSON foi excedida (esse valor máximo é 512);
2 = JSON_ERROR_STATE_MISMATCH: erro de underflow ou outro tipo de estado inválido;
3 = JSON_ERROR_CTRL_CHAR: foi encontrado um caractere de controle no corpo da string JSON;
4 = JSON_ERROR_SYNTAX: erro de sintaxe;
5 = JSON_ERROR_UTF8: erro na codificação UTF-8 da string JSON;
*/

//string json contendo os dados de um funcionário.
//esta string não está bem-formada, pois o valor M não está entre aspas
$json_str = '{"nome":"Jason Jones", "idade":38, "sexo": M}';

//faz o parsing na string, gerando um objeto PHP
$obj = json_decode($json_str);

//testa se houve erro no parsing! Vai acusar erro de string mal-formada (JSON_ERROR_SYNTAX)
if (json_last_error() == 0) {
    echo '- Nao houve erro! O parsing foi perfeito';
}
else{
    echo 'Erro! </br>';
    switch (json_last_error()){

        case JSON_ERROR_DEPTH:
            echo ' - PROFUNDIDADE MAXIMA EXCEDIDA';
            break;
        case JSON_ERROR_STATE_MISMATCH:
            echo ' - state mismatch';
            break;
        case JSON_ERROR_CTRL_CHAR:
            echo ' - Caracter de controle encontrado';
            break;
        case JSON_ERROR_SYNTAX:
            echo ' - Erro de sintaxe! String JSON mal-formada!';
            break;
        case JSON_ERROR_UTF8:
            echo ' - Erro na codificação UTF-8';
            break;
        default:
            echo ' – Erro desconhecido';
            break;
    }
}