<?php
/* Smarty version 3.1.33, created on 2019-10-18 00:50:13
  from 'D:\xampp\htdocs\htdocs\Web-II\TodoList\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da8f0250cff49_07317363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f545963f2ec86e88f8b34801b07cadfed3962a56' => 
    array (
      0 => 'D:\\xampp\\htdocs\\htdocs\\Web-II\\TodoList\\templates\\login.tpl',
      1 => 1571352586,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5da8f0250cff49_07317363 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">  
        <h1><?php echo $_smarty_tpl->tpl_vars['Titulo']->value;?>
</h1>
        <div class="container">
            <form method="post" action="verificarLogin">
                <div class="form-group">
                    <label for="exampleInputEmail1">Usuario</label>
                    <input type="input" class="form-control" name ="usuarioId" id="usuarioId" aria-describedby="usuarioId" placeholder="Usuario">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="passwordId" id="passwordId" placeholder="Password">
                </div>
                <div class="">
                    <?php echo $_smarty_tpl->tpl_vars['Message']->value;?>

                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
        
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }
}
