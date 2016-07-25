<?php
namespace Admin\Model;
use Think\Model;
class UserModel extends Model
{
    // 加入允许接收的字段
    protected $insertFields = 'userid,username,password,phone,realname,idtype,idnumber,logintime,ipaddress,type';
    // 表单验证规则
    protected $_validate = array(
        array('userid', 'require', '必须选择', 1),

    );
    public  function tableName()
    {
        return '{{%user}}';
    }

    public  function findByphone($phone)
    {
        return static::find(['phone' => $phone]);
    }
}












