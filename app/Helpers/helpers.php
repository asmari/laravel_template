<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use Config;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class Helper
{
    public static function generateHeader($collection){
        $ret = [];
        if (!$collection->isEmpty()) {
            $data = $collection->toArray()[0];

            $arrays = array_keys($data);
            foreach ($arrays as $key => $value) {
                $ret[$key] = [
                    "field" => $value,
                    "headerName" => ucwords(str_replace("_", " ", $value)),
                    "editable" => true,
                    "sortable" => true,
                    "filter" => true,
                ];
            }
        }

        return json_encode($ret);
    }
    public static function bannerType(): array
    {
        return [
            [
                'id'=>1,
                'name'=>'Home'
            ],
            [
                'id'=>2,
                'name'=>'About'
            ],
        ];
    }
    public static function partnerType(): array
    {
        return [
            [
                'id'=>1,
                'name'=>'Sponsor'
            ],
            [
                'id'=>2,
                'name'=>'Main'
            ],
            [
                'id'=>3,
                'name'=>'Supported'
            ],
            [
                'id'=>4,
                'name'=>'Media'
            ],
            [
                'id'=>2,
                'name'=>'Official'
            ],
        ];
    }
    public static function translation($key)
    {
        return Cache::get('translation')[$key];
    }
}
