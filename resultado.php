<?php

$arquivo = "Respostas.txt";
$conteudo = file_get_contents($arquivo);
$arrayGeral = explode(chr(13) . chr(10), $conteudo, -1);
$max = count($arrayGeral) - 1;
$keys = array('nome', 'genero', 'escolaridade');

for ($i = 0; $i <= $max; $i++) {
    $array[] = array_combine($keys, explode(";", $arrayGeral[$i], -1));
}



for ($i = 0; $i <= 9; $i++) {
    if ($array[$i]['genero'] == 'f') {
        $arrayf[] = $array[$i]; //Cria uma nova array apenas com as mulheres
    }
    if ($array[$i]['genero'] == 'm') {
        $arraym[] = $array[$i]; //Cria uma nova array apenas com os homens
    }
}

print_r($arrayf);
$quantMulSup = array_count_values(array_column($arrayf, 'escolaridade'))['Superior']; //conta a quantidade de mulheres com escolaridade superior na arrayf
$quantMulEsp = array_count_values(array_column($arrayf, 'escolaridade'))['Especialização']; // como o anterior porem com os parametros adequados
$quantMulMst = array_count_values(array_column($arrayf, 'escolaridade'))['Mestrado'];
$quantMulDra = array_count_values(array_column($arrayf, 'escolaridade'))['Doutorado'];
$quantHomSup = array_count_values(array_column($arraym, 'escolaridade'))['Superior'];
$quantHomEsp = array_count_values(array_column($arraym, 'escolaridade'))['Especialização'];
$quantHomMst = array_count_values(array_column($arraym, 'escolaridade'))['Mestrado'];
$quantHomDra = array_count_values(array_column($arraym, 'escolaridade'))['Doutorado'];

echo "<h3>Quantidade de mulhes com <br></h3>";
echo "Superior: " . $quantMulSup . "<br>";
echo "Especialização: " . $quantMulEsp . "<br>";
echo "Mestrado: " . $quantMulMst . "<br>";
echo "Doutorado: " . $quantMulDra . "<br>";

echo "<h3>Quantidade de homens com <br></h3>";
echo "Superior: " . $quantHomSup . "<br>";
echo "Especialização: " . $quantHomEsp . "<br>";
echo "Mestrado: " . $quantHomMst . "<br>";
echo "Doutorado: " . $quantHomDra . "<br>";
