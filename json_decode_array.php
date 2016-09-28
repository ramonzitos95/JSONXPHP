<?php
//String json (array contendo 3 elementos)
$json_str = '{"empregados": '.
                '[{"nome":"Jason Jones","idade":38,"sexo":"M", "dependentes":["Sedna Jones","Ian Jones"]},'.
                '{"nome":"Ada Pascalina", "idade":35, "sexo":"F"},'.
                '{"nome":"Pascal de Lima", "idade":26, "sexo":"M"}'.
                '],
                "data":"10/06/1995"}';

//Faz o parsing da string, criando o arrat "Empregados"
$jsonObj = json_decode($json_str);

//Criar o array empregados
$empregados = $jsonObj->empregados;

//imprime a data do arquivo Navega pelos elementos do array, imprimindo cada empregado
//Caso o empregado possua dependentes, estes também são exibidos
echo "<br>Data do Arquivo<br/>: $jsonObj->data<br/>";
foreach ($empregados as $e)
{
    echo "Nome: $e->nome - idade: $e->idade - sexo $e->sexo<br>";
    //Verifica se existe a propriedade dependentes em cada posição do array
    if (property_exists($e, "dependentes"))
    {
        $dep = $e->dependentes;
        echo "dependentes: <br/>";
        foreach ($dep as $d) echo "- $d<br/>";
    }
}