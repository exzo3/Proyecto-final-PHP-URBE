<?php
include('header.php');
?>

    <div class="container">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 style="color:black;font-family:Roboto;" align="center"><span class="icon-text-document"></span>&nbsp INICIAR SECCIÓN</h3>
        </div>
        <div class="panel-body">
          <form class="form" action="control.php" method="post">
            <input id="inputNombre" class="form-control" name="usuario" placeholder="Usuario" type="text">
        
              <input id="inputEmail" class="form-control" name="contrasena" placeholder="contraseña"  type="password">

              <button class=".btn-personal btn btn-lg  btn-block" id="btn-enviar" name="btn" type="submit">Enviar</button>
          </form>

          <section id="uno" style="background-color:black; color:white;">

          </section>
        </div>
      </div>
    </div>
   <script>
      document.getElementById('btn-enviar').onmouseover = function() {

        document.getElementById('btn-enviar').style.backgroundColor = "#a12525";
      };

      document.getElementById('btn-enviar').onmouseout = function() {

        document.getElementById('btn-enviar').style.backgroundColor = "#de4f4f";
        document.getElementById('btn-enviar').style.transition = "0.5s";
      };

      <!-- posicion del puntero respecto al a ventana del navegador

      var formulario = document.getElementById('uno');

      function muestraInfo(e) {
        var cordenadasX = e.screenX
        var cordenadasY = e.screenY

        formulario.innerHTML = " <p> Has pulsado el raton en la posicion" + " X: " + cordenadasX + ",Y: " + cordenadasY + "</p>";
      };

      document.onclick = muestraInfo;-->
    </script>
<?php
include('footer.php');
?>
