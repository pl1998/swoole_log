<?php
/**
 * Created by PhpStorm
 * User: pl
 * Date: 2020/10/13
 * Time: 10:00
 */
/**
 * 路由配置
 */
return [
  'GET'  => [
      '/favicon.ico'=>false,
      '/'=>[\app\controller\IndexController::init(),'index'],
      '/api/create'=>[\app\controller\IndexController::init(),'create'],
      '/api/tests'=>[\app\controller\TestController::init(),'tests'],
      '/api/test_redis'=>[\app\controller\TestController::init(),'testRedis'],
  ],
  'POST' => [

  ],
  'PUT'  => [

  ],
  'DELETE' => [

  ]
];
