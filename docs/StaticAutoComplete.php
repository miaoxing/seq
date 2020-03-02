<?php

namespace Miaoxing\Seq\Service;

interface Seq
{
    /**
     * @param int $offset
     * @return int|null
     * @throws \Exception
     * @api
     */
    public function generate($offset = 100);
}

if (0) {
    interface Seq
    {
        /**
         * @param int $offset
         * @return int|null
         * @throws \Exception
         * @api
         */
        public static function generate($offset = 100);
    }
}
