<?php
// +----------------------------------------------------------------------
// |  [ 我的梦想是星辰大海 ]
// +----------------------------------------------------------------------
// | Author: yc  and yc@yuanxu.top
// +----------------------------------------------------------------------
// | Date: 2018/7/16 Time: 9:32
// +----------------------------------------------------------------------


namespace app\api\validate;


/**
 * 检测变量ID 必须为 int型
 * Class IDMustBePostiveInt
 * @package app\api\validate
 */

class IDMustBePostiveInt extends BaseValidate {

    protected $rule = [
        'id' => 'require|isPositiveInterger'
    ];

    protected function isPositiveInterger($value,$rule = '', $data = '',$field = ''){

        if (is_numeric($value) && is_int($value + 0) && ($value + 0) > 0) {
            return true;
        }

        return $field.'必须是正整数';
    }

}