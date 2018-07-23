<?php

namespace app\api\model;

use think\Model;

class Image extends Model
{
    // 隐藏字段

    protected $hidden = ['id','from','delete_time','update_time'];

    public function item(){


        /**
         *
          hasOne 与 belongsTo 的区别
            一对一关系，存在主从关系（主表和从表 ），主表不包含外键，从表包含外键。
            hasOne 和 belongsTo 都是一对一关系，区别：
         * 
            在主表的模型中建立关联关系，用 hasOne
            在从表模型中建立关联关系，用 belongsTo
         */

        /**
         * BELONGS TO 关联定义
         * @access public
         * @param string $model      模型名
         * @param string $foreignKey 关联外键
         * @param string $localKey   关联主键
         * @param array  $alias      别名定义（已经废弃）
         * @param string $joinType   JOIN类型
         * @return BelongsTo
         */
        return $this->belongsTo('BannerItem','img_id','id');
    }


    /**
     * 生成图片绝对路径
     * @param $value
     * @return string
     */
    protected function getUrlAttr($value){
        return config('setting.img_prefix').$value;

    }

}
