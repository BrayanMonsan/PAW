<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $cantidad = $_POST['cantidad'];
    $tarjeta = $_POST['tarjeta'];
    
    echo "¡Muchas gracias por sumarte a la causa ".$nombre."!\n";
    echo "Tu donativo de ".$cantidad." planará muchos arbolitos.\n";
    echo "El recibo del cobro a tu tarjeta ".$tarjeta." se enviará a tu correo ".$correo." en un maximo de 48 horas.\n";
    echo "Atentamente: The Forest.";
?>
