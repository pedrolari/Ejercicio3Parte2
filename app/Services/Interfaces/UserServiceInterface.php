<?php

namespace App\Services\Interfaces;

use App\Entities\User as UserEntity;

interface UserServiceInterface
{

    /**
     * @param array $userFields
     * @return UserEntity
     */
    public function registerAndNotify(array $userFields): UserEntity;
}
