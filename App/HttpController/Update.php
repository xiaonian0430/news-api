<?php
/**
 * @author=> Xiao Nian
 * @contact=> xiaonian030@163.com

 * @version=> 1.0
 * @license=> Apache Licence
 * @file=> Update.php
 * @time=> 2019-12-01 14=>00
 */
namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;
use EasySwoole\EasySwoole\Config;
use EasySwoole\Http\Message\Status;

class Update extends Controller
{
    /**
    * 获取数据
    */
    public function index()
    {
        $data = [
            "isUpdate"=>true,
            "iOS"=>'https://apps.apple.com/cn/app/id1477308637',
            "Android"=>'https://etsapp.51huishen.com/appdown/v2.0.apk'
        ];
        $result = [
            'data' => $data
        ];
        $this->writeJson(Status::CODE_OK, $result, 'ok');
    }
}
