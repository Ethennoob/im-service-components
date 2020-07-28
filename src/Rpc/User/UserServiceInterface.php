<?php
/**
 * Created by PhpStorm.
 * User: liuxiaodong
 * Date: 2019/1/21
 * Time: 21:28
 */

namespace ServiceComponents\Rpc\User;

/**
 * Interface UserServiceInterface
 * @package ServiceComponents\Rpc\User
 */
interface UserServiceInterface
{
    /**
     * 注册
     * @param $email
     * @param $nickname
     * @param $password
     * @return mixed
     */
    public function register($email , $nickname,$password);

    /**
     * 登录
     * @param $email
     * @param $password
     * @return mixed
     */
    public function login($email,$password);
    /**
     * 根据numbers list 获取用户信息
     * @param $memberList
     * @return mixed
     */
    public function getUserByNumbers($memberList);

    /**
     * 获取群信息 或者获取好友信息
     * @param $id
     * @param $type
     * @return mixed
     */
    public function getInformation($id,$type);

    /**
     * 通过条件查询用户信息
     * @param $where
     * @return mixed
     */
    public function getUserByCondition($where,$single = false);

    /**
     * 通过条件更新
     * @param $attr
     * @param $condition
     * @return mixed
     */
    public function updateUserByCondition($attr,$condition);

    /**
     * 搜索用户
     * @param $value
     * @return mixed
     */
    public function searchUser($value);

    /**
     * 获取所有好友
     * @return mixed
     */
    public function getAllUser();

    /**
     * 根据身份表示获取用户信息
     * @param $identifier
     * @param $appid
     * @return mixed
     */
    public function getUserByIdentifier($identifier, $appid);

    /**
     * 注册
     * @param $appid
     * @param $identifier
     * @param $nickname
     * @param string $avatar
     * @param int $phone
     * @param string $password
     * @param string $email
     * @return mixed
     */
    public function cloudRegister($appid, $identifier, $nickname, $avatar = '', $phone = 0, $password = '', $email = '');

    /**
     * 登录
     * @param $email
     * @param $password
     * @return mixed
     */
    public function cloudLogin($appid, $identifier, $token);

    /**
     * 分页搜索用户
     * @param $user_id
     * @param $appid
     * @param $value
     * @param $page
     * @param $limit
     * @return mixed
     */
    public function searchUserPaginate($user_id, $appid, $value, $page, $limit);

}