<?php
namespace App\Helpers;


class Helper
{
    public static function IDGenereator($model,$tablerow,$length=5,$prefix){
        $data = $model::orderBy('id','desc')->first();
        if(!$data){
            $og_lenth = $length;
            $last_number  = "";
        }
        else{
            $code = (int)(substr($data->$tablerow, strlen($prefix)+1));
            $actual_last_number = ($code/1)*1;
            $increment_last_number = $actual_last_number + 1;
            $last_number_length = strlen($actual_last_number);
            $og_length = $length - $last_number_length;
            $last_number = $increment_last_number;
        }
        $zeros = "";
        for($i=0;$i<$og_length;$i++){
            $zeros.="0";
        }
        return $prefix. '-' .$zeros.$last_number;
    }
}
?>