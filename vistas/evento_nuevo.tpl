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
          <form class="form-horizontal" enctype="multipart/form-data" id="formSubir" name="formSubir" method="post">
            <fieldset>
            <!-- Text input-->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text fa fa-file" id="basic-addon1"></span>
              </div>
              <input name="nombre" id="nombre" type="text" class="form-control" placeholder="Nombre" aria-label="Nombre" aria-describedby="basic-addon1" required="Ingrese el nombre del evento" autofocus title="Nombre de Evento">
            </div>

            <!-- Text input-->
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text fa fa-file-alt" id="basic-addon1"></span>
              </div>
              <textarea placeholder="Descripción" id="descripcion" name ="descripcion" class="form-control" title="Descripción del evento"></textarea>
            </div>
                
            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text fas fa-map-marker-alt" id="basic-addon1"></span>
              </div>
              <input name="longitud" id="longitud" type="text" class="form-control" placeholder="Longitud" aria-label="Longitud" aria-describedby="basic-addon1" required="Ingrese la Longitud del evento" autofocus title="Longitud de Evento">
            </div> 

            <div class="input-group mb-3">
              <div class="input-group-prepend">
                <span class="input-group-text fas fa-map-marker-alt" id="basic-addon1"></span>
              </div>
              <input name="latitud" id="latitud" type="text" class="form-control" placeholder="Latitud" aria-label="Latitud" aria-describedby="basic-addon1" required="Ingrese la Latitud del evento" autofocus title="Latitud de Evento">
            </div> 

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Estados</label>
                </div>
                <select class="custom-select" id="estado" name="estado">
                  <option selected>Seleccionar...</option>   
                  {foreach from=$estados item=estado}                                 
                  <option value="'{$estado->getId()}'">{$estado->getNombre()}</option>
                  {/foreach}
                </select>
            </div>

            <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text fa fa-camera" id="basic-addon1"></span>
            </div>
            <input name="img_evento" id="img_evento" type="file" class="form-control" aria-label="img" aria-describedby="basic-addon1" autofocus title="Seleccionar una imagen"/>                        
          </div> 

            <!-- Button -->
            <div class="form-group row">
              <label class="col-md-3 control-label" for="guardar"></label>
              <div class="col-md-6">
                <input type="submit" id="guardar"  class="btn btn-success" value="Subir Evento" />
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

