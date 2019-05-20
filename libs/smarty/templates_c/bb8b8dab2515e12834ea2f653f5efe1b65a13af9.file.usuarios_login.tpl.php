<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-15 18:04:48
         compiled from "vistas\usuarios_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10883110515ccb38c5b5f8c9-32112307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb8b8dab2515e12834ea2f653f5efe1b65a13af9' => 
    array (
      0 => 'vistas\\usuarios_login.tpl',
      1 => 1557943374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10883110515ccb38c5b5f8c9-32112307',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5ccb38c606a556_96374468',
  'variables' => 
  array (
    'url_base' => 0,
    'proyecto' => 0,
    'mensaje' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ccb38c606a556_96374468')) {function content_5ccb38c606a556_96374468($_smarty_tpl) {?>
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
    
  </head>

  <body>
    <?php echo $_smarty_tpl->getSubTemplate ("cabezal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div class="container">

         <div class="row">

            

                <div class="col-md-6 col-md-offset-3 mx-auto card text-center">
                    <div class="mx-auto is"><h4>Iniciar sesión</h4></div>
                    <hr>
                    <form method="post">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input name="email" id="email" type="email" class="form-control" placeholder="Correo" aria-label="Correo" aria-describedby="basic-addon1" required="Ingrese su correo" autofocus title="Ingrese su correo">
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text fa fa-lock" id="basic-addon1"></span>
                            </div>
                            <input name="password" id="password" type="password" class="form-control" placeholder="Contraseña" aria-label="Contraseña" aria-describedby="basic-addon1" autofocus title="Mínimo 6 / Máximo 21" required="Mínimo 6 / Máximo 21"/>
                        </div>
                        <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?> 
                            <div class="mensaje"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
                            <br>
                         <?php }?>
                        <input name="check" type="checkbox" aria-label="Recordarme" value="Algo">Recordarme
                        <br>
                        <button id="btnLogin" class="btn btn-info">Iniciar Sesión</button>
                    </form>
                    <a class="registrarse-link" href="#">Registrarse</a>
                </div>

            

        </div>
        <!-- /.row -->

      

    </div>
    <!-- /.container -->
    
    <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
  
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
