<?php

    $empleado = $_POST["empleado"];
    $horas = $_POST["horas"];
    $tarifa = $_POST["tarifa"];

    $tipo = $_POST["tipo"];
    $bono = 0;
    $salarioBruto = $horas * $tarifa;
    $descuentoSeguro = $salarioBruto * 0.12;

    if ($tipo == "Jefe"){
        $bono = 200;
        $salarioNeto = $salarioBruto - $descuentoSeguro + $bono;
    }
    elseif ($tipo == "Administrativo"){
        $bono = 150;
        $salarioNeto = $salarioBruto - $descuentoSeguro + $bono;
    }
    elseif ($tipo == "Operador"){
        $bono = 100;
        $salarioNeto = $salarioBruto - $descuentoSeguro + $bono;
    }
    
    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica PHP</title>
    <link rel="stylesheet" href="estilos.css" type="text/css">
</head>
<body>
    <h1>Pago empleados</h1>
<form action="index.html" method="post" class="form">
        <table>
            <tr>
                <td> <strong>Nombre de empleado:</strong> </td>
                <td><?php echo $empleado; ?> </td>
            </tr>

            <tr>
                <td> <strong>Horas trabajadas:</strong> </td>
                <td><?php echo $horas; ?></td>
            </tr>

            <tr>
                <td> <strong>Tarifa por hora:</strong> </td>
                <td><?php echo $tarifa, " usd"; ?></td>
            </tr>

            <tr>
                <td> <strong>Salario bruto:</strong> </td>
                <td><?php echo $salarioBruto, " usd"; ?></td>
            </tr>

            <tr>
                <td> <strong>- Descuento</strong> </td>
                <td><?php echo $descuentoSeguro, " usd"; ?></td>
            </tr>

            <tr>
                <td> <strong>+ Bono: </strong> </td>
                <td> <?php echo $bono, " usd"; ?></td>
                
            </tr>



            <tr>
                <td> <strong>Salario Neto:</strong> </td>
                <td><?php echo $salarioNeto, " usd"; ?></td>
            </tr>

            <tr>
                <td> </td>
                <td><input type="submit" value="Regresar"></td>
            </tr>


        </table>
    </form>


</body>
</html>