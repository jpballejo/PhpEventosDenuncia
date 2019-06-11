<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-03 18:29:13
         compiled from "vistas\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8043707195cf55c2b8cb7c2-78621545%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61fb81c7d29b8b53f21cb55031dbeaee8775451c' => 
    array (
      0 => 'vistas\\menu.tpl',
      1 => 1559586539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8043707195cf55c2b8cb7c2-78621545',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cf55c2b95cd00_58342127',
  'variables' => 
  array (
    'url_base' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55c2b95cd00_58342127')) {function content_5cf55c2b95cd00_58342127($_smarty_tpl) {?>  <!-- Menu -->
      <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
evento/nuevo/" class="list-group-item">Nuevo Evento</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
usuario/listado/" class="list-group-item">Listado Usuarios</a>
          <a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
evento/listadoEstado/" class="list-group-item">Listados Estados</a>
       </div>
<?php }} ?>
