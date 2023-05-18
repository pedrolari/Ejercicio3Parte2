<?php

namespace App\Repositories;

use App\Entities\User as UserEntity;

use App\Models\User;
use App\Repositories\Interfaces\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface
{

    /**
     * @param int $id
     * @return UserEntity
     */
    public function findById(int $id): UserEntity
    {
        /** @var User $user */
        $user = User::where('id', $id)->first();

        return $user->toEntity();
    }


    /**
     * @param string $email
     * @return UserEntity|null
     */
    public function findByEmail(string $email): ?UserEntity
    {
        /** @var User $user */
        $user = User::where('email', $email)->first();

        return $user?->toEntity();
    }


    /**
     * @param UserEntity $userEntity
     * @param bool $isNewUser
     *
     * @return UserEntity
     */
    public function save(UserEntity $userEntity, bool $isNewUser = false): UserEntity
    {
        $userModel = $isNewUser ? new User() : User::find($userEntity->getId());
        $userModel->name = $userEntity->getName();
        $userModel->email = $userEntity->getEmail();
        $userModel->save();

        return $isNewUser ? $userModel->refresh()->toEntity() : $userModel->toEntity();
    }
}
