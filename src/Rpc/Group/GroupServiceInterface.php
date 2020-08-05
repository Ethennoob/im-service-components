<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/1/29 0029
 * Time: 上午 11:00
 */

namespace ServiceComponents\Rpc\Group;

/**
 * Interface GroupServiceInterface
 * @package ServiceComponents\Rpc\Group
 */
interface GroupServiceInterface
{
    /**
     * 根据用户number获取其所在群组
     * @param $userId
     * @return mixed
     */
    public function getGroupListByNumber($userId);

    /**
     * 获取群成员
     * @param $id
     * @return mixed
     */
    public function getGroupMembers($id);

    /**
     * 根据群号获取群成员
     * @param $id
     * @return mixed
     */
    public function getGroupMembersByNumber($number);

    /**
     * 退出群组
     * @param $id
     * @param $number
     * @return mixed
     */
    public function leaveGroup($id,$number);

    /**
     * 通过条件获取群组信息
     * @param $where
     * @return mixed
     */
    public function getGroupByCondition($where);

    /**
     * 创建群组
     * @param $data
     * @return mixed
     */
    public function createGroup($data,$number,$userNumber,$user_id);

    /**
     * 根据条件获取信息
     * @param $where
     * @param bool $single
     * @return mixed
     */
    public function getGroup($where, $single = false);

    /**
     * 获取群人数
     * @param $where
     * @return mixed
     */
    public function getGroupMemberByCondition($where,$single = false);

    /**
     * 搜索群组
     * @param $value
     * @return mixed
     */
    public function searchGroup($value);

    /**
     * 获取群主信息
     * @param $id
     * @param null $key
     * @return mixed
     */
    public function getGroupOwnById($id,$key = null);

    /**
     * 添加群成员
     * @param $data
     * @return mixed
     */
    public function newGroupMember($data);

    /**
     * 根据条件修改群组信息
     * @param $attr
     * @param $condition
     * @return mixed
     */
    public function updateGroupByCondition($attr, $condition, $single = false);

    /**
     * 根据条件查询群组成员信息
     * @param $where
     * @param $single
     * @return mixed
     */
    public function getNewGroupMemberByCondition($where, $single = false);

    /**
     * 通过好友创建群聊
     * @param $data
     * @param $number
     * @param $userNumber
     * @param $user_id
     * @param $member_data
     * @return mixed
     */
    public function createGroupByUser($data,$number ,$userNumber, $user_id, $member_data);
}