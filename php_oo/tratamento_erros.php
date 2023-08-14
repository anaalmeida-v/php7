<?php
//uma lógica
try {
    //uma lógica onde possa ocorrer um potencial erro(exceção)

    echo ' <h3> ***Try*** </h3> ';
    //$sql = 'Select * from clientes';
    //mysql_query($sql); //erro

    if (!file_exists('require_arquivo_a.php')) {
        throw new Exception('O arquivo em questão deveria estar disponível às ' . date('d/m/Y H:i:s') . ' horas mas não estava. Vamos seguir mesmo assim!');
    } //Exception - objeto // a classe desse objeto já está definida dentro do PH
    //new – operador de instância.
} catch (Error $e) {
    echo ' <h3> ***Catch Error*** </h3> ';
    echo '<p style=color:red>' . $e . '</p>';
    //armazenando esse erro em banco de dados
} catch (Exception $e) {
    echo ' <h3> ***Catch Exception*** </h3> ';
    echo '<p style=color:red>' . $e . '</p>';
    //armazenando esse erro em banco de dados
} finally {
    echo ' <h3> ***Finally*** </h3> ';
}
/*uma lógica 
try {
//uma lógica onde possa ocorrer um potencial erro(exceção)
}*/

/*Exception – programador em questão lança;
Error – nativo do PHP.*/
?>