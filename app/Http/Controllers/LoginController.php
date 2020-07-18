<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\LoginModel;
use Illuminate\Support\Str;

class LoginController extends Controller
{

    /**
     * 注册
     */
    public function reg()
    {
        return view('login/reg');
    }

    /**
     * 执行注册
     */
    public function regdo()
    {
       $login_name = request()->input('login_name');
       $login_pass = request()->input('login_pass');
       $password = request()->input('password');
       $email = request()->input('email');
       $tel = request()->input('tel');

        if($login_pass != $password){
            echo "<script>alert('两次密码不一致');window.history.go(-1);</script>";exit;
        }

        $login_pass = password_hash($login_pass,PASSWORD_BCRYPT);
        $password = password_hash($password,PASSWORD_BCRYPT);

        $user_data = [
            'login_name' => $login_name,
            'login_pass' => $login_pass,
            'password'   => $password,
            'email'      => $email,
            'tel'        => $tel
        ];
        $res = LoginModel::insertGetId($user_data);
        if($res)
        {
            echo "<script>alert('注册成功');location.href='login'</script>";
        }else{
            echo "<script>alert('服务器繁忙 请稍等');window.history.go(-1);</script>";exit;
        }
    }

    /**
     * 登录
     */
    public function login()
    {
        return view('login/login');
    }

    /**
     * 执行登录
     */
    public function logindo()
    {
        $login_name = request()->input('login_name');
        $login_pass = request()->input('login_pass');
        $u = LoginModel::where(['login_name'=>$login_name])->orwhere(['email'=>$login_name])->orwhere(['tel'=>$login_name])->first();
                
        if(password_verify($login_pass,$u->login_pass))
        {
            //session
            session(['id'=>$u->id]);    
            echo "<script>alert('登陆成功,正在跳转至个人中心...');location.href='center'</script>";
        }else{
            echo "<script>alert('用户名与密码不一致,请重新确认');location.href='login'</script>";
        }
    }


    /**
     * 个人中心
     */
    public function center()
    {
        if(session()->has('id'))
        {
            echo "欢迎来到个人中心";
        }else{
            echo "请先登录";
        }
    }

}
