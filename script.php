
<!--
echo EXIBIR UMA OU MAIS STRINGS
print MOSTRAR UMA STRING
var_dump MOSTRA INFORMAÇÃO SOBRE UMA VARIÁVEL
print_r IMPRIME UMA INFORMAÇÃO DE FORMA LEGÍVEL SOBRE UMA VARIÁVEL
printf MOSTRA UMA STRING FORMATADA
vprintf MOSTRA UMA STRING FORMATDA

$_GET
$_POST

$_SESSION

if
else if
else 
switch

while
do while
for
foreach

==
===
<
>
<=
>=
!=
!==

&& 
||
and 
or 
xor

para criar uma variável basta colocar '$' antes da palavra
-->

<!--  para html -->
<?php
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'juvenil';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

print_r($categorias);

$nome = 'lucas';
$idade = 18;

var_dump($nome); //imprime a variável com o tipo, ou seja a saída é: string(5)"lucas" int(18) 
var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
    for($1 = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'infantil'){
            echo"o nadador ".$nome." compete na categoria".$categorias[$i]
        }
    }
}
else if($idade >= 13 && $idade <= 18)
{
    for($1 = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'juvenil'){
            echo"o nadador ".$nome." compete na categoria".$categorias[$i]
        }
    }
}
else
{
    for($1 = 0; $i <= count($categorias); $i++){
        if($categorias[$i] == 'adulta'){
            echo"o nadador ".$nome." compete na categoria".$categorias[$i]
        }
    }
    echo'adulto';
}
?>
