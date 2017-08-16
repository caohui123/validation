<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/16
 * Time: 9:48
 */

namespace Libs\Tools;

use Libs\Tools\Validator;

class Form
{
    protected $_valid;
    public $data;

    protected function __construct($data)
    {
        $this->_valid = Validator::getInstance();
        $this->data = $data;
    }

    public function rules()
    {
        return [];
    }

    public function attributes()
    {
        return [];
    }

    public function messages()
    {
        return [];
    }

    public function make()
    {
        return $this->_valid->make($this->data, $this->rules(), $this->messages(), $this->attributes());
    }
}