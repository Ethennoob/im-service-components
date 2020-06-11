<?php
/**
 * Created by PhpStorm.
 * User: lingxiang
 * Date: 2020/5/27
 * Time: 下午3:40
 */

namespace ServiceComponents\Rpc\App;

interface AppServiceInterface
{
    /**
     * 根据appid获取数据
     */
    public function getDataByAppId($appId);
}