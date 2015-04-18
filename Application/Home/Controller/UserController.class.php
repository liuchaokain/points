<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller{
    public function Index(){

        $m = M('user');
        $arr = $m->select();
        //var_dump($arr);
        $this->assign('arr',$arr);
        $this->display('');
    }
    public function del(){
        $m = M('user');
        $id = $_GET['id'];
        $count = $m->delete($id);
        if($count){
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    public function edit(){
        $m = M('user');
        $id = $_GET['id'];
        $info = $m->find($id);
        $this->assign('info',$info);
        $this->display();
    }
    public function modify(){
        $m = M('user');
        $data['id'] = $_POST['id'];
        $data['username'] = addslashes($_POST['username']);
        $data['sex']      = $_POST['sex'];
        $count = $m->save($data);
        if($count>0){
            $this->success('数据修改成功','../index');
        }else{
            $this->error('数据修改失败');
        }
    }
    public function add(){
        $this->display();
    }
    //添加用户
    public function create(){
        $m = M('user');
        $data['username'] = addslashes($_POST['username']);
        $data['password'] = md5($_POST['password']);
        $data['sex']      = $_POST['sex'];
        $config = array(
            'maxSize'    =>    3145728,
            'savePath'   =>    './',
            'saveName'   =>    array('uniqid',''),
            'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
            'autoSub'    =>    true,
            'subName'    =>    array('date','Ymd'),
        );
        //print_r($_FILES);die;
        //实例化upload
        $upload = new \Think\Upload($config);
        $face = $upload->uploadOne($_FILES['card_face']);
        //print_r($face);die;
        $back = $upload->uploadOne($_FILES['card_back']);
        if($face){
            $card_data['card_face_name'] = $face['savename'];
            $card_data['card_face_url'] = __ROOT__.'/Public/Uploads/'.$face['savepath'].$face['savename'];
        }else{
            $this->error($upload->getError());
        }
        if($back){
            $card_data['card_back_name'] = $back['savename'];
            $card_data['card_back_url'] = __ROOT__.'/Public/Uploads/'.$back['savepath'].$face['savename'];
        }else{
            $this->error($upload->getError());
        }

        $id = $m->data($data)->add();
        if($id){
            $this->success('用户添加成功','./index');
            $card_data['user_id'] = $id;
            $card_mod = M('card');
            $card_mod->add($card_data);
        }else{
            $this->error('用户添加失败');
        }
    }
    public function search(){
        $m = M('user');
        if($_POST['username']) {
            $data['username'] = array('like', '%' . $_POST['username'] . '%');
        }
        if($_POST['sex']){
            $data['sex']      = array('eq',$_POST['sex']);
        }
        $arr = $m->where($data)->select();
        $this->assign('arr',$arr);
        $this->display('index');
    }
    public function user_info(){
        $data['id'] = $_GET['id'];
        $m = M('user');
        $info = $m->where($data)->find();
        //$this->assign('info',$info);
        $this->display();
    }
    public function file(){
        $this->display('index');
    }
}