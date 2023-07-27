<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>
    <?php
    //operadores condicionais/comparação
    //== 
    //===
    //!= ou <>
    //!==
    //<
    //>
    //<=
    //>=
    
    //Operadores lógicos
    //E: && ou AND -> retorna verdadeiro se todas as expressões forem verdadeiros
    //f e f = f
    //f e v = f - v e f = f
    //v e v = v
    //OU: || ou OR -> retorna verdadeiro se pelo menos uma das expressões é verdadeiras
    //f ou f = f
    //v ou f = v - f ou v = v
    //v ou v = v
    //XOR: XOR -> retorna verdadeiro se apenas uma das expressões for verdadeira
    //f xor f = f - v xor v = f
    //v xor f = v - f xor v = v
    //! - inverte o resultado informado pela expressão
    //v xor v = !(f) = v
    //v xor f = !(v) = f
    //v e v e f = !(f) = v
    
    //estabelecer precedência - interpretador do php lê primeiro o que há entre parenteses
    //(v e v) = v ou f = v

    if ((3 == 3 && 4 == 4) || 5 == 7) {
        echo 'Verdadeiro';
    } else {
        echo 'Falso';
    }

    ?>
</body>

</html>