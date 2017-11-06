<?php
include_once('sesion.php');
include('header.php');
?>


  

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>
                <span class="glyphicon glyphicon-user"></span>
                &nbsp;SESIÓN INICIADA
                </h1>
                <hr>
            </div>
        </div>



        <div class="row">
        <div class="col-md-12">
            <?php echo $_SESSION['usuario'];?>
            <a href="cargando.php" class="btn btn-default">Hacer algo</a>
        </div>



    </div>
    </div>
    <!-- /.container -->
<?php
include('footer.php');
?>
