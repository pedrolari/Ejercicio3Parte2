<?php

namespace App\Services;

use App\Entities\User;
use App\Entities\User as UserEntity;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Services\Interfaces\EmailServiceInterface;
use App\Services\Interfaces\UserServiceInterface;

class UserService implements UserServiceInterface
{
    /**
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(
        private UserRepositoryInterface $userRepository,
        private EmailServiceInterface $emailService,
    ) {
    }


    /**
     * @param array $userFields
     * @return UserEntity
     */
    public function registerAndNotify(array $userFields): UserEntity
    {
        if (!$userEntity = $this->userRepository->findByEmail($userFields['email'])) {
            $userEntity = new UserEntity();
            $userEntity->setName($userFields['name']);
            $userEntity->setEmail($userFields['email']);
            $userEntity = $this->userRepository->save($userEntity, true);

            $this->emailService->sendNotification($userEntity);
        }

        return $userEntity;
    }
}
