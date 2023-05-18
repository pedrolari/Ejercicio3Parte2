<?php

namespace App\Repositories\Interfaces;

use App\Entities\User as UserEntity;

interface UserRepositoryInterface
{
    /**
     * @param int $id
     * @return UserEntity
     */
    public function findById(int $id): UserEntity;

    /**
     * @param string $email
     * @return UserEntity|null
     */
    public function findByEmail(string $email): ?UserEntity;

    /**
     * @param UserEntity $userEntity
     * @param bool $isNewUser
     * @return UserEntity
     */
    public function save(UserEntity $userEntity, bool $isNewUser = false): UserEntity;
}
