<?php

namespace EVEAuth\Lib;

class Cache {
    private $cache;
    public function __construct() {
        $this->cache = new \Memcached("eveauth");
        $this->cache->addServer("127.0.0.1", 11211, 1);
    }

    public function get(string $key) {
        return json_decode($this->cache->get($key));
    }

    public function set(string $key, $value, int $timeout = 0) {
        return $this->cache->set($key, json_encode($value), $timeout);
    }

    public function exists(string $key): bool {
        return (bool) !empty($this->cache->get($key));
    }

    public function replace(string $key, $value, int $timeout = 0) {
        return $this->cache->set($key, json_encode($value), $timeout);
    }

    public function delete(string $key): bool {
        return (bool) $this->cache->delete($key);
    }

    public function increment(string $key, int $timeout = 0) {
        return $this->cache->increment($key, 1, 0, $timeout);
    }

    public function decrement(string $key, int $timeout = 0) {
        return $this->cache->decrement($key, 1, 0, $timeout);
    }

    public function flush() {
        return $this->cache->flush();
    }
}