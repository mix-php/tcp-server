<?php

namespace Mix\Tcp\Server;

use Swoole\Coroutine\Server\Connection;
use Swoole\Coroutine\Socket;

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
     * @var TcpConnectionManager
     */
    public $connectionManager;

    /**
     * TcpConnection constructor.
     * @param Connection $connection
     * @param TcpConnectionManager $connectionManager
     */
    public function __construct(Connection $connection, TcpConnectionManager $connectionManager)
    {
        $this->swooleConnection  = $connection;
        $this->connectionManager = $connectionManager;
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
        $fd = $this->getSocket()->fd;
        $this->connectionManager->remove($fd);
        return $this->swooleConnection->close();
    }

    /**
     * Get socket
     * @return Socket
     */
    public function getSocket()
    {
        return $this->swooleConnection->socket;
    }

}
