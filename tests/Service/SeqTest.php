<?php

namespace MiaoxingTest\Seq\Service;

use Miaoxing\Plugin\Test\BaseTestCase;
use Miaoxing\Seq\Service\Seq;

class SeqTest extends BaseTestCase
{
    public function testGenerate()
    {
        $id = Seq::generate();
        $this->assertIsInt($id);

        $id2 = Seq::generate();
        $this->assertGreaterThan($id, $id2);
    }
}
