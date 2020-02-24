<?php

namespace MiaoxingDoc\Seq {

    /**
     * @property    \Miaoxing\Seq\Service\Seq $seq
     * @method      null|int seq($offset = 100)
     */
    class AutoComplete
    {
    }
}

namespace {

    /**
     * @return MiaoxingDoc\Seq\AutoComplete
     */
    function wei()
    {
    }

    /** @var Miaoxing\Seq\Service\Seq $seq */
    $seq = wei()->seq;
}
