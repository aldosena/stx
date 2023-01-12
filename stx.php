<?php
# Esta função reune várias formas de tirar caracteres especias da string;
# Pode converter a string para maiúscula ou minúscula
# Contato: aldosena10@gmail.com
# Alterado em: 12/01/2022

# Fonte: https://github.com/aldosena/stx/edit/main/stx.php
function stx($texto, $letra="x"){
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
?>
