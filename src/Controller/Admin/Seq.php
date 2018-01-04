<?php

namespace Miaoxing\Seq\Controller\Admin;

class Seq extends \Miaoxing\Plugin\BaseController
{
    protected $controllerName = '多商品生成序号管理';

    protected $actionPermissions = [
        'create' => '添加',
    ];

    public function createAction($req)
    {
        return $this->suc([
            'message' => 'ok',
            'id' => wei()->seq(),
        ]);
    }
}
