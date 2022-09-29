<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Script amigo</title>
</head>
<body>
    <h2 style=" color:red; background:green; border: 1px solid black; text-align: center; ">
        <?php
            //Establecemos la zona horaria
            date_default_timezone_set('Europe/Madrid');
            $fecha_actual = strtotime(date("d-m-Y",time()));
            $fecha_limite = strtotime("11-12-2022");
            
            if ($fecha_actual<=$fecha_limite){
                echo 'Trae a tu amigo o amiga hasta el 11/12/2022 y consigue un 30% de descuento de por vida.';
            }
        ?>
    </h2>
    

</body>
</html>
