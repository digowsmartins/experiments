<?php

class helloWorld {

    public $message;

    function __construct($msg) {
        $this->message = $msg;
    }

    function showMessage() {
        $ms = $this->message;
        return $ms;
    }

}

$hello = new helloWorld("Hello World!");
echo $hello->showMessage();
