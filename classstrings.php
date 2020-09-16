<?php
class stringChyskaJan
{
    /**
     * Najde cast retezce v retezci
     * @param string $retezecVeKteremHledam
     * @param string $coHledam
     * @return bool
     */
    public static function strposChyskaJan(string $retezecVeKteremHledam, $coHledam) {
        return strpos($retezecVeKteremHledam, $coHledam);
    }

    
    
    
  public static function substrChyskaJan(string $retezecVeKteremHledam, string $coHledam):bool {
        return substr($retezecVeKteremHledam, $coHledam);
    }

    
    
    
    public static function substr_replaceChyskaJan(string $retezecVeKteremHledam, string $coHledam):bool {
        return substr_replace($retezecVeKteremHledam, $coHledam);
    }

    
    
    
    public static function strtrChyskaJan(string $retezecVeKteremHledam, string $coHledam):bool {
        return strtr($retezecVeKteremHledam, $coHledam);
    }

    
    
    
    public static function strtoupperChyskaJan(string $retezecVeKteremHledam, string $coHledam):bool {
        return strtoupper($retezecVeKteremHledam, $coHledam);
    }

    

    
    public static function strtolowerChyskaJan(string $retezecVeKteremHledam, string $coHledam):bool {
        return strtolower($retezecVeKteremHledam, $coHledam);
    }

    
    
    
    public static function strrposChyskaJan(string $retezecVeKteremHledam, string $coHledam):bool {
        return strrpos($retezecVeKteremHledam, $coHledam);
    }

    
    
    public static function strlenChyskaJan(string $retezecVeKteremHledam, string $coHledam):bool {
        return strlen($retezecVeKteremHledam, $coHledam);
    }

  }

$retezecVeKteremHledam;
$coHledam;     