<?php

namespace MiaoxingTest\Seq\Fixture;

use Miaoxing\Plugin\Model\ModelTrait;
use Miaoxing\Plugin\Service\WeiBaseModel;
use Miaoxing\Seq\Model\SeqTrait;

/**
 * @property int|null $id
 */
class TestSeqTraitModel extends WeiBaseModel
{
    use ModelTrait;
    use SeqTrait;

    protected $guarded = [];
}
