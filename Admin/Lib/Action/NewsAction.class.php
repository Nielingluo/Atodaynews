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
			$m=D('News');
			/*$m->title=$_POST['title'];
			$m->content=$_POST['content'];
			$m->newsclass=$_POST['newsclass'];
			*/
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
				$this-error('修改出错，请稍候重试');
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


		/*新闻分类页*/
		public function newsclass(){
			$m=M('Newsclass');
			$lclass=$m->select();
			$this->assign('list',$lclass);
			$this->display();
		}

	}

?>