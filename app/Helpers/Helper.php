<?php
namespace App\Helpers;

class Helper
{
    public static function s3_url_gen($location)
    {
        return 'https://s3.ap-south-1.amazonaws.com/localescape/'.$location;
    }
    
    public static function local_url_gen($location)
    {
        return '/'.'image/'.$location;
    }
}