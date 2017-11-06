<?php
include('header.php');
?>

    <!-- Page Content -->
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 align="center">Tiempo de Sesión Expirado</h1>
            <hr>
        </div>

    </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 text-center">
            <div class="panel">
					<?php
					echo "<img src='img/clock.svg' alt='acaba' />";
					echo "<br><br>Haz estado mucho tiempo inactivo <b>inicia sesión nuevamente</b><br><br>";
					echo " <a href='login.php' class='btn btn-primary'>VOLVER A INICIAR SESIÓN</a>";
					?>
            </div>
            </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>

<?php
include('footer.php');
?>
