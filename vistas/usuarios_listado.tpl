
<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="{$url_base}">
    <meta charset="utf-8">
    
    <title>{$proyecto}</title>

    <!-- Bootstrap core CSS -->
    <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

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

          <h1 class="my-4">Usuarios {$titulo} </h1>
          <div class="list-group">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
          </div>

        </div>
      <!-- /.col-lg-3 -->

       
        <div class="col-sm-9  col-md-9  main">
          
          {if $mensaje!=""}
            <div class="alert alert-danger" role="alert">{$mensaje}</div>
          {/if}
          <button id="agregar" name="agregar" style="float: right;" class="btn btn-success pull-right" onClick="window.location='{$usuario_nuevo}'">Agregar</button>
                    
      
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Telefono</th>
                  <th>Ci</th>
                  <th>Email</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                {foreach from=$usuarios item=persona}
                  <tr>
                    <td>{$persona->getNombre()|upper}</td>
                    <td>{$persona->getApellido()}</td>
                    <td>{$persona->getTelefono()}</td>
                    <td>{$persona->getCI()}</td>
                    <td>{$persona->getEmail()}</td>
                    <td>
                      <input type="button" value="Borrar" class="btn btn-danger" onClick="window.location='{$url_base}usuario/listado/borrar/{$persona->getCI()}/'"/>

                      <input type="button" value="Editar" class="btn btn-link" onClick="window.location='{$url_base}usuario/editar/{$persona->getCI()}/'"/>

                      <input type="button" value="Favoritos" class="btn btn-submit" onClick="cargarFavoritos();"/>
                    </td>
                  </tr>
                {/foreach}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    {include file="favoritos.tpl"}

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
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

