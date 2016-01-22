<?php
	class RegisterAction extends Action{
		public function register(){
			$this->display();
		}

		public function user_register(){
			$m=D('User');
			if(!$m->create()){
				$this->error($m->getError());
			}
			$idnum=$m->add();
			if($idnum){
				$this->success('注册成功，即将跳转到登陆页面',U('Login/login'));
			}else{
				$this->error('注册失败，请稍候重试……');
			}
		}

		//检测用户是否注册过
		public function checkName(){
			$username=$_GET['username'];
			$user=M('User');
			$where['username']=$username;
			$count=$user->where($where)->count();
			if($count){
				echo '不允许';
			}else{
				echo '允许';
			}
		}
	}
?>