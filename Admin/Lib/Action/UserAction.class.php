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


		/*添加用户*/
		public function useradd(){
			$this->display();
		}
		public function usercreate(){
			$m=D('User');
			$m->create();
			$idnum=$m->add();
			if($idnum>0){
				$this->success('成功添加一名用户，跳转中……',U('user/userlist'));
			}else{
				$this->error('添加失败，请稍候重试');
			}

		}

		/*删除用户*/
		public function del(){
			$m=M('User');
			$id=$_GET['id'];
			$count=$m->delete($id);
			if($count>0){
				$this->success('数据删除成功');
			}else{
				$this->error('数据删除失败');
			}
		}
		public function usersearch(){
			$user['username']=array('like',"%{$_POST['username']}%");
			$m = M('User');
			$arr=$m->where($user)->select();
			$this->assign('list',$arr);
			$this->display();
		}

			
	}
?>