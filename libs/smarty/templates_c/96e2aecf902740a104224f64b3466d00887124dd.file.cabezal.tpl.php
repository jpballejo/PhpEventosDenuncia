<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-05-15 17:49:20
         compiled from "vistas\cabezal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:269485cc461dfaafe35-93078919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96e2aecf902740a104224f64b3466d00887124dd' => 
    array (
      0 => 'vistas\\cabezal.tpl',
      1 => 1557942554,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '269485cc461dfaafe35-93078919',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cc461dfaea7e3_48824404',
  'variables' => 
  array (
    'url_base' => 0,
    'usuario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cc461dfaea7e3_48824404')) {function content_5cc461dfaea7e3_48824404($_smarty_tpl) {?>  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
inicio/principal/">Denuncia Bache</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
              
          <?php if (isset($_smarty_tpl->tpl_vars['usuario']->value)) {?>
             <li class="nav-item">
              <div class="dropdown show">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Hola, <?php echo mb_strtoupper($_smarty_tpl->tpl_vars['usuario']->value->getNombre(), 'UTF-8');?>

              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
inicio/logout/">Logout</a>
                
              </div>
            </div>
            </li>           
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
inicio/login/">Iniciar Sesion</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
usuario/nuevo/">Registrarse</a>
            </li>
          <?php }?>
        </ul>
      </div>
    </div>
  </nav>
<?php }} ?>
