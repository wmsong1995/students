<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Library;
use App\Library\Driver\BaseValidate as Base;

/**
 * Description of Validate
 *表单验证
 * @author Administrator
 */
class Validate {
    //有字段时验证
    const EXISTS_VALIDATE = 1;
    //值不为空时验证
    const VALUE_VALIDATE = 2;
    //必须验证
    const MUST_VALIDATE = 3;
    //值是空时处理
    const VALUE_NULL = 4;
    //不存在字段时处理
    const NO_EXISTS_VALIDATE = 5;
    //驱动连接
    protected static $link;

   
    public static function single()
    {
        if ( ! self::$link) {
            self::$link = new Base();
        }

        return self::$link;
    }
   
    public function __call($method, $params)
    {
        return call_user_func_array([self::single(), $method], $params);
    }

    public static function __callStatic($name, $arguments)
    {
        return call_user_func_array([static::single(), $name], $arguments);
    }
}
