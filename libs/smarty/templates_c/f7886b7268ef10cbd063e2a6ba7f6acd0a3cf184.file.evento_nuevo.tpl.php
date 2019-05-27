<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-27 18:55:08
         compiled from "vistas\evento_nuevo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13092418765ce7febfd826f1-22511972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7886b7268ef10cbd063e2a6ba7f6acd0a3cf184' => 
    array (
      0 => 'vistas\\evento_nuevo.tpl',
      1 => 1558978560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13092418765ce7febfd826f1-22511972',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ce7fec0375a67_99430868',
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'titulo' => 0,
    'mensaje' => 0,
    'estados' => 0,
    'estado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce7fec0375a67_99430868')) {function content_5ce7fec0375a67_99430868($_smarty_tpl) {?><!DOCTYPE html>
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
                  <?php  $_smarty_tpl->tpl_vars['estado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['estado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['estado']->key => $_smarty_tpl->tpl_vars['estado']->value) {
$_smarty_tpl->tpl_vars['estado']->_loop = true;
?>                                 
                  <option value="'<?php echo $_smarty_tpl->tpl_vars['estado']->value->getId();?>
'"><?php echo $_smarty_tpl->tpl_vars['estado']->value->getNombre();?>
</option>
                  <?php } ?>
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
  <?php echo '<script'; ?>
 src="style/bootstrap/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="style/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

  </body>
</html>

<?php }} ?>
