<?php

namespace MiaoxingTest\Seq\Model;

use Miaoxing\Plugin\Test\BaseTestCase;
use Miaoxing\Seq\Service\Seq;
use MiaoxingTest\Seq\Fixture\TestSeqTraitModel;

class SeqTraitTest extends BaseTestCase
{
    public static function setUpBeforeClass(): void
    {
        parent::setUpBeforeClass();

        wei()->schema->dropIfExists('test_seq_traits');
        wei()->schema->table('test_seq_traits')
            ->id()
            ->int('name')
            ->exec();
    }

    public static function tearDownAfterClass(): void
    {
        wei()->schema->dropIfExists('test_seq_traits');
        parent::tearDownAfterClass();
    }

    public function testGenerateId()
    {
        // Make sure next id > 1
        Seq::generate();

        // Reset next increment id to 1
        wei()->db->executeUpdate(sprintf('TRUNCATE %s', wei()->db->getTable('test_seq_traits')));

        $model = TestSeqTraitModel::save();
        $this->assertGreaterThan(1, $model->id);
    }

    public function testCustomId()
    {
        $model = TestSeqTraitModel::save(['id' => 10]);
        $this->assertSame(10, $model->id);
    }
}
