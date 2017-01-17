<?php

namespace EVEAuth\Helper;

use MongoDB\BSON\UTCDateTime;
use MongoDB\Client;

class Mongo {
    public $collectionName = "";
    public $databaseName = "eveauth";

    protected $mongodb;
    protected $collection;

    public function __construct(Client $mongodb) {
        $this->mongodb = $mongodb;
        if(empty($this->databaseName))
            throw new \Exception("Error, no database selected");

        $this->collection = $mongodb->selectCollection($this->databaseName, $this->collectionName);
    }

    public function makeTimeFromDateTime($dateTime): UTCDateTime {
        $unixTime = strtotime($dateTime);
        $milliseconds = $unixTime * 1000;
        return new UTCDatetime($milliseconds);
    }

    public function makeTimeFromUnixTime($unixTime): UTCDateTime {
        $milliseconds = $unixTime * 1000;
        return new UTCDatetime($milliseconds);
    }

}