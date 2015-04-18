<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $info = $this->show->info;
        print_r($info);
        $this->assign('info',$info);
        $this->display();
    }
    public function  login(){

        $this->display('');

    }
    public function  show(){
        $username = addslashes($_POST['username']);
        $password = md5($_POST['password']);
        $mod = M('User');
        $info = $mod->where("username = '{$username}' AND password = '{$password}'")->select();
        if($info){
            $this->success('登录成功','Index/show');
        }else{
            $this->error('登录失败');
        }
        $this->assign('info',$info);
        $this->display('');
    }
}