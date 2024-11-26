<?php
function fattoriale($numero){
	if($numero <= 1){
		return 1;
	}
	
	return $numero * fattoriale($numero-1);
}

echo fattoriale(4)."sium";
//array
$persona = ["Giorgio", "ITt",20000,false]
echo $persona
print_r($persona)
//array associativo(dizionario)
$prenoto = ["nome"=>"Prilsa", "cognoms"=>"sample","gandins"=>true]
echo $prenoto["nome"]
print_r($prenoto)

foreach($prenoto as $var){
	echo $var;
}

function prova($arr){
	print_r($arr)
	max($arr)
	array_sum($arr)
}

function prova2($arr_libro){
	print_r($arr_libro)
	$arr_libro["prezzo"] = 10
	$arr_libro["prezzo"] = 20
}
//array multidimensionali
?>