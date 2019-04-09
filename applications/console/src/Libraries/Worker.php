<?php

namespace Console\Libraries;

use Mix\Concurrent\CoroutinePool\AbstractWorker;
use Mix\Concurrent\CoroutinePool\WorkerInterface;

/**
 * Class Worker
 * @package Console\Libraries
 * @author liu,jian <coder.keda@gmail.com>
 */
class Worker extends AbstractWorker implements WorkerInterface
{

    /**
     * 处理
     * @param $data
     */
    public function handle($data)
    {
        // TODO: Implement handle() method.
        var_dump($data);
    }

}
