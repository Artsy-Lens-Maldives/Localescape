<?php
namespace App\Helpers;

use Aws\S3\Exception\S3Exception;
use Image;
use Illuminate\Contracts\Filesystem\Filesystem;

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

    public static function slug_gen($str)
    {
        $str = strtolower(trim($str));
        $str = preg_replace('/[^a-z0-9-]/', '-', $str);
        $str = preg_replace('/-+/', "-", $str);
        return $str;
    }

    public static function un_slug_gen($str)
    {
        $str = ucfirst(trim($str));
        $str = str_replace("-", " ", $str);
        return $str;
    }

    public static function photo_upload_original_s3($file, $fileName, $location) {
        $s3 = \Storage::disk(env('UPLOAD_TYPE', 'public'));
        $upload_location = $location."/original"."/".$fileName;
        //Original Image Resize
        $original = Image::make($file)->resize(1080, null, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });        
        //Upload original
        try {
            $s3->put($upload_location, $original->stream()->__toString(), 'public');
        } 
        catch (S3Exception $e) {
            return var_dump($e);
        }

        return $upload_location;

    }

    public static function photo_upload_thumbnail_s3($file, $fileName, $location) {
        $s3 = \Storage::disk(env('UPLOAD_TYPE', 'public'));
        $upload_location = $location."/thumbnail"."/".$fileName;

        //Thumbnail image Resize
        $thumbnail = Image::make($file)->resize(null, 200, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        });

        //Upload thumbnail
        try {
            $s3->put($upload_location, $thumbnail->stream()->__toString(), 'public');
        }
        catch (S3Exception $e) {
            return var_dump($e);
        }

        return $upload_location;
    }        

    public static function delete_image_s3($location) {
        $s3 = \Storage::disk(env('UPLOAD_TYPE', 'public'));

        if($s3->exists($location)) {
            $s3->delete($location);
        }
        return;
    }
}