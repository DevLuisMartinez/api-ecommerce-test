<?php

namespace App\Library;

use Illuminate\Support\Str;

class SkuGenerator {

    public function getSkuCode(){
        
        return $this->generateCode();
    }

    private function generateCode(){

        $only_characters = '0123456789ABCDEFGHJKLMNPQRSTUVWXYZ';
        $code = '';

        for($i = 0; $i < 8; $i++){

            $code .= $only_characters[rand(0, strlen($only_characters) - 1)];
        }

        return $code;
    } 

}