<?php

namespace Miaoxing\Seq\Model;

use Miaoxing\Seq\Service\Seq;

trait SeqTrait
{
    public static function bootSeqTrait()
    {
        static::on('beforeCreate', 'generateSeqId');
    }

    /**
     * Generate seq id if id don't have value
     *
     * @throws \Exception
     */
    protected function generateSeqId()
    {
        if (!$this->id) {
            $this->id = Seq::generate();
        }
    }
}
