<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
    	//首页！！判断用户是否登陆 session   登陆则正常显示首页，未登录则跳转到登陆页面
			if(isset($_SESSION['username']) && $_SESSION['username'] != ''){
				$this->display();
			}else{
				$this->redirect('Login/login');
			}
    }
}