<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Calculadora simples</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <form action="" method= "post">
        <label><h1>CALCULADORA</h1><label>
        <label>Primeiro numero</label>
        <input type="number" name="n1" > <br><br>
        <label>Segundo numero</label>
        <input type="number" name="n2" > <br><br>
        <select name="calcular">
            <option value="somar">somar</option>
            <option value="subtrair">subtrair</option>
            <option value="multiplicar">multiplicar</option>
            <option value="dividir">dividir</option>
        </select>
        <br><br>
        <input type="submit" value="Calcular">
        <input type="reset" value="Limpar">
        <br><br>



    </form>
</body>
</html>

<?php
    if ($_SERVER ["REQUEST_METHOD"] == "POST") {
        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $calcular = $_POST['calcular'];
        $resultado = 0;


            function somar($n1,$n2){
                return $n1 + $n2;
            }
            function subtrair($n1,$n2){
                return $n1 - $n2;
            }
                     
            function multiplicar($n1,$n2){
                return $n1 * $n2;
            }

            function dividir($n1,$n2){
                if ($n2 != 0) {
                    return $n1 / $n2;
                } else {
                    return "erro";
                }
            }
            switch ($calcular){
                case "somar":
                    $resultado = somar ($n1,$n2);
                    break;
                case "subtrair":
                    $resultado = subtrair ($n1,$n2);
                    break; 
                case "multiplicar":
                    $resultado = multiplicar ($n1,$n2);
                    break;
                case "dividir":
                    $resultado = dividir ($n1,$n2);
                    break;     
                        
            }
            echo "<p>Resultado: $resultado </p>";
    }
    ?>
    