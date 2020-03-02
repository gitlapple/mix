<?php

namespace Mix\Etcd\Service;

/**
 * Class Service
 * @package Mix\Etcd\Service
 */
class Service
{

    /**
     * @var string
     */
    public $id = '';

    /**
     * @var string
     */
    public $name = '';

    /**
     * @var string
     */
    public $address = '';

    /**
     * @var int
     */
    public $port = 0;

    /**
     * @var array
     */
    public $metadata = [];

    /**
     * @var array
     */
    public $node = [];

    /**
     * Service constructor.
     * @param string $id
     * @param string $name
     * @param string $address
     * @param int $port
     */
    public function __construct(string $id, string $name, string $address, int $port)
    {
        $this->id      = $id;
        $this->name    = $name;
        $this->address = $address;
        $this->port    = $port;
    }

}