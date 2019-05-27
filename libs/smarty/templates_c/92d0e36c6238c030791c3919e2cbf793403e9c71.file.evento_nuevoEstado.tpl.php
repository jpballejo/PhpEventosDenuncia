<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-24 12:45:25
         compiled from "vistas\evento_nuevoEstado.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7309777955ce6ed8e9e6b80-47479673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92d0e36c6238c030791c3919e2cbf793403e9c71' => 
    array (
      0 => 'vistas\\evento_nuevoEstado.tpl',
      1 => 1558701859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7309777955ce6ed8e9e6b80-47479673',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ce6ed8ea46c10_01897008',
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'titulo' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce6ed8ea46c10_01897008')) {function content_5ce6ed8ea46c10_01897008($_smarty_tpl) {?><!DOCTYPE html>
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
  <?php echo '<script'; ?>
 src="style/bootstrap/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="style/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

  </body>
</html>

<?php }} ?>
