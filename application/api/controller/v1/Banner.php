<?php

/**
 *
 */
namespace app\api\controller\v1;

use app\api\validate\TestValidate;
use think\Validate;

class Banner {


    public function getBanner($id){

        $data = [
            'name' =>'zhangsan',
            'email'=>'123qq.com'
        ];

        $validate = new TestValidate();

        $res = $validate->batch()->check($data);

        if (!$res){
            $res = $validate->getError();
        }

        dump($res);

    }

}