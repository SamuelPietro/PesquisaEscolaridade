<?php

namespace ProcessarDados;

$nome = $_POST['nome'];
$sexo = $_POST['sexo'];
$escolaridade = $_POST['escolaridade'];

$saida = $nome . ";" . $sexo . ";" . $escolaridade . ";" . chr(13) . chr(10);

function erro($erro)
{
    setcookie('erro', $erro, (time() + (1)));
}
if (!empty($_POST['nome']) && isset($_POST['sexo']) && isset($_POST['escolaridade'])) {
    $arquivo = "Respostas.txt";

    if (!$handle = fopen($arquivo, 'a+')) {
        erro("Não foi possível abrir o arquivo $arquivo");
    }
    if (fwrite($handle, "$saida") === false) {
        echo "Não foi possível escrever no arquivo de saida (Verifique as permissoes do arquivo) $filename";
    }
    fclose($handle);
    setcookie('ok', 'ok', (time() + (1)));
}

header(sprintf('location: %s', $_SERVER['HTTP_REFERER']));
exit;
