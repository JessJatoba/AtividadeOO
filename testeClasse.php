<?php
// Inclua a classe Operacao
include 'Operacao.php';

// Verifique se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receba os valores do formulário
    $valor1 = isset($_POST['valor1']) ? (float)$_POST['valor1'] : 0;
    $valor2 = isset($_POST['valor2']) ? (float)$_POST['valor2'] : 0;
    $operacao = isset($_POST['operacao']) ? $_POST['operacao'] : '';

    // Crie um objeto da classe Operacao
    $operacaoObj = new Operacao($valor1, $valor2);

    // Execute a operação selecionada
    switch ($operacao) {
        case 'somar':
            $resultado = $operacaoObj->somar();
            break;
        case 'subtrair':
            $resultado = $operacaoObj->subtrair();
            break;
        case 'multiplicar':
            $resultado = $operacaoObj->multiplicar();
            break;
        case 'dividir':
            $resultado = $operacaoObj->dividir();
            break;
        default:
            $resultado = 'Operação inválida';
            break;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h3>Resultado</h3>
    <p>Resultado: <?php echo isset($resultado) ? $resultado : ''; ?></p>
    <a href="Html.php">Voltar</a>
</body>
</html>
