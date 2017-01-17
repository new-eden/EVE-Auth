<?php

namespace EVEAuth\Model;

use EVEAuth\Helper\Mongo;
use MongoDB\UpdateResult;

class User extends Mongo {
    public $collectionName = "Users";

    /**
     * Returns all users
     *
     * @return array
     */
    public function listUsers(): array {
        return $this->collection->find()->toArray();
    }

    /**
     * Lists a single user
     *
     * @param string $username
     * @return array
     */
    public function listUser(string $username): array {
        return $this->collection->findOne(array("username" => $username))->toArray();
    }

    /**
     * Add a single user
     *
     * @param string $username
     * @param string $password
     * @param array $extraData
     *
     * @return UpdateResult
     */
    public function addUser(string $username, string $password, array $extraData): UpdateResult {
        $data = array("username" => $username, "password" => $password);
        return $this->collection->replaceOne(array("username" => $username), array_merge($data, $extraData), array("upsert" => true));
    }

    /**
     * Update a single user
     *
     * @param string $username
     * @param string $password
     * @param array $extraData
     *
     * @return UpdateResult
     */
    public function updateUser(string $username, string $password, array $extraData): UpdateResult {
        $data = array("username" => $username, "password" => $password);
        return $this->collection->replaceOne(array("username" => $username), array_merge($data, $extraData), array("upsert" => true));
    }

    /**
     * Delete a single user
     *
     * @param string $username
     * @param string $password
     *
     * @return int
     */
    public function deleteUser(string $username, string $password): int {
        return $this->collection->deleteOne(array("username" => $username, "password" => $password))->getDeletedCount();
    }
}