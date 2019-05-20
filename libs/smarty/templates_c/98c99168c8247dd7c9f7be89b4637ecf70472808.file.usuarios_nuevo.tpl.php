<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-15 19:06:46
         compiled from "vistas\usuarios_nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232115cc73eab2a3024-07878160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98c99168c8247dd7c9f7be89b4637ecf70472808' => 
    array (
      0 => 'vistas\\usuarios_nuevo.tpl',
      1 => 1557947166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232115cc73eab2a3024-07878160',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cc73eab711eb6_74391642',
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'titulo' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc73eab711eb6_74391642')) {function content_5cc73eab711eb6_74391642($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">
    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</title>

    <!-- Bootstrap core CSS -->
    <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/inicio.css" rel="stylesheet">

    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.0/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.3.3/underscore-min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="js/funciones.js"><?php echo '</script'; ?>
>

  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-3">

          <h1 class="my-4"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>
        </div>
       
        <div class="col-md-9 col-md-offset-3 text-center">
          
          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
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
              <label class="col-md-3 control-label" for="apellido">Apellido</label>  
              <div class="col-md-6">
              <input id="apellido" name="apellido" type="text" class="form-control input-md" required="">
                
              </div>
            </div>

            <div class="form-group row">
              <label class="col-md-3 control-label" for="ci">C.I.</label>  
              <div class="col-md-6">
              <input id="ci" name="ci" type="text" class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-3 control-label" for="email">Email</label>  
              <div class="col-md-6">
              <input id="email" name="email" type="text" class="form-control input-md" required="">
                
              </div>
            </div>

             <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-3 control-label" for="password">Password</label>  
              <div class="col-md-6">
              <input id="password" name="password" type="password"  minlength="6" title="6 letras mín." class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group row">
              <label class="col-md-3 control-label" for="telefono">Telefono</label>  
              <div class="col-md-6">
              <input id="telefono" name="telefono" type="text" class="form-control input-md">
                
              </div>
            </div>

            

            <!-- Text input-->
            

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
  <?php echo '<script'; ?>
 src="style/bootstrap/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="style/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

  </body>
</html>

<?php }} ?>
