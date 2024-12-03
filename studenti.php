<?php

function aggiungi(&$classe,$studente){
	$classe[] = $studente;
}

function creastudente($nome,$eta,$voto){
	return ["nome"=>$nome,"eta"=>$eta,"voto"=>$voto];
}

function getmedia($classe){
	$tmp = 0;
	foreach($classe as $studente){
		$tmp += $studente["voto"];
	}
	return $tmp/sizeof($classe);
}

function printstudenti($classe){
	print_r($classe);
}

function filtra($classe,$sogliaminima){
	for($i=0;$i<sizeof($classe);$i++){
		if($classe[$i]["voto"]<$sogliaminima){
			array_splice($classe,$i,1);
			$i--;
		}
	}
	return $classe;
}

$classe = [];
aggiungi($classe,creastudente("ciao",12,5));
aggiungi($classe,creastudente("ciao3",12,6));
aggiungi($classe,creastudente("ciao4",12,3));
aggiungi($classe,creastudente("ciao5",12,7));
aggiungi($classe,creastudente("ciao6",12,8));
aggiungi($classe,creastudente("ciao7",12,9));
aggiungi($classe,creastudente("ciao8",12,8));

printstudenti($classe)."<br><br><br>";
echo getmedia($classe)."<br><br><br>";
echo getmedia(filtra($classe,7))."<br><br><br>";
?>
