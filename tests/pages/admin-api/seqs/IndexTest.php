<?php

namespace MiaoxingTest\Seq\Pages\AdminApi\Seqs;

use Miaoxing\Plugin\Service\Tester;
use Miaoxing\Plugin\Test\BaseTestCase;

class IndexTest extends BaseTestCase
{
    public function testPost()
    {
        $ret = Tester::postAdminApi('seqs');
        $this->assertRetSuc($ret);
        $this->assertIsInt($ret['id']);

        $ret2 = Tester::postAdminApi('seqs');
        $this->assertRetSuc($ret2);
        $this->assertGreaterThan($ret['id'], $ret2['id']);
    }
}
