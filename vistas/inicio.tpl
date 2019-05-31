
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

    <style>
     #mapa {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
    
    
  </head>

  <body>
    {include file="cabezal.tpl"}
     <!-- Page Content -->
  <div class="container">

    <div class="row">
       <!-- Include de menu-->
      <div class="col-lg-3">
                  
       
      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
          
          
           <div id="mapa"></div>           
                   
      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>
  <script src="js/cargaEventos.js"></script>
  {foreach from=$eventos item=evento}
    <script>
            agregarEvento('{$evento->getNombre()}', '{$evento->getLongitud()}', '{$evento->getLatitud()}');
    </script>
   {/foreach}
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDi6oEuDbvdWa_3wOu656ygnioxQdjLXiM&callback=myMap"></script>
  
  <!-- Bootstrap core JavaScript -->
  <script src="style/bootstrap/jquery/jquery.min.js"></script>
  <script src="style/bootstrap/js/bootstrap.bundle.min.js"></script>
  
  </body>
</html>

