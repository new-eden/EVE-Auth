<?php

namespace EVEAuth\Lib;

class Sessions implements \SessionHandlerInterface {
    protected $cache;
    private $ttl = 7200;

    public function __construct(Cache $cache) {
        $this->cache = $cache;
    }

    public function close()
    {
        return true;
    }

    public function destroy($session_id)
    {
        $this->cache->delete($session_id);
    }

    public function gc($maxlifetime)
    {
        return true;
    }

    public function open($save_path, $name)
    {
        return true;
    }

    public function read($session_id)
    {
        $data = $this->cache->get($session_id);
        if(!is_array($data))
            return (string) $data;
        return "";
    }

    public function write($session_id, $session_data)
    {
        return $this->cache->set($session_id, $session_data, $this->ttl);
}}