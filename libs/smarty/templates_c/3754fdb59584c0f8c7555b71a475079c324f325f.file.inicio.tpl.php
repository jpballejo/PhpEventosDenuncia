<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-31 14:58:23
         compiled from "vistas\inicio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:944215585cd1995423c8c7-33934124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3754fdb59584c0f8c7555b71a475079c324f325f' => 
    array (
      0 => 'vistas\\inicio.tpl',
      1 => 1559314606,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '944215585cd1995423c8c7-33934124',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cd199545e3a64_44909772',
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'eventos' => 0,
    'evento' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cd199545e3a64_44909772')) {function content_5cd199545e3a64_44909772($_smarty_tpl) {?>
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

    <style>
     #mapa {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
    
    
  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
  <?php echo '<script'; ?>
 src="js/cargaEventos.js"><?php echo '</script'; ?>
>
  <?php  $_smarty_tpl->tpl_vars['evento'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['evento']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['eventos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['evento']->key => $_smarty_tpl->tpl_vars['evento']->value) {
$_smarty_tpl->tpl_vars['evento']->_loop = true;
?>
    <?php echo '<script'; ?>
>
            agregarEvento('<?php echo $_smarty_tpl->tpl_vars['evento']->value->getNombre();?>
', '<?php echo $_smarty_tpl->tpl_vars['evento']->value->getLongitud();?>
', '<?php echo $_smarty_tpl->tpl_vars['evento']->value->getLatitud();?>
');
    <?php echo '</script'; ?>
>
   <?php } ?>
    <?php echo '<script'; ?>
 src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDi6oEuDbvdWa_3wOu656ygnioxQdjLXiM&callback=myMap"><?php echo '</script'; ?>
>
  
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
