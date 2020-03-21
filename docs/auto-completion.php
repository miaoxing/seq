<?php

/**
 * @property    Miaoxing\Seq\Service\Seq $seq
 * @method      null|int seq($offset = 100)
 */
class SeqMixin {
}

/**
 * @mixin SeqMixin
 */
class AutoCompletion {
}

/**
 * @return AutoCompletion
 */
function wei()
{
    return new AutoCompletion;
}

/** @var Miaoxing\Seq\Service\Seq $seq */
$seq = wei()->seq;
