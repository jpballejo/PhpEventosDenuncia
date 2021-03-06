
<!DOCTYPE html>
<html lang="en">
  <head>
        <base href="{$url_base}">
    <meta charset="utf-8">
    
    <title>{$proyecto}</title>

    <!-- Bootstrap core CSS -->
    <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/inicio.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
  </head>

  <body>
    {include file="cabezal.tpl"}
    <div class="container">

         <div class="row">

            

                <div class="col-md-6 col-md-offset-3 mx-auto card text-center">
                    <div class="mx-auto is"><h4>Iniciar sesión</h4></div>
                    <hr>
                    <form method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input name="email" id="email" type="email" class="form-control" placeholder="Correo" aria-label="Correo" aria-describedby="basic-addon1" required="Ingrese su correo" autofocus title="Ingrese su correo">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text fa fa-lock" id="basic-addon1"></span>
                            </div>
                            <input name="password" id="password" type="password" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" autofocus title="Mínimo 6 / Máximo 21" required="Mínimo 6 / Máximo 21"/>
                        </div>
                        {if isset($mensaje)} 
                            <div class="mensaje">{$mensaje}</div>
                            <br>
                         {/if}
                        <input name="check" type="checkbox" aria-label="Recordarme" value="Algo">Recordarme
                        <br>
                        <button id="btnLogin" class="btn btn-info">Iniciar Sesión</button>
                    </form>
                    <a class="registrarse-link" href="#">Registrarse</a>
                </div>

            

        </div>
        <!-- /.row -->

      

    </div>
    <!-- /.container -->
    
    <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
  
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="style/bootstrap/jquery/jquery.min.js"></script>
  <script src="style/bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

