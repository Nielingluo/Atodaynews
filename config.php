<?php
return array(
	//'配置项'=>'配置值'
	/*'URL_PATHINFO_DEPR'=>'-', //修改url的分隔符为-*/
	'TMPL_l_DELIM'=>'<{', //修改左定界符
	'TMPL_R_DELIM'=>'}>', //修改右定界符
	'DB_TYPE'=>'mysql',
	'DB_HOST'=>'localhost',
	'DB_NAME'=>'ashop',
	'DB_USER'=>'root',
	'DB_PWD'=>'',
	'DB_PORT'=>'3306',
	'DB_PREFIX'=>'tp_',
	//'TMPL_TEMPLATE_SUFFIX'=>'.tpl',  更改模板文件的后缀名
	//'TMPL_FILE_DEPR'=>'_',//修改模板文件目录层次
	//'DB_DSN'=>'mysql://root:@localhost:3306/ashop',//使用DSN方式配置数据库信息  当上面的普通模式和DSN模式同时存在时 以DSN模式优先
	'SHOW_PAGE_TRACE'=>'true',
	//'DEFAULT_THEME'=>'my',  //设置主题
	//'TMPL_DETECT_THEME'=>true,//自动侦测模板主题
	//'THEME_LIST'=>'my,you',//支持的模板主题列表

	
		/*'TMPL_PARSE_STRING'=>array(           //添加自己的模板变量规则
		'__CSS__'=>__ROOT__.'/Public/Css',
		'__JS__'=>__ROOT__.'/Public/Js',
		'__IMAGES__'=>__ROOT__.'/Public/Images',
	),*/

/*	'APP_GROUP_LIST' => 'Home,Admin', //项目分组设定
	'DEFAULT_GROUP'  => 'Home', //默认分组*/
		
	
);
?>