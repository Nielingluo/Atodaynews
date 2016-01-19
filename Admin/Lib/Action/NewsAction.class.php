<?php
	class NewsAction extends Action{
		/*新闻列表页*/
		public function newslist(){
			$m=M('News');
			$list=$m->order('id desc')->select();
			//dump($list);
			$this->assign('list',$list);
			$this->display();
		}
		/*添加新闻*/
		public function newsadd(){
			$this->display();
		}
		public function newsadded(){
			$m=M('News');
			$m->title=$_POST['title'];
			$m->content=$_POST['content'];
			$m->now_time=date('Y:m:d H:i:s',time());
			$idnum=$m->add();
			if($idnum>0){
				$this->success('成功添加一条新闻！','newslist');
			}else{
				$this->error('添加失败，请稍候重试……');
			}
		}




		/*新闻分类页*/
		public function newsclass(){
			$m=M('Newsclass');
			$lclass=$m->select();
			$this->assign('list',$lclass);
			$this->display();
		}

	}

?>