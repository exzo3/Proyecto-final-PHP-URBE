<?php
session_start();

// Evalua que la sesi�n continue verificando una de las variables creadas en control.php,
// cuando esta ya no coincida con su valor inicial se redirije al archivo de salir.php
if ( !$_SESSION['autentificado'] )
{
	header("Location: salir.php");
}

$inactivo = 5;

    if(isset($_SESSION['tiempo']) ) {
    $vida_session = time() - $_SESSION['tiempo'];
        if($vida_session > $inactivo)
        {
            session_destroy();
            header("Location: reachend.php");
        }
    }

    $_SESSION['tiempo'] = time();
?>
