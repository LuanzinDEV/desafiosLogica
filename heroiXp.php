<?php

$heroi = [
    'nome' => 'Geraldo',
    'xp' => 9000
];


if($heroi['xp'] <= 1000)
{    
    $nivel = 'ferro';

}else if($heroi['xp'] > 1000 && $heroi['xp'] <= 2000)
{
    $nivel = 'bronze';

}else if($heroi['xp'] > 2000 && $heroi['xp'] <= 5000)
{
    $nivel = 'prata';

}else if($heroi['xp'] > 5000 && $heroi['xp'] <= 7000)
{
    $nivel = 'ouro';

}else if($heroi['xp'] > 7000 && $heroi['xp'] <= 8000)
{
    $nivel = 'platina';

}else if($heroi['xp'] > 8000 && $heroi['xp'] <= 9000)
{
    $nivel = 'asecendente';

}else if($heroi['xp'] > 9000 && $heroi['xp'] <= 10000)
{
    $nivel = 'imortal';

}else if($heroi['xp'] > 10000)
{
    $nivel = 'radiante';

}

echo ('O Herói de nome '.$heroi['nome'].'está no nível de '.$nivel);