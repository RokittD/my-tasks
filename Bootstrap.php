<?php

namespace rokittd;

use\yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app){
        $app->controllerMap['app-info'] = '\rokittd\TasksController';
    }
}
