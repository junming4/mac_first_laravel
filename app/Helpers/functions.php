<?php
/**
 * PHP version 7.1+
 *
 * @copyright  Copyright (c) 2012-2015 EELLY Inc. (http://www.eelly.com)
 * @link       http://www.eelly.com
 * @license    衣联网版权所有
 */

if (!function_exists('isMobile')) {
    /**
     * 判断是否是手机号码
     * @param $mobile
     * @return bool
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/10 22:45:56
     */
    function isMobile($mobile): bool
    {
        $mobile = trim($mobile);
        if (strlen($mobile) < 1) {
            return false;
        }
        $pattern = "/^1[34578]\d{9}$/";
        if (preg_match($pattern, $mobile)) {
            return true;
        } else {
            return false;
        }
    }
}


if (!function_exists('isEmail')) {
    /**
     * 是否是邮箱
     * @param $email
     * @return bool
     * @auth xiaojunming<xiaojunming@eelly.net>
     * @since 2017/06/10
     */
    function isEmail($email): bool
    {
        $email = trim($email);
        if (strlen($email) < 1) {
            return false;
        }
        $pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
        if (preg_match($pattern, $email)) {
            return true;
        } else {
            return false;
        }
    }
}