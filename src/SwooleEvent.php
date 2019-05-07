<?php

namespace Mix\Tcp\Server;

/**
 * Class SwooleEvent
 * @package Mix\Tcp\Server
 * @author liu,jian <coder.keda@gmail.com>
 */
class SwooleEvent
{

    /**
     * Start
     */
    const START = 'start';

    /**
     * ManagerStart
     */
    const MANAGER_START = 'managerStart';

    /**
     * ManagerStop
     */
    const MANAGER_STOP = 'managerStop';

    /**
     * WorkerStart
     */
    const WORKER_START = 'workerStart';

    /**
     * WorkerStop
     */
    const WORKER_STOP = 'workerStop';

    /**
     * Connect
     */
    const CONNECT = 'connect';

    /**
     * Receive
     */
    const RECEIVE = 'receive';

    /**
     * Close
     */
    const CLOSE = 'close';

}
