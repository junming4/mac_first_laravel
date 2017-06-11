<?php
/**
 * PHP version 7.1+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */

namespace App\Observers;

use Illuminate\Support\Facades\Log;


/**
 * 每个观察者对象都有以下方法，
 * 每个对象中都存在这一俩个函数
 * $attributes = $user->getAttributes();
 * $original = $user->getOriginal();
 *
 * UserCreateObserver
 *
 * @author xiaojunming<xiaojunming@eelly.net>
 * @since  2017/06
 * @version 1.0
 */
class UserObserver
{

    /**
     * 【前置方法，可以直接终止saved方法】无论创建还是更新都会被调用,return false
     *  会无法执行saved,并且创建用户失败
     *
     * @return bool
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017年06月11日
     */
    public function saving(): bool
    {
        Log::info('正在创建中');
        return true;
    }

    /**
     * 无论创建还是更新都会被调用
     *
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017年06月11日
     */
    public function saved(): void
    {
        Log::info('创建成功！');
    }

    /**
     * 正在创建中。。。
     *
     * @return bool
     * @param $user
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017年06月10日
     * @return bool
     */
    public function creating(): bool
    {
        return true;
    }


    /**
     * 创建以后
     *
     * @param $user
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017年06月10日
     */
    public function created($user): void
    {

    }


    /**
     * 正在更新中
     *
     * @return bool
     * @param $user
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017年06月10日
     */
    public function updating($user): bool
    {
        return true;
    }


    /**
     * 更新后
     *
     * @param $user
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017年06月10日
     */
    public function updated($user): void
    {

    }

    public function restoring(): bool
    {
        return true;
    }


    public function restored():void
    {

    }


    /**
     * 删除中
     *
     * @return bool
     * @param $user
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017年06月10日
     */
    public function deleting($user): bool
    {
        $attributes = $user->getAttributes();
        $original = $user->getOriginal();
    }

    /**
     * 删除后,可以执行其他事情
     *
     *
     * @param $user
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017年06月10日
     */
    public function deleted($user): void
    {

    }
}