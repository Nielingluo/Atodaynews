<?php
	class UserAction extends Action{
		public function index(){
			$this->display();
		}

		/*用户列表*/
		public function userlist(){
			$m=M('User');
			$ulist=$m->select();
			$this->assign('list',$ulist);
			$this->display();
		}
	}
?>