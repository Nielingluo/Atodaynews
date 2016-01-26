<?php
	class NewsAction extends Action{
		/*新闻列表页*/
		public function newslist(){
			$m=M('News');
			import('ORG.Util.Page');// 导入分页类
			$count = $m->count();// 查询满足要求的总记录数
			$page  = new Page($count,10);// 实例化分页类 传入总记录数和每页显示的记录数
			$show  = $page->show();// 分页显示输出
			$list=$m->order('id desc')->limit($page->firstRow.','.$page->listRows)->select();
			//dump($list);
			$this->assign('list',$list);
			$this->assign('page',$show);// 赋值分页输出
			//判断用户是否登陆 session
			if(isset($_SESSION['username']) && $_SESSION['username'] != ''){
				$this->display();
			}else{
				$this->redirect('Login/login');
			}
		}
		/*添加新闻*/
		public function newsadd(){
			$this->display();
		}
		public function newsadded(){
			$m=D('News');
			//上传图片
			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			//$upload->maxSize  = 3145728 ;// 设置附件上传大小
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Public/Uploads/';// 设置附件上传目录
			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}
			$m->create();
			$m->date=time();  //数据库插入当前时间
			$m->filename = $info[0]['savename']; // 保存上传的照片根据需要自行组装
			$idnum=$m->add();
			if($idnum>0){
				$this->success('成功添加一条新闻！','newslist');
			}else{
				$this->error('添加失败，请稍候重试……');
			}
		}


		/*修改新闻*/
		public function newsedit(){
			$id=$_GET['id'];
			$m=M('News');
			$arr=$m->find($id);
			$this->assign('data',$arr);
			$this->display();
		}

		public function newsmodify(){
			$m=M('News');
			$data['id']=$_POST['id'];
			$data['title']=$_POST['title'];
			$data['content']=$_POST['content'];
			$idnum=$m->save($data);
			if($idnum){
				$this->success('新闻修改成功，跳转中……',U('News/newslist'));
			}else{
				$this->error('修改出错，请稍候重试');
			}
		}


		/*删除新闻*/
		public function newsdelete(){
			$m=M('News');
			$id=$_GET['id'];
			$count=$m->delete($id);
			if($count>0){
				$this->success('数据删除成功');
			}else{
				$this->error('数据删除失败');
			}

		}

		/*查询新闻*/
		public function search(){
			$news['title']=array('like',"%{$_POST['title']}%");
			$m=M('News');
			$arr=$m->where($news)->select();
			$this->assign('data',$arr);
			$this->display('index');
			//$this->assign('data',$);

		}

		/*————————————————————————————————————————————分类页————————————————————————————————————————————————*/

		/*新闻分类页*/
		public function newsclass(){
			$m=M('Newsclass');
			$lclass=$m->select();
			$this->assign('list',$lclass);
			$this->display();
		}

		/*新增分类*/
		public function newsclassadd(){
			$this->display();
		}
		public function newsclassadded(){
			$m=D('Newsclass');
			$m->create();
			$m->date=time();  //数据库插入当前时间
			$idnum=$m->add();
			if($idnum>0){
				$this->success('成功添加分类，跳转中……',U('news/newsclass'));
			}else{
				$this->error('添加失败，请稍候重试');
			}
		}
		/*删除新闻分类*/
		public function del(){
			$m=M('Newsclass');
			$id=$_GET['id'];
			$count=$m->delete($id);
			if($count>0){
				$this->success('分类删除成功');
			}else{
				$this->error('分类删除失败');
			}
		}
		/*修改分类*/
		public function newsclassedit(){
			$m=M('Newsclass');
			$id=$_GET['id'];
			$arr=$m->find($id);
			$this->assign('data',$arr);
			$this->display();
		}
		public function newsclassmodify(){
			$m=M('Newsclass');
			$data['id']=$_POST['id'];
			$data['newsclass']=$_POST['newsclass'];
			$idnum=$m->save($data);
			if($idnum){
				$this->success('分类修改成功，跳转中……',U('News/newsclass'));
			}else{
				$this->error('修改出错，请稍候重试');
			}
		}

		/*查询新闻分类*/
		public function classsearch(){
			$where['newsclass']=array('like',"%{$_POST['classname']}%");
			$m=M('Newsclass');
			$arr=$m->where($where)->select();
			$this->assign('list',$arr);
			$this->display('index');
		}
		 

	}

?>