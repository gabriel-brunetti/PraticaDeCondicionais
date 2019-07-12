<?php
    $visitante = [
        'nome' => 'Nika',
        'idade' => 28,
        'sexo' => 'f'
    ];

    $produtos_f = [
        'Vestido ana Rosa - Vermelho',
        'Absorvente',
        'Sutiã',
        'Batom'
    ];

    $produtos_m = [
        'Creme de Barbear',
        'Gravata',
        'Machado',
        'Caixa de Ferramentas'
    ];

    $num1 = mt_rand(0,3);
    $num2 = mt_rand(0,3);

    if($visitante['sexo'] == 'm'){
        $sugestoes = [
            $produtos_m[$num1],
            $produtos_m[$num2]
        ];
    } else {
        $sugestoes = [
            $produtos_f[$num1],
            $produtos_f[$num2]
        ];        
    }

    $hora = 8;
    if($hora >= 6 && $hora <12){
        $periodo = "MANHA";
    } elseif ($hora >= 12 && $hora < 18) {
        $periodo = "TARDE";
    } else {
        $periodo = "NOITE";
    }

    switch ($periodo) {
        case 'MANHA':
            $corDeFundo = "aqua";
            $corFonte = "white";
            break;

        case 'TARDE':
            $corDeFundo = "yellow";
            $corFonte = "black";
            break;
        
        case 'NOITE';
            $corDeFundo = "black";
            $corFonte = "white";
            break;

        default:
            $corDeFundo = "white";
            break;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prática Condicionais </title>
    <style>
        body {
            background: <?= $corDeFundo ?>;
            color: <?= $corFonte ?>; 
        }
    </style>
</head>
<body>
    <h2>Bem Vind<?= $visitante['sexo']=='m' ? 'o' : 'a' ?>, <?= $visitante['nome'] ?>!</h2>
    <p>
    Sugerimos para você <?= $sugestoes[0] ?> e <?= $sugestoes[1] ?>.
    </p>

</body>
</html>