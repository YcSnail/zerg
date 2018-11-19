<?php
// +----------------------------------------------------------------------
// |  [ 我的梦想是星辰大海 ]
// +----------------------------------------------------------------------
// | Author: yc  and yc@yuanxu.top
// +----------------------------------------------------------------------
// | Date: 2018/7/16 Time: 9:46
// +----------------------------------------------------------------------



namespace app\api\model;

use think\Exception;
use think\Model;

class Banner extends Model
{

    // 隐藏字段
    protected $hidden = ['id','delete_time','update_time'];


    /**
     * 关联 item 模型
     */
    public function items(){
        /**
         * HAS MANY 关联定义
         * @access public
         * @param string $model      模型名
         * @param string $foreignKey 关联外键
         * @param string $localKey   当前模型主键 ***
         * @return HasMany
         */
        return $this->hasMany('BannerItem','banner_id','id');

    }



    /**
     * @param $id int banner所在位置
     * @return Banner
     */
    public static function getBannerByID($id)
    {

        return null;

        $banner = self::with(['items','items.img'])->find($id);

        return $banner;
    }
}
