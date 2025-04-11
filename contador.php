<?php
$arquivo = "visitas.txt";

// Cria o arquivo se não existir
if (!file_exists($arquivo)) {
    file_put_contents($arquivo, 0);
}

// Lê o número atual
$visitas = (int) file_get_contents($arquivo);

// Adiciona mais 1
$visitas++;

// Salva o novo número
file_put_contents($arquivo, $visitas);

// Retorna o número (pode usar no frontend se quiser)
echo $visitas;
?>
