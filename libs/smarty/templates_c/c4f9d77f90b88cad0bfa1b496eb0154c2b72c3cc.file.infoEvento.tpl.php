<?php /* Smarty version Smarty-3.1.21-dev, created on 2019-06-11 00:37:10
         compiled from "vistas\infoEvento.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6248107725cf3ca1ddb6e30-08973928%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4f9d77f90b88cad0bfa1b496eb0154c2b72c3cc' => 
    array (
      0 => 'vistas\\infoEvento.tpl',
      1 => 1560213405,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6248107725cf3ca1ddb6e30-08973928',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5cf3ca1ddb9827_78797108',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf3ca1ddb9827_78797108')) {function content_5cf3ca1ddb9827_78797108($_smarty_tpl) {?><!-- Modal -->
<div class="modal fade" id="evemtpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="detNombre"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="detDescripcion">
        ...
      </div>
      <div class="modal-body">
          <img src="#" class="img-responsive" id="foto">
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
