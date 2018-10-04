<?php

$arquivo = $argv[1];
$funcao = $argv[2];
$variaveis = explode(',',$argv[3]);

$x = '';
foreach ($variaveis as $valor){
    $x = $x . "$" . $valor . ', ';
}

$x = substr($x, 0, -2);
$eita = '<?php';
$func = <<<END

function $funcao($x){

}
END;

if ((file_exists($arquivo . '.php'))==false) {
    file_put_contents($arquivo . '.php', $eita);
};
file_put_contents($arquivo . '.php', $func , FILE_APPEND);
