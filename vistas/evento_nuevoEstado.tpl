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
    <script type="text/javascript" src="js/funciones.js"></script>

  </head>
  <body>
    {include file="cabezal.tpl"}
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4">{$titulo} </h1>
        </div>
       
        <div class="col-md-9 col-md-offset-3 text-center">
          
          {if $mensaje!=""}
            <div class="alert alert-danger" role="alert">{$mensaje}</div>
          {/if}
          <form class="form-horizontal" method="post">
            <fieldset>
            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-3 control-label" for="nombre">Nombre</label>  
              <div class="col-md-6">
              <input id="nombre" name="nombre" type="text" class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-3 control-label" for="descripcion">Descripcion</label>  
              <div class="col-md-6">
              <input id="descripcion" name="descripcion" type="text" class="form-control input-md" required="">
                
              </div>
            </div>

                
         

            <!-- Button -->
            <div class="form-group row">
              <label class="col-md-3 control-label" for="guardar"></label>
              <div class="col-md-6">
                <button id="guardar" name="guardar" class="btn btn-success">Agregar</button>
              </div>
            </div>

            </fieldset>
          </form>
      </div>
    </div>

   <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>


  <!-- Bootstrap core JavaScript -->
  <script src="style/bootstrap/jquery/jquery.min.js"></script>
  <script src="style/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>

