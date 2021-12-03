<?php
/*
 *  discount多联盟配置文件
 *
 *  Author: hauser <hauser_k@163.com>
 *  QQ:610812903
 *
 */
return [
    'taobao' => [ // 淘宝
        'app_key' => env ('TAOBAO_APP_KEY', ''),
        'app_secret' => env ('TAOBAO_APP_SECRET', ''),
        'format' => 'json',
    ],
    'jingdong' => [ // 京东
        'app_key' => env ('JD_APP_KEY', ''),
        'app_secret' => env ('JD_APP_SECRET', ''),
        'format' => 'json',
    ],
];
