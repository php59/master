<?php 
namespace Test\Model;
use Think\Model;
class StudentModel extends Model{
	protected $_validate = array(
       array('sname','require','用户名必须是6-20个字符',1,'regex',3),
       array('password','require','密码必须是8-20位的字母数字下划线组合',1,'regex',3),
       array('repassword','password','两次密码不一致',1,'confirm',3),
		
	array('email','require','电子邮件格式不合法',1,'regex',3)
		);
	
}

 ?>