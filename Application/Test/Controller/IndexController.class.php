<?php
namespace Test\Controller;
use Think\Controller;
class IndexController extends Controller {
 
   public function umeditor(){
      $this->display();
    }
    public function save(){
      $user = D('User');
      $arr = array(
      		'id' =>3,
      		'status' =>0
      	);
      $result = $user->save($arr);
      echo $result;
    }
    public function page(){
    	$user = D('User1');
    	$pageno = I('get.p');
    	$pagesize = 3;
    	$user_list = $user->page($pageno,$pagesize)->select();
    	$this->assign('user_list',$user_list);
    	$count = $user->count();
    	$page = new \Think\Page($count,$pagesize);
    	$show = $page->show();
    	$this->assign('show',$show);
    	$this->display();

    }
}