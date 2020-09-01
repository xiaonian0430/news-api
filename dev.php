<?php
/**
 * @author: Xiao Nian
 * @contact: xiaonian030@163.com

 * @version: 2.1.1
 * @license: Apache Licence
 * @file: dev.php
 * @datetime: 2019-12-01 14:00
 */

return [
    'SERVER_NAME'    => "NewsApi",
    'MAIN_SERVER'    => [
        'LISTEN_ADDRESS' => '0.0.0.0',
        'PORT'           => 9501,
        'SERVER_TYPE'    => EASYSWOOLE_WEB_SERVER, //可选为 EASYSWOOLE_SERVER  EASYSWOOLE_WEB_SERVER EASYSWOOLE_WEB_SOCKET_SERVER,EASYSWOOLE_REDIS_SERVER
        'SOCK_TYPE'      => SWOOLE_TCP,
        'RUN_MODEL'      => SWOOLE_PROCESS,
        'SETTING'        => [
            'worker_num'            => 8,
            'reload_async'          => true,
            'max_wait_time'         => 600,
            'package_max_length'    => 50 *1024*1024
        ],
        'TASK'           => [
            'workerNum' => 4,
            'maxRunningNum' => 128,
            'timeout' => 15
        ]
    ],
    'TEMP_DIR'       => null,
    'LOG_DIR'        => null,
    'DISPLAY_ERROR'  => false,
    'PHAR'           => [
        'EXCLUDE' => ['.idea', 'Log', 'Temp', 'easyswoole', 'easyswoole.install']
    ],
    
    /**##################     JWT      #############*/
    'JWT' => [
        'iss' => 'infobird', // 发行人
        'exp' => 7200, // 过期时间 默认2小时 2*60*60=7200
        'sub' => 'news-api', // 主题
        'nbf' => NULL, // 在此之前不可用
        'key' => 'www.infobird.com', // 签名用的key
    ]
];
