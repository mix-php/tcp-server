<?php

namespace Mix\Tcp\Server;

use Swoole\Coroutine\Server\Connection;

/**
 * Class TcpConnection
 * @package Mix\Tcp\Server
 * @author liu,jian <coder.keda@gmail.com>
 */
class TcpConnection
{

    /**
     * @var Connection
     */
    public $swooleConnection;

    /**
     * TcpConnection constructor.
     * @param Connection $conn
     */
    public function __construct(Connection $conn)
    {
        $this->swooleConnection = $conn;
    }

    /**
     * Recv
     * @return mixed
     */
    public function recv()
    {
        return $this->swooleConnection->recv();
    }

    /**
     * Send
     * @param $data
     * @return bool
     */
    public function send($data)
    {
        return $this->swooleConnection->send($data);
    }

    /**
     * Close
     * @return bool
     */
    public function close()
    {
        return $this->swooleConnection->close();
    }

}
