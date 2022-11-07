<?php
class Phone{
    public $name;
    public $years;
    public $model;

    function __construct($name = null, $years = null, $model = null){
        $this->name = $name;
        $this->years = $years;
        $this->model = $model;
    }
}
?>