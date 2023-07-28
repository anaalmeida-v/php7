<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Curso PHP</title>
</head>

<body>

    <?php
    /*
    //recuperação da data atual / data corrente
    echo date('d/m/Y H:i');
    //existem tokens para cada coisa, que podem ser combinados, como no exemplo acima
    //o ideal seria sequência da data invertida(padrão dos EUA)

    //
    echo '<br/>';
    echo date_default_timezone_get ();//onde a aplicação PHP está sendo executada, se tiver acesso aonde o php está instalado, o ideal é ir até o doc.ini, pesquisar por date.timezone=... e modificar isso
    date_default_timezone_set ('America/Sao_Paulo');//caso não tenha acesso a instalação do PHP
    echo '<br/>'
    */

    //quando se trabalha com datas em programação, se trabalha com essas datas em formato americano(ano-mês-dia) --- importante para padrões computacionais
    $data_inicial = '2018-04-24';
    $data_final = '2018-05-15';

    //timestamp - representação de tempo dessa data
    //01/01/1970
    
    $time_inicial = strtotime($data_inicial); //função espera data no formato americano, por isso é importante
    $time_final = strtotime($data_final);
    //retorno das datas em segundos, em relação a 01/01/1970
    
    echo $data_inicial . '-' . $time_inicial;
    echo '<br/>';
    echo $data_final . '-' . $time_final;

    $diferenca_times = abs($time_inicial - $time_final); //abs - inverte resultado negativo para positivo(valor absolute)
    //ao invés de se usar abs, pode-se também efetuar o cálculo ao contrário; time_final menos(-) time_inicial
    echo '<br/>';
    echo "A diferença de segundos entre a data inicial e final é $diferenca_times <br/> "; //diferenca de segundos entre as duas datas
    
    $segundos_existem_dia = 24 * 60 * 60;//horas(dia)*minutos(hora)*segundos(minuto)
    echo "Um dia possui $segundos_existem_dia segundos";//quantos segundos existem em um dia

    $diferencaentredatas = $diferenca_times / $segundos_existem_dia;//calculo de diferença de dias entre as datas
    echo '<br/>';
    echo "A diferença em dias é: $diferencaentredatas";
    ?>
</body>

</html>