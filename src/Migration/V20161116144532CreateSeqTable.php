<?php

namespace Miaoxing\Seq\Migration;

use Wei\Migration\BaseMigration;

class V20161116144532CreateSeqTable extends BaseMigration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->schema->table('seq')
            ->bigInt('id')->autoIncrement()
            ->primary('id')
            ->tinyInt('stub')
            ->unique('stub')
            ->exec();
    }

    /**
     * {@inheritdoc}
     */
    public function down()
    {
        $this->schema->dropIfExists('seq');
    }
}
