<?php
/**
 * Created by MCY<1991993249@qq.com>
 * User: 勉成翌
 * Date: 2017/7/9
 * Time: 13:50
 */

namespace app\api\validate;


class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = ([
        'id' => 'require|isPositiveInteger'
    ]);

    protected function isPositiveInteger($value, $rule = '',
                                         $date = '', $field = '')
    {
        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        } else {
            return $field . '必须为正整数';
        }

    }
}