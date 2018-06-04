<?php


namespace App\Traits;


trait HostHelperTrait
{
    public static function getRequesterDomain(){
        return $_SERVER['HTTP_HOST'];
    }

    public static function isFamiliarDomain($domain){
        if(strpos( HostHelperTrait::getRequesterDomain(), $domain) !== false){
            return true;
        }
        return false;
    }

    public static function isEquals($requester_domain,$registered_domain){
        if($requester_domain==$registered_domain){
            return true;
        }
        return false;
    }
}