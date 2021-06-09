<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\UserForm;
use App\Services\CompetitionService;
use App\Services\ConfigService;
use App\Services\PostService;
use App\Utils\CommonUtil;
use Illuminate\Http\Request;
use ShaoZeMing\AliSTS\Services\STSService;

class CommonController extends Controller
{
    use ApiResponse;

    public function sts() {
        $config = config('sts');
//        var_dump($config);exit;
        $sts = new STSService($config);
        $result = $sts->getToken();
        return (array)$result->Credentials;
    }

    public function showLog() {
        foreach (file(__DIR__.'/../../../storage/logs/laravel.log') as $item) {
//        foreach (file(__DIR__.'/../../../storage/logs/laravel-'.date('Y-m-d').'.log') as $item) {
            $phone = \request('phone');
            if (($phone && strpos($item, $phone)) || (!$phone && strpos($item, 'SMS_217100024')))
                echo $item."<br>";
        }
        exit;
    }
}
