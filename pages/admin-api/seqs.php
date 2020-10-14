<?php

use Miaoxing\Seq\Service\Seq;

return new class extends \Miaoxing\Plugin\BaseController {
    public function post()
    {
        return suc([
            'message' => 'ok',
            'id' => Seq::generate(),
        ]);
    }
};
