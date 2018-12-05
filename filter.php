<?php
/**
 * 验证函数
 * Created by PhpStorm.
 * User: 高忠强
 * Date: 2018/11/16
 * Time: 15:56
 */
namespace Gaozhongqiang\Filter;

class filter{
    //过滤字符串
    public static function string($data){
        return addslashes(stripslashes(htmlspecialchars(preg_replace("/^\s+|\s+$/","",$data),ENT_QUOTES)));
    }
    
    //get 获取

    /**
     * @param string $key  获取的值
     * @param int $isInt 是否计算成整形 1 是整形
     * @return string
     */
    public static function input_get_method($key,$isInt = 0){
        $data = isset($_GET[$key]) ? $_GET[$key] : "";
        $isInt == 1 && $data = (int)$data;
        return self::string($data);
    }
    //post 获取
    public static function input_post_method($key,$isInt = 0){
        $data =isset($_POST[$key]) ? $_POST[$key] : "";
        $isInt == 1 && $data = (int)$data;
        return self::string($data);
    }
}
