<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-24 12:44:41
         compiled from "vistas\evento_listadoEstados.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14376351985ce6eb96f37f75-23864978%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f66fab465a0c3983315131feb97e55baf31a3117' => 
    array (
      0 => 'vistas\\evento_listadoEstados.tpl',
      1 => 1558701859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14376351985ce6eb96f37f75-23864978',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ce6eb9751fdd7_26663971',
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'titulo' => 0,
    'mensaje' => 0,
    'evento_nuevoEstado' => 0,
    'estados' => 0,
    'estado' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ce6eb9751fdd7_26663971')) {function content_5ce6eb9751fdd7_26663971($_smarty_tpl) {?>
<!DOCTYPE html>
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
    <link href="css/dashboard.css" rel="stylesheet">

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

          <h1 class="my-4">Evento <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
 </h1>
          <div class="list-group">
            <a href="#" class="list-group-item">Category 1</a>
            <a href="#" class="list-group-item">Category 2</a>
            <a href="#" class="list-group-item">Category 3</a>
          </div>

        </div>
      <!-- /.col-lg-3 -->

       
        <div class="col-sm-9  col-md-9  main">
          
          <?php if ($_smarty_tpl->tpl_vars['mensaje']->value!='') {?>
            <div class="alert alert-danger" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
          <?php }?>
          <button id="agregar" name="agregar" style="float: right;" class="btn btn-success pull-right" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['evento_nuevoEstado']->value;?>
'">Agregar</button>
                    
      
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nombre</th>
                  <th>Descripcion</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php  $_smarty_tpl->tpl_vars['estado'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['estado']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['estados']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['estado']->key => $_smarty_tpl->tpl_vars['estado']->value) {
$_smarty_tpl->tpl_vars['estado']->_loop = true;
?>
                  <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['estado']->value->getId();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['estado']->value->getNombre();?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['estado']->value->getDescripcion();?>
</td>
                    
                    <td>
                      <input type="button" value="Borrar" class="btn btn-danger" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
evento/listadoEstado/borrar/<?php echo $_smarty_tpl->tpl_vars['estado']->value->getId();?>
/'"/>

                      <input type="button" value="Editar" class="btn btn-link" onClick="window.location='<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
evento/editarEstado/<?php echo $_smarty_tpl->tpl_vars['estado']->value->getId();?>
/'"/>
                      
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("favoritos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
  <?php echo '<script'; ?>
 src="style/bootstrap/jquery/jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="style/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    

  </body>
</html>

<?php }} ?>
