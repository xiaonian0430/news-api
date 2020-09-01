<?php
/**
 * @author: Xiao Nian
 * @contact: xiaonian030@163.com

 * @version: 2.1.1
 * @license: Apache Licence
 * @file: Basic.php
 * @datetime: 2019-12-01 14:00
 */

namespace EasySwoole\EasySwoole;

use EasySwoole\EasySwoole\Swoole\EventRegister;
use EasySwoole\EasySwoole\AbstractInterface\Event;
use EasySwoole\Http\Request;
use EasySwoole\Http\Response;

class EasySwooleEvent implements Event
{

    public static function initialize()
    {
        date_default_timezone_set('Asia/Shanghai');
    }

    public static function mainServerCreate(EventRegister $register)
    {
        
    }

    public static function onRequest(Request $request, Response $response): bool
    {
        return true;
    }

    public static function afterRequest(Request $request, Response $response): void
    {
        // TODO: Implement afterAction() method.
    }
}