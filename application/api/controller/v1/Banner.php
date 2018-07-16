<?php

/**
 *
 */
namespace app\api\controller\v1;

use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use think\Exception;

class Banner {


    public function getBanner($id){

//        (new IDMustBePostiveInt())->goCheck();

        $banner = BannerModel::getBannerByID($id);

        if (!$banner){
            echo 'error';
            die();
        }

        return json($banner);
    }

}