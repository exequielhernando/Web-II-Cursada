<?php
/* Smarty version 3.1.33, created on 2019-10-18 01:51:52
  from 'D:\xampp\htdocs\htdocs\Web-II\TodoList\templates\mostrarUsuarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da8fe9810a2f2_77224768',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4927e14ad4ec224b2f796908f40453ce5959ce5c' => 
    array (
      0 => 'D:\\xampp\\htdocs\\htdocs\\Web-II\\TodoList\\templates\\mostrarUsuarios.tpl',
      1 => 1571356041,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5da8fe9810a2f2_77224768 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
  <div class="container">
    <ul class="list-group">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Usuarios']->value, 'usuario');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usuario']->value) {
?>
       <li class="list-group-item"><?php echo $_smarty_tpl->tpl_vars['usuario']->value['nombre'];?>
 ----- <?php echo $_smarty_tpl->tpl_vars['usuario']->value['password'];?>
<a href="borrar/<?php echo $_smarty_tpl->tpl_vars['usuario']->value['id'];?>
">BORRAR</a> </li>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
