<?php
/**
 * Created by PhpStorm.
 * User: liuxiaodong
 * Date: 2019/1/14
 * Time: 22:13
 */

namespace ServiceComponents\Common;


use ServiceComponents\Enum\StatusEnum;

class Message
{
    public static function success($data = '', $msg = '', $code = StatusEnum::Success, $statusCode = StatusEnum::SuccessCode)
    {
        $data = [
            "code" => $code,
            "data" => $data,
            "msg" => $msg,
            "statusCode" => $statusCode
        ];
        return $data;
    }
    public static function error($data = '', $msg = '', $code = StatusEnum::Fail,$statusCode = StatusEnum::FailCode)
    {
        $data = [
            "code" => $code,
            "data" => $data,
            "msg" => $msg,
            "statusCode" => $statusCode
        ];
        return $data;
    }
    public static function sockData($attr = [])
    {
        $data = [
            'type'=>'ws',
            'method'=> 'ok',
            'data' => null,
            'msg' => ''
        ];
        if(array_key_exists('type',$attr))
            $data['type'] = $attr['type'];
        if(array_key_exists('method',$attr))
            $data['method'] = $attr['method'];
        if(array_key_exists('data',$attr))
            $data['data'] = $attr['data'];
        if(array_key_exists('msg',$attr))
            $data['msg'] = $attr['msg'];
        return json_encode($data);
    }

}