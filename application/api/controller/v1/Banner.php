<?php

/**
 *
 */
namespace app\api\controller\v1;

use app\api\validate\IDMustBePostiveInt;
use app\api\model\Banner as BannerModel;
use app\api\model\Image as ImageModel;

use think\Exception;

class Banner {


    public function getBanner($id){

//        (new IDMustBePostiveInt())->goCheck();

//        $banner = BannerModel::with(['items','items.img'])->find($id);
        $banner = ImageModel::with('item')->find($id);

        if (!$banner){
            echo 'error';
            die();
        }

        return $banner;
    }

}