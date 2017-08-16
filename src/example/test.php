<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/16
 * Time: 14:39
 */

class test
{
    public function form()
    {
        //验证数据
        // $data = $_POST;
        $data = [
            'title' => '123457',
            'status' => 'werwer',
            'test' => 'fooddd'
        ];

        $validator = (new TestForm($data))->make();
        if ($validator->fails()) {
            echo 'fail' . "<br>";
            foreach ($validator->errors()->getMessages() as $key => $error) {
                echo $error[0] . "<br>";
            }
        } else {
            echo 'ok';
        }
    }
}