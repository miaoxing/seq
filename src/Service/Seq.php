<?php

namespace Miaoxing\Seq\Service;

use Miaoxing\Plugin\BaseService;

/**
 * @mixin \DbMixin
 * @mixin \RedisMixin
 */
class Seq extends BaseService
{
    /**
     * @var string
     */
    protected $driver = 'db';

    /**
     * The table name or counter key
     *
     * @var string
     */
    protected $name = 'seqs';

    /**
     * @param int $offset
     * @return int|null
     * @throws \Exception
     */
    public function __invoke($offset = 100)
    {
        $name = $this->name;
        $offset = mt_rand(1, $offset);

        switch ($this->driver) {
            case 'redis':
                return $this->redis->incr($name, $offset);

            case 'db':
                $table = $this->db->getTable($name);
                $stmt = $this->db->query("REPLACE INTO $table (stub) VALUES (1);SELECT LAST_INSERT_ID();");
                $stmt->nextRowset();

                return (int) $stmt->fetchColumn();

            default:
                throw new \Exception(sprintf('Unsupported driver "%s"', $this->driver));
        }
    }

    /**
     * @param int $offset
     * @return int|null
     * @throws \Exception
     * @svc
     */
    protected function generate($offset = 100)
    {
        return $this->__invoke($offset);
    }
}
