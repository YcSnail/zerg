<?php
// +----------------------------------------------------------------------
// |  [ 我的梦想是星辰大海 ]
// +----------------------------------------------------------------------
// | Author: yc  and yc@yuanxu.top
// +----------------------------------------------------------------------
// | Date: 2018/7/16 Time: 9:34
// +----------------------------------------------------------------------


/**
 * 自定义异常处理基类
 */
namespace app\api\validate;

use think\Exception;
use think\Request;
use think\Validate;

class BaseValidate extends Validate {

    public function goCheck(){

        //获取http传入的参数
        //对参数进行检验
        $request = Request::instance();
        $params = $request->param();
        $request = $this->check($params);

        if (!$request){
            $error = $this->error;
            throw new Exception($error);
        }
        else{
            return true;
        }

    }
}