<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <h3>Calculadora</h3>
    <form action="testeClasse.php" method="post">
        <label for="valor1">Valor 1:</label>
        <input type="number" id="valor1" name="valor1" step="any" required><br><br>
        
        <label for="valor2">Valor 2:</label>
        <input type="number" id="valor2" name="valor2" step="any" required><br><br>
        
        <label for="operacao">Operação:</label>
        <select id="operacao" name="operacao" required>
            <option value="somar">Somar</option>
            <option value="subtrair">Subtrair</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select><br><br>
        
        <button type="submit">Calcular</button>
    </form>
</body>
</html>


