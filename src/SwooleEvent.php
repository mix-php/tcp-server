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
     * Shutdown
     */
    const SHUTDOWN = 'shutdown';

    /**
     * ManagerStart
     */
    const MANAGER_START = 'managerStart';

    /**
     * WorkerError
     */
    const WORKER_ERROR = 'workerError';

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
     * WorkerExit
     */
    const WORKER_EXIT = 'workerExit';

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
