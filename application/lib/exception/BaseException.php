<?php
/**
 * Created by MCY<1991993249@qq.com>
 * User: 勉成翌
 * Date: 2017/7/14
 * Time: 19:33
 */

namespace app\lib\exception;


use think\Exception;
use Throwable;

class BaseException extends Exception
{
    public $code=400;//http 状态码
    public $msg='参数错误';
    public $errorCode=10000;//错误码 10000代表参数通用错误

    public function __construct($param=[])
    {
       if(!is_array($param)) {
           return;
       }
       if(array_key_exists('code',$param)){
           $this->code=$param['code'];
       }

        if(array_key_exists('msg',$param)){
            $this->msg=$param['msg'];
        }

        if(array_key_exists('errorCode',$param)){
            $this->errorCode=$param['errorCode'];
        }
    }
}