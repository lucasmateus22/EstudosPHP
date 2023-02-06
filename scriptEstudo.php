<?php
$nome = 'guilherme';
$guilherme = 'blabla!';
echo 'O nome é '.$$nome."\n";

if($nome == 'guilherme'){
	echo 'verdadeiro';
}else{
	echo 'false';
};

$idade = '16';

if($idade === 16){
	echo 'identico';
}else{
	echo 'diferente';
};

for($i=0; $i<=10; $i++){
	echo $i.' ';
};
echo '<br>';
printNUmero('guilherme');
function printNumero($n){
	echo $n;
};

class Pessoa{
	public $idade;
	public $nome;
	
	public function __constructor($nome,$idade){
		$this->nome = $nome;
		$this->idade = $idade;
	}
	public function printNomeEIdade(){
		echo $this->nome;
		echo '<br>';
		echo $this ->idade;
	}
}
$pessoa = new Pessoa('guilherme','26');

$pessoa -> printNomeEIdade();