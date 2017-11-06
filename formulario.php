<?php
include('header.php');
?>

    <div class="container">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 style="color:black;font-family:Roboto" align="center"><span class="icon-text-document"></span>&nbspCONTACTO</h3>
        </div>
        <div class="panel-body">
          <form class="form" action="" method="post">
            <input id="inputNombre" class="form-control" name="nombre" placeholder="Nombre" type="text">
      <?php
             include('funciones.php');
                        if(isset($_REQUEST['btn'])){

                            if($_REQUEST['nombre']==""){
                                echo "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span>&nbspIngresa tu nombre</div>";
                            }else{
                                if(validaAlfaEsp($_REQUEST['nombre'])){
                                     echo "<div class='alert alert-success'>&nbspExcelente!</div>";
                                }else{
                                     echo "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span>&nbspSolo se permiten caracteres alfabeticos</div>";
                                }
                            }

                        }
                        ?>
              <input id="inputEmail" class="form-control" name="email" placeholder="Email"  type="text">
              <?php

                        if(isset($_REQUEST['btn'])){

                            if($_REQUEST['email']==""){
                                echo "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span>Ingresa tu correo electronico</div>";
                            }else{
                                if(validarDirCorreoElec($_REQUEST['email'])){
                                     echo "<div class='alert alert-success'>&nbspExcelente!</div>";
                                }else{
                                     echo "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span>Ingresa un correo electronico valido</div>";
                                }
                            }

                        }
                        ?>
              <input id="inputAsuto" class="form-control" name="Asunto" placeholder="Asunto:" type="text">
                 <?php

                        if(isset($_REQUEST['btn'])){

                            if($_REQUEST['Asunto']==""){
                                echo "<div class='alert alert-danger'><span class='glyphicon glyphicon-remove' aria-hidden='true'></span>Este Campo no puede estar vacio</div>";
                            }else{
                                   echo "<div class='alert alert-success'>&nbspExcelente!</div>";

                                }
                        };

                        ?>


              <textarea class="form-control" rows="5" id="comment" placeholder="Dejanos tu mensaje" name="texto"></textarea>

              <button class=".btn-personal btn btn-lg  btn-block" id="btn-enviar" name="btn" type="submit">Enviar</button>
          </form>

          <section id="uno" style="background-color:black; color:white;">

          </section>
        </div>
      </div>
    </div>
   <!-- <script>
      document.getElementById('btn-enviar').onmouseover = function() {

        document.getElementById('btn-enviar').style.backgroundColor = "#a12525";
      };

      document.getElementById('btn-enviar').onmouseout = function() {

        document.getElementById('btn-enviar').style.backgroundColor = "#de4f4f";
        document.getElementById('btn-enviar').style.transition = "0.5s";
      };

      //posicion del puntero respecto al a ventana del navegador

      var formulario = document.getElementById('uno');

      function muestraInfo(e) {
        var cordenadasX = e.screenX
        var cordenadasY = e.screenY

        formulario.innerHTML = " <p> Has pulsado el raton en la posicion" + " X: " + cordenadasX + ",Y: " + cordenadasY + "</p>";
      };

      document.onclick = muestraInfo;
    </script>-->
<?php
include('footer.php');
?>
