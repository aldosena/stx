<?php
# esta função reune várias formas de tirar caracteres especias da string;
# aldosena10@gmail.com
function stx($texto, $letra){
	$e = trim($texto);
	$ero = str_replace("'","",$e);	
	$erotic = str_replace('"','',$ero);  
	$sex = htmlspecialchars($erotic, ENT_QUOTES);
	// $eroti = $erot;
  if ($letra == "A"){ 
		$sexy = strtoupper($sex); 
	}elseif( $letra == "a"){ 
		$sexy = strtolower($sex); 
	}else{ 
		$sexy = $sex;
	};
  return $sexy; 
};
// exemplo de uso:
// $casa = stx($x,"A");
// atualizada em 2021-04-23
?>
