<?php

namespace App\Http\Core;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ServiceResponse
 *
 * @author macorin
 */
class ServiceResponse {
    
    private $error;
    
    private $message;
    
    public function __construct($message, $error=false) {
        $this->message = $message;
        $this->error = $error;
    }
    
    public function isError() {
        return $this->error;
    }
    
    public function message() {
        return $this->message;
    }
    
}
