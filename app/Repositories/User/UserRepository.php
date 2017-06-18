<?php
/**
 * PHP version 7.0+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */


namespace App\Repositories\User;


use App\Models\User;

class UserRepository implements UserContract
{


    /**
     * 创建数据
     *
     * @param array $input
     * @return bool
     * @auth 肖俊明<xiaojunming@eelly.net>
     * @since 2017年06月18日
     */
    public function create(array $input): bool
    {
        $user = User::create($input);
        if ($user->save()) {
            return true;
        }
        return false;
    }

    /**
     * 查询一条数据
     *
     * @param int $id
     * @return User
     * @auth 肖俊明<xiaojunming@eelly.net>
     * @since 2017年06月18日
     */
    public function find(int $id): User
    {
        return User::find($id);
    }
}