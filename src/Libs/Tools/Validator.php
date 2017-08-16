<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/15
 * Time: 14:49
 */

namespace Libs\Tools;
//require_once ABSPATH.'/vendor/autoload.php';
use Illuminate\Validation\Factory;
class Validator extends Factory
{
    /***
     * 创建实例
     *
     * @return \Illuminate\Validation\Factory
     */
    public static function getInstance()
    {
        static $validator = null;
        if ($validator === null) {
            $test_translation_path = __DIR__ . '/lang';
            $test_translation_locale = 'zh-CN';
            $translation_file_loader = new \Illuminate\Translation\FileLoader(new \Illuminate\Filesystem\Filesystem, $test_translation_path);
            $translator = new \Illuminate\Translation\Translator($translation_file_loader, $test_translation_locale);
            $validator = new \Illuminate\Validation\Factory($translator);
        }
        return $validator;
    }
}