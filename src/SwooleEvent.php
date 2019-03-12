<?php

namespace Mix\Tcp\Server;

/**
 * Class SwooleEvent
 * @package Mix\Tcp\Server
 * @author LIUJIAN <coder.keda@gmail.com>
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
     * WorkerStart
     */
    const WORKER_START = 'workerStart';

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
