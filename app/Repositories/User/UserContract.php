<?php

/**
 * PHP version 7.0+
 *
 * @copyright
 * @link
 * @license
 */

namespace App\Repositories\User;

use App\Models\User;

/**
 * 描述一下
 *
 * @author  xiaojunming<xiaojunming@eelly.net>
 * @since 2017
 */
interface UserContract
{

    /**
     *
     *
     * @param array $input
     * @return bool
     * @auth 肖俊明<xiaojunming@eelly.net>
     * @since 2017年06月18日
     */
    public function create(array $input): bool;

    /**
     *
     *
     * @param int $id
     * @return User
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017
     */
    public function find(int $id): User;
}