<?php
// +----------------------------------------------------------------------
// |  [ 我的梦想是星辰大海 ]
// +----------------------------------------------------------------------
// | Author: yc  and yc@yuanxu.top
// +----------------------------------------------------------------------
// | Date: 2018/11/16 Time: 16:11
// +----------------------------------------------------------------------

namespace app\lib\exception;

use Exception;
use think\exception\Handle;
use think\Request;

class ExceptionHandler extends Handle {

    private $code;
    private $msg;
    private $errorCode;

    public function render(Exception $e)
    {

        // 判断是否有自定义处理异常类
        if ($e instanceof BaseExcepiton){
            // 如果是自定义异常类
            $this->code = $e->code;
            $this->msg = $e->msg;
            $this->errorCode =$e->errorCode;

        }else{

            $this->code = 500;
            $this->msg = '服务器内部错误,不告诉你';
            $this->errorCode = 999;
        }

        // 获取请求URL

        $request = Request::instance();

        $result = [
            'msg' =>$this->msg,
            'error_code' =>$this->errorCode,
            'request_url' =>$request->url()
        ];

        return json($result,$this->code);
    }

}