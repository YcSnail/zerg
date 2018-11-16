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

        (new IDMustBePostiveInt())->goCheck();

        try
        {
            $banner = BannerModel::getBannerByID($id);
        }
        catch (Exception $ex){

            $err = [
                'error_code' =>1001,
                'msg' =>$ex->getMessage()
            ];

            return json($err,400);
        }


        if (!$banner){
            echo 'error';
            die();
        }

        return $banner;
    }

}