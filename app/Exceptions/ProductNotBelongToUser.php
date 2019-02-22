<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongToUser extends Exception
{
    Public function render(){
        return [ 'data'=> 'product not belong to user' ];
    }
}
