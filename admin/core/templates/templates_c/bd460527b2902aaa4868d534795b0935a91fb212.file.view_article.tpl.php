<?php /* Smarty version Smarty-3.1.8, created on 2012-05-28 10:04:24
         compiled from "core/templates/templates/view_article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6539563484fc32bdfb7e1a4-57310438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd460527b2902aaa4868d534795b0935a91fb212' => 
    array (
      0 => 'core/templates/templates/view_article.tpl',
      1 => 1338192258,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6539563484fc32bdfb7e1a4-57310438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4fc32bdfbcaea7_36998065',
  'variables' => 
  array (
    'article' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4fc32bdfbcaea7_36998065')) {function content_4fc32bdfbcaea7_36998065($_smarty_tpl) {?><script type="text/javascript" src="core/media/js/articles.js"></script>

    <form method="post" enctype="multipart/form-data" id="formAddArticle" action="add_article.php">
        Заголовок: <input type="text" name="title" id="titleAddArticle" value=<?php echo $_smarty_tpl->tpl_vars['article']->value['title'];?>
 /><br />
        Описание: <textarea rows="10" cols="45" name="description" id="descriptionAddArticle"><?php echo $_smarty_tpl->tpl_vars['article']->value['description'];?>
</textarea><br /> 
        Ключевые слова: <input type="text" name="keywords" id="keywordsAddArticle" value=<?php echo $_smarty_tpl->tpl_vars['article']->value['keywords'];?>
 /><br />
        Содержание: <textarea rows="30" cols="80" name="text" id="textAddArticle" ><?php echo $_smarty_tpl->tpl_vars['article']->value['text'];?>
</textarea><br /> 
        Автор: <input type="text" name="author" id="authorAddArticle" value=<?php echo $_smarty_tpl->tpl_vars['article']->value['author'];?>
 /><br />
        <input type="hidden" name="delete" value=<?php echo $_smarty_tpl->tpl_vars['article']->value['id'];?>
 />
        <input type="submit" value="Добавить" id="btnAddArticle" />
    </form>
    
<div id="addArticleErrors"></div><?php }} ?>