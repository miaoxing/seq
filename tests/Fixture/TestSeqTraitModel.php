<?php

namespace MiaoxingTest\Seq\Fixture;

use Miaoxing\Plugin\Service\Model;
use Miaoxing\Seq\Model\SeqTrait;

/**
 * @property int|null $id
 */
class TestSeqTraitModel extends Model
{
    use SeqTrait;

    protected $guarded = [];
}
