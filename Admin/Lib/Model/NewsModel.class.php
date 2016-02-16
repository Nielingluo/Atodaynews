<?php
	class NewsModel extends RelationModel{  
	   //Model文件夹下的名字是针对某个表的名字如针对News表就用NewsModel.class.php
		protected $_auto = array ( 
			//array(填充字段,填充内容,[填充条件,附加规则])
		    //array('password','md5',1,'function') , // 对password字段在新增的时候使md5函数处理
		    //array('name','getName',1,'callback'), // 对name字段在新增的时候回调getName方法
		    array('date','time',1,'function'), // 对create_time字段在更新的时候写入当前时间戳
			array('uid','getId',1,callback),

		);

		protected $_link=array(
			'User'=> array(  
		     'mapping_type'=>BELONGS_TO,
		          'class_name'=>'User',
		          'foreign_key'=>'uid',
		          'mapping_name'=>'user',
		          'mapping_fields'=>'username', 
		          'as_fields'=>'username', //dump出代码时 输出的username与上述平级   不加该句则输出的为多维数组 前台输出用$vo.username
		          //'as_fields'=>'username:uname',  //修改dump出时，修改前面的字段值
			),
		);


		protected function getId(){
			return $_SESSION['id'];
		}

		
	}
?>