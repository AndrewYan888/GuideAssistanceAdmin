<?php /* Smarty version Smarty-3.1.15, created on 2016-03-22 18:42:55
         compiled from "D:\xampp\htdocs\GuideAssistantAdmin\uploads\include\template\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1839956f121afbde7a0-04598309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7904c2b9140e0c59b8f0c455fae37438a3aec9dd' => 
    array (
      0 => 'D:\\xampp\\htdocs\\GuideAssistantAdmin\\uploads\\include\\template\\footer.tpl',
      1 => 1457952438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1839956f121afbde7a0-04598309',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_56f121afc4fb63_74144208',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56f121afc4fb63_74144208')) {function content_56f121afc4fb63_74144208($_smarty_tpl) {?>                    
	
					<footer>
                        <hr>
                        <p class="pull-right">A <a href="http://osadmin.org/" target="_blank">Basic Backstage Management System for China Only.</a> by <a href="http://weibo.com/osadmin" target="_blank">SomewhereYu</a>. 安卓应用【<a href="http://app.herobig.com" target="_blank">短信卫士</a>】</p>

                        <p>&copy; 2013 <a href="http://osadmin.org" target="_blank">OSAdmin</a></p>
                    </footer>
				</div>
			</div>
		</div>
    <script src="<?php echo @constant('ADMIN_URL');?>
/assets/lib/bootstrap/js/bootstrap.js"></script>
	
<!--- + -快捷方式的提示 --->
	
<script type="text/javascript">	
	
alertDismiss("alert-success",3);
alertDismiss("alert-info",10);
	
listenShortCut("icon-plus");
listenShortCut("icon-minus");
doSidebar();
</script>
  </body>
</html><?php }} ?>
