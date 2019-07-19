<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercícios Complementares PHP DIFERENCIAIS</title>
</head>
<body>
    <ol>
        <li>
        <p>Definir duas variáveis com números, comparar com um if para decidir qual<br>
        deles é maior e imprimir “O maior número é N”, sendo que N é o valor da maior<br>
        variável.<br> a. Adicionar um else ao exercício anterior para cobrir o caso inverso.</p>

        <div>
            <?php
                $var1 = mt_rand(0,10);
                $var2 = mt_rand(0,15);
                echo('o número 1 é: ' . $var1 . '<br>');
                echo('o número 2 é: ' . $var2 . '<br>');

                if ($var2 > $var1) {
                    echo('O maior número é o número 2 (' . $var2 . ')');
                } else {
                    echo('O maior número é o número 1 (' . $var1 . ')');
                }
            ?>
        </div>
        </li>

        <li>
            <p>Usando a função mt_rand(x,y), em que “x” é o número mínimo e “y” é o número<br>
            máximo, gerar um número aleatório entre 1 e 5, atribuí-lo a uma variável e<br>
            imprimir essa variável apenas se o número gerado for 3 ou 5.</p>

            <div>
                <?php
                    $var1 = mt_rand(1,5);

                    if ($var1 == 3 || $var1 == 5) {
                        echo($var1);
                    } else {
                        echo('A varíavel é diferente de 3 ou 5 (' . $var1 . ')');
                    }
                ?>
            </div>
        </li>

        <li>
            <p>Utilizando a variável do exercício anterior, imprimir “O número NÃO é 3” caso<br>
            essa premissa seja verdadeira. Caso o número seja 3, imprimir simplesmente o<br>
            número 3.</p>

            <div>
                <?php
                    $var1 = mt_rand(1,5);

                    if ($var1 == 3) {
                        echo($var1);
                    } else {
                        echo('O número NÃO é 3 (' . $var1 . ')');
                    }
                ?>
            </div>
        </li>

        <li>
            <p>Gerar um número entre 1 e 100, verificar se é maior que 50. Caso seja<br>
            verdadeiro, retornar “O número é maior que 50” e, caso seja falso: “O número é<br>
            menor que 50”.</p>
            <div>
                <?php
                    $var = mt_rand(1,100);

                    if ($var > 50) {
                        echo('O número é maior que 50 (' . $var . ')');
                    } else {
                        echo('O número é menor do que 50 (' . $var . ')');
                    }
                ?>
            </div>
        </li>

        <li>
            <p>Gerar um número aleatório entre 0 e 100. Se ele for maior que 50 e par,<br>
            imprimir “O número cumpre a condição”. Caso contrário, imprimir “O número<br>
            NÃO cumpre a condição”<br>
                a. Modificar o exercício anterior para que o número 0 também cumpra a
                condição.</p>
            <div>
                <?php
                    $var = mt_rand(0,100);
                    echo($var . '<br>');

                    if ($var >50 && $var % 2 == 0) {
                        echo('O número cumpre a condição');
                    } elseif ($var == 0) {
                        echo('O número cumpre a condição');
                    } else {
                        echo('O número NÃO cumpre a condição');
                    }
                ?>
            </div>
        </li>

        <li>
            <p>Teremos 3 variáveis: idade (um número), casado (um booleano) e sexo (string<br>
            que pode ser “Masculino”, “Feminino” ou “Outro”). Se a pessoa tiver mais de 18<br>
            anos e não for casada, será impressa a mensagem “Boas-vindas”.</p>
            <div>
                <?php
                    $idade = 24;
                    $casado = false;
                    $sexo = 'Masculino';
                    
                    echo($idade . '<br>');
                    echo($casado . '<br>');
                    echo($sexo . '<br> <br>');

                    if($idade > 18 && $casado == false){
                        echo('Boas-Vindas');
                    }
                ?>
            </div>

            <p> a. Modificar o exercício anterior para também imprimir “Boas-vindas” se o<br>
                sexo for “Outro”, sem importar o restante das condições.</p>

            <div>
                <?php
                    $idade = 12;
                    $casado = true;
                    $sexo = 'Outro';
                    
                    echo($idade . '<br>');
                    echo($casado . '<br>');
                    echo($sexo . '<br> <br>');

                    if($sexo == 'Outro'){
                        echo('Boas-Vindas');
                    }
                ?>
            </div>
        </li>

        <li>
            <p>Definir uma variável chamada quantidadeDeAlunos, contendo um número. Em<br>
            seguida, escrever o seguinte código: (sem copiar e colar!!)<br>
            if ($quantidadeDeAlunos) {<br>
            echo “true”;<br>
            } else {<br>
            echo “false”;<br>
            }<br>
            a. O que é impresso?<br>
            b. Testar com os valores -100, -1, 0, 1 e 100 para quantidadeDeAlunos</p>
            <div>
                <?php
                    $quantidadeDeAlunos = 0;
                    if ($quantidadeDeAlunos) {
                        echo "true";
                    } else {
                        echo "false";
                    }

                    echo('<br> Segundo Código <br>');
                    $i = 0;
                    if ($i == 1) {
                        echo "true";
                    } else {
                        echo "false";
                    }
                ?>
            </div>
        </li>

        <li>
            <p> Definir uma variável $numero com um número. Imprimir “O número é par” ou<br>
        “O número é impar”, de acordo com a situação. Este exercício deve ser<br>
        resolvido com um if ternário (operador ?)</p>
            <div>
                <?php
                $numero = mt_rand(1,100);
                echo($numero);
                $resultado = ($numero % 2 == 0) ? 'O número é par' : 'O número é ímpar';
                echo('<br>' . $resultado);
                ?>
            </div>
        </li>

        <li>
            <p>Utilizando mt_rand(), gerar um número aleatório entre 1 e 5 na variável “$i”.<br>
            Utilizando SWITCH, imprimir “i é igual a X”.</p>
            <div>
                <?php
                    $i = mt_rand(1,5);
                    switch ($i) {
                        default:
                            echo("i é igual a $i");
                            break;
                    }
                ?>
            </div>
        </li>

        <li>
            <p>Utilizando o mesmo switch, deixar apenas os casos do número 1 e 2. Se o<br>
            número for outro, imprimir “NÃO é igual a 1 ou 2””.</p>
            <div>
                <?php
                    $i = mt_rand(1,5);
                    switch ($i) {
                        case 1:
                            echo("i é igual a $i");
                            break;

                        case 2:
                            echo("i é igual a $i");
                            break;
                        
                        default:
                            echo('NÃO é igual a 1 ou 2');
                            break;
                    }
                ?>
            </div>
        </li>

        <li>
            <p>Utilizando mt_rand(), gerar dois números aleatórios entre 1 e 100 na variável<br>
            “$x” e a variável “$y”. Imprimir qual é o maior entre os dois ou se são iguais.</p>
            <div>
                <?php
                    $x = mt_rand(1,100);
                    // $x = 5
                    echo($x . '<br>');
                    $y = mt_rand(1,100);
                    // $y = 5;
                    echo($y . '<br>');

                    if ($x > $y) {
                        echo ('O maior número é o x: ' . $x);
                    } elseif ($x == $y) {
                        echo ('Os números são iguais: ' . $x . ' ' . $y);
                    } elseif ($x < $y) {
                        echo ('O maior número é o y: ' . $y);
                    }
                ?>
            </div>
        </li>
    </ol>
</body>
</html>