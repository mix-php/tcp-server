<?php

namespace Mix\Tcp\Server;

use Mix\Tcp\Server\Exception\ReceiveException;
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
        $data   = $this->swooleConnection->recv();
        $socket = $this->getSocket();
        if ($socket->errCode != 0 || $socket->errMsg != '') {
            $this->close();
            throw new ReceiveException($socket->errMsg, $socket->errCode);
        }
        return $data;
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
        $this->remove();
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

    /**
     * Remove
     * @param int $fd
     */
    protected function remove()
    {
        $fd = $this->getSocket()->fd;
        $this->connectionManager->remove($fd);
    }

}
