<?php
function limitarPalavras($texto, $limite)
{
    $palavras = explode(" ", $texto);
    if (count($palavras) > $limite) {
        return implode(" ", array_slice($palavras, 0, $limite)) . "...";
    }
    return $texto;
}

?>