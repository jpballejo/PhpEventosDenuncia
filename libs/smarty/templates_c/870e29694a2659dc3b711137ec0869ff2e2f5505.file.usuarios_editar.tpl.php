<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-16 13:53:13
         compiled from "vistas\usuarios_editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3007530895cdd6b49c86001-65635503%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '870e29694a2659dc3b711137ec0869ff2e2f5505' => 
    array (
      0 => 'vistas\\usuarios_editar.tpl',
      1 => 1556582938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3007530895cdd6b49c86001-65635503',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'titulo' => 0,
    'mensaje' => 0,
    'persona' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cdd6b4a46bc14_02750836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cdd6b4a46bc14_02750836')) {function content_5cdd6b4a46bc14_02750836($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <base href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
">
    <meta charset="utf-8">    
    <title><?php echo $_smarty_tpl->tpl_vars['proyecto']->value;?>
</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>
  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container-fluid">
      <div class="row">
       
        <div class="col-sm-12  col-md-12  main">
          <h1 class="page-header">Usuarios</h1>
          <h2 class="sub-header"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h2>
          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
          <form class="form-horizontal" method="post">
            <fieldset>
            <!-- Text input-->
             <div class="form-group">
              <label class="col-md-4 control-label" for="nombre">Nombre</label>  
              <div class="col-md-4">
              <input id="nombre" name="nombre" type="text" value=<?php echo $_smarty_tpl->tpl_vars['persona']->value->getNombre();?>
 class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="apellido">Apellido</label>  
              <div class="col-md-4">
              <input id="apellido" name="apellido" type="text" value=<?php echo $_smarty_tpl->tpl_vars['persona']->value->getApellido();?>
 class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="email">Email</label>  
              <div class="col-md-4">
              <input id="email" name="email" type="text" value=<?php echo $_smarty_tpl->tpl_vars['persona']->value->getEmail();?>
 class="form-control input-md" required="">
                
              </div>
            </div>

             <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="password">Password</label>  
              <div class="col-md-4">
              <input id="pass" name="pass" type="password"  value=<?php echo $_smarty_tpl->tpl_vars['persona']->value->getPass();?>
 class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="telefono">Telefono</label>  
              <div class="col-md-4">
              <input id="edad" name="edad" type="text" value=<?php echo $_smarty_tpl->tpl_vars['persona']->value->getTelefono();?>
 class="form-control input-md">
                
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="ci">C.I.</label>  
              <div class="col-md-4">
              <input id="ci" name="ci" type="text" value=<?php echo $_smarty_tpl->tpl_vars['persona']->value->getCI();?>
 class="form-control input-md" required="">
                
              </div>
            </div>

            <!-- Button -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="guardar"></label>
              <div class="col-md-4">
                <button id="modificar" name="guardar" class="btn btn-success" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
usuario/editar/<?php echo $_smarty_tpl->tpl_vars['persona']->value->getCI();?>
/'">Modificar</button>
              </div>
            </div>
            </fieldset>
          </form>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../../dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <?php echo '<script'; ?>
 src="../../assets/js/vendor/holder.js"><?php echo '</script'; ?>
>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <?php echo '<script'; ?>
 src="../../assets/js/ie10-viewport-bug-workaround.js"><?php echo '</script'; ?>
>
  </body>
</html>

<?php }} ?>
