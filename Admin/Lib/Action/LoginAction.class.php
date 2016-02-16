<?php
	class LoginAction extends Action{
		public function login(){
			$this->display();
		}
		public function do_login(){
			$username=$_POST['username'];
			$password=md5($_POST['password']);
			$verify=$_POST['verify'];
			if($_SESSION['verify'] !== md5($verify)) {
   				$this->error('验证码错误！');
			}

			$m=D('User');
			$where['username']=$username;
			$where['password']=$password;
			$arr=$m->where($where)->find();
			//dump($arr['id']);exit;
			if($arr){
				$_SESSION['username']=$username;
				$_SESSION['id']=$arr['id'];
				$this->success('登陆成功',U('Index/index'));
			}else{
				$this->error('该用户不存在'); 
			}
		}

			//退出
			/*将session赋值为空
			清除session
			判断session是否是基于cookie的 如果是基于cookie的 那么将cookie也清除掉*/
	       public function dologout(){
	       		$_SESSION=array();
	       		if(isset($_COOKIE[session_name()])){
	       			//setcookie(sessionm名字,赋值为空,让时间过期,全局有效)
	       			setcookie(session_name,'',time()-1,'/');
	       		}
	       		session_destroy();
	       		$this->redirect('Login/login');
	       }
	}
?>