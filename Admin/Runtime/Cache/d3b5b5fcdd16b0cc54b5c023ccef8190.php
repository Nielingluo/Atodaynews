<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div>您所查询的内容：</div><br/>
	<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h2>标题：<?php echo ($vo["title"]); ?></h2><?php endforeach; endif; else: echo "" ;endif; ?>
	<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><h4>新闻分类搜索查询结果:<?php echo ($vo["newsclass"]); ?></h4><?php endforeach; endif; else: echo "" ;endif; ?>
	
</body>
</html>