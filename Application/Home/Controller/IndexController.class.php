<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
       $this->display();
    }
    public function sendsms(){
        session_start();
        $data['tel'] = I('post.tel');
        $data['type'] = I('post.type');
        $SmsModel = D('home.Sms');

        if ($_SESSION['smscode_time'] + 60 > time() && $_SESSION['smscode_phone'] == $data['tel']) {
            echo json_encode(array('code' => 0, "msg" => '请过1分钟后再申请'));
            die;
        } else {
            if (empty($data['tel'])) {
                echo json_encode(array('code' => 0, "msg" => '手机号不能为空'));
                die;
            } else {
                if ($SmsModel->check_phonenum($data['tel'])) {
//                    var_dump($data);die;
                    $user = D('home.user');
                    $smsdata = array();
                    $userdata = $user->findByphone($data['tel']);
                    if (empty($userdata)) {
                        $user->phone = $data['tel'];
                        $user->logintime = time();
                        $user->ipaddress = $SmsModel->ip_address();
                        $user->type = $data['type'];
                        $res = $user->save();
                        $_SESSION['smscode_time'] = time();
                        $_SESSION['smscode_othertime'] = $_SESSION['smscode_time'] - time();
                        $_SESSION['smscode_phone'] = $res['phone'];
                        $_SESSION['smscode_user_id'] = $res['userid'];
                        if ($res) {
                            $smsdata['phone'] = $res['phone'];
                            $smsdata['status'] = 1;
                            $smsdata['userid'] = $res['userid'];
                            $smsdata['type'] = 1;
                            $smsdata['code'] = rand(100000, 999999);
                            $smsdata['contents'] = "验证码:" . $smsdata['code'] . "。您正在进行手机注册操作，请不要把验证码泄露给任何人。【收付工具】";
                            $smsresult = $SmsModel->SendSMS($smsdata);
//                            var_dump($smsresult);
                            if ($smsresult > 0) {
                                echo json_encode(array('code' => 1, "msg" => '验证短信已发送，请查收！'));
                                return;
                            } else {
                                $_SESSION['smscode_username'] = "";
                                $_SESSION['smscode_time'] = $_SESSION['smscode_time'] - 60;
                                echo json_encode(array('code' => 0, "msg" => '验证短信发送失败，请联系客服！'));
                                return;
                            }
                        } else {
                            echo json_encode(array('code' => 0, "msg" => '请刷新后重新注册'));
                            return;
                        }
                    } else {
                        $_SESSION['smscode_time'] = time();
                        $_SESSION['smscode_othertime'] = $_SESSION['smscode_time'] - time();
                        $_SESSION['smscode_phone'] = $userdata['phone'];
                        $_SESSION['smscode_user_id'] = $userdata['userid'];

                        $smsdata['phone'] = $userdata['phone'];
                        $smsdata['status'] = 1;
                        $smsdata['userid'] = $userdata['userid'];
                        $smsdata['type'] = 1;
                        $smsdata['code'] = rand(100000, 999999);
                        $smsdata['contents'] = "验证码:" . $smsdata['code'] . "。您正在进行手机注册操作，请不要把验证码泄露给任何人。【91投房-收付工具】";
                        $smsresult = $SmsModel->SendSMS($smsdata);
//                      var_dump($smsresult);
                        if ($smsresult > 0) {
                            $_SESSION['user.code'] = $smsdata['code'];
                            $_SESSION['user.phone'] = $smsdata['phone'];
                            echo json_encode(array('code' => 1, "msg" => '验证短信已发送，请查收！'));
                            return;
                        } else {
                            echo json_encode(array('code' => 0, "msg" => '验证短信发送失败，请联系客服！'));
                            return;
                        }
                    }
                    //$res=$SmsModel->testSMS();
                } else {
                    echo json_encode(array('code' => 0, "msg" => '手机号码格式不正确'));
                    die;
                }
            }
        }

    }
    /*
       * 登陆的ajax校验 暂时没用到
       */
    public function Loginajax()
    {
        $SmsModel = D('home.Sms');
        $data['tel'] = I('post.tel');
        $data['type'] = I('post.type');
        if ($data['private'] == "1") {
            if ($SmsModel->check_phonenum($data['tel'])) {
                echo json_encode(array('code' => 1, "msg" => ''));
                return;
            } else {
                echo json_encode(array('code' => 0, "msg" => '手机号码格式不正确'));
                return;
            }
        } else {
            echo json_encode(array('code' => 0, "msg" => '请先同意隐私条款'));
            return;
        }
    }


}