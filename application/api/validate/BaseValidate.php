<?php
/**
 * Created by MCY<1991993249@qq.com>
 * User: 勉成翌
 * Date: 2017/7/9
 * Time: 13:42
 */

namespace app\api\validate;


use app\lib\exception\ParamterException;
use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate
{
    //获取http参数，并对这些参数进行校验
    public function goCheck()
    {
        $request = Request::instance();
        $params = $request->param();
        $result = $this->batch()->check($params);
        if (!$result) {
            $e=new ParamterException([
                'msg'=>$this->error
            ]);
            throw $e;
            /*$error=$this->error;
            throw new Exception($error);*/
        } else {
            return true;
        }
    }

    protected function isPositiveInteger($value, $rule = '', $date = '', $filed = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        } else {
            return false;
        }
    }
}