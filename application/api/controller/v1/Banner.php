<?php
/**
 * Created by MCY<1991993249@qq.com>
 * User: 勉成翌
 * Date: 2017/7/9
 * Time: 12:57
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;

class Banner
{
    public function banner($id)
    {
        (new IDMustBePositiveInt())->goCheck();
        $banner=BannerModel::getBannerById($id);
        if(!$banner){
            throw new BannerMissException([
                'msg'=>'该id的banner信息不存在'
            ]);
        }
        return $banner;
    }

}