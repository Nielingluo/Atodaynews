<?php
	class NewsclassModel extends RelationModel{
		protected $_auto = array ( 
			array('date','time',1,'function'), 
			array('uid','getId',1,callback),
		);

		protected $_link=array(
			'User'=> array(  
			     'mapping_type'=>BELONGS_TO,
		          'class_name'=>'User',
		          'foreign_key'=>'uid',
		          'mapping_name'=>'user',
		          'mapping_fields'=>'username', 
		          'as_fields'=>'username:uname',
			),
		);

		protected function getId(){
			return $_SESSION['id'];
		}
	}
?>