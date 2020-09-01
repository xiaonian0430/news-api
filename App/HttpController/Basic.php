<?php
/**
 * @author: Xiao Nian
 * @contact: xiaonian030@163.com

 * @version: 2.1.1
 * @license: Apache Licence
 * @file: Basic.php
 * @datetime: 2019-12-01 14:00
 */
namespace App\HttpController;

use EasySwoole\Http\AbstractInterface\Controller;

class Basic extends Controller
{
    public function writeJsonU($code, $content, $msg)
    {
        $this->response()->withHeader('Server', 'InfobirdCloud');
        $this->writeJson($code, $content, $msg);
        return true;
    }
}
